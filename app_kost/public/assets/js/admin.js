// Search
const searchBox = document.getElementById('searchBox');
if (searchBox) {
  searchBox.addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#dataTable tbody tr');
    rows.forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(filter) ? '' : 'none';
    });
  });
}
// Sort
window.sortTable = function(n) {
  const table = document.getElementById('dataTable');
  let switching = true, dir = 'asc', switchcount = 0;
  while (switching) {
    switching = false;
    let rows = table.rows, shouldSwitch;
    for (let i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      let x = rows[i].getElementsByTagName('TD')[n];
      let y = rows[i + 1].getElementsByTagName('TD')[n];
      if ((dir == 'asc' && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) ||
          (dir == 'desc' && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase())) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount++;
    } else {
      if (switchcount == 0 && dir == 'asc') {
        dir = 'desc';
        switching = true;
      }
    }
  }
}
// Pagination (simple)
let currentPage = 1, rowsPerPage = 10;
const prevBtn = document.getElementById('prevPage');
const nextBtn = document.getElementById('nextPage');
function showPage(page) {
  const rows = document.querySelectorAll('#dataTable tbody tr');
  rows.forEach((row, i) => {
    row.style.display = (i >= (page-1)*rowsPerPage && i < page*rowsPerPage) ? '' : 'none';
  });
}
if (prevBtn && nextBtn) {
  prevBtn.onclick = () => { if (currentPage > 1) { currentPage--; showPage(currentPage); } };
  nextBtn.onclick = () => { currentPage++; showPage(currentPage); };
  showPage(currentPage);
}
// Modal Delete
window.confirmDelete = function(id) {
  const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
  document.getElementById('confirmDeleteBtn').onclick = function() {
    // Implementasi delete AJAX atau redirect
    modal.hide();
    alert('Data dengan ID '+id+' dihapus (simulasi)');
  };
  modal.show();
}
// Spinner
window.showSpinner = function() {
  document.getElementById('spinnerContainer').innerHTML = '<div class="d-flex justify-content-center align-items-center" style="height:200px;"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
}
window.hideSpinner = function() {
  document.getElementById('spinnerContainer').innerHTML = '';
} 