<?php 
require_once("lib/login_bdd.php");
require_once("lib/select_user_by_name.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <section class="content">
        <nav>
            <a href="#">Voice-Note</a>
            <ul>
                <li><a href="">Utilisation</a></li>
                <li><a href="#note">Notes</a></li>
                <li><a href="#calendar">Calendrier</a></li>
            </ul>
            
        </nav>
        <section class="main-container">
            <div class="left-content">
                <h2>Organisez-vous dès <br>Aujourd'hui ! </h2>
                <h3>Avec Voice Note, vous pouvez créer des notes et planifier vos propres rendez-vous.</h3>
                <p>Facile et très accessible d'utilisation en plusieurs langues !</p>
                <div class="buttons-main">
                    <button id="see-more"><a href="#note">Voir Plus</a></button>
                    <button></button>
                </div>
            </div>
            <div class="right-content"></div>
        </section>

    </section>
        <footer>
            <div id="note">
                <div class="image-note">
                    <img src="./assets/main-html/note_footer.png" alt="">
                </div>
                <div class="note-content">
                    <h3>NOTE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid asperiores quaerat iusto dolore esse architecto, molestiae maiores ex ratione earum deleniti, incidunt quidem amet. Ea exercitationem dolorem voluptates perspiciatis distinctio.</p>
                    <a href="http://localhost/reconnaissance-vocale/user_login_page/user_login_page.php">Commencer à utiliser =></a>
                </div>
            </div>
            <div id="calendar">
                <div class="image-calendar">
                    <img src="./assets/main-html/calendar_footer.jpg" alt="">
                </div>
                <div class="calendar-content">
                    <h3>CALENDAR</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid asperiores quaerat iusto dolore esse architecto, molestiae maiores ex ratione earum deleniti, incidunt quidem amet. Ea exercitationem dolorem voluptates perspiciatis distinctio.</p>
                    <a href="">Commencer à utiliser =></a>
                </div>
            </div>
        </footer>
        <script src="js/home.js"></script>
</body>
</html>
