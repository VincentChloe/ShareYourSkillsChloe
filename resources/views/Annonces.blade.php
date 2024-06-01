<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 170vh;
            background-image: url('/img/BackgroundAnnoncess.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }

        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 5em;
            text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
            text-align: center;
            background-image: url('/img/');
            background-position: top, bottom;
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            position: relative; /* assure que la position absolue de l'image est relative à cette section */
        }

       

        #footer {
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: -100px;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px 0;
            font-size: 0.8em;
            transition: bottom 0.3s;
        }

        footer p {
            margin: 0;
        }
   


       
        /* Classe pour ajuster la position de l'image */
        .position-Categorie {
            position: absolute;
            top: 480px; /* ajustez la position verticale */
            left: 50%; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:90px
        }
        .fade-in {
    opacity: 0; /* Commencez avec une opacité de 0 */
    transition: opacity 1s ease; /* Ajoutez une transition pour l'opacité */
}
.fade-in.fade-in-complete {
    opacity: 1; /* Gardez une opacité de 1 après l'animation */
}
.position-AjoutAnnonces{
            position: absolute;
            top: 580px; /* ajustez la position verticale */
            left: 1300px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:40px
        }
        .position-buttonajouter{
            position: absolute;
            top: 580px; /* ajustez la position verticale */
            left: 1300px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .btn-primary{
            position: absolute;
            top: 580px; /* ajustez la position verticale */
            left: 1100px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            
        }
        .position-LangEtrang{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px
        }
        .position-button1 {
    position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
  
}
        .textLangEtrang{
            position: absolute;
            top: 747px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            
        }
        .position-MontaPhoto{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px
        }
        .position-button2{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMontaPhoto{
            position: absolute;
            top: 747px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-SoutScol{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            
        }
        .position-button3{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textSoutScol{
            position: absolute;
            top: 747px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Design{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button4{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textDesign{
            position: absolute;
            top: 747px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-DevWeb{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button5{
            position: absolute;
            top: 760px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textDevWeb{
            position: absolute;
            top: 747px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-MaketDigit{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button6{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMaketDigit{
            position: absolute;
            top: 918px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Musique{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button7{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMusique{
            position: absolute;
            top: 918px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Redaction{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 715px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button8{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 715px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textRedaction{
            position: absolute;
            top: 918px; /* ajustez la position verticale */
            left: 715px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Coaching{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 987px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button9{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 987px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCoaching{
            position: absolute;
            top: 918px; /* ajustez la position verticale */
            left: 987px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-ServAdmin{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button10{
            position: absolute;
            top: 932px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textServAdmin{
            position: absolute;
            top: 918px; /* ajustez la position verticale */
            left: 1260px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Traduction{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button11{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textTraduction{
            position: absolute;
            top: 1091px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Arts{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            
        }
        .position-button12{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textArts{
            position: absolute;
            top: 1091px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Cuisine{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button13{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCuisine{
            position: absolute;
            top: 1091px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Couture{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button14{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCouture{
            position: absolute;
            top: 1091px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Bricolage{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 1265px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button15{
            position: absolute;
            top: 1105px; /* ajustez la position verticale */
            left: 1265px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textBricolage{
            position: absolute;
            top: 1091px; /* ajustez la position verticale */
            left: 1265px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-AstuceBeaute{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button16{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textAstuceBeaute{
            position: absolute;
            top: 1260px; /* ajustez la position verticale */
            left: 190px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-DecoInter{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button17{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textDecoInter{
            position: absolute;
            top: 1260px; /* ajustez la position verticale */
            left: 455px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Relaxation{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button18{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textRelaxation{
            position: absolute;
            top: 1260px; /* ajustez la position verticale */
            left: 725px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;           
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Jardinage{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button19{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textJardinage{
            position: absolute;
            top: 1260px; /* ajustez la position verticale */
            left: 990px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;           
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Calligraphie{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 1270px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
        }
        .position-button20{
            position: absolute;
            top: 1276px; /* ajustez la position verticale */
            left: 1270px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCalligraphie{
            position: absolute;
            top: 1260px; /* ajustez la position verticale */
            left: 1270px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;           
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        
        nav ul {
    list-style: none; /* Supprimer les puces de la liste */
    margin: 0;
    padding: 0;
}

nav li {
    display: inline; /* Afficher les éléments de la liste en ligne plutôt qu'en bloc */
    margin-right: 20px; /* Espacement entre les éléments de la liste */
}

nav a {
    text-decoration: none; /* Supprimer le soulignement des liens */
    color: #fff;
    font-weight: bold;
}
.navbar {
    background-color: transparent !important; /* Couleur de fond transparente */
    border: none !important; /* Supprimer la bordure */
    box-shadow: none !important; /* Supprimer l'ombre */
}

.navbar-collapse {
    display: none !important; /* Supprimer le contenu de la barre de navigation */
}
@media screen and (min-width: 1900px) {
    body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 180vh;
            background-image: url('/img/BackgroundAnnoncePc.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }
        .position-AjoutAnnonces{
            position: absolute;
            top: 715px; /* ajustez la position verticale */
            left: 1700px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px
        }
        .position-buttonajouter{
            position: absolute;
            top: 715px; /* ajustez la position verticale */
            left: 1700px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px;
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .btn-primary {
            position: absolute;
            top: 715px; /* ajustez la position verticale */
            left: 1500px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
        }
           
    .position-Categorie {
            position: absolute;
            top: 620px; /* ajustez la position verticale */
            left: 50%; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:90px;
        }
    .position-LangEtrang {
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px; /* ajustez en fonction de la hauteur de l'image */
}


.position-button1 {
    position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
  
}


        .textLangEtrang{
            position: absolute;
            top: 848px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-MontaPhoto{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button2{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMontaPhoto{
            position: absolute;
            top: 848px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-SoutScol{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button3{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textSoutScol{
            position: absolute;
            top: 848px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Design{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button4{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textDesign{
            position: absolute;
            top: 848px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-DevWeb{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            
        }
        .position-button5{
            position: absolute;
            top: 865px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
            
        }
        .textDevWeb{
            position: absolute;
            top: 848px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-MaketDigit{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button6{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMaketDigit{
            position: absolute;
            top: 1067px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Musique{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button7{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textMusique{
            position: absolute;
            top: 1067px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Redaction{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 915px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button8{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 915px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textRedaction{
            position: absolute;
            top: 1067px; /* ajustez la position verticale */
            left: 915px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Coaching{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button9{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCoaching{
            position: absolute;
            top: 1056px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-ServAdmin{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button10{
            position: absolute;
            top: 1085px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textServAdmin{
            position: absolute;
            top: 1067px; /* ajustez la position verticale */
            left: 1625px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Traduction{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button11{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textTraduction{
            position: absolute;
            top: 1292px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Arts{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button12{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textArts{
            position: absolute;
            top: 1290px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Cuisine{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button13{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCuisine{
            position: absolute;
            top: 1292px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Couture{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button14{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCouture{
            position: absolute;
            top: 1292px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Bricolage{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 1635px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button15{
            position: absolute;
            top: 1310px; /* ajustez la position verticale */
            left: 1635px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textBricolage{
            position: absolute;
            top: 1292px; /* ajustez la position verticale */
            left: 1635px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-AstuceBeaute{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button16{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textAstuceBeaute{
            position: absolute;
            top: 1510px; /* ajustez la position verticale */
            left: 245px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-DecoInter{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button17{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textDecoInter{
            position: absolute;
            top: 1510px; /* ajustez la position verticale */
            left: 585px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Relaxation{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button18{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textRelaxation{
            position: absolute;
            top: 1510px; /* ajustez la position verticale */
            left: 935px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:100px;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Jardinage{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;
        }
        .position-button19{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textJardinage{
            position: absolute;
            top: 1502px; /* ajustez la position verticale */
            left: 1275px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;           
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .position-Calligraphie{
            position: absolute;
            top: 1530px; /* ajustez la position verticale */
            left: 1640px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px; 
            
        }
        .position-button20{
            position: absolute;
            top: 1730px; /* ajustez la position verticale */
            left: 1640px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:60px; /* ajustez en fonction de la hauteur de l'image */
            width:100px;
            background-color: transparent;
            border-color: transparent;
            z-index: 1050;
        }
        .textCalligraphie{
            position: absolute;
            top: 1502px; /* ajustez la position verticale */
            left: 1640px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:80px;           
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        
        }


        

    </style>
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-lg navbar-dark text-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Share Your Skills
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                            

                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('annonces') }}">Annonces</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('demandes') }}">Demandes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('credits') }}">Crédits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('avis') }}">Avis</a>
                            </li>
                              <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                {{ __('Profil') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <section>
    <!-- Ajoutez votre image ici -->
    <img src="/img/LogoCategories.png" class="position-Categorie">
   

</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<a href="{{ route('MesAnnonces') }}" class="btn btn-primary">Voir mes posts</a>

<button onclick="window.location.href='{{route ('FormAnnonces')}}'" class="position-buttonajouter"></button>
    <img src="/img/AjouterAnnonces.png" class="position-AjoutAnnonces" alt="Ajouter Annonces">
    
@foreach($categories as $categorie)
<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 1]) }}'" class="position-button1"></button>
    <img src="/img/languesEtrangeres.png" class="position-LangEtrang" alt="Langues étrangères">
    
<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 2]) }}'" class="position-button2"></button>
<img src="/img/montagePhoto.png" class="position-MontaPhoto">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 3]) }}'" class="position-button3"></button>
<img src="/img/soutienScolaire.png" class="position-SoutScol">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 4]) }}'" class="position-button4"></button>
<img src="/img/design.png" class="position-Design">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 5]) }}'" class="position-button5"></button>
<img src="/img/developpementWeb.png" class="position-DevWeb">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 6]) }}'" class="position-button6"></button>
<img src="/img/marketingDigital.png" class="position-MaketDigit">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 7]) }}'" class="position-button7"></button>
<img src="/img/musique.png" class="position-Musique">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 8]) }}'" class="position-button8"></button>
<img src="/img/redaction.png" class="position-Redaction">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 9]) }}'" class="position-button9"></button>
<img src="/img/coaching.png" class="position-Coaching">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 10]) }}'" class="position-button10"></button>
<img src="/img/servicesAdministratifs.png" class="position-ServAdmin">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 11]) }}'" class="position-button11"></button>
<img src="/img/traduction.png" class="position-Traduction">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 12]) }}'" class="position-button12"></button>
<img src="/img/arts.png" class="position-Arts">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 13]) }}'" class="position-button13"></button>
<img src="/img/cuisine.png" class="position-Cuisine">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 14]) }}'" class="position-button14"></button>
<img src="/img/couture.png" class="position-Couture">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 15]) }}'" class="position-button15"></button>
<img src="/img/bricolage.png" class="position-Bricolage">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 16]) }}'" class="position-button16"></button>
<img src="/img/AstuceBeaute.png" class="position-AstuceBeaute">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 17]) }}'" class="position-button17"></button>
<img src="/img/decoInterieure.png" class="position-DecoInter">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 18]) }}'" class="position-button18"></button>
<img src="/img/relaxation.png" class="position-Relaxation">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 19]) }}'" class="position-button19"></button>
<img src="/img/Jardinage.png" class="position-Jardinage">

<button onclick="window.location.href='{{ route('ResultCategorie', ['id' => 20]) }}'" class="position-button20"></button>
<img src="/img/Calligraphie.png" class="position-Calligraphie">

@endforeach
<div class='textLangEtrang'>
    <p>Langues Étrangères</p>
</div>
<div class='textMontaPhoto'>
    <p>Montage Photo</p>
</div>
<div class='textSoutScol'>
    <p>Soutien Scolaire</p>
</div>
<div class='textDesign'>
    <p>Design</p>
</div>
<div class='textDevWeb'>
    <p>Développement Web</p>
</div>
<div class='textMaketDigit'>
    <p>Marketing Digital</p>
</div>
<div class='textMusique'>
    <p>Musique</p>
</div>
<div class='textRedaction'>
    <p>Rédaction</p>
</div>
<div class='textCoaching'>
    <p>Coaching</p>
</div>
<div class='textServAdmin'>
    <p>Services Administratifs</p>
</div>
<div class='textTraduction'>
    <p>Traduction</p>
</div>
<div class='textArts'>
    <p>Arts</p>
</div>
<div class='textCuisine'>
    <p>Astuces de Cuisine</p>
</div>
<div class='textCouture'>
    <p>Couture</p>
</div>
<div class='textBricolage'>
    <p>Bricolage</p>
</div>
<div class='textAstuceBeaute'>
    <p>Astuces de Beauté</p>
</div>
<div class='textDecoInter'>
    <p>Décoration Intérieure</p>
</div>
<div class='textRelaxation'>
    <p>Relaxation</p>
</div>
<div class='textJardinage'>
    <p>Jardinage</p>
</div>
<div class='textCalligraphie'>
    <p>Calligraphie</p>
</div>

<footer id="footer">© 2024 ShareYouSkills. Tous droits réservés. Conçu avec amour par Bonnet Matthieu, Vincent Chloé.</footer>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            var footer = document.getElementById('footer');
            var yOffset = window.pageYOffset;
            var windowHeight = window.innerHeight;
            var documentHeight = document.body.scrollHeight;

            if (yOffset + windowHeight >= documentHeight) {
                footer.style.bottom = '0px';
            } else {
                footer.style.bottom = '-100px';
            }
        });
    });
</script>
<script>
 window.addEventListener('load', function() {
    const image = document.querySelector('.position-Categorie');
    image.classList.add('fade-in');

    // Ajoutez un écouteur d'événements pour détecter la fin de l'animation de fondu
    image.addEventListener('transitionend', function() {
        image.classList.add('fade-in-complete');
    });
});
 </script>
</html>