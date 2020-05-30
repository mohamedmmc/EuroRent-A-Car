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
  $query = "SELECT * FROM user WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $CIN = $row['cin'];
    $numtel = $row['numdetel'];
    $email = $row['email'];
    $mdp = $row['mdp'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nom= $_POST['nom'];
  $prenom= $_POST['prenom'];
  $CIN = $_POST['cin'];
  $numtel = $_POST['numdetel'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

  $query = "UPDATE user set nom = '$nom', prenom = '$prenom', cin = '$CIN' , numdetel = '$numtel', email = '$email', mdp = '$mdp' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Agent mis à jour avec succès';
  $_SESSION['message_type'] = 'warning';
  header('Location: gestionagent.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_agent.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nom" type="text" class="form-control" value="<?php echo $nom; ?>" placeholder="Update nom" minlength="1" required oninvalid="setCustomValidity('Le nom doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="prenom" type="text" class="form-control" value="<?php echo $prenom; ?>" placeholder="Update prenom" minlength="1" required oninvalid="setCustomValidity('Le prenom doit etre non vide')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="cin" type="text" class="form-control" value="<?php echo $CIN; ?>" placeholder="Update CIN" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le cin doit contenir 8 chiffres')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="numdetel" type="text" class="form-control" value="<?php echo $numtel; ?>" placeholder="Update numtel" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le numero de telephone doit contenir  8 chiffres')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
          <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Update adresse email" required oninvalid="setCustomValidity('tapez une adresse e-mail valide')" oninput="setCustomValidity('')" >
        </div>
        <div class="form-group">
          <input name="mdp" type="text" class="form-control" value="<?php echo $mdp; ?>" placeholder="Mot de passe" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')">
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
