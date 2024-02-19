<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Ajout de styles CSS pour centrer la navbar */
        .center-navbar {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <h1><b>Verification du login</b></h1>
        <form method="post" action="verification.php">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br><br>
            <label for="motDePasse">Mot de passe :</label>
            <input type="password" id="motDePasse" name="motDePasse"><br><br>
            <input type="submit" value="Se connecter">
        </form>
    </header>
    <main>
        <!-- Utilisation de la classe 'center-navbar' pour centrer la navbar -->
        <div class="center-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
