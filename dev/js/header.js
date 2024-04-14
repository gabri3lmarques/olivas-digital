const open_menu = document.querySelector(".open-menu");
const overlay = document.querySelector(".site-overlay");
const close_menu = document.querySelector(".close-menu");

open_menu.addEventListener("mouseenter", function() {
    this.classList.add("rotating");
});

open_menu.addEventListener("animationend", function() {
    this.classList.remove("rotating");
});

open_menu.addEventListener("click", function(){
    overlay.classList.toggle("active");
});

close_menu.addEventListener("click", function(){
    overlay.classList.toggle("active");
});