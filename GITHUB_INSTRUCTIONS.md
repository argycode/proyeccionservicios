# Instrucciones para subir a GitHub

## 1. Crear repositorio en GitHub
- Ve a https://github.com
- Clic en "+" → "New repository"
- Nombre: `proyeccionservicios`
- NO marques "Initialize with README"
- Clic en "Create repository"

## 2. Conectar y subir código

Después de crear el repositorio, ejecuta estos comandos (reemplaza TU_USUARIO con tu usuario de GitHub):

```bash
# Cambiar el nombre de la rama a 'main' (opcional, pero recomendado)
git branch -M main

# Agregar el repositorio remoto (reemplaza TU_USUARIO)
git remote add origin https://github.com/TU_USUARIO/proyeccionservicios.git

# Subir el código
git push -u origin main
```

Si tu rama se llama 'master' en lugar de 'main', usa:
```bash
git remote add origin https://github.com/TU_USUARIO/proyeccionservicios.git
git push -u origin master
```

## Nota importante sobre archivos sensibles

El archivo `.env` ya está en `.gitignore` y NO se subirá (correcto).

Si quieres evitar subir archivos de sesión y logs en el futuro, puedes agregar al `.gitignore`:
```
/storage/framework/sessions/*
/storage/logs/*
!storage/framework/sessions/.gitkeep
!storage/logs/.gitkeep
```

Pero para este primer commit está bien.
