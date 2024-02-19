<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: info.php");
    exit;
}
if(isset($_POST['submit'])) {
    if($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['logged_in'] = true;
        header("Location: info.php");
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
</body>
</html>
