<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Page 3</title>
</head>
<body>
<?php
    include "menu.php";
    ?>
    <h1>Connexion / Page 3</h1>
    <?php if (isset($error)) echo "<h3>$error</h3>" ?>
    <form name="connection" action="" method="post">
        <input type="text" name="login" placeholder="Login" required /><br>
        <input type="password" name="password" placeholder="Mot de passe" required /><br>
        <input type="submit" value="envoyer" />
    </form>
</body>
</html>