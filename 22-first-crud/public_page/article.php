<?php
// il doit y exister l'id ET il doit être numérique int positif ET ce n'est pas 0
if(isset($_GET['id'])&&ctype_digit($_GET['id'])&&!empty($_GET['id'])){

    // transtypage de string to int
    $idarticle = (int) $_GET['id'];


    // requête dans une variable entre double guillemet.
        $sql="SELECT a.idthearticle, a.thearticletitle, a.thearticletext, a.thearticledate,
            u.idtheuser, u.theuserlogin
            FROM thearticle a
            INNER JOIN  theuser u 
            ON u.idtheuser = a.theuser_idtheuser
            WHERE a.idthearticle = $idarticle ;";
=======
    // requête dans une variable
    // exécution de la requête
  

     $request = mysqli_query($db,$sql) or die("Erreur de Select : ".mysqli_error($db));

            // On va vérifier si on trouve 1 article Possibilité 1 ou 0 article.

            if(mysqli_num_rows($request)){ // On a un article (1 == true)

            }else{
                
            }

// pas de variable id    
}else{
    // redirection
    header("Location: ./");
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | Article | <!-- ici le titre de l'article --></title>
</head>
<body>
    <?php
    // menu publique
    include "menu.php";
    ?>
    <h1>First CRUD | Article | <!-- ici le titre de l'article --></h1>
</body>
</html>