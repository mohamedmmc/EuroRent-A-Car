<?PHP
include "../db.php";
class reservationC {
function afficher_reservation ($reservation){
		echo "idC: ".$reservation->getidC()."<br>";
		echo "nomC: ".$reservation->getNom()."<br>";
		echo "famille: ".$reservation->getFamille()."<br>";
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterCategorie($categorie){
		$sql="insert into categorie (idC,nomC,famille) values (:idC,:nomC,:famille)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idC=$categorie->getidC();
        $nomC=$categorie->getNom();
        $famille=$categorie->getFamille();
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':famille',$famille);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From categorie ORDER BY idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($idC){
		$sql="DELETE FROM categorie where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$idC){
		$sql="UPDATE categorie SET idC=:idC, nomC=:nomC,famille=:famille WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idC=$categorie->getidC();
        $nomC=$categorie->getNom();
        $famille=$categorie->getFamille();
$datas = array( ':idC'=>$idC, ':nomC'=>$nomC,':famille'=>$famille);
	
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':famille',$famille);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherCategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>