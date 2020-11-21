const menu = document.querySelector('#menu');
const bars = document.querySelector('#bars');

bars.addEventListener('click', function() {
  menu.classList.toggle('show');
})