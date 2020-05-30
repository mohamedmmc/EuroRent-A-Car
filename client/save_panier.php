<?php

include('dbconfig.php');

if (isset($_POST['save_reservation'])) {
 include 'config.php';

  $client = $_SESSION['id']; 
  //$_POST['client'];
  $voiture = $_POST['voiture'];
  // $_POST['voiture'];
  $depart = $_POST['depart'];
  $retour = $_POST['retour'];
  $livraison = $_POST['livraison'];
  $etat = 'en cours';
  $chauffeur=$_POST['chauffeur'];
  //$_POST['etat'];
  $prix = $_POST['prix'];
  $paiement = $_POST['paiement'];
 

  $query = "INSERT INTO panier(client, voiture,depart,retour, livraison,chauffeur, etat, prix,paiement) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix','$paiement')";
  $result = mysqli_query($conn, $query);
  if($result) {
    echo "<script type = \"text/javascript\">
    alert(\"Réservation effectué avec succés\");
    window.location = (\"accueil.php\")
    </script>";
} else{
echo "<script type = \"text/javascript\">
    alert(\"Erreur\");
    window.location = (\"panier.php\")
    </script>";
}
  $_SESSION['message'] = 'Réservation ajouter avec succés';
  $_SESSION['message_type'] = 'success';

}

?>
