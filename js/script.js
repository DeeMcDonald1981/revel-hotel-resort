let navBtn = document.querySelector('.nav_icon');
let sideNav = document.querySelector('#navbar ul');

navBtn.addEventListener('click', function(){
   sideNav.classList.toggle('side_nav'); 
})