<?php
session_start();
//$club = $_SESSION['club'];
$club = $_SESSION['club'];
//$club = $_GET['club'];
if ($club == null) {
?>	 
<script type="text/javascript">
window.location.href="index.html";
</script>

<?php	 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ar" dir="ltr">
<HEAD>
<!-- Custom styles for this template -->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<HTML lang="ar" dir="ltr">
<TITLE>Vérification athlete</TITLE>
<style>
.ml-1 {
  margin-left: 25% !important;
}</style>
</HEAD>

<BODY>
<div id="wrapper">
<div class="navbar-nav sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div id="content-wrapper" class="d-flex flex-column ">
<?php


	   	include('connect.php');


$date_naiss=$_GET['naiss'];
$clubb=$_GET['club'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$n_lic=$_GET['code'];
?>
<br>

<div id="content " >

 <div  class="container-fluid ml-1">
 <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="h3 mb-2 text-gray-800">Verification athlete</div>
                      </div>
					  <div class="card-body">
					  <div class="table-responsive">						
	<table class="table table-bordered" id="dataTable">
<thead>	<tr>
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
	</tr></thead>
<?php




$query ="SELECT * FROM athletes where date_naiss = '$date_naiss' order by saison desc";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
do {

similar_text(strtolower($nom), strtolower($row['nom']), $percentn); 
similar_text(strtolower($prenom), strtolower($row['prenom']), $percentpn); 
similar_text(strtolower($nom), strtolower($row['prenom']), $percentn1); 
similar_text(strtolower($prenom), strtolower($row['nom']), $percentpn1); 


if (($percentn >50) or ($percentpn >50)or($percentn1 >50) or ($percentpn1 >50)) {

?>
	<tr>

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
<?php					}}while	 ($row=mysql_fetch_assoc($result)); 


?> 
</table>
</div></div></div>
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