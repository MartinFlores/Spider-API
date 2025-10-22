# 🕷️ Spider API 🕸️

¡Bienvenido a Spider API!

Spider API es un framework de API RESTful ligero y modular construido en PHP. Ha sido diseñado desde cero para ser rápido, escalable y increíblemente fácil de extender. Nuestra filosofía es simple: un núcleo potente y flexible que te permita construir tus propias funcionalidades sin complicaciones.

## ✨ Características Principales

- **Ligero y Rápido:** Sin dependencias innecesarias que ralenticen tu aplicación.
- **Modular:** Organiza tu código en módulos independientes y reutilizables.
- **Fácil de Empezar:** No requiere instalación de paquetes ni gestores de dependencias. ¡Solo clona y empieza a programar!
- **Escalable:** Diseñado para crecer junto con tu proyecto.

## 🚀 Empezando

¡Empezar a usar Spider API es muy sencillo!

### Requisitos

- **PHP 7.0 o superior.**

¡Eso es todo! No necesitas instalar nada más.

### Pasos

1.  **Descarga o clona** el proyecto en tu servidor web.
2.  **Configura** tu archivo `.env` con las credenciales de tu base de datos.
3.  **Asegúrate** de que tu servidor web (como Apache o Nginx) apunte al directorio raíz del proyecto.
4.  **¡Listo!** Comienza a construir tus propios módulos en `src/Modules/`.

## 🧪 Probando la API

Puedes probar los endpoints fácilmente con herramientas como Postman o cURL.

- **Endpoint Público de Ejemplo:**

  ```
  GET http://localhost/Spider-API/stores
  ```

- **Endpoint Autenticado de Ejemplo:**
  Para acceder a este endpoint, necesitas enviar el header `x-user-role` con el valor `ADMIN`.
  ```
  GET http://localhost/Spider-API/users
  Header: x-user-role: ADMIN
  ```

## 🏗️ Estructura del Proyecto

El núcleo del proyecto reside en el directorio `src/`:

- `Routes.php`: Define todos los endpoints de tu API.
- `Core/`: Contiene los componentes fundamentales como el `Router` y la `Auth` (autenticación).
- `Modules/`: ¡Aquí es donde ocurre la magia! Alberga toda tu lógica de negocio, separada en módulos como `Users`, `Products`, etc.
- `Utils/`: Clases y funciones de utilidad que pueden ser reutilizadas en todo el proyecto.
