<?php
include("db.php");
$codepromo = '';

$prix= '';
$mail= '';
$pourcentage='';
if  (isset($_GET['codepromo'])) {
  $codepromo = $_GET['codepromo'];
  $query = "SELECT * FROM coupon WHERE codepromo=$codepromo";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $codepromo = $row['codepromo'];
    
        $prix = $row['prix'];
        $mail = $row['mail'];
        $pourcentage = $row['pourcentage'];

  }
}

if (isset($_POST['update'])) {
  $codepromo = $_GET['codepromo'];
  
  $pourcentage = $_POST['pourcentage'];
  $prix = $_POST['prix'];
$mail = $_POST['mail'];
  $query = "UPDATE coupon set pourcentage = '$pourcentage', prix = '$prix', mail = '$mail'  WHERE codepromo=$codepromo";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'promotion modifie avec succes';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestioncoupon.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_coupon.php?codepromo=<?php echo $_GET['codepromo']; ?>" method="POST">
        <div class="form-group">
          <input name="prix"  class="form-control" value="<?php echo $prix; ?>" placeholder="Update prix">
        </div>
       
        <div class="form-group">
          <input name="mail"  class="form-control" value="<?php echo $mail; ?>" placeholder="Update email">
        </div>
        <div class="form-group">
          <input name="pourcentage"  class="form-control" value="<?php echo $pourcentage; ?>" placeholder="Update pourcentage">
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
