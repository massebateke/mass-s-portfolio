<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom-complet"];
    $compagnie = $_POST["compagnie"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $destinataire = "massebateke4@gmail.com";  // Remplacez par votre adresse e-mail
    $sujet = "Nouveau message de $nom";
    
    $corpsMessage = "Nom: $nom\n";//n\ = saut de ligne 
    $corpsMessage = "Nom de votre compagnie: $compagnie\n";
    $corpsMessage .= "E-mail: $email\n";// ".=" = concatenation
    $corpsMessage .= "Message:\n$message";
    
    // Envoi du mail
    mail($destinataire, $sujet, $corpsMessage);
    
    // Redirection après l'envoi du formulaire (facultatif)
    // header("Location: confirmation.html");
} else {
    // Redirection si le formulaire n'est pas soumis directement (pour éviter les accès directs à ce script)
    header("Location: index.html");
    echo "Réessaie";
}