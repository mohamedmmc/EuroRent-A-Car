<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM facture WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Facture supprimé avec succès';
  $_SESSION['message_type'] = 'danger';
  header('Location: gestionfacture.php');
}

?>
