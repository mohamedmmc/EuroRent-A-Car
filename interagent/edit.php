<?php
include("db.php");
$immatriculation = '';
$prix = '';
$marque= '';
$modele='';
$kilometrage='';
$etat='';
$prixfixe = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM voiture WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $immatriculation= $row['immatriculation'];
    $prix= $row['prix'];
    $marque = $row['marque'];
    $modele= $row['modele'];
    $kilometrage= $row['kilometrage'];
    $etat= $row['etat'];
        $prixfixe= $row['prixfixe'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $immatriculation= $_POST['immatriculation'];
  $prix= $_POST['prix'];
  $marque = $_POST['marque'];
  $modele= $_POST['modele'];
  $kilometrage= $_POST['kilometrage'];
  $etat= $_POST['etat'];
  $prixfixe= $_POST['prixfixe'];

  $query = "UPDATE voiture set immatriculation = '$immatriculation',prix = '$prix', marque = '$marque', modele = '$modele', kilometrage = '$kilometrage', etat = '$etat',prixfixe = '$prixfixe' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'mise à jour avec succès';
  $_SESSION['message_type'] = 'warning';
  header('Location: voiture.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="immatriculation" type="text" class="form-control" value="<?php echo $immatriculation; ?>" placeholder="Update immatriculation">
        </div>
        <div class="form-group">
          <input name="prix" type="text" class="form-control" value="<?php echo $prix; ?>" placeholder="Update prix">
        </div>
        <div class="form-group">
          <input name="marque" type="text" class="form-control" value="<?php echo $marque; ?>" placeholder="Update marque">
        </div>
        <div class="form-group">
          <input name="modele" type="text" class="form-control" value="<?php echo $modele; ?>" placeholder="Update modele">
        </div>
        <div class="form-group">
          <input name="kilometrage" type="text" class="form-control" value="<?php echo $kilometrage; ?>" placeholder="Update kilometrage">
        </div>
        <div class="form-group">
           <select name="etat" class="form-control" placeholder="etat" >
            <option>disponible</option>
            <option>non disponible</option>
          </select>
        </div>
        <div class="form-group">
          <input name="prixfixe" type="text" class="form-control" value="<?php echo $prixfixe; ?>" placeholder="Update prix">
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
