// Loading overlay
window.addEventListener('load', function() {
  setTimeout(()=>{
    document.getElementById('loadingOverlay').style.opacity = 0;
    setTimeout(()=>{
      document.getElementById('loadingOverlay').style.display = 'none';
    }, 500);
  }, 500);
});
// Smooth scroll
const links = document.querySelectorAll('.smooth-scroll');
links.forEach(link => {
  link.addEventListener('click', function(e) {
    const href = this.getAttribute('href');
    if (href.startsWith('#')) {
      e.preventDefault();
      document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
    }
  });
});
// Contact form
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.onsubmit = function(e) {
    e.preventDefault();
    document.getElementById('contactSuccess').classList.remove('d-none');
    setTimeout(()=>{
      document.getElementById('contactSuccess').classList.add('d-none');
      contactForm.reset();
    }, 2000);
  };
} 