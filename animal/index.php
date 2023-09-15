<!--
    CONSIGNES
// creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Espace membre - inscription</title>
</head>

<body>

    <form method="POST" action="./model/action.php">

        <input type="text" name="name" placeholder=" Votre nom" require><br><br>

        <input type="text" name="prenom" placeholder=" Votre prenom" require><br><br>

        <input type="email" name="email" placeholder=" Votre email" require><br><br>

        <input type="password" name="password" placeholder=" Mot de Passe" require><br><br>

        <div class="flexy">
            <input type="submit" class="inscription submit" name="inscription" value=" inscription">
        </div>

    </form>
</body>

</html>