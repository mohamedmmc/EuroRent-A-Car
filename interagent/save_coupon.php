






<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include('db.php');
// Load Composer's autoloader
if (isset($_POST['save_task'])) {$codepromo = $_POST['codepromo'];
$prix = $_POST['prix'];
  
  $pourcentage = $_POST['pourcentage'];
  $mail = $_POST['mail'];

  $query = "INSERT INTO coupon(codepromo,prix,mail,pourcentage) VALUES ('$codepromo','$prix','$mail','$pourcentage')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
require '../phpmailer/vendor/autoload.php';
$sujet='votre code promo est';
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'yassine.benouaghrem@esprit.tn';                     // SMTP username
    $mail->Password   = '181JMT2823';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
    //Recipients
    $mail->setFrom('eurorentacar6@gmail.com', 'eurorent');
    $mail->addAddress($_POST['mail'], 'yassine');     // Add a recipien,
    

    // Attachments
    
    // Content
   
    $mail->isHTML(true);
    $mail->Subject=      $sujet;                            // Set email format to HTML
    $mail->Body    = $_POST['codepromo'];
    if($mail->send()){  echo "<script type = \"text/javascript\">
    alert(\"MAIL effectué avec succés et coupon enregistre\");
    window.location = (\"gestioncoupon.php\")
    </script>";
}

}



    

    //echo 'Message has been sent';
 
?>