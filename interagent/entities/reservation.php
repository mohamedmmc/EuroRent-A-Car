<?PHP
class reservation{
	private $reservation;
	private $client;
    private $voiture;
    private $depart ;
    private $retour ;
    private $livraison ;
    private $etat ;
    private $prix ; 
    
	function __construct($reservation,$client,$voiture,$depart,$retour,$livraison,$etat,$prix){
		$this->reservation=$reservation;
		$this->client=$client;
        $this->voiture=$voiture;
        $this->depart=$depart;
        $this->retour=$retour;
        $this->livraison=$livraison;
        $this->etat=$etat;
        $this->prix=$prix;

	}
	
	function getreservation(){
		return $this->reservation;
	}
	function getclient(){
		return $this->client;
	}
	function getvoiture(){
		return $this->voiture;
    }
    function getdepart(){
		return $this->depart;
	}
	function getretour(){
		return $this->retour;
	}
	function getlivraison(){
		return $this->livraison;
    }
    function getetat(){
		return $this->etat;
    }
    function getprix(){
		return $this->prix;
    }
    //********************************************** */
    //setters
	function setreservation($reservation){
		$this->reservation=$reservation;
	}
	function setclient($client){
		$this->client=$client;
	}
	function setvoiture($voiture){
		$this->voiture=$voiture;
    }
    function setdepart($depart){
		$this->depart=$depart;
	}
	function setretour($retour){
		$this->retour=$retour;
	}
	function setlivraison($livraison){
		$this->livraison=$livraison;
    }	
    function setetat($etat){
		$this->etat=$etat;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>