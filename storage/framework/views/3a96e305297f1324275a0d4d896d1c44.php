<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Proyección Servicios - Soluciones Profesionales'); ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Estilos personalizados existentes -->
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    
    <!-- Vite Assets (Tailwind CSS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\proyeccionservicios\resources\views/layouts/app.blade.php ENDPATH**/ ?>