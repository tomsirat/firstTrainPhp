<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container-fluid bg-dark">

        <h1 class="w-25 m-auto text-center text-white">Introduction à PHP</h1>
        <p class="w-25 m-auto text-center text-white">(Physical Hair Problem)</p>
    
        <nav class="m-auto w-50 text-center ">
            <a class="navbar-brand" href="section1.php">I : Les Variables</a>
            <a class="navbar-brand" href="#">II : Les Conditions</a>
            <a class="navbar-brand mb-5" href="#">III : Le Caprice de Yann</a>
        </nav>
      

        
        
        <!-- VARIABLE -->
        <?php // include "section1.php";?>

        <!-- CONDITION -->
       <?php // include "section2.php";?>

        <!-- BOUCLE -->
        <?php // include "section3.php";?>

        <!-- TABLEAU -->
        <?php // include "section4.php";?>
        
        <!-- DATE -->
        <!-- <section class="date">

             <a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2>PHP - Les dates</h2></a>

            <h4>Exercice 1</h4> -->
            <!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->

            <?php 

                // echo date('d/m/Y');

            ?>

          

            <!-- <h4>Exercice 2</h4> -->
            <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->


            <?php 

                // echo date('d-m-Y');

            ?>
          
<!-- 
            <h4>Exercice 3</h4> -->
            <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->

            <?php
            
                // echo date('d-m-Y');
                // echo date('D j F Y');

            ?>
            
          

            <!-- <h5>Bonus</h5> -->
            <!-- Bonus : Le faire en français. -->

            <?php

                // Manière Legit //
                // setlocale(LC_TIME, 'fr_FR.UTF8'); 
                // echo strftime('%A %d %B %Y');
                
                // Pas Legit
                // $nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
                // $mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
                //         "septembre", "octobre", "novembre", "décembre");

                // list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));
                // echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; 

            ?>

            

          

            <!-- <h4>Exercice 4</h4> -->
            <!-- Afficher le timestamp du jour. -->
            <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->

            <?php 

                // $today = date(time());
                // echo $today . "<br/>";

                // echo strtotime("2 august 2016 15 hours");
                // echo "<br/>";
                // date_default_timezone_set("UTC + 1");
                // echo date("h:i:sa");


            ?>

          

            <!-- <h4>Exercice 5</h4> -->
            <!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->


            <?php
                // $timesBefore = mktime(0,0,0,5,16,2016);
                // $timesToDay = time();
                // $difference = $timesToDay - $timesBefore;
                // $numberHour = $difference / 3600;
                // $numberDay = $numberHour / 24;
                // echo "Le nombre de jour qui nous sépare de la date du 26/05/2016 est de ".$numberDay
            ?>
          

            <!-- <h4>Exercice 6</h4> -->
            <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

            <?php

                // $actualDate = date("d/m/Y");
                // $dateBefore = mktime(0,0,0,2,2016);
                // echo $dateBefore;

            ?>


         

            <!-- <h4>Exercice 7</h4> -->
            <!-- Afficher la date du jour + 20 jours. -->

          
<!-- 
            <h4>Exercice 8</h4> -->
            <!-- Afficher la date du jour - 22 jours -->

          

            <!-- <h4>Exercice FINAL</h4> -->
            <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
            <!-- En fonction des choix, l'afficher dans un calendrier -->

        </section>

    </main>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>