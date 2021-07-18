<?php 
  session_start();
  require_once 'backend/chat.php';

  // Si la personne ne s'est pas connectée 
  if(!isset($_SESSION['user']))
  {
      header('Location: index.php');
      die();
  }

  // On appel la methode getMessage()
  $chat = new Chat();
  $msg = $chat->getMessage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Chat en PHP sans base de données</title>
</head>
    <body>
        <?php 
            // On affiche les messages
            for($i = 0; $i < count($msg['chat']); $i++)
            {
        ?>
            <div class="container">
                <p><?php echo $msg['chat'][$i]['message']; ?></p>
                <span class="time-right"><?php echo $msg['chat'][$i]['pseudo']." &mdash; ".$msg['chat'][$i]['date'];?></span>
            </div>
        <?php 
            }
        ?>
        <form action="backend/send.php" method="POST">
            <input type="text" name="msg" placeholder="Message" autocomplete="off" class="form-input"/>
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>