let btn = document.querySelector('.toggle_btn');
let nav = document.querySelector('.nav');

btn.onclick = function() {
    nav.classList.toggle('nav_open');
}


// etapes pour transformer les 3 barres en croix :
// 1) on crée une constante appelée toggle_btn et on va récupérer la div avec la class toggle_btn en utlisant document.querryselector
const toggle_btn = document.querySelector('.toggle_btn');
//on utilise un toggle pour que lors du clic on ajoute une class à la div 
//et que si cette classe est présente, on modifie les propriétés CSS 
//puis que losqu'on clic une seconde fois, on fais disparaitre cette class et on reviens aux propriétés initiales

toggle_btn.addEventListener('click', () => { //on écoute le click et on déclanche la fonction qui doit ajouter une classe
    toggle_btn.classList.toggle('active') //on ajoute la class 'active' à la div lors du click et lors d'un second click on retire cette class
});

//retour au CSS