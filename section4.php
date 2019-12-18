<section class="array">
        
        <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2>PHP - Les tableaux (ou array)</h2></a>

        <h4>Exercice 1</h4>
        <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

            <!-- janvier -->
            <!-- février -->
            <!-- mars -->
            <!-- avril -->
            <!-- mai -->
            <!-- juin -->
            <!-- juillet -->
            <!-- aout -->
            <!-- septembre -->
            <!-- octobre -->
            <!-- novembre -->
            <!-- décembre -->

            <?php 

            $mois = array('janvier' , 'fevrier' , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "novembre" , "decembre");

            ?>



      

        <h4>Exercice 2</h4>
        <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->

        <?php 

            $mois = array('janvier' , 'fevrier' , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "novembre" , "decembre");
            echo $mois[2]
            

        ?>
      
        <h4>Exercice 3</h4>
        <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->

        <?php

            $mois = array('janvier' , 'fevrier' , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "novembre" , "decembre");
            echo $mois[6]
        
        ?>



      

        <h4>Exercice 4</h4>
        <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->

        <?php

            $mois = array('janvier' , 'fevrier' , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "novembre" , "decembre");
            echo $mois[9] = "aouts"
            

        ?>


        

      

        <h4>Exercice 4</h4>
        <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

        <?php 

            $dprtm = array (

                66 => "sheitan" ,
                99 => "mdr" , 
                667 => "la secte" ,
                59 => "liberer lacrim"

            );



        ?>

        <h4>Exercice 6</h4>
        <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->


        <?php 

            $dprtm = array (

                66 => "sheitan" ,
                99 => "mdr" , 
                667 => "la secte" ,
                59 => "liberer lacrim"

            );

            echo $dprtm[59]


        ?>

      

        <h4>Exercice 7</h4>
        <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->


        <?php 

            $dprtm = array (

                66 => "sheitan" ,
                99 => "mdr" , 
                667 => "la secte" ,
                59 => "liberer lacrim"

            );

            $dprtm["reims pd"] = 5;
            echo $dprtm[5];
            


        ?>

      

        <h4>Exercice 8</h4>
        <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->

        <?php 

            $mois = array('janvier' , 'fevrier' , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "novembre" , "decembre");
          
            for ($i = 0; $i < count($mois); ++$i){
                echo $mois[$i]."<br/>";
            }

        ?>

      

        <h4>Exercice 9</h4>
        <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

        <?php 

            $dprtm = array (

                66 => "sheitan" ,
                99 => "mdr" , 
                667 => "la secte" ,
                59 => "liberer lacrim"

            );

            foreach ($dprtm as $key => $value) {
                echo $key . $value;
            }

           



        ?>

    

        <h4>Exercice 10</h4>
        <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
        <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->

        <?php 



                $dprtm = array (
                    
                    66 => "sheitan" ,
                    99 => "mdr" , 
                    667 => "la secte" ,
                    59 => "liberer lacrim"
                    
                );
                
                foreach ($dprtm as $key => $value) {
                    echo "le dep de" . $value . "le num de ces mort est" . $key;
                }

                $test = current($dprtm);

             
                echo($test);



        ?>

    </section><!-- /array -->