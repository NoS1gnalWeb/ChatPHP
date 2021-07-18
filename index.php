<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>Connexion</title>
        </head>
        <body>
            <div class="center">
                <!-- Formulaire pour se connecter au chat -->
                <form action="backend/connect.php" method="POST">
                    <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off"><br />
                    <button type="submit">Connexion</button>
                </form>
            </div>
    </body>
</html>