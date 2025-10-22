# 🕷️ Spider API 🕸️

¡Bienvenido a Spider API!

Este es un framework de API RESTful ligero y modular construido en PHP. Está diseñado para ser rápido, escalable y fácil de extender.

## Estructura del Proyecto

El núcleo del proyecto reside en el directorio `src/`:

- `Routes.php`: Define todos los endpoints de la API.
- `Core/`: Contiene los componentes fundamentales como el `Router` y la `Auth` (autenticación).
- `Modules/`: Alberga la lógica de negocio, separada en módulos como `Users`, `Products`, etc.
- `Utils/`: Clases y funciones de utilidad que pueden ser reutilizadas en todo el proyecto.

## Empezando

1.  Configura tu archivo `.env` con las credenciales de la base de datos.
2.  Asegúrate de que tu servidor web (Apache/Nginx) apunte al directorio raíz del proyecto.
3.  ¡Comienza a construir tus propios módulos en `src/Modules/`!

## Probar

- `Endpoint Publico`
  http://localhost/rpc/stores

- `Endpoint Autenticado`
  --header 'x-user-role: ADMIN'
  http://localhost/rpc/users

- `Por Desarrollar`
  http://localhost/rpc/stores?page=2
  http://localhost/rpc/stores?page=2&search=caffenio
  http://localhost/rpc/stores?page=2&category=3
