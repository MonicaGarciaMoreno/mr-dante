# 🐾 Tienda en Línea Señor Dante

Proyecto académico desarrollado como parte del programa **Tecnología en Análisis y Desarrollo de Software** del **SENA**.

La aplicación consiste en una tienda en línea para la visualización y gestión de productos para mascotas, permitiendo a los usuarios explorar el catálogo y a los administradores gestionar los productos disponibles.

---

# 📌 Descripción del proyecto

La tienda **Señor Dante** es una aplicación web desarrollada con el framework **Laravel**, que permite visualizar un catálogo de productos para mascotas, gestionar productos desde un panel administrativo y mantener un carrito de compras utilizando sesiones.

El sistema sigue el patrón de arquitectura **MVC (Modelo – Vista – Controlador)** que facilita la organización del código y su mantenimiento.

---

# 🚀 Tecnologías utilizadas

Backend
- PHP
- Laravel

Frontend
- Blade (motor de plantillas de Laravel)
- HTML
- CSS
- Bootstrap

Base de datos
- MySQL

Entorno de desarrollo
- XAMPP

Control de versiones
- Git
- GitHub

---

# ⚙️ Funcionalidades implementadas

## Cliente

- Visualizar productos
- Buscar productos
- Filtrar por tipo de mascota (perro / gato)
- Filtrar por categoría
- Ver detalle de producto
- Agregar productos al carrito
- Modificar cantidad en el carrito
- Eliminar productos del carrito

## Usuario

- Registro de usuario
- Inicio de sesión

## Administrador

- Crear productos
- Editar productos
- Eliminar productos

---

# 🗄️ Modelo de base de datos

Tablas principales del sistema:

- `users`
- `categories`
- `products`
- `migrations`
- `password_reset_tokens`

Las tablas principales del negocio son:

- **categories**
- **products**

El carrito de compras se gestiona mediante **sesiones del sistema**.

---
---

## ▶️ Ejecución del proyecto

Para ejecutar el proyecto en un entorno local es necesario contar con las siguientes herramientas instaladas:

- PHP
- Composer
- XAMPP o cualquier servidor que permita ejecutar MySQL
- Laravel

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/MonicaGarciaMoreno/mr-dante.git
```

### 2️⃣ Acceder al directorio del proyecto

```bash
cd senor-dante
```

### 3️⃣ Instalar dependencias

```bash
composer install
```

### 4️⃣ Configurar el archivo de entorno

Copiar el archivo de configuración de ejemplo:

```bash
cp .env.example .env
```

Luego editar el archivo `.env` y configurar los datos de conexión a la base de datos según el entorno local.

### 5️⃣ Ejecutar migraciones

Este comando creará las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

### 6️⃣ Iniciar el servidor de desarrollo

Para ejecutar la aplicación en el entorno local se utiliza el servidor integrado de Laravel:

```bash
php artisan serve
```

### 7️⃣ Acceder a la aplicación

Una vez iniciado el servidor, abrir el navegador y dirigirse a:

```
http://127.0.0.1:8000/
```

---

