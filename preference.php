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
<!-- <?php
session_start();



if (isset($_COOKIE['animal']) && isset($_COOKIE['color'])) {
    echo "Votre animal préféré est : " . htmlspecialchars($_COOKIE['animal'], ENT_QUOTES, 'UTF-8') . "<br>";
    echo "Votre couleur préférée est : " . htmlspecialchars($_COOKIE['color'], ENT_QUOTES, 'UTF-8') . "<br>";
} else {
    echo "Aucune préférence enregistrée. Veuillez remplir le formulaire sur la page <a href='info.php'>info.php</a>.";
}

echo "<br> <br> "; 
?>  -->
<form action='traite_form.php' method='post' name="mesPrefs">
    <h2>ajouter</h2>
<label for='animal'>Animal préféré : </label>
<input type='text' id='animal' name='animal' required>
<br><br>
<label for='color'>Couleur préférée : </label>
<input type='text' id='color' name='color' required>
<br><br>
<input type='submit' value='Valider'>
</form>

