<?php
class Database
{   
   
   public function connexion()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="crud";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		return $conn;
	}
}

session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud'
) or die(mysqli_erro($mysqli));

?>