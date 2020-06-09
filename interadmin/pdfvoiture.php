
<?php  

function fetch_data()  
{  
$output = '';  
$conn = mysqli_connect("localhost", "root", "", "crud");  
$sql = "SELECT * FROM voiture";  
$result = mysqli_query($conn, $sql);  
while($row = mysqli_fetch_array($result))  
{       
$output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["immatriculation"].'</td>  
<td>'.$row["prix"].'</td>  
<td>'.$row["marque"].'</td>  
<td>'.$row["modele"].'</td>  
<td>'.$row["kilometrage"].'</td>  
<td>'.$row["etat"].'</td> 
</tr>  
';  
}  
return $output;  
}  
if(isset($_POST["generate_pdf"]))  
{  
require_once('../../../library/tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Listes des Voitures");   
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->AddPage();
$logo = '<img src="https://i.ibb.co/KL9NXt4/logo.png" />';
$obj_pdf->writeHTML($logo, true, false, false, false, '');
$content = '';  
$content .= '  
<h4 align="center">Liste des Voitures sur EuroRent A CAR</h4><br /> 
<table align="center" border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="5%">Id</th>  
<th width="19%">immatriculation</th>  
<th width="15%">prix</th>  
<th width="15%">marque</th> 
<th width="15%">modele</th>
<th width="15%">kilometrage</th>
<th width="15%">etat</th>   

</tr>  
';  
$content .= fetch_data();  
$content .= '</table>';  
$obj_pdf->writeHTML($content); 
ob_end_clean(); 
$obj_pdf->Output('voitures.pdf', 'I');  
}  
?> 