<?php
session_start();
//$club = $_SESSION['club'];
$club = $_GET['club1'];
if ($club == null) {
?>	 
<script type="text/javascript">
window.location.href="index.html";
</script>

<?php	 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
      <!-- Custom styles for this template -->
	  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<HTML lang="ar" dir="ltr">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Vérification athlete</TITLE>
</HEAD>

<BODY>
<div id="wrapper">
<div class="navbar-nav sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div id="content-wrapper" class="d-flex flex-column ">
<!--<div align="center" class="style2"> Liste des Athletes</div>-->
  

<div id="content " class="ml-1">

 <div  class="container-fluid">
<?php


	   	include('connect.php');


$date_naiss=$_GET['naiss'];
$clubb=$_GET['club'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$n_lic=$_GET['code'];
$cin=$_GET['cin'];

$query000 ="select * from age where prix > 0 order by sexe,min";
$result000 = mysql_query($query000,$connexion);
$row000 = mysql_fetch_assoc($result000);
$query0001 ="select * from athletest";
$result0001 = mysql_query($query0001,$connexion);
$row0001 = mysql_fetch_assoc($result0001);
$tprix =0;
do {
	$saison0=$row0001['saison'];;
$club0=$row0001['club'];;
$age1 = $row000['cat'];
$sexe1 = $row000['sexe'];
$prix = $row000['prix'];
$query1 ="SELECT sum(n) from athletest where club = '$club0' and saison = '$saison0' and age = '$age1' and sexe = '$sexe1'";
$result1 = mysql_query($query1,$connexion);
$row1 = mysql_fetch_row($result1);

$tprix = $tprix + $row1[0] * $prix;

				}while	 ($row000=mysql_fetch_assoc($result000)); 


$query9 ="SELECT SUM(montant) from paiement where club = '$club0' and saison = '$saison0' and etat = 1";
$result9 = mysql_query($query9,$connexion);
$row9 = mysql_fetch_row($result9);
$tpai = $row9[0];
$bilan = $tpai - $tprix ;

?>
      <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="h3 mb-2 text-gray-800">Verification athlete</div>
                      </div>
					  <div class="card-body">


<div class="table-responsive">						
	<table class="table table-bordered" id="dataTable">
	
	<thead><tr>
	    <td ><div align="center"><strong>Saison </strong> </div> </td>
		<td> <div align = "center"> <strong> N° Lic </strong> </div> </td>
		<td> <div align = "center"> <strong> N° CIN </strong> </div> </td>
		<td> <div align = "center"> <strong> Nom </strong> </div> </td>
		<td> <div align = "center"> <strong> Prénom </strong> </div> </td>		
        
		<td> <div align = "center"> <strong> Nationalité </strong> </div> </td>
        <td> <div align = "center"> <strong> Date Naissance </strong> </div> </td>
		<td> <div align = "center"> <strong> Sexe </strong> </div> </td>
		<td> <div align = "center"> <strong> Age </strong> </div> </td>
		<td> <div align = "center"> <strong> Club </strong> </div> </td>
		<td> <div align = "center"> <strong> Ligue </strong> </div> </td>

		<td> <div align = "center"> <strong> Discipline</strong> </div> </td>
	</tr>
			</thead>
<?php


$query1 ="SELECT saison FROM saison where actif = 1";
$result1 = mysql_query($query1,$connexion);
$row1 = mysql_fetch_row($result1);
$saison = $row1[0];

$query ="SELECT * FROM athletes where date_naiss = '$date_naiss' order by saison desc";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
do {

similar_text(strtolower($nom), strtolower($row['nom']), $percentn); 
similar_text(strtolower($prenom), strtolower($row['prenom']), $percentpn); 
similar_text(strtolower($nom), strtolower($row['prenom']), $percentn1); 
similar_text(strtolower($prenom), strtolower($row['nom']), $percentpn1); 


if ((($percentn >50) or ($percentpn >50)or($percentn1 >50) or ($percentpn1 >50))and ($saison == $row['saison'])) {


?>
	<tr bgcolor="#FF0000">
<?php }else {?>
	<tr>
<?php }?>


	  <td><div align="center"><?php echo $row['saison'];?></div></td>
	  <td><div align="center"><?php echo $row['n_lic'];?></div></td>
	  <td><div align="center"><?php echo $row['cin'];?></div></td>
	  <td><div align="center"><?php echo $row['nom'];?></div></td>
	  <td><div align="center"><?php echo $row['prenom'];?></div></td>	  
      
	  <td><div align="center"><?php echo $row['nationalite'];?></div></td>

	  <td><div align="center"><?php echo $row['date_naiss'];?></div></td>
	  <td><div align="center"><?php echo $row['sexe'];?></div></td>
	  <td><div align="center"><?php echo $row['age'];?></div></td>
	  <td><div align="center"><?php echo $row['club'];?></div></td>
	  <td><div align="center"><?php echo $row['ligue'];?></div></td>

	  <td><div align="center"><?php echo $row['sport'];?></div></td>
	  
  
  </tr>
<?php					}
while	 ($row=mysql_fetch_assoc($result)); 


?> 
</table></div></div>
<p>&nbsp;</p>

<div class="card-body">


<div class="table-responsive">						
	<table class="table table-bordered" id="dataTable">
	<thead>
	<tr>
	    <td ><div align="center"><strong>Saison </strong> </div> </td>
		<td> <div align = "center"> <strong> N° Lic </strong> </div> </td>
		<td> <div align = "center"> <strong> N° CIN </strong> </div> </td>
		<td> <div align = "center"> <strong> Nom </strong> </div> </td>
		<td> <div align = "center"> <strong> Prénom </strong> </div> </td>		
        
		<td> <div align = "center"> <strong> Nationalité </strong> </div> </td>
<td> <div align = "center"> <strong> Date Naissance </strong> </div> </td>
		<td> <div align = "center"> <strong> Sexe </strong> </div> </td>
		<td> <div align = "center"> <strong> Age </strong> </div> </td>
		<td> <div align = "center"> <strong> Club </strong> </div> </td>
		<td> <div align = "center"> <strong> Ligue </strong> </div> </td>

		<td> <div align = "center"> <strong> Discipline</strong> </div> </td>
		<td><div align="center"><strong>Actions</strong></div></td>
	</tr>
</thead>
<?php  
$query ="SELECT * FROM athletess where n_lic = '$n_lic'";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
$ident = $row['photoid'];
$ren = $row['obs'];
if ($bilan >0){
?>
	<tr>
<?php }else{
?>
	<tr bgcolor="#FF0000" style="color:#fff">
<?php }
?>

	  <td><div align="center"><?php echo $row['saison'];?></div></td>
	  <td><div align="center"><?php echo $row['n_lic'];?></div></td>
	  <td><div align="center"><?php echo $row['cin'];?></div></td>
	  <td><div align="center"><?php echo $row['nom'];?></div></td>
	  <td><div align="center"><?php echo $row['prenom'];?></div></td>	  
      
	  <td><div align="center"><?php echo $row['nationalite'];?></div></td>

	  <td><div align="center"><?php echo $row['date_naiss'];?></div></td>
	  <td><div align="center"><?php echo $row['sexe'];?></div></td>
	  <td><div align="center"><?php echo $row['age'];?></div></td>
	  <td><div align="center"><?php echo $row['club'];?></div></td>
	  <td><div align="center"><?php echo $row['ligue'];?></div></td>

	  <td><div align="center"><?php echo $row['sport'];?></div></td>
      <td ><div align="center" ><a style="color:#fff" href ='updathletess.php?code<?php echo "=$row[n_lic]";?>&club<?php echo "=$row[club]";?>'><b>Modifier</b></a>
      <div align="center"><a  style="color:#fff" href ='licencevalid.php?code<?php echo "=$row[n_lic]";?>&club<?php echo "=$row[club]";?>'><b>Validate</b></a>
      <a style="color:#fff" href ='delathletess.php?code<?php echo "=$row[n_lic]";?>&club<?php echo "=$row[club]";?>'><b>Supprimer</b></a></td>
  
  </tr>
</table></div></div>

<div class="card-body">


<div class="table-responsive">						
	<table class="table table-bordered" >
  <tr>
<?php
$ren = $row['obs'];

if ($ren <> "") {$phott =$ren; }
else {$phott =$row['n_lic']; }
if ($ren <> "")  {
 ?>
	  <td valign="top"><img src="./photo/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="53" height="105"><td>
	  <td><img src="./photoid/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"><td>
  <td><img src="./photobor/<?php echo $row['saison'];?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"></div></td>
  <td><img src="./photoeng/<?php echo $row['saison'];?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"></div></td>
      <?PHP 
	  }
else {
 ?>
	  <td valign="top"><img src="./photot/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="53" height="105"></td>
	  <td><img src="./photoidt/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"></td>
  <td><img src="./photobor/<?php echo $row['saison'];?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"></div></td>
  <td><img src="./photoeng/<?php echo $row['saison'];?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="350" height="800"></div></td>
      <?PHP 
	  }?>
  
  
  </tr>
  
</table></div></div>
	</div> 	</div>
	</div>
	</div>
<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="template.js"></script>
</body>

</html>