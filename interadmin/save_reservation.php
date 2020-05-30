<?php

include('db.php');

if (isset($_POST['save_reservation'])) {
  $client = $_POST['client'];
  $voiture =  $_POST['voiture'];
  $depart = $_POST['depart'];
  $retour = $_POST['retour'];
  $livraison = $_POST['livraison'];
  $etat = 'en cours';
  $chauffeur=$_POST['chauffeur'];
  //$_POST['etat'];
  $prix = $_POST['prix'];
  $paiement = $_POST['paiement'];
 
  $query = "INSERT INTO reservation(client, voiture,depart,retour, livraison,chauffeur, etat, prix,paiement) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix','$paiement')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Réservation ajouter avec succés';
  $_SESSION['message_type'] = 'success';
  header('Location: gestionreservation.php');

}

?>
