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
// Contact form + loading state + auto-save draft
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.onsubmit = function(e) {
    e.preventDefault();
    const btn = contactForm.querySelector('button[type=submit]');
    btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Loading...';
    setTimeout(()=>{
      btn.innerHTML = 'Kirim';
      document.getElementById('contactSuccess').classList.remove('d-none');
      setTimeout(()=>{
        document.getElementById('contactSuccess').classList.add('d-none');
        contactForm.reset();
        localStorage.removeItem('contactDraft');
      }, 2000);
    }, 1200);
  };
  // Auto-save draft
  contactForm.addEventListener('input', () => {
    localStorage.setItem('contactDraft', JSON.stringify({
      nama: contactForm.nama.value, email: contactForm.email.value, pesan: contactForm.pesan.value
    }));
  });
  window.addEventListener('DOMContentLoaded', () => {
    const draft = JSON.parse(localStorage.getItem('contactDraft')||'{}');
    if (draft.nama) contactForm.nama.value = draft.nama;
    if (draft.email) contactForm.email.value = draft.email;
    if (draft.pesan) contactForm.pesan.value = draft.pesan;
  });
}
// Toast notification
window.showToast = function(msg, type='success') {
  let container = document.getElementById('toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
    container.id = 'toastContainer';
    document.body.appendChild(container);
  }
  const toast = document.createElement('div');
  toast.className = `toast align-items-center text-bg-${type} border-0 show`;
  toast.role = 'alert';
  toast.innerHTML = `<div class="d-flex"><div class="toast-body">${msg}</div><button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button></div>`;
  container.appendChild(toast);
  setTimeout(()=>toast.remove(), 3000);
};
// Search highlight (untuk hasil pencarian)
window.highlight = function(text, term) {
  if (!term) return text;
  return text.replace(new RegExp(`(${term})`, 'gi'), '<mark>$1</mark>');
};
// Filter chips (simulasi)
window.removeFilter = function(val) {
  showToast('Filter '+val+' dihapus', 'info');
  // Implementasi hapus filter di backend/frontend
};
// Keyboard shortcut: '/' untuk fokus ke search
window.addEventListener('keydown', function(e) {
  if (e.key === '/' && document.activeElement.tagName !== 'INPUT') {
    const search = document.getElementById('searchBox');
    if (search) { e.preventDefault(); search.focus(); }
  }
});
// Komentar: Fungsi di atas untuk UX improvement, toast, auto-save, highlight, dsb. 