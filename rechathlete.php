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
  <title>Rechercher athlete</title>
  <!-- Custom styles for this template -->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</HEAD>

<html>
<body>
<div id="wrapper">
<div class="navbar-nav sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div id="content-wrapper" class="d-flex flex-column ">
            <div id="content" class="ml-1">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="mb-4 ">
<div class="card-header  py-3 d-sm-flex align-items-center justify-content-between mb-4">
<table >
<h1 class="h3 mb-2 text-gray-800"> Rechercher Athlete </h1>
                  
                                 
                        </div>
<?php
	   	include('connect.php');
$query ="SELECT club FROM club where club = '$club'";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
$club=$row['club'];
$id = "";
if (isset($_GET['id'])) {
  $id = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);//
}
if (isset($_POST['id'])) {
  $id = (get_magic_quotes_gpc()) ? $_POST['id'] : addslashes($_POST['id']);
}
 ?>


        <tr>
          <td><form name="stat" method="post" action="">
              <table >
                <tr>
   <td><input name="id" type="text" id="id" size="15" class="form-control " value="<?php echo $id;?>"></td>
                   <td >
<input name="ok" type="submit"  value = "Rechercher" class="btn btn-primary" >
                  </td>

                </tr>
              </table>
          </form></td>
        </tr>
</table>
      </td>
  </tr>
</table>

