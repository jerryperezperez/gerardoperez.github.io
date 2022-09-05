const mobileMenu = document.getElementById("hamburger")
const otro = document.getElementById('menu');
mobileMenu.addEventListener("click", algo)

function algo(){
    // otro.classList.add("activeMenu")
    
    otro.classList.toggle("activeMenu")
    otro.classList.toggle("menuStyle")
  }