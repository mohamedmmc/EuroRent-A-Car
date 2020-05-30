<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM user WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Client supprimée avec succès';
  $_SESSION['message_type'] = 'success';
  header('Location: client.php');
}

?>
