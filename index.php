

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
session_start ();
echo $_SERVER ['SERVER_NAME'];
echo "<br> <br>" ;
echo $_SERVER['SERVER_ADDR'];
echo "<br> <br>" ;
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br> <br>" ;

$_SESSION ["Nom"]="Barbezier";
$_SESSION ["Prenom"]="Christian";
$_SESSION ["Age"]=31;