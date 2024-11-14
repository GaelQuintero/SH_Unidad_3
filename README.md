# Gestor de Empleados

Este es un proyecto de gestión de empleados desarrollado con **Laravel**, **MySQL** y **Bootstrap**. Permite gestionar empleados mediante un sistema de **login** y **registro**. Aún está en desarrollo, por lo que faltan algunas funcionalidades.

## Características

- **Registro de empleados**: Los administradores pueden registrar nuevos empleados en el sistema.
- **Login de usuarios**: Los empleados pueden acceder al sistema mediante un login seguro.
- **Gestión de empleados**: Los administradores pueden visualizar, editar y eliminar la información de los empleados registrados.

## Tecnologías utilizadas

- **Laravel**: Framework PHP para el backend.
- **MySQL**: Base de datos relacional para almacenar la información de los empleados.
- **Bootstrap**: Framework CSS para la interfaz de usuario.
- **PHP**: Lenguaje de programación utilizado en el backend.
- **HTML/CSS/JS**: Tecnologías estándar para el frontend.

## Requisitos

- **PHP 8.0+**
- **Composer** (para gestionar dependencias)
- **MySQL** (para la base de datos)
- **Node.js** y **npm** (para la gestión de dependencias frontend)
- **Después de clonar el repositorio deberán configurar su propio archivo .env basado en el archivo .env.example proporcionado. Para hacerlo:**
- **Copiar el archivo de ejemplo: cp .env.example .env.**
- **Ejecutar en la terminal dentro del proyecto y carpeta gestor-empleados composer install para instalar las dependencias de PHP y npm install o yarn install para las dependencias de JavaScript.**
- **Generar la clave del proyecto**
```bash
php artisan key:generate
```
- **Al final ejecutas la aplicación con:**
```bash
php artisan serve
```
## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/gestor-empleados.git
```
### 2. Instalar elementos restantes
```bash
composer install
```
### 3. Ejecutar la aplicación
```bash
php artisan serve
```
