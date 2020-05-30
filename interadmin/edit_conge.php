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
  $cin= $row['cin'];
  $debut= $row['debut'];
  $fin = $row['fin'];
  $motif = $row['motif'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $cin= $_POST['cin'];
  $debut= $_POST['debut'];
  $fin = $_POST['fin'];
  $motif = $_POST['motif'];


  $query = "UPDATE conge set cin = '$cin', debut = '$debut', fin = '$fin',motif = '$motif' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Congé mis à jour avec succès';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestionconge.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_conge.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="cin" type="text" class="form-control" value="<?php echo $cin; ?>" placeholder="Update cin" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le cin doit contenir 8 chiffres')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="debut" type="date" class="form-control" value="<?php echo $debut; ?>" placeholder="Update debut" required pattern="\d{4}-\d{2}-\d{2}"  required oninvalid="setCustomValidity('veuillez saisir une date de naissance valide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="fin" type="date" class="form-control" value="<?php echo $fin; ?>" placeholder="Update fin" required pattern="\d{4}-\d{2}-\d{2}" required oninvalid="setCustomValidity('veuillez saisir une date de naissance valide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="motif" type="text" class="form-control" value="<?php echo $motif; ?>" placeholder="Update motif" required oninvalid="setCustomValidity('Le motif doit etre non vide')" oninput="setCustomValidity('')">
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
