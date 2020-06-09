<?php

include('db.php');

if (isset($_POST['save_task'])) {
    $codepromo = $_POST['codepromo'];
$dated = $_POST['dated'];
  $datef = $_POST['datef'];
  $prixp = $_POST['prixp'];
  $marquep = $_POST['marquep'];

  $query = "INSERT INTO promotion(codepromo,dated, datef,prixp,marquep) VALUES ('$codepromo','$dated', '$datef','$prixp','$marquep')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'promotion ajoute avec succes';
  $_SESSION['message_type'] = 'success';
  header('Location: gestionpromotion.php');

}

?>

