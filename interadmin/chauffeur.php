<?php
class chauffeur 
{
	private $id;
	private $nom;
	private $prenom;
	private $cin;
	private $numtel;

	function __construct ($id,$nom,$prenom,$cin,$numtel)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numtel=$numtel;
	}

	function getid()
	{
		return $this->id;
	}

	function setid($id)
	{
		$this->id=$id;
	}

	function getnom()
	{
		return $this->nom;
	}

	function setnom($nom)
	{
		$this->nom=$nom;
	}

	function getprenom()
	{
		return $this->prenom;
	}

	function setprenom($prenom)
	{
		$this->prenom=$prenom;
	}
		function getcin()
	{
		return $this->cin;
	}

	function setcin($cin)
	{
		$this->cin=$cin;
	}
		function getnumtel()
	{
		return $this->numtel;
	}

	function setnumtel($numtel)
	{
		$this->numtel=$numtel;
	}


	function ajouter($nom,$prenom,$cin,$numtel)
}
?>