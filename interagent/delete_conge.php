<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM conge WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Congé supprimé avec succès';
  $_SESSION['message_type'] = 'danger';
  header('Location: gestionconge.php');
}

?>
