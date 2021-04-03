<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('karina.castillo@greenovation.cl', 'Envoi depuis la page Contact', $_POST['message'], 'From : https://karina-castillo.github.io');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
