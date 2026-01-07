#!/bin/bash

echo "🚀 Instalando Proyección Servicios..."

# Verificar si composer está instalado
if ! command -v composer &> /dev/null; then
    echo "❌ Composer no está instalado. Por favor instálalo primero."
    exit 1
fi

# Instalar dependencias
echo "📦 Instalando dependencias de Composer..."
composer install

# Generar clave de aplicación si no existe
if [ ! -f .env ] || ! grep -q "APP_KEY=base64" .env; then
    echo "🔑 Generando clave de aplicación..."
    php artisan key:generate
fi

# Crear directorios necesarios
echo "📁 Creando directorios necesarios..."
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

echo "✅ Instalación completada!"
echo ""
echo "Para iniciar el servidor, ejecuta:"
echo "  php artisan serve"
echo ""
echo "Luego abre tu navegador en: http://localhost:8000"