<?php


 if (($id <> '')){
$query1 = "SELECT * FROM athletes WHERE n_lic = '$id' AND club = '$club' order by saison desc";
$result1 = mysql_query($query1,$connexion);
$totalRows = mysql_num_rows($result1);
$row1 = mysql_fetch_assoc($result1);

$dat1 = date("Y/m/d H:i:s") ;
$query ="SELECT saison FROM saison where actif = 1";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_row($result);
$saison = $row[0];


$cin = $row1['cin'];

$nom = $row1['nom'];
$prenom = $row1['prenom'];

$sexe = $row1['sexe'];
$date_naiss = $row1['date_naiss'];

$ligue=$row1['ligue'];
$club = $row1['club'];
$sport = $row1['sport'];
$photo = $row1['photo'];

$nationalite = $row1['nationalite'];

$photo = $row1['photo'];
$photoid = $row1['photoid'];
$date_saisie = $dat1;
$jour = substr("$date_naiss", 8, 2);
$mois = substr("$date_naiss", 5, 2);
$annee = substr("$date_naiss", 0, 4);

$query2 ="SELECT * FROM age";
$result2 = mysql_query($query2,$connexion);
$row2 = mysql_fetch_assoc($result2);
$age = "_";

$jours1= substr("$saison", 5, 4) - $annee;



do {
	$dsup = $row2['sup'];
	$dinf = $row2['min'];

if (($jours1>=$dinf) and ($jours1<=$dsup)) {
	$age=$row2['cat'];
}
	
	}while	 ($row2=mysql_fetch_assoc($result2)); 

if (($totalRows > 0)){
?>
<form action="addrenouv.php" method="post" enctype="multipart/form-data" name="MForm">
<div class="card-body">


<div class="table-responsive">
<table class="table table-bordered" id="dataTable" >
    <thead><tr>
      <td width="" rowspan="2" align="left">Nom</td>
      <td width="" rowspan="2" align="left"><input name="nom" type="text" id="nom" tabindex="1" size="25" value ="<?php echo $nom;?>"></td>
      <td width="" rowspan="2" align="left">Prénom </td>
      <td width="" rowspan="2" align="left"><input name="prenom" type="text" id="prenom" tabindex="2" size="25" value ="<?php echo $prenom;?>"></td>
      <td width="12%" rowspan="2" align="left">Date de Naissance</td>
      <td width="4%" align="center">Jours</td>
      <td width="4%" align="center">Mois</td>
      <td width="6%" align="center">Années</td>
      <td width="8%" rowspan="2" align="left">Discipline</td>
      <td width="4%" rowspan="2" align="center"><select name="sport" size="1" id="sport" tabindex="6">
        <option><?php echo $sport;?></option>        <option></option>
        <option>وشوكونغ فو</option><option>كمبو</option><option>ديكايتو ريو</option><option>الدفاع عن النفس بودو</option><option>فوفينام فيات فوداو</option><option>فوت وات فان فوداوو و الأنشطة التابعة</option><option>هابكيدو</option><option>الكيسندو</option></select></td>
    
    <tr>
      <td align="center"><input name="jour" type="text" id="jour" tabindex="3" size="4" maxlength="2" value ="<?php echo $jour;?>"></td>
      <td align="center"><input name="mois" type="text" id="mois" tabindex="4" size="4" maxlength="2" value ="<?php echo $mois;?>"></td>
      <td align="left"><input name="annee" type="text" id="annee" tabindex="5" size="8" maxlength="4" value ="<?php echo $annee;?>"></td>
    </tr><thead>
       </table></div></div>
       <div class="card-body">


<div class="table-responsive">
<table class="table table-bordered" id="dataTable" >
    <thead><tr>
      <td width="" align="left">N° CIN </td>
      <td width="" align="left"><input name="cin" type="text" id="cin" tabindex="7" size="25" value ="<?php echo $cin;?>"></td>
      <td width="" align="left">Sexe</td>
      <td width="" align="left"><select name="sexe" size="1" id="sexe" tabindex="9">
        <option><?php echo $sexe;?></option>
        <option>ذكر</option>
        <option>أنثى</option>
      </select></td>
      <td width="" align="left">Nationalité</td>
      <td colspan="10" align="left"><input name="nationalite" type="text" id="nationalite" tabindex="10" size="25" value ="<?php echo $nationalite;?>"></td>
      <td width="" colspan="3" align="center">&nbsp;</td>
    </tr></thead>
        </table></div></div>
        <div class="card-body">


<div class="table-responsive">
<table class="table table-bordered" id="dataTable" >

 <thead>
    <tr>
      <td align="left">Photo</td>
      <td align="left"><input name="photo" type="file" id="photo" size="1" tabindex="10"></td>
      <td align="left">Identité</td>
      <td align="left"><input name="photoid" type="file" id="photoid" size="1" tabindex="11"></td>
	  <td>Bordereau</td>
      <td colspan="10" align="left"><input name="photobor" type="file" id="photobor" size="1" tabindex="11"></td>
	  <td>Eng Parentale</td>
      <td colspan="4" align="left"><input name="photoeng" type="file" id="photobor" size="1" tabindex="12"></td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td align="left"><img src="./photo/<?php echo $photo;?>" width="33" height="50"></td>
      <td align="left">&nbsp;</td>
      <td align="left"><img src="./photoid/<?php echo $id. ".jpg";?>" width="33" height="50"></td>
       <td>&nbsp;</td>
      <td align="left"><img src="./photobor/<?php echo $saison;?>/<?php echo $code. ".jpg";?>" alt="" width="33" height="50"></td>
     <td>&nbsp;</td>
      <td align="left"><img src="./photoeng/<?php echo $saison;?>/<?php echo $code. ".jpg";?>" alt="" width="33" height="50"></td>
    </tr></thead>
  </table></div></div>
<input name="aphoto" type="hidden" id="aphoto" size="1" value ="<?php echo $photo;?>">
      <input name="aphotoid" type="hidden" id="aphotoid" size="1" value ="<?php echo $photoid;?>">
       <input name="aphotobor" type="hidden" id="aphoto" size="1" value ="<?php echo $code. ".jpg";?>"></td>
      <input name="aphotoeng" type="hidden" id="aphoto" size="1" value ="<?php echo $code. ".jpg";?>"></td>
     <input name="ligue" type="hidden" id="ligue" size="1" value ="<?php echo $ligue;?>">
      <input name="date_saisie" type="hidden" id="date_saisie" size="1" value ="<?php echo $dat1;?>">
       <input name="age" type="hidden" id="age" size="1" value ="<?php echo $age;?>">
       <input name="saison" type="hidden" id="age" size="1" value ="<?php echo $saison;?>">
       <input name="lic" type="hidden" id="age" size="1" value ="<?php echo $id;?>">

     
      
      


  <p align="center">
      <input type="submit" name="valider" id="valider" value="Valider" class="btn btn-danger">
  </p>
</form>
</div></div>
</div></div></div></div>
<?php
}else 
{?>  <div class="alert alert-primary" role="alert">
Vérifier votre num de licence</div>
<?php
	}}

 ?>

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