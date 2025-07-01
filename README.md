# Tarea 9: Integración de AdminLTE y Contenido de la Actividad 11

**Autor:** Jorge Arcibar

## Descripción del Proyecto

Este proyecto es la Actividad 12 del curso, cuyo objetivo principal es integrar el panel de administración AdminLTE en una aplicación Laravel, y luego migrar el contenido y la funcionalidad del proyecto "menus" (Actividad 11) a este nuevo entorno administrativo.

## Funcionalidades Implementadas

* **Integración de AdminLTE:** El panel de administración AdminLTE ha sido integrado en el proyecto Laravel, proporcionando una interfaz de usuario moderna y responsiva.
* **Vistas de Autenticación con AdminLTE:** Las páginas de login y registro utilizan ahora el diseño y los estilos de AdminLTE.
* **Dashboard Personalizado:** El dashboard principal para usuarios autenticados (`/dashboard`) ha sido configurado para mostrar un diseño de AdminLTE con tarjetas de ejemplo.
* **Menú Lateral Personalizado:** El menú de navegación lateral de AdminLTE ha sido modificado para incluir las opciones de la Actividad 11: "Inicio", "Fotos" y "Contacto".
* **Migración de Contenido de la Actividad 11:**
    * Las vistas de "Inicio", "Fotos" y "Contacto" de la Actividad 11 han sido adaptadas y colocadas dentro del panel de AdminLTE, manteniendo su contenido original.
    * Se han creado rutas específicas (`/home-actividad11`, `/photos-actividad11`, `/contact-actividad11`) para acceder a estas secciones dentro del panel.
* **Pie de Página Personalizado:** El pie de página del panel de AdminLTE ha sido editado para incluir la información del autor de la actividad y enlaces relevantes.
* **Página Pública de Seguimiento de Órdenes:** Se ha mantenido una página de inicio pública (`/`) con un formulario de búsqueda de órdenes, que no requiere autenticación.

## Cómo Ejecutar el Proyecto

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/JorgeGAR22/Tarea9.git](https://github.com/JorgeGAR22/Tarea9.git)
    ```
2.  **Navegar al directorio del proyecto:**
    ```bash
    cd Tarea9
    ```
3.  **Instalar dependencias de Composer:**
    ```bash
    composer install
    ```
4.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```
5.  **Instalar dependencias de NPM y compilar assets:**
    ```bash
    npm install
    npm run dev
    ```
    *(Mantén `npm run dev` ejecutándose en una terminal separada para que los estilos se apliquen correctamente.)*
6.  **Iniciar el servidor de desarrollo de Laravel:**
    ```bash
    php artisan serve
    ```
7.  **Acceder a la aplicación:**
    * **Página Pública:** Visita `http://127.0.0.1:8000/` en tu navegador web.
    * **Panel de Administración (Login):** Visita `http://127.0.0.1:8000/login`. Puedes registrar un nuevo usuario o usar las credenciales por defecto si has ejecutado los seeders (ej. `admin@example.com` / `password`).

## URL del Proyecto en GitHub

[https://github.com/JorgeGAR22/Tarea9](https://github.com/JorgeGAR22/Tarea9)
