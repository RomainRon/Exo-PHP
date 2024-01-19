<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
 // EXO1

    #exo1
    $userName = "Romain". "\n";
    echo $userName;

    #exo2
    $latsname = "Rondepierre";
    $firstname = "Romain";
    $age = 20;
    echo $latsname. "\n";
    echo $firstname. "\n";
    echo $age;

    #exo3
    $km = 1;
    $muliplie = 3;
    $multi = 125;
    echo $km*$muliplie*$multi
    #exo4

    $cc = "Coucou";
    $nombre = 8;
    $virgule = 14.44;
    $isAuthor = true;
    echo $cc ."<br>". $nombre ."<br>". $virgule ."<br>". $isAuthor
    #exo5

    $chiffre = 17;
    echo $chiffre
    #exo6

    $name = "Romain "; 
    echo  "Bonjour " .$name . ", comment tu vas?"; 

    #exo7
    $lastname = "Rondepierre";
    $firstname = "Romain";
    $age = 20;
    echo  "Bonjour $firstname $lastname tu as $age ans.";
    #exo8
    $add = 3+4;
    $multi = 5*20;
    $divi = 45/5;
    echo "$add  <br> $multi <br> $divi"
    
  //EXO2
    #exo1
    $age = 19; //mettre un age en dessous de 18 ans pour afficeher mineur
    if ($age <= 18) {
        echo('tu es mineur');
    } else {
        echo('tu es majeur');
    }
    #exo2
    echo $age

    $isEasy = true; //changer true en false pour changer se qui apparaitra
    if ($isEasy) {
        echo('facile !');
    } else {
        echo('difficile !');
 
    }
    #exo3 

    if ($age <= 20){
      
         
    
        
        echo ("<br> tu es un homme et tu es majeur");
         }else {
            echo ("<br> tu es un homme et tu es mineur");
           ;
        }
        
        if ($age <= 17){
        echo ("<br> tu es un femme et tu es majeur");
        }else{
    
       echo ("<br> tu es un femme et tu es mineur");
        }

        #exo4
         
