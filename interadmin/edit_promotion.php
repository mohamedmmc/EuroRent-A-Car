<?php
include("db.php");
$codepromo = '';
$dated= '';
$datef= '';
$prixp= '';
$marquep= '';

if  (isset($_GET['codepromo'])) {
  $codepromo = $_GET['codepromo'];
  $query = "SELECT * FROM promotion WHERE codepromo=$codepromo";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $codepromo = $row['codepromo'];
    $dated = $row['dated'];
        $datef = $row['datef'];
        $prixp = $row['prixp'];
        $marquep = $row['marquep'];

  }
}

if (isset($_POST['update'])) {
  $codepromo = $_GET['codepromo'];
  $dated= $_POST['dated'];
  $datef = $_POST['datef'];
  $prixp = $_POST['prixp'];
$marquep = $_POST['marquep'];
  $query = "UPDATE promotion set dated = '$dated', datef = '$datef',prixp = '$prixp' ,marquep = '$marquep'WHERE codepromo=$codepromo";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'promotion modifie avec succes';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestionpromotion.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_promotion.php?codepromo=<?php echo $_GET['codepromo']; ?>" method="POST">
        <div class="form-group">
          <input name="dated"  class="form-control" value="<?php echo $dated; ?>" placeholder="Update datedebut">
        </div>
       <div class="form-group">
          <input name="datef"  class="form-control" value="<?php echo $datef; ?>" placeholder="Update date fin">
        </div>
        <div class="form-group">
          <input name="prixp"  class="form-control" value="<?php echo $prixp; ?>" placeholder="Update pourcentage de la promo">
        </div>
        <div class="form-group">
          <input name="marquep"  class="form-control" value="<?php echo $marquep; ?>" placeholder="Update marque de la promo">
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
