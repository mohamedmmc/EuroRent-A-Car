<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM newsletters WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Abonné supprimé avec succès';
  $_SESSION['message_type'] = 'success';
  header('Location: crudnewsletter.php');
}

?>
