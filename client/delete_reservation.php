<?php

include("dbconfig.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM reservation WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Réservation annuler avec succés';
  $_SESSION['message_type'] = 'danger';
  header('Location: gestion_panier.php');
}

?>
