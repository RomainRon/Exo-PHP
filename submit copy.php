<!-- EXO1 ET 3 -->
<?php

var_dump($_GET );

echo '<br>';
if ( isset($_GET['firstname']) && !empty($_GET['firstname'])
    && isset($_GET['lastname'])  && !empty($_GET['lastname'])
    && isset($_GET['age']) && !empty($_GET['age'])
    ) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];
    echo $firstname . ' ' . $lastname. ' ' . $age;
}

?>
<!-- EXO2 et 4 -->
<?php
 var_dump($_POST);



if ( isset($_POST['firstname']) && !empty($_POST['firstname'])
    && isset($_POST['lastname'])  && !empty($_POST['lastname'])
    && isset($_POST['age']) && !empty($_POST['age'])
    ) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    echo $firstname . ' ' . $lastname. ' ' . $age;
}
?>
<!-- EXO6 -->
<?php


$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$genre = $_GET ['gender'];


if ( isset($firstname) 
    && isset($lastname) 
    && isset($genre)
    ) {
        echo $firstname . ' ' . $lastname. ' ' . $genre;
};

    ?>
    <!-- EXO7 et 8 -->
    <?php



$monfichier = $_GET['monfichier'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$genre = $_GET ['gender'];

    

if ( isset($firstname) 
    && isset($lastname) 
    && isset($genre)
    && isset($monfichier)
    ) {
        echo $firstname . ' ' . $lastname. ' ' . $genre. '<br>' . $monfichier;
};

    ?>