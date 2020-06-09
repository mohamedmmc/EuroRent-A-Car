
<?php  

function fetch_data()  
{  
$output = '';  
$conn = mysqli_connect("localhost", "root", "", "crud");  
$sql = "SELECT * FROM user where rolee='client'";  
$result = mysqli_query($conn, $sql);  
while($row = mysqli_fetch_array($result))  
{       
$output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["nom"].'</td>  
<td>'.$row["prenom"].'</td>  
<td>'.$row["cin"].'</td>  
<td>'.$row["adresse"].'</td>  
<td>'.$row["numdetel"].'</td>  
<td>'.$row["email"].'</td>  
</tr>  
';  
}  
return $output;  
}  
if(isset($_POST["generate_pdf"]))  
{  
require_once('../library/tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Listes des clients");   
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->AddPage();
$logo = '<img src="https://i.ibb.co/KL9NXt4/logo.png" />';
$obj_pdf->writeHTML($logo, true, false, false, false, '');
$content = '';  
$content .= '  
<h4 align="center">Liste des clients sur EuroRent A CAR</h4><br /> 
<table align="center" border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="5%">Id</th>  
<th width="15%">Nom</th>  
<th width="15%">Prenom</th>  
<th width="15%">CIN</th> 
<th width="15%">Adresse</th>
<th width="15%">Numéro de téléphone</th>
<th width="15%">Email</th>   
</tr>  
';  
$content .= fetch_data();  
$content .= '</table>';  
$obj_pdf->writeHTML($content); 
ob_end_clean(); 
$obj_pdf->Output('client.pdf', 'I');  
}  
?> 