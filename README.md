# Proyección Servicios - Landing Page

Landing page moderna y tecnológica para Proyección Servicios desarrollada con Laravel.

## Requisitos

- PHP >= 8.1
- Composer

## Instalación Rápida

### Opción 1: Script de instalación automática
```bash
./install.sh
```

### Opción 2: Instalación manual

1. Instalar dependencias de Composer:
```bash
composer install
```

2. Generar la clave de aplicación:
```bash
php artisan key:generate
```

3. Iniciar el servidor de desarrollo:
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Estructura del Proyecto

- `resources/views/` - Vistas Blade (templates)
- `public/css/` - Estilos CSS
- `public/js/` - Scripts JavaScript
- `routes/web.php` - Rutas de la aplicación
- `app/Http/Controllers/` - Controladores

## Características

- ✅ Diseño moderno y responsive
- ✅ Navegación suave entre secciones
- ✅ Animaciones al hacer scroll
- ✅ Sección de servicios (incluye Mini Vactor)
- ✅ Sección de empresas (lista para agregar logos)
- ✅ Información de contacto (email y teléfono)

## Agregar Más Servicios

Edita el archivo `resources/views/welcome.blade.php` y agrega más tarjetas de servicios dentro de la sección `.services-grid`:

```blade
<div class="service-card">
    <div class="service-icon">
        <!-- Icono SVG aquí -->
    </div>
    <h3 class="service-title">Nombre del Servicio</h3>
    <p class="service-description">Descripción del servicio...</p>
</div>
```

## Agregar Logos de Empresas

Edita el archivo `resources/views/welcome.blade.php` y agrega los logos dentro de la sección `companies-grid`:

```blade
<div class="company-logo">
    <img src="{{ asset('images/logo-empresa.png') }}" alt="Nombre Empresa">
</div>
```

Coloca las imágenes de logos en `public/images/` y referencia con `asset('images/nombre-logo.png')`.

## Personalizar Información de Contacto

Edita el archivo `resources/views/welcome.blade.php` y actualiza:
- Email: `contacto@proyeccionservicios.com`
- Teléfono: `+1 (234) 567-890`
