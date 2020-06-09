<?php
include("db.php");
$motif = '';
$nom = '';
$prenom = '';
$CIN = '';
$numtel = '';
$email = '';
$mdp = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM facture WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];

  $reservation =  $row['id_reservation'];
  $nom_client = $row['nom_client'];
  $agent = $row['agent'];
  $date = $row['date_facture'];
  $lieu = $row['lieu'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
 

  $reservation =  $_POST['reservation'];
  $nom_client = $_POST['nom_client'];
  $agent = $_POST['agent'];
  $date = $_POST['date_facture'];
  $lieu = $_POST['lieu'];

  $query = "UPDATE facture set id_reservation = '$reservation' ,nom_client = '$nom_client',agent = '$agent', date_facture = '$date',lieu= '$lieu' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Facture mis à jour avec succès';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestionfacture.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_facture.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
        <div class="form-group">
          <input name="reservation" type="text" class="form-control" value="<?php echo $reservation; ?>" placeholder="Update nom" minlength="1" required oninvalid="setCustomValidity('Doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="nom_client" type="text" class="form-control" value="<?php echo $nom_client; ?>" placeholder="Update nom" minlength="1" required oninvalid="setCustomValidity('Doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="agent" type="text" class="form-control" value="<?php echo $agent; ?>" placeholder="Update nom" minlength="1" required oninvalid="setCustomValidity('Doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="date_facture" type="date" class="form-control" value="<?php echo $date; ?>" placeholder="Update nom">
        </div>
        <div class="form-group">
          <input name="lieu" type="text" class="form-control" value="<?php echo $lieu; ?>" placeholder="Update nom" minlength="1" required oninvalid="setCustomValidity('Doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
