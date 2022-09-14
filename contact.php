<?php
    if (isset ($_GET['message'])) {
        $retour = mail('andre.long@rocketmail.fr', 'Envoi depuis le portfolio', $_GET['message'], 'From:');
        if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    
?>