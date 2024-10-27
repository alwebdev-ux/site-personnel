<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $message = htmlspecialchars(trim($_POST['message']));

  // Adresse email de destination
  $to = "alwebdev46@gmail.com"; // Remplace par ton adresse e-mail
  $subject = "Nouvelle demande de contact de " . $name;
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "Content-Type: text/plain; charset=UTF-8";

  // Contenu de l'email
  $email_content = "Nom: " . $name . "\n";
  $email_content .= "Email: " . $email . "\n\n";
  $email_content .= "Message:\n" . $message . "\n";

  // Envoyer l'email
  if (mail($to, $subject, $email_content, $headers)) {
    echo "Merci, votre message a été envoyé avec succès!";
  } else {
    echo "Désolé, une erreur s'est produite. Veuillez réessayer.";
  }
} else {
  // Redirection si le formulaire n'a pas été soumis
  header("Location: index.html"); // Remplace "index.html" par ta page de destination
  exit();
}
?>
