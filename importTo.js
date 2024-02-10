


const links = document.querySelectorAll('.links')
const icons = document.getElementById('icons')

const nav  = document.querySelector('nav')
icons.addEventListener('click', ()=>{
    nav.classList.toggle("active")
    // presentation.classList.toggle('descend')
    // formes.classList.toggle('descend')
})

links.forEach((link) =>{
    link.addEventListener('click', ()=>{
        nav.classList.remove('active')
        // presentation.classList.remove('descend')
    })
})





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


const menus = document.querySelectorAll('.menus')

menus.forEach((a) =>{
    a.addEventListener('click', ()=>{
       
    }) 
})



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




const slides2  = document.querySelectorAll('.slide2')
const buttons2 = document.querySelectorAll('.btn2').forEach((button2) => {
    button2.addEventListener('click', (e)=>{
        const clcNextSlide2 =  e.target.id  ==='next2' ? 1 :-1
        const slideActive2 = document.querySelector('.active2')

        let newIndex2 = clcNextSlide2 + [...slides2].indexOf(slideActive2)

        if(newIndex2 < 0) newIndex2 = [...slides].length -1
        if(newIndex2 >= [...slides2].length) newIndex2 = 0 
        slides2[newIndex2].classList.add('active2')
        slideActive2.classList.remove('active2')
    })
    
})

const slides3  = document.querySelectorAll('.slide3')
const buttons3 = document.querySelectorAll('.btn3').forEach((button3) => {
    button3.addEventListener('click', (e)=>{
        const clcNextSlide3 =  e.target.id  ==='next3' ? 1 :-1
        const slideActive3 = document.querySelector('.active3')

        let newIndex3 = clcNextSlide3 + [...slides3].indexOf(slideActive3)

        if(newIndex3 < 0) newIndex3 = [...slides3].length -1
        if(newIndex3 >= [...slides3].length) newIndex3 = 0 
        slides3[newIndex3].classList.add('active3')
        slideActive3.classList.remove('active3')
    })
    
})


// Fonction pour remonter au début de la page
function topFunction() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
  }
  
  // Afficher ou masquer le bouton en fonction du défilement de la page
//   window.onscroll = function() {scrollFunction()};
  
//   function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//       document.getElementById("myBtn").style.display = "block";
//     } else {
//       document.getElementById("myBtn").style.display = "none";
//     }
//   }




  