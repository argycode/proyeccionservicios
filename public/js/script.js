// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80; // Account for fixed navbar
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar scroll effect
let lastScroll = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe service cards and contact items
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.service-card, .contact-item');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Function to add company logos (to be called when logos are added)
// Usa la ruta base de Laravel asset() - las imágenes deben estar en public/images/
function addCompanyLogo(imagePath, imageAlt) {
    const companiesGrid = document.getElementById('companies-grid');
    const placeholder = companiesGrid.querySelector('.companies-placeholder');
    
    if (placeholder) {
        placeholder.remove();
    }
    
    const logoDiv = document.createElement('div');
    logoDiv.className = 'company-logo';
    const img = document.createElement('img');
    // La ruta debe ser relativa a public/, ej: 'images/logo-empresa.png'
    img.src = imagePath.startsWith('/') ? imagePath : '/' + imagePath;
    img.alt = imageAlt || 'Company Logo';
    logoDiv.appendChild(img);
    companiesGrid.appendChild(logoDiv);
}

// Example usage (commented out):
// addCompanyLogo('images/logo-empresa1.png', 'Nombre Empresa 1');
// addCompanyLogo('images/logo-empresa2.png', 'Nombre Empresa 2');

// Service Modal functionality
function openServiceModal(card) {
    const imagePath = card.getAttribute('data-image');
    if (imagePath) {
        const modal = document.getElementById('serviceModal');
        const modalImg = document.getElementById('serviceModalImage');
        modalImg.src = imagePath;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }
}

function closeServiceModal() {
    const modal = document.getElementById('serviceModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // Restore scrolling
}

// Close modal when clicking outside the image
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('serviceModal');
    const closeBtn = document.querySelector('.service-modal-close');
    
    if (closeBtn) {
        closeBtn.addEventListener('click', closeServiceModal);
    }
    
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeServiceModal();
            }
        });
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeServiceModal();
        }
    });
    
    // Make service cards clickable
    const serviceCards = document.querySelectorAll('.service-card[data-image]');
    serviceCards.forEach(card => {
        card.style.cursor = 'pointer';
    });
});
