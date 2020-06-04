<?php
include('db.php');


if (isset($_POST['save_commande'])) {
 include 'config.php';

  $client = $_SESSION['id'];
  $paiement = $_POST['paiement'];
  $query = "INSERT INTO commande(id,client,voiture,depart,retour,livraison,chauffeur,etat,prix,paiement,idc)  SELECT id,client,voiture,depart,retour,livraison,chauffeur,etat,prix,'$paiement',idc as paiement FROM reservation WHERE client = $client";

  $result = mysqli_query($conn, $query);  
     $query1 = "DELETE FROM reservation WHERE client = $client";
      $result1 = mysqli_query($conn, $query1);   
  $_SESSION['message'] = 'Réservation ajouter avec succés';
  $_SESSION['message_type'] = 'success';
  header('Location: accueil.php');

}

?>
