<?php

include('db.php');
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $numtel = $_POST['numtel'];
  $disponibilite = date('Y-m-d H:i:s');
  $retour = date('Y-m-d H:i:s');

if ( !empty($_POST['ajoutchauf']) ) 
{
    if ( empty(!$_POST['nom']) || empty(!$_POST['prenom']) || empty(!$_POST['cin']) || empty(!$_POST['numtel'])) 
    {
         $query = "INSERT INTO chauffeur(nom, prenom,cin,numtel,disponibilite,retour) VALUES ('$nom', '$prenom','$cin','$numtel','$disponibilite','$retour')";
          $result = mysqli_query($conn, $query);
          if(!$result) 
          {
            die("Query Failed.");
          }

          $_SESSION['message'] = 'Enregistré avec succés';
          $_SESSION['message_type'] = 'success';
          header('Location: crudchauffeur.php');
    } 
    else 
    {
    $_SESSION['message'] = 'Veuillez réessayer';
    $_SESSION['message_type'] = 'danger';
    header('Location: crudchauffeur.php');
}
}

?>


