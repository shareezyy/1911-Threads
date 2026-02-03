


let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times'); // Optional: Turns hamburger into an 'X'
    navbar.classList.toggle('active'); // Toggles the menu visibility
}

// Optional: Close menu when scrolling
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


