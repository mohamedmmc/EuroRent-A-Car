<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM user WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agent supprimé avec succès';
  $_SESSION['message_type'] = 'danger';
  header('Location: gestionagent.php');
}

?>
