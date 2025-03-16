const openModalBtns = document.querySelectorAll('.openModalBtn');
const modal = document.getElementById('modal');
const closeModalBtn = document.getElementById('closeModalBtn');

openModalBtns.forEach((button) => {
  button.addEventListener('click', () => {
    modal.classList.add('active');
  });
});

closeModalBtn.addEventListener('click', () => {
  modal.classList.remove('active');
});
