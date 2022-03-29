<?php

if (isset($_POST['nom'])){
    $message = "Ce message vous a été envoyé via la page contact du site
     kidsart.promo.morganeindustry.fr
    Nom : ". $_POST["nom"]."
    Prenom : ". $_POST["prenom"]."
    Email : ". $_POST["mail"]."
    Objet : ". $_POST["mail"]."
    Message : ". $_POST["message"];


    $retour = mail("monadresse@mail.fr",
        "Mail Kid'sArt",
        $message,
      "From:contact@kidsart.fr". "\r\n".
      "Reply-to:" . $_POST["mail"]);
    header('Location: http://kidsart.promo.morganeindustry.fr/contact.html ');
}