<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfoilo.css">
    <link rel="stylesheet" href="portfoilo2.css">
    

    <title>Portfolio</title>
    <script type="module" src="./importTo.js" defer></script>
  
</head>
<style>

</style>
<body>
    <?php
        include('nav.html');
    ?>


    <div id="navpt" class="reveal">
        <h1 id="h1pt">PORTFOLIO</h1>
        <header id="navbas">    
                <a href="#pres" class="menus">A propos de moi</a>
                <a href="#compe" class="menus">Mes compétences</a>
                <a href="#realis" class="menus">Réalisations</a>
                <a href="#imgdis" class="menus">Images & disign</a>
                <a href="#hobbies" class="menus">Hobbies</a>
                <!-- <a href="#recom" class="menus">Recommandations</a>   -->
        </header>
    </div>


    <div id="main">

        <div id="pres" class="parties reveal">
            <h2 class="h2">A propos de moi</h2>
            <p id='paragraphe'>
                
            </p>
            <img id="img" src="images/me.jpg">
        </div>

        <div id="compe" class="parties reveal">
            <h2 class="compeh2">Mes compétences</h2>
            <table>
                <tr>
                    <th>Langues</th>
                    <th>Langages de Programmation</th> 
                    <th>Base de Données</th> 
                    <th>Imagerie</th>
                </tr>
                <tr>
                    <td>Français</td>
                    <td>HTML & CSS</td>
                    <td>MySQL</td>
                    <td>Canva</td>
                </tr>
                <tr>
                    <td>Russe</td>
                    <td>JavaScript</td>
                    <td>Microsoft Access</td>
                </tr>
                <tr>
                    <td>Anglais</td>
                    <td>PhP</td>
                </tr>  
            </table>

        </div>

        <a href="#" id="myBtn" class='reveal' title="Go to top">
            <img src="images/fleche.png" alt="Top">
        </a>

        <div id="realis" class="parties">
            <h2 class="h2 reveal">Réalisations</h2>
            <p class="reveal">Durant mon petit parcours j'ai travaillé sur pas mal de projets conséquents, dont deux 
                principaux qui m'ont fait gradir dans monde du le Programmation. <br>
                Ces projets représentent des nuits de travail acharné car j'ai appris à coder pure,ent avant d'utiliser les Frameworks.
                Voici donc certains projets que j'ai pu réaliser jusqu'à présent 
            </p>
            <h3 id="h3a" class="reveal">1. Site e-commerce pour le <a href="http://www.lesdelices-delasangha.com" target="_blank">Restaurant Les Délices De La Sangha</a></h3>
            <div class="carousel reveal">
                <button class="btn" id="prev">&#10096</button>
                <button class="btn" id="next">&#10097</button>
                <ul>
                    <li class="slide"><img src="images/projets/lds1.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds2.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds3.png" class="img"></li>
                    <li class="slide active"><img src="images/projets/lds4.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds5.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds6.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds7.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds13.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds8.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds9.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds10.png" class="img"></li>
                    <li class="slide"><img src="images/projets/lds12.png" class="img"></li>
                </ul> 
            </div>

            <h3 id="h3b" class="reveal">2. Site internet pour le <a href="http://#" target="_blank">L'Organisation Mondiale de la Santé (VIMS)</a></h3>
            <div class="carousel2 reveal">
                <button class="btn2" id="prev2">&#10096</button>
                <button class="btn2" id="next2">&#10097</button>
                <ul>
                    <li class="slide2 active2"><img src="images/projets/vims1.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims2.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims3.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims4.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims5.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims6.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims7.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims13.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims8.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims9.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims10.png" class="img"></li>
                    <li class="slide2"><img src="images/projets/vims12.png" class="img"></li>
                </ul> 
            </div>
        </div>
        <div id="imgdis" class="parties">
            <h2 class="h2">Images et Disign</h2>
            <p class="reveal">
                Ceci est un ensemble de certaines images que j'ai réalisé dans mes projets
            </p>
            
            <div class="carousel3 reveal">
                <button class="btn3" id="prev3">&#10096</button>
                <button class="btn3" id="next3">&#10097</button>
                <ul>
                    <li class="slide3 active3"><img src="images/projets/1.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/2.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/3.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/log.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/Copie de Faire-part - Les Délices de la Sangha (1).png" class="img"></li>
                    <li class="slide3"><img src="images/projets/10.jpg" class="img"></li>
                    <li class="slide3"><img src="images/projets/Green & White Minimalist Illustration Healthy Food Photo Collage (1).png" class="img"></li>
                    <li class="slide3"><img src="images/projets/lesdelices-delasangha.com_20231018_023909_0000.png" class="img"></li>
                   
                    <li class="slide3"><img src="images/projets/3 - Copie.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/peke.jpg" class="img"></li>
                    <li class="slide3"><img src="images/projets/cinq.png" class="img"></li>
                    <li class="slide3"><img src="images/projets/arfu.jpg" class="img"></li>
                    <li class="slide3"><img src="images/projets/cvg.png" class="img"></li>
                </ul> 
            </div>

        </div>
        <div id="hobbies" class="parties">
            <h2 class="h2">Mes Hobbies</h2>
            <div id="formes" class="reveal">
        
                <div class="image-container reveal">
                    <img src="images/hobbies/pexels-tima-miroshnichenko-7991579.jpg">
                    <div class="text-overlay">Aller au Cinema</div>
                </div>
                
                <div class="image-container reveal">
                    <img src="images/hobbies/foot.jpg">
                    <div class="text-overlay">Jouer au Football avec des amis</div>
                </div>

                <div class="image-container reveal">
                    <img src="images/hobbies/pexels-pixabay-221210.jpg">
                    <div class="text-overlay">Faire du sport</div>
                </div>

                <div class="image-container reveal">
                    <img src="images/hobbies/36162531.jpg">
                    <div class="text-overlay">Ecouter de la bonne musique</div>
                </div>
                
            </div>
            
        </div>
        <!-- <div id="recom" class="parties"><h2 class="h2">Recommandations</h2></div> -->
        
    </div>
    

    <?php
        include('footer.html');
    ?>


<script>
    // const texte = document.getElementById('paragraphe').textContent
    
    

    function afficherMotParMot(texte, delai) {
    let mots = texte.split(" ");
    let index = 0;
    let affichage = setInterval(function() {
        if (index < mots.length) {
            document.getElementById("paragraphe").textContent += mots[index] + " ";
            index++;
        } else {
            clearInterval(affichage);
        }
    }, delai);
    }

    afficherMotParMot(`Salut je m'appelle Nestor GUY GNANGA, j'ai 21 ans et je suis developpeur Web et Mobile, Créateur de Zness_14 Programmation. De nationalité Congolaise, je réside aujourd'hui à Kazan en Russie. Entre les cours à l'université, les vidéos tutorielles et les livres de programmation, je me suis formé et j'ai commencé peu à peu à prendre plaisir à faire ce que j'appelle aujourd'hui le Meilleur Travail Du Monde. Mon site à pour but de vous plonger dans ma vie de developpeur en passant en revue mes expériences et mes projets.`, 100);
    // console.log(texte);
</script>
</body>
</html>