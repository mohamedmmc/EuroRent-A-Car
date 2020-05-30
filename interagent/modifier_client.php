<?php
include("db.php");
$nom = '';
$prenom = '';
$cin = '';
$numdetel = '';
$adresse= '';
$email = '';
$mdp = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM user WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $cin = $row['cin'];
    $adresse = $row['adresse'];
    $numdetel = $row['numdetel'];
    $email= $row['email'];
    $mdp = $row['mdp'];
    $role = $row['role'];
  }
}
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nom= $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin= $_POST['cin'];
  $adresse = $_POST['adresse'];
  $numdetel= $_POST['numdetel'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $role = $_POST['role']; 


    $query = "UPDATE user set nom = '$nom', prenom = '$prenom', cin = '$cin' , numdetel = '$numdetel', adresse = '$adresse' , email = '$email', mdp = '$mdp', role = '$role' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Client modifiée avec succès';
  $_SESSION['message_type'] = 'success';
  header('Location: client.php');
}


?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="modifier_client.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nom" type="text" class="form-control" value="<?php echo $nom; ?>" placeholder="Modifier nom" minlength="1" required oninvalid="setCustomValidity('Le nom doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="prenom" type="text" class="form-control" value="<?php echo $prenom; ?>" placeholder="Modifier prenom" minlength="1" required oninvalid="setCustomValidity('Le prenom doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="cin" type="text" class="form-control" value="<?php echo $cin; ?>" placeholder="Modifier CIN" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le cin doit contenir 8 chiffres')" oninput="setCustomValidity('')">
        </div>
         <div class="form-group">
          <input name="adresse" type="text" class="form-control" value="<?php echo $adresse; ?>" placeholder="Modifier adresse" minlength="1" required oninvalid="setCustomValidity('L'adresse doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="numdetel" type="text" class="form-control" value="<?php echo $numdetel; ?>" placeholder="Modifier numero de téléphone" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le numero de téléphone doit contenir  8 chiffres')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Update adresse email" required oninvalid="setCustomValidity('tapez une adresse e-mail valide')" oninput="setCustomValidity('')" >
        </div>
        <div class="form-group">
          <input name="mdp" type="text" class="form-control" value="<?php echo $mdp; ?>" placeholder="Mot de passe" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="role" type="text" class="form-control" value="<?php echo $role; ?>" placeholder="Modifier role" minlength="1" required oninvalid="setCustomValidity('Le role doit étre client')" oninput="setCustomValidity('')">
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
