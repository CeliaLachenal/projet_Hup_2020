// conserne la div qui contient la nav du menu
let btn = document.querySelector('.toggle_btn');
let nav = document.querySelector('.nav');

btn.onclick = function() {
    nav.classList.toggle('nav_open');
}

// conserne le menu burger
const toggle_btn = document.querySelector('.toggle_btn');

toggle_btn.addEventListener('click', () => { //on écoute le click et on déclanche la fonction qui doit ajouter une classe
    toggle_btn.classList.toggle('active') //on ajoute la class 'active' à la div lors du click et lors d'un second click on retire cette class
});