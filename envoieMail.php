<?php
if(isset($_POST['btn_envoyer'])){
    $nom = htmlspecialchars($_POST["lastname"]);
    $prenom = htmlspecialchars($_POST["firstname"]);
    $societe = htmlspecialchars($_POST["company"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $telephone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    $message .= "
    Message envoyé par ".$nom." ".$prenom."
    de la société ".$societe."
    dont le numéro de téléphone est le : ".$telephone."
    ";

    $to='xyz@gmail.com'; //adresse du destinataire 
    $subject = 'demande de contact';
    $headers = array('From'=> $mail);

    mail($to, $subject, $message, $headers);

}
header('Location:index.php');