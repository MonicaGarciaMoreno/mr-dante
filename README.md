# 🐾 Tienda en Línea Señor Dante

Proyecto académico desarrollado como parte de la evidencia **GA8-220501096-AA1-EV02 – Módulos integrados** del programa **Tecnología en Análisis y Desarrollo de Software**.

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

# ▶️ Ejecución del proyecto

Para ejecutar el proyecto en un entorno local se requiere tener instalado:

- PHP
- Composer
- XAMPP o servidor con MySQL
- Laravel

### 1️⃣ Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
