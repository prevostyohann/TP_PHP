

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
    <br> <br>
<?php
session_start();
if($_SESSION['nom']==""|| $_SESSION['isLogIn'] != true ){
    die('verification a échoué');
}
echo "bienvenue ".$_SESSION['nom']."<br>";

if(isset($_COOKIE['mesPrefs'])){
$mesPrefs= unserialize($_COOKIE['mesPrefs']);
echo "mes préferences: animal ".$mesPrefs['animal']." et la couleur ".$mesPrefs['color'];
echo "<br><a href = edit.php>editer</a>";
echo "<br><a href = logout.php> quitter</a>";
}
else{ 
    echo " pas de preference <br>";
    echo "<a href = preference.php>editer</a>";
}