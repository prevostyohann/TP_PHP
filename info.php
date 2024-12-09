<nav style='background-color: #333; padding: 10px;'>
    <ul style='list-style-type: none; margin: 0; padding: 0; overflow: hidden; display: flex;'>
           <li>
            <a href='index.php' style='text-decoration: none; color: white; padding: 8px 16px;'>Index</a>
        </li>
        <li style='margin-right: 20px;'>
            <a href='info.php' style='text-decoration: none; color: white; padding: 8px 16px;'>Info</a>
        <li>
            <a href='preference.php' style='text-decoration: none; color: white; padding: 8px 16px;'>Préférences</a>
        </li>
        <li>
            <a href="login.php" style='text-decoration: none; color: white; padding: 8px 16px;'>login</a>
        </li>
        <li>
            <a href="user.php" style='text-decoration: none; color: white; padding: 8px 16px;'>user</a>
        </li>
    </ul>
</nav>
<br>
<?php
session_start();

$_SESSION["Nom"] = $_SESSION["Nom"] ?? "Barbezier";
$_SESSION["Prenom"] = $_SESSION["Prenom"] ?? "Christian";
$_SESSION["Age"] = $_SESSION["Age"] ?? "31";


echo "Nom : " . htmlspecialchars($_SESSION["Nom"], ENT_QUOTES, 'UTF-8') . "<br>";
echo "Prénom : " . htmlspecialchars($_SESSION["Prenom"], ENT_QUOTES, 'UTF-8') . "<br>";
echo "Âge : " . htmlspecialchars($_SESSION["Age"], ENT_QUOTES, 'UTF-8') . "<br><br>";
?>

<form action='traite_form.php' method='post'>
<label for='animal'>Animal préféré : </label>
<input type='text' id='animal' name='animal' placeholder='Animal préféré' required>
<br><br>
<label for='color'>Couleur préférée : </label>
<input type='text' id='color' name='color' placeholder='Couleur préférée' required>
<br><br>
<input type='submit' value='Valider'>
</form>

