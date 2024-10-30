const toggleSubmenu = document.querySelectorAll('.toggle-submenu');
const submenu = document.querySelectorAll('.submenu');
const icon = document.querySelectorAll('.toggle-submenu .icon');

toggleSubmenu.forEach((toggle, index) => {
  toggle.addEventListener('click', () => {
    submenu[index].classList.toggle('show');
    icon[index].classList.toggle('up');
  });
});

// Thêm sự kiện click bên ngoài để ẩn các submenu
document.addEventListener('click', (e) => {
  if (!e.target.closest('.toggle-submenu')) {
    submenu.forEach(item => {
      item.classList.remove('show');
    });
    icon.forEach(item => {
      item.classList.remove('up');
    });
  }
});


