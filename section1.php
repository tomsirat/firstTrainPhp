<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-ev="X-UA-Compatible" content="ie=edge">
    <title>php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head> 

        <!-- EXO 1 -->
        <main class="container-fluid bg-dark">
            <section class="container-fluid variable w-50 ">

            <!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
            <!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
            <!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->

            <h2 class="text-center">PHP - Les variables :</h2>

            <h4>Exercice 1 :</h4>
            <p>I - Créer une variable nom</p>
            <p>II - L'initialiser avec la valeur de votre choix et afficher son contenu.</p>
            
            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p>I - La création de variables PHP = <span><span class="variables">$nom_variable</span> =<span class="types"> "string"</span></span></p>
                </div>
            </div>

            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> + <span class="variables">$nom_variable</span> affiche le résultat sur la page</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>
                <div class="toast-body">
                    <span class="variables">$name</span> = "Strauss";
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$name;</span>
                </div>
            </div>
            <!-- EXO 1 -->



            <!-- EXO 2 -->
            <h4>Exercice 2</h4>
            <p>I - Créer trois variables nom , prenom et age</p>
            <p>II - Les initialiser avec les valeurs de votre choix.</p>
           
            <!-- Attention age est de type entier. Afficher leur contenu. -->

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample3" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                    
                </div>
            </div>
            
            <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> + <span class="variables">$nom_variable</span> affiche les résultats sur la page</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$name</span> = "Strauss";
                    <?php echo "</br>"; ?>
                    <span class="variables">$surname</span> = "Khann";
                    <?php echo "</br>"; ?>
                    <span class="variables">$age</span> = 66;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$name;</span>
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$surname;</span>
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$age;</span>
                </div>
            </div>
            <!-- EXO 2 -->
           
           

            <!-- EXO 3 -->
            <h4>Exercice 3</h4>
            <p>I - Créer une variable km. L'initialiser à 1. Afficher son contenu.</p>
            <p>II - Changer sa valeur par 3. Afficher son contenu.</p>
            <p>III - Changer sa valeur par 125. Afficher son contenu.</p>

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample5" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="true" aria-controls="collapseExample">
                Etape : 3
            </button>
            </p>

            <div class="collapse" id="collapseExample5">
                <div class="card card-body">
                    <p>I - La création de variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                    
                </div>
            </div>
            
            <div class="collapse" id="collapseExample6">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> + <span class="variables">$nom_variable</span> affiche les résultats sur la page</p>
                </div>
            </div>

            <div class="collapse" id="collapseExample7">
                <div class="card card-body">
                    <p>III - Réinitialisé la variable en changeant tout simplement sa valeur puis afficher les résultats sur la page</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>


                <div class="toast-body">
                    <span class="variables">$km</span> = "1";
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$km;</span>
                    -->   (Voir résultat)
                    <?php echo "</br>"; ?>
                    <span class="variables">$km</span> = 125;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$km;</span>  
                </div>
            </div>



            <!-- EXO 4 -->
            <h4>Exercice 4</h4>
            <p>I - Créer une variable de type string, une variable de type int, une variable de type float.</p>
            <p>II - Une variable de type booléan et les initialiser avec une valeur de votre choix et les afficher.</p>
           

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample8" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample8">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample9">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> + <span class="variables">$nom_variable</span> affiche les résultats sur la page</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$name</span> = "BOB";
                    <?php echo "</br>"; ?>
                    <span class="variables">$age</span> = 666;
                    <?php echo "</br>"; ?>
                    <span class="variables">$lifetime</span> = 666.5;
                    <?php echo "</br>"; ?>
                    <span class="variables">$gay</span> = TRUE;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$name;</span>  
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$age;</span>
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$lifetime;</span>  
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$gay;</span>  
                </div>
            </div>
            <!-- EXO 4 -->


            <!-- EXO 5 -->
            <h4>Exercice 5</h4>
            <p>I - Créer une variable de type float. L'initialiser à 1. Afficher son type.</p>
            <p>II - Changer sa valeur par 4.8 et afficher son contenu.</p>


            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample10" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample11" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample10">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample11">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> et <span class="echo">gettype()</span> + <span class="variables">$nom_variable</span> affiche le résultat sur la page ainsi que son <span class="types">type</span></p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$bob</span> = 1;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo </span><span class="echo">gettype</span>(<span class="variables">$bob</span>); 
                    <?php echo "</br>"; ?>
                    <span class="variables">$bob</span> = 4.8;
                    <?php echo "</br>"; ?>
                    <span class="variables">$gay</span> = TRUE;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo</span> <span class="variables">$bob;</span> 
                </div>
            </div>
            <!-- EXO 5 -->

            

            <!-- EXO 6 -->
            <h4>Exercice 6</h4>
            <p>I - Créer une variable nom et l'initialiser avec la valeur de votre choix.</p>
            <p>II - Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample12" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample13" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample12">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample13">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> affiche les résultats sur la page le "." sert à concaténer nos valeurs</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$name</span> = "Fouiny babe";
                    <?php echo "</br>"; ?>
                    <span class="echo">echo </span>"Bonjour" . <span class="variables">$bob</span> . "Comment vas tu ?"; 
                </div>
            </div>
            <!-- EXO 6 -->

        

            <!-- EXO 7 -->
            <h4>Exercice 7</h4>
            <p>I - Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.</p>
            <p>II - Afficher : "Bonjour" + nom + prenom + "tu as" + age + "ans".</p>

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample14" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample15" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample14">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample15">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> affiche les résultats sur la page le "." sert à concaténer nos valeurs</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$name</span> = "Balkany";
                    <?php echo "</br>"; ?>
                    <span class="variables">$surname</span> = "Patrick";
                    <?php echo "</br>"; ?>
                    <span class="variables">$age</span> = "99";
                    <?php echo "</br>"; ?>
                    <span class="echo">echo </span>"Bonjour" . <span class="variables">$surname</span> . <span class="variables">$name</span> . "tu as" . <span class="variables">$age</span> . "ans";
                </div>
            </div>
            <!-- EXO 7 -->


            <!-- EXO 8 -->
            <h4>Exercice 8</h4>
            <p>I - Créer 3 variables.</p>
            <p>II - Dans la première mettre le résultat de l'opération 3 + 4.</p>
            <p>III - Dans la deuxième mettre le résultat de l'opération 5 * 20.</p>
            <p>IV - Dans la troisième mettre le résultat de l'opération 45 / 5.</p>
            <p>V - Afficher le contenu des variables.</p>

            <p>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample16" type="button" aria-expanded="false" aria-controls="collapseExample">
                Etape : 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample17" aria-expanded="true" aria-controls="collapseExample">
                Etape : 2
            </button>
            </p>

            <div class="collapse" id="collapseExample16">
                <div class="card card-body">
                    <p>I - La création des variables PHP = <span><span class="variables">$nom_variable</span> = <span class="types">"string"</span></span></p>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample17">
                <div class="card card-body">
                    <p>II - La fonction <span class="echo">echo</span> affiche les résultats sur la page le "." sert à concaténer nos valeurs</p>
                </div>
            </div>
            
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Réponse :</strong>
                </div>

                <div class="toast-body">
                    <span class="variables">$opone</span> = 3 + 4;
                    <?php echo "</br>"; ?>
                    <span class="variables">$optwo</span> = 5 * 20;
                    <?php echo "</br>"; ?>
                    <span class="variables">$opthree</span> = 45 / 5;
                    <?php echo "</br>"; ?>
                    <span class="echo">echo </span> <span class="variables">$opone</span> . <span class="variables">$optwo</span> <span class="variables">$opthree</span>;
                </div>
            </div>
            <!-- EXO 8 -->

        </section><!-- /variable -->
        </main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>