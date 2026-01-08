

<?php $__env->startSection('title', 'Proyección Servicios - Soluciones Profesionales'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="logo-img">
                    <span class="logo-text">Proyección Servicios</span>
                </div>
                <div class="nav-links">
                    <a href="#servicios">Servicios</a>
                    <a href="#contacto">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="<?php echo e(asset('images/hidrolavadora.png')); ?>" alt="Hidrolavadora Proyección Servicios" class="hero-main-image">
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,60 C300,100 600,20 900,60 C1050,80 1150,40 1200,60 L1200,120 L0,120 Z" fill="currentColor"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-subtitle">Ofrecemos soluciones integrales adaptadas a tus necesidades</p>
            </div>
            <div class="services-grid">
                
                <div class="service-card" data-image="<?php echo e(asset('images/venta.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Venta y Alquiler de Equipos a Medida</h3>
                    <p class="service-description">Fabricación, venta y alquiler de hidrolavadoras industriales personalizadas, tanto de agua fría como caliente, diseñadas para satisfacer las necesidades más exigentes.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/apq.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Equipos para Aplicación de Productos Químicos</h3>
                    <p class="service-description">Sistemas especializados para la aplicación precisa de productos químicos específicos, con alcance de hasta 20 metros.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/lydct.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Limpieza y Desincrustación de Cañerías y Caños Tubing</h3>
                    <p class="service-description">Servicio especializado de limpieza y desincrustación de cañerías, caños tubing y tanques API con tecnología de alta presión.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/rym.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Mantenimiento y Reparaciones</h3>
                    <p class="service-description">Servicio completo de mantenimiento y reparaciones con logística de retiro en base/campo, incluyendo entrega de equipo back up para minimizar tiempos de inactividad.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/lfeq.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Limpieza de Flota y Equipos Pesados</h3>
                    <p class="service-description">Limpieza profesional de flotas vehiculares y equipos pesados con equipos de alta presión y tecnología especializada.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/desgasificacion.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Desgasificación de Cisternas</h3>
                    <p class="service-description">Servicio especializado de desgasificación de cisternas con equipos y procedimientos de seguridad certificados.</p>
                </div>
                <div class="service-card" data-image="<?php echo e(asset('images/vmovil.jpeg')); ?>" onclick="openServiceModal(this)">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Tanque Móvil de Presión y Vacío</h3>
                    <p class="service-description">Servicio de soluciones de evacuación de fluidos. Nos especializamos en la extracción de limpiezas del suelo utilizando tecnología de desarrollo propio.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo e(asset('images/logo-ps.png')); ?>" alt="Proyección Servicios" class="service-logo">
                    </div>
                    <h3 class="service-title">Otros Servicios</h3>
                    <div class="service-description">
                        <ul style="list-style: none; padding: 0; margin: 0; text-align: left;">
                            <li style="margin-bottom: 0.75rem;">• Equipos para Vaporización y Desparafinación</li>
                            <li style="margin-bottom: 0.75rem;">• Certificación de Equipos de Alta Presión</li>
                        </ul>
                        <p style="margin-top: 1rem; margin-bottom: 0;">Soluciones especializadas adicionales adaptadas a las necesidades específicas de cada cliente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Companies Section -->
    <section class="companies">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Empresas que Confían en Nosotros</h2>
                <p class="section-subtitle">Trabajamos con las mejores empresas del sector</p>
            </div>
            <div class="companies-grid" id="companies-grid">
                <div class="company-logo company-logo-slb">
                    <img src="<?php echo e(asset('images/slblogo.png')); ?>" alt="SLB">
                </div>
                <div class="company-logo company-logo-ypf">
                    <img src="<?php echo e(asset('images/ypflogo.png')); ?>" alt="YPF">
                </div>
                <div class="company-logo">
                    <img src="<?php echo e(asset('images/naborslogo.png')); ?>" alt="Nabors">
                </div>
                <div class="company-logo">
                    <img src="<?php echo e(asset('images/sanantonio.png')); ?>" alt="San Antonio">
                </div>
                
                <div class="company-logo">
                    <img src="<?php echo e(asset('images/shelllogo.png')); ?>" alt="Shell">
                </div>
                <div class="company-logo">
                    <img src="<?php echo e(asset('images/peduzzilogo.png')); ?>" alt="Peduzzi">
                </div>
                <div class="company-logo">
                    <img src="<?php echo e(asset('images/opslogo.png')); ?>" alt="OPS">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contáctanos</h2>
                <p class="section-subtitle">Estamos listos para ayudarte. Ponte en contacto con nosotros</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><a href="mailto:Ps.hidroventas@gmail.com">Ps.hidroventas@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Teléfono</h3>
                            <p><a href="tel:+542995928725">+54 9 2995 92 8725</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Dirección</h3>
                            <p>Santamaria 35, Q8300 Neuquén</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestra Ubicación</h2>
                <p class="section-subtitle">Visítanos en nuestra oficina</p>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps?q=Santamaria+35,+Q8300+Neuquén&output=embed" 
                    width="100%" 
                    height="450" 
                    style="border:0; border-radius: 12px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="map-link">
                    <a href="https://share.google/BWDTeJzsA5eDhkcqY" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        Ver en Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo e(date('Y')); ?> Proyección Servicios. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Service Image Modal -->
    <div id="serviceModal" class="service-modal">
        <div class="service-modal-content">
            <span class="service-modal-close">&times;</span>
            <img id="serviceModalImage" src="" alt="Imagen del servicio">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\proyeccionservicios\resources\views/welcome.blade.php ENDPATH**/ ?>