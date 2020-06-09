<?php

include("db.php");

if(isset($_GET['codepromo'])) {
  $codepromo = $_GET['codepromo'];
  $query = "DELETE FROM promotion WHERE codepromo = $codepromo";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'promotion supprime avec succes';
  $_SESSION['message_type'] = 'danger';
  header('Location: gestionpromotion.php');
}

?>
