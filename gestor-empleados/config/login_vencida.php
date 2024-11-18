<?php
// Archivo JSON para guardar los intentos de inicio de sesión
$filename = 'login_attempts.json';

// Cargar datos de intentos
if (file_exists($filename)) {
    $attemptsData = json_decode(file_get_contents($filename), true);
} else {
    $attemptsData = [];
}

// Datos enviados por el formulario
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Configuración
$maxAttempts = 5; // Número máximo de intentos permitidos
$lockTime = 15; // Tiempo de bloqueo en minutos

// Verificar si el usuario está bloqueado
if (isset($attemptsData[$username])) {
    $attempt = $attemptsData[$username];

    // Si está bloqueado y el tiempo no ha pasado
    if (isset($attempt['locked_until']) && time() < $attempt['locked_until']) {
        $remainingTime = ($attempt['locked_until'] - time()) / 60;
        echo "Usuario bloqueado. Intenta nuevamente en " . ceil($remainingTime) . " minutos.";
        exit;
    }
}

// Conexión a la base de datos
$host = 'localhost';  // Cambia según tu configuración
$user = 'root';       // Usuario de la base de datos
$passwordDb = '';     // Contraseña de la base de datos
$dbname = 'gestor_empleados'; // Nombre de tu base de datos

$conn = new mysqli($host, $user, $passwordDb, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar usuario en la base de datos
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    // Inicio de sesión exitoso
    echo "Inicio de sesión exitoso. Bienvenido, " . $user['name'];

    // Limpiar intentos fallidos al iniciar sesión correctamente
    unset($attemptsData[$username]);
    file_put_contents($filename, json_encode($attemptsData));
    exit;
}

// Si las credenciales son incorrectas, registrar el intento fallido
if (!isset($attemptsData[$username])) {
    $attemptsData[$username] = [
        'attempts' => 1,
        'locked_until' => null,
    ];
} else {
    $attemptsData[$username]['attempts']++;
}

// Bloquear al usuario si supera el número máximo de intentos
if ($attemptsData[$username]['attempts'] >= $maxAttempts) {
    $attemptsData[$username]['locked_until'] = time() + ($lockTime * 60);
    echo "Usuario bloqueado por demasiados intentos. Intenta nuevamente en $lockTime minutos.";
} else {
    $remainingAttempts = $maxAttempts - $attemptsData[$username]['attempts'];
    echo "Credenciales incorrectas. Te quedan $remainingAttempts intentos.";
}

// Guardar los intentos en el archivo JSON
file_put_contents($filename, json_encode($attemptsData));
?>