$magnitude = 2;
switch ($magnitude) {
    case 1:
        echo("Micro-séisme impossible à ressentir.");
        foreach($a as $b) {
            echo "ok";
        }
        break;
    case 2:
        echo("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
        break;
    case 3:
        echo("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
        break;
    case 4:
        echo("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
        break;
    case 5:
        echo("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
        break;
    case 6:
        echo("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
        break;
    case 7:
        echo("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
        break;
    case 8:
        echo("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
        break;
    case 9:
        echo("Séisme capable de tout détruire sur une très vaste zone.");
        break;
    default:
        echo("Valeur inconnue");
    }
    #exo5
    if($gender = "") { //on met rien pour afficher le esle 
        echo('C\'est un developpeur');
        }
        else {
        echo('C\'est une developpeuse');
        }
        #exo6
        $age = 19;
        if ($age <= 18 ){
            echo('Tu n\ es majeur');
            }
            else {
            echo('Tu es majeur ');
            }
            #exo7
            if ($isOK ){
                echo('c\'est bon');
                }
                else {
                echo('c\'est pas bon ');
                }
                #exo8
                $isOK = false;
                if ($isOK ){
                    echo('c\'est ok');
                    }
                    else {
                    echo('c\'est pas bon ');
                    }
                  //EXO3
                    #exo1
                    for($i = 0; $i <= 10; $i++) {
                        var_dump($i);
                    }
                    
                    $i = 0;
                    while($i <= 10) {
                        var_dump($i);
                        $i++;
                    }
                    
                    do {
                        var_dump($i);
                        $i++;
                    } while ($i < 10);
                    #exo2
                    $chiffre = 0;
                    $number = 100;
                    while($chiffre <= 20) {
                    echo($chiffre*$number .  "<br>");
                    $chiffre++;
   
                    }
                    #exo3
                    $chiffre = 100;
                    $number = 30;
                    while($chiffre >= 10) {
                    echo($chiffre*$number .  "<br>");
                    $chiffre--;
   
                    }
                    #exo4
                    $chiffre = 1;
                    for ($chiffre=1; $chiffre<10; $chiffre+= $chiffre/2) {
                    echo ($chiffre . "<br>");   
                    }
                    #exo5
                    for($i = 1; $i <= 15; $i++ . "<br>") {
                        echo'on y arrive presque';
                    }
                    #exo6
                    for($i = 15; $i <= 100; $i++) {
                        echo'On tient le bon bout.' . "<br>";
                    }
                    #exo7
                    for($i = 12; $i <= 200; $i++) {
                        echo' Enfin !!!!. ' . "<br>";
                    }
                  //EXO4
                    #exo1
                    function cc() : bool {
                        return true;
                    }
                   #EXO 2 LES FONCTIONS


       function essai($text){


             echo $text;
       }

       essai("ok");


       #EXO 3 LES FONCTIONS


       function exo3($text1, $text2){
               echo $text1 . $text2;
       }

       exo3('salut', ' ca va ?');




       #EXO 4 LES FONCTIONS


        function esaie(int $nombre1 , int $nombre2){

                if ($nombre1 > $nombre2){
                        echo "le premier nombre est le plus grand";
                } else if ($nombre1 < $nombre2){
                        echo "le premier nombre est le plus petit";
                } else if ($nombre1 = $nombre2) {
                        echo "les nombres sont identiques";
                }
        }

        esaie(5 , 8);




       #EXO 5 LES FONCTIONS  


       function essaie2(int $nombre , string $text) {

               echo $nombre ." ". $text;
       }

       essaie2(22, "ans");



       #EXO 6 LES FONCTIONS  


       function presentation(string $nom , string $prenom , int $age) {

               echo "Bonjour " . $nom ." ". $prenom . ", tu as " . $age . " ans.";
       }

       presentation("dechavanne" , "lucas" , 22);



       #EXO 7 LES FONCTIONS  


       function who(int $age , string $genre) {

               if ($age > 18 && $genre == "homme"){
                       echo "vous etes un homme majeurs !";
               } else if ($age < 18 && $genre == "homme"){
                       echo "vous etes un homme mineur !";
               } else if ($age > 18 && $genre == "femme"){
                       echo "vous etes une femme majeurs !";
               } else if ($age < 18 && $genre == "femme"){
                       echo "vous etes une femme mineur !";
               }
       }
        
               who(22, "femme");


               #EXO 8 LES FONCTIONS  

        function calcul(int $nbr1= 1 ,int $nbr2= 2 ,int $nbr3= 3){

                echo $nbr1 + $nbr2 + $nbr3; 
        }

        calcul(10, 5, 6)



               //EXERCICE 1 A 4 LES TABLEAUX

        

         $mois = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

        
                        TABLEAU AVEC FOR 
        
                for ($index = 0; $index <= 11; $index++){
                
                       echo $mois[$index] . "<br>";
               }
                
                       TABLEAU AVEC FOREACH
                
                foreach ( $mois as $mois1) {
                        
                        echo $mois1 . "<br>";
                }
                        
                        
               echo $mois[7]. "<br>";        
                
               echo str_replace(
                        "aout" , 
                        "août"   ,
                        $mois[7] ,
                );


               echo str_replace("aout", "août", $mois[7])  ;      
                        
               

               //EXERCICE 5 A 7 LES TABLEAUX



        $dep = [
            
                 "aisne" => 02 , 
                 "nord" => 59 ,
                 "oise" => 60 ,
                 "pas-de-calais" => 62 ,
                 "somme" => 80 ,
                ]  ;            
            

                $dep['reims'] = 89;
      
                foreach ( $dep as $dep1) {
                        
                        echo $dep1 . "<br>";
                }

                 foreach ($dep as $key => $dep3) {

                       echo "le departement " . $key . " a le numero " . $dep3 ."<br>";
                 } ?>
                 <!-- //VanillaPHP -->
                 <!-- #partie7 -->
                 <!-- EOX1 et 3 -->

                 <form action="./submit.php" method="GET">

                 <input type="text" required name="firstname">

                 <input type="text" name="lastname">

                 <input type="number" name="age">

                 <button type="submit">Envoyer</button>

               </form>

                 <!-- Exo2 ET 4 -->

                 <form action="./submit.php?key=6" method="GET">

                 <input type="text" required name="firstname">

                 <input type="text" name="lastname">

                 <input type="number" name="age">

                <button type="submit">Envoyer</button>

                </form>

                <!-- EXO5 -->

                <form action="./submit.php" method="GET">

                <input type="text" required name="firstname">

                <input type="text" name="lastname">

                <button type="submit">Envoyer</button>

                </imput>

                </form>

                <label for="gender-select">Gender</label>

                <select name="gender" id="gender-select">

                <option value="">--Please choose an option--</option>

                <option value="Homme">Homme</option>

                <option value="Femme">Femme</option>

                </select>

                <!-- EXO6 -->

                <input type="text" required name="firstname">
                <input type="text" name="lastname"></imput>


                <label for="gender-select">Gender</label>

                <select name="gender">

                <option value="">--Please choose an option--</option>

                <option value="Homme">Homme</option>

                <option value="Femme">Femme</option>

                </select>

                <button type="submit">Envoyer</button>
                <!-- EXO7 et 8 -->
                form action="./submit.php" method="GET">

                <p>

                Formulaire d'envoi de fichier :<br />

                <input type="file" name="monfichier" /><br />

                <input type="submit" value="Envoyer le fichier" />
                </p>
                <input type="text" required name="firstname">
                <input type="text" name="lastname"></imput>


                <label for="gender-select">Gender</label>
                <select name="gender">
                <option value="">--Please choose an option--</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                </select>

                <button type="submit">Envoyer</button>
                </form>
                

                