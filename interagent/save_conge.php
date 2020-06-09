<?php

include('db.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['save_conge'])) {

  $cin= $_POST['cin'];
  $debut= $_POST['debut'];
  $fin = $_POST['fin'];
  $motif = $_POST['motif'];
  $etat = 0;
  $query = "INSERT INTO conge(cin, debut,fin,motif,etat) VALUES ('$cin', '$debut','$fin','$motif','$etat')";
 $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed. cin invalide ");
  }
  require '../phpmailer/vendor/autoload.php';
$sujet='une nouvelle demande de congé';
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fourat81138@gmail.com';                     // SMTP username
    $mail->Password   = 'createyourgoogle113    ';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
    //Recipients
    $mail->setFrom('fourat6@gmail.com', 'eurorent');
    $mail->addAddress('eurorentacar6@gmail.com', 'yassine');     // Add a recipien,
    

    // Attachments
    
    // Content
   
    $mail->isHTML(true);
    $mail->Subject=      $sujet;                            // Set email format to HTML
    $mail->Body    = $_POST['cin'];
    if($mail->send()){   $_SESSION['message'] = 'Congé ajouté';
      $_SESSION['message_type'] = 'success';
      header('Location: gestionconge.php');
}



}

?>
