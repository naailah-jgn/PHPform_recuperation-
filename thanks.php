<?php

$lastname = $_POST['user_lastname'];
$firstname = $_POST['user_firstname'];
$subject = $_POST['subject'];
$email = $_POST['user_email'];
$contact_number = $_POST['contact_number'];
$user_message = $_POST['user_message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page soumise</title>
</head>
<body>
    <h1>Merci <?= $lastname ?> <?= $firstname ?> de nous avoir contacté à propos de “
    <?= $subject ?>”.</h1>
    <article> 
    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $email ?>
        ou par téléphone au <?= $contact_number ?> dans les plus brefs délais pour traiter votre demande : 
    </p>
    </article>

    <article>
    <p> <?= $user_message ?></p>
    </article>
    
</body>
</html>