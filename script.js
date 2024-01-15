const menuToggle = document.querySelector('.btn');
const showcase = document.querySelector('.showcase');
const menuClose = document.querySelector('.closeMenu');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})

menuClose.addEventListener('click', () => {
  menuToggle.classList.remove('active');
  showcase.classList.remove('active');
})

//========================================================================================

