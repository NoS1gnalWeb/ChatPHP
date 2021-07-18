<?php 
    session_start();
    require_once 'chat.php';
    // Si le message existe et la session aussi
    if(!empty($_POST['msg']) && isset($_SESSION['user']))
    {
        // XSS
        $msg = htmlspecialchars($_POST['msg']);
        // Appel de la méthode setMessage avec le message + la session
        $chat = new Chat();
        $chat->setMessage($msg, $_SESSION['user']);
        
        header('Location: ../chat.php');
        die();
    }
    else 
    {
        header('Location: ../chat.php');
        die();
    }