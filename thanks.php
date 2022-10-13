<?php

$user_lastname = $user_firstname = $user_email = $contact_number = $user_message = $user_subject = "";
$user_lastnameErr = $user_firstnameErr = $user_emailErr = $contact_numberErr = $user_messageErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_lastname"])) {
        $user_lastnameErr = "Lastname is required";
    }else{
        $user_lastname = $_POST['user_lastname'];
    }

    if (empty($_POST["user_firstname"])) {
        $user_firstnameErr = "Firstname is required";
    }else{
        $user_firstname = $_POST['user_firstname'];
    }

    if (empty($_POST["user_email"])) {
        $user_emailErr = "Email is required";
    }else{
        $user_email = $_POST['user_email'];
    }

    if (empty($_POST["contact_number"])) {
        $contact_numberErr = "Phone Number is required";
    }else{
        $contact_number = $_POST['contact_number'];
    }

    if (empty($_POST["user_subject"])) {
        $user_subjectErr = "Subject is required";
    }else{
        $user_subject = $_POST['user_subject'];
    }
    
    if (empty($_POST["user_message"])) {
        $user_messageErr = "Message is required";
    }else{
        $user_message = $_POST['user_message'];
    }
    
}

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
    <section class="response"> 
    <h1>Merci <?= $user_lastname ?> <?= $user_firstname ?> de nous avoir contacté à propos de “
    <?= $user_subject ?>”.</h1>
    <article> 
    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $user_email ?>
        ou par téléphone au <?= $contact_number ?> dans les plus brefs délais pour traiter votre demande : 
    </p>
    </article>

    <article>
    <p><em>"<?= $user_message ?>"<em></p>
    </article>
    </section>
</body>
</html>