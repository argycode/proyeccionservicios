# Carpeta de Imágenes

Esta carpeta contiene todas las imágenes estáticas del sitio web.

## Estructura recomendada:

### Logo de la empresa PS
- **Archivo:** `logo-ps.png` (o `logo-ps.jpg`, `logo-ps.svg`)
- **Uso:** Logo principal de Proyección Servicios en el navbar
- **Recomendación:** 
  - Formato: PNG con fondo transparente o SVG
  - Altura recomendada: 40px
  - Ancho: proporcional

### Logos de empresas que confían en nosotros
- **Ubicación:** Esta misma carpeta
- **Nombres sugeridos:** 
  - `logo-empresa1.png`
  - `logo-empresa2.png`
  - `logo-empresa3.png`
  - etc.
- **Recomendación:**
  - Formato: PNG con fondo transparente o SVG
  - Altura máxima: 80px
  - Ancho: proporcional
  - Fondo transparente preferible

## Cómo usar las imágenes en el código:

### En Blade (PHP):
```blade
<img src="{{ asset('images/logo-ps.png') }}" alt="Proyección Servicios">
```

### En JavaScript:
```javascript
addCompanyLogo('images/logo-empresa1.png', 'Nombre Empresa');
```

## Notas:
- Todas las imágenes deben estar en esta carpeta (`public/images/`)
- Las rutas en el código usan `asset('images/nombre-archivo.png')` que apunta a esta carpeta
- Asegúrate de que los nombres de archivo no tengan espacios (usa guiones o guiones bajos)
