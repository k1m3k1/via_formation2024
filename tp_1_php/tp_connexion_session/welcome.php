<?php
session_start();
    if (isset($_SESSION['isConnected'])&&$_SESSION['isConnected']==true)
        {
            echo "est deja connecté via session";
        }
    if (isset($_POST['email']) && isset($_POST['password']) && ($_POST['email'] == "tierry.bru@viaformation.fr") && ($_POST['password'] == "1234")) 
        {
            echo "connecté";
            $_SESSION['isConnected']=true;
            // isset($_POST['FirstName'])?$_SESSION['pseudo']=$_POST['FirstName']:$_SESSION['pseudo']='inconnu';
        } 
    else 
        {
            header('location:index.php');
        }
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
