<?php
session_start();


/* if (!empty($_POST['animal']) && !empty($_POST['color'])) {

    $animal = htmlspecialchars($_POST['animal'], ENT_QUOTES, 'UTF-8');
    $color = htmlspecialchars($_POST['color'], ENT_QUOTES, 'UTF-8');


    setcookie('animal', $animal, time() + 60 * 20, "/");
    setcookie('color', $color, time() + 60 * 20, "/");


    header("Location: preference.php");
    exit;
} else {
    echo "Erreur : Veuillez remplir tous les champs du formulaire.";
} */
$mesPrefs = $_POST;
$newPrefs = serialize($mesPrefs);
setcookie('mesPrefs',$newPrefs,time()+ 60*20,"/");
header('location:user.php');
?>
