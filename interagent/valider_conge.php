
<?php
include("db.php");

$cin= '';
$debut= '';
$fin = '';
$motif = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM conge WHERE id=$id";
  $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
       
        $id = $row['id'];
    }
$notif=1;
  $query = "UPDATE conge set etat = '$notif' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Congé valider avec succès';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestionconge.php');
}

?>