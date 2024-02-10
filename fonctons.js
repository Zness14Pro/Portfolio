// MENU DEROULANT AVEC LA CLASSE ACTIVE


const links = document.querySelectorAll('.links')
const icons = document.getElementById('icons')
const presentation = document.getElementById('presentation')

const nav  = document.querySelector('nav')
icons.addEventListener('click', ()=>{
    nav.classList.toggle("active")
    presentation.classList.toggle('descend')
    formes.classList.toggle('descend')
})

links.forEach((link) =>{
    link.addEventListener('click', ()=>{
        nav.classList.remove('active')
        presentation.classList.remove('descend')
    })
})



// AFFICHER LES ELEMENTS AU SCROOL AVEC L'OBSERV

const ratio = .1
const options = {
    root: null, //racine, elle sert de zone d'affichage, detecte si l'element est visible ou pas  
    rootMargin: "0px", 
    threshold: .1, // poursentage de visibilite de l'element 10%
  };
  
const handleIntersect = function(entries, observer){
    entries.forEach(function  (entry){ 
        if(entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)

        }
    })
   
}

const observer = new IntersectionObserver(handleIntersect, options);

document.querySelectorAll('.reveal').forEach(function (r){
    observer.observe(r)
}
)


// FONCTION POUR REVENIR AU DEBUT DE LA PAGE 

function topPageFunction() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
}



// AFFICHAGE DE TEXT MOT PAR MOT


function afficherMotParMot(texte, delai) {
    let mots = texte.split(" ");
    let index = 0;
    let affichage = setInterval(function() {
        if (index < mots.length) {
            document.getElementById("texte").textContent += mots[index] + " ";
            index++;
        } else {
            clearInterval(affichage);
        }
    }, delai);
}

// Appel de la fonction avec le texte à afficher et le délai entre chaque mot (en millisecondes)
afficherMotParMot("Voici un exemple de texte qui sera affiché mot par mot.", 300);


// SYSTEME DE SILDE D'IMAGES


const slides  = document.querySelectorAll('.slide')
const buttons = document.querySelectorAll('.btn').forEach((button) => {
    button.addEventListener('click', (e)=>{
        // si le restultat est next stock dans clcNestSlide la valeur 1 sinon stock la valeur -1
        const clcNextSlide =  e.target.id  ==='next' ? 1 :-1
        // selectionne l'element qui a la classe active
        const slideActive = document.querySelector('.active')

        /* transformer slides en un tableau destrutrure et otenir l'index de son l'element active
            cet index est la position de l'image dans le tableau. elle est ensuite additionner a clcNextSlide 
            pour trouver la nouvelle position de la classe active 
        */

        let newIndex = clcNextSlide + [...slides].indexOf(slideActive)

        if(newIndex < 0) newIndex = [...slides].length -1
        if(newIndex >= [...slides].length) newIndex = 0 

        // on ajoute la classe active a l'element avec la newIndex
        slides[newIndex].classList.add('active')
        // on retire la classe active a l'element avec qui l'avait au debut
        slideActive.classList.remove('active')
    })
    
})





