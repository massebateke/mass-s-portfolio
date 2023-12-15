<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header class="header">
       <a href="#" class="logo">Masse BATEKE</a>
        <nav class="navbar">
            <a href="#acceuil" class="active">Acceuil</a>
            <a href="#aboutMe">A propos de moi</a>
            <a href="#mesProjets" class="mesprojets">Mes projets</a>
            <a href="#contactez-moi" class="contact">Contact</a>
        </nav>
    </header>
    <!--Page home-->
    <section class="acceuil" id="acceuil">
        <div class="descriptionAcceuil">
            <h1>Bonjour, je m'appelle Massé BATEKE</h1>
            <h3>Développeuse Web</h3>
            <p>Étudiante en Web Développement à HETIC, l’école du Web, je suis à la 
                recherche d'une alternance en back-end, front-end ou full-stack pour compléter ma formation 
                par une expérience pratique.</p>
        <div class="btn-box">
            <a href="#aboutMe" class="btn">Pourquoi me choisir ?</a>
            <a href="#contactez-moi" class="btn">Contactez moi</a>
         </div>
        </div>
        <div class="btn-reseaux">
            <a href="https://github.com/massebateke" target="_blank"><i class='bx bxl-github'></i></a>
            <a href="mailto:massebateke4@gmail.com"><i class='bx bxl-gmail'></i></a>
            <a href="https://www.linkedin.com/in/mass%C3%A9-bateke-b877b3224" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
           </div>
    </section>
    <!--Page About Me-->
    <setion class="aboutMe" id="aboutMe">
        <div class="about-titre">
            <h3>A propos de moi</h3>
        </div>
        <div class="aboutMee">
            <div class="about-img">
                <img src="img/MasseBATEKE.png" alt="photo de Massé BATEKE" srcset="">
            </div>
            <div class="about-contenu">
                <p>Bonjour, je m'appelle Masse Bateke, j'ai 19 ans, et je suis passionnée par le développement informatique. 
                    <br>
                    Ce choix découle de l'influence de mon entourage et de ma propre affinité pour la logique et la créativité que le développement
                    exige.
                    <br><br>
                    J'apprécie la possibilité de créer quelque chose de concret à partir de lignes de code, et je suis convaincue que 
                     cette voie me permettra de continuer à apprendre et à relever des défis stimulants.</p>
            </div>
        </div>
   </setion>
   <!--Page Mes projets-->
   <section class="mesProjets" id="mesProjets">
    <div class="projets-titre" >
        <h3>Mes Projets</h3>
    </div>
    <div class="projets">
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création Mini Réseaux Sociaux</a>
            <p class="description">Nous avons créé un site web similaire à Facebook, permettant aux utilisateurs 
                de s'inscrire, d'aimer des publications, de commenter et de donner des likes, en utilisant les technologies
                 PHP, CSS, JavaScript et MySQL.</p>
            <p class="date">Mai 2023</p>
            <a href="">Try me</a>
        </div>
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création d’un Runner Game en 2D</a>
            <p class="description">L'objectif était de créer un jeu de course en 2D où le personnage évite les obstacles en 
                sautant ou en s'abaissant, avec une accélération du jeu en fonction du score. De plus, le jeu offre un mode de
                 création de niveaux pour les joueurs, utilisant les technologies PHP, CSS et JavaScript.</p>
            <p class="date">Février 2023</p>
            <a href="">Try me</a>
        </div>
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création d'un RPG Textuel</a>
            <p class="description">Le RPG textuel inspiré de Rick et Morty mettait en scène Morty qui devait sauver Rick, incluant
                la recherche d'armes et des dialogues interactifs avec des choix, développé en utilisant Python.</p>
            <p class="date">Janvier 2023</p>
            <a href="">Try me</a>
        </div>
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création d'un RPG Textuel</a>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing 
                elit. Laboriosam fuga et exercitationem numquam dolor excepturi 
                corrupti officia aut.</p>
            <p class="date">Date 2222- 2222</p>
            <a href="">Try me</a>
        </div>
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création d'un RPG Textuel</a>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing 
                elit. Laboriosam fuga et exercitationem numquam dolor excepturi 
                corrupti aut.</p>
            <p class="date">Date 2222- 2222</p>
            <a href="">Try me</a>
        </div> 
        <div class="projet">
            <a href="" target="_blank" class="projet-titre">Création d'un RPG Textuel</a>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing 
                elit. Laboriosam fuga et exercitationem numquam dolor excepturi 
                corrupti aut.</p>
            <p class="date">Date 2222- 2222</p>
            <a href="">Try me</a>
        </div>
    </div>
   </section>
   <!--Contactez moi-->
   <section class="contactez-moi" id="contactez-moi">
    <div class="contact-titre">
        <h3>Contactez moi</h3>
    </div>
    <form action="traitement.php" method="post">
        <div class="champ-input">
            <label for="">Quel est votre nom ?</label>
            <br><br>
            <input type="text" placeholder="Nom complet" name="nom-complet" id="nom-complet" required>
            <br><br>
        </div>
        <div class="champ-input">
            <label for="">Quel est le nom de votre compagnie ?</label>
            <br><br>
            <input type="text" placeholder="Votre compagnie" name="compagnie" id="compagnie" required>
            <br><br>
        </div>
        <div class="champ-input">
            <label for="">Quel est votre mail ?</label>
            <br><br>
            <input type="mail" placeholder="Votre mail" name="email" id="email" required>
            <br><br>
        </div>
        <div class="champ-input">
            <label for="">Un petit message ?</label>
            <br><br>
            <textarea placeholder="Un petit message ?" name="message" id="message"></textarea>
            <br><br>
        </div>
        <div class="champ-input">
            <br>
            <input type="submit" class="submit" value="Submit">
        </div>
    </form>
   </section>
   <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; Masse BATEKE</p>
        </div>
        <div class="footer-iconTop">
            <a href="#acceuil"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;"><path d="m6.293 11.293 1.414 1.414L12 8.414l4.293 4.293 1.414-1.414L12 5.586z"></path><path d="m6.293 16.293 1.414 1.414L12 13.414l4.293 4.293 1.414-1.414L12 10.586z"></path></svg></a>
        </div>
   </footer>

  <script src="index.js"></script>
</body>
</html>