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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Statistiques entraineur</TITLE>
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style>
.ml-1 {
  margin-left: 20% !important;
}</style>
</HEAD>
<BODY>

<?php
	   	include('connect.php');

$query ="SELECT saison from athletes group by saison order by saison";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);

$queryc ="SELECT club from athletes group by club order by club";
$resultc = mysql_query($queryc,$connexion);
$rowc = mysql_fetch_assoc($resultc);
$queryl ="SELECT ligue from athletes group by ligue order by ligue";
$resultl = mysql_query($queryl,$connexion);
$rowl = mysql_fetch_assoc($resultl);

$saison = "";
if (isset($_POST['saison'])) {
  $saison = (get_magic_quotes_gpc()) ? $_POST['saison'] : addslashes($_POST['saison']);
}
$crit = "";
if (isset($_POST['crit'])) {
  $crit = (get_magic_quotes_gpc()) ? $_POST['crit'] : addslashes($_POST['crit']);
}

?>
<BODY id="page-top">
<div id="wrapper">
<div class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div id="content-wrapper" class="d-flex flex-column ">

<div id="content" class="ml-1">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="mb-4 ">
<div class="card-header  py-3 d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-2 text-gray-800">Statistiques </h1>
                       
                                 
                        </div>
    <form name="stat" method="post" action="">

	<div class="form-group row"><div class="col-sm-1 mb-3 mb-sm-0"></div>
	<div class="col-sm-3 mb-3 mb-sm-0">
	<label>Critère</label>
		<select name="crit" size="1" id="Discipline" tabindex="9" class="custom-select">
          <option><?php echo $crit;?></option>
          <option></option>
          <option>جهات</option>
          <option>نوادي</option>
        </select>
</div> 
				 <div class="col-sm-3 mb-3 mb-sm-2">
                               
				 <label>Saison</label>
		<select name="saison" size="1" id="saison" tabindex="9" class="custom-select">
          <option><?php echo $saison;?></option>
          <?php
					   do { 
                                     $res=$row['saison'];
                                      echo "<option >$res</option>";
                       } while ($row = mysql_fetch_assoc($result));
?>
        </select>
					
								</div>  
								<div class="col-sm-1 mb-1 mb-sm-0"><br>
								<input name="ok" type="submit" class="btn btn-primary" value = "Rechercher">
      </div>			<div class="col-sm-2 mb-1 mb-sm-0"><br>
								<input type=button value="Imprimer" onClick="window.print()" class="btn btn-warning" >
      </div>
</div>
    
        
        

     
    </form>
<?php 
$query0 ="delete from entraineurt";
$result0 = mysql_query($query0,$connexion);
$query0 ="insert into entraineurt select * from entraineur where saison = '$saison'";


if ($crit == "جهات"){$critere = "ligue";}
if ($crit == "نوادي"){$critere = "club";}







?>
<p style="page-break-before:always">
<table width="100%" border="0">
  <tr>
    <td align="right" valign="middle" width="40%">الجامعة التونسية للوشو كونغ فو</td>
    <td align="center" width="20%"><img src="image/logo.png" alt="" width="60" height="60"></td>
    <td align="left" valign="middle" width="40%">FEDERATION TUNISIENNE DE WUSHU KUNG FU</td>
  </tr>
</table>
  
  
  
<div align="center" class="style2">الإحصائيات</div><br>
<div align="center"><?php echo $saison;?></div></p>
<div class="card-body">


<div class="table-responsive">
<table class="table " id="dataTable"  border="1">
	<tr class="text-center">
	    <th ><strong>الموسم</strong></td>
	    <td ><strong>/النادي</strong></td>
	    <td ><strong>ممرنين</strong></td>
	    <td ><strong>منشطين</strong></td>
	    <td ><strong>حكام</strongv></td>
	    <td ><strong>مسيرين</strong></td>
	    <td ><strong>مرافقين</strong></td>
	    <td ><strong>المجموع العام</strong></td>
	</tr>
<?php 

if ($crit == "جهات"){$query0 ="select ligue from entraineur where saison = '$saison' group by ligue order by ligue";}
if ($crit == "نوادي"){$query0 ="select club from entraineur where saison = '$saison' group by club order by club";}


$result0 = mysql_query($query0,$connexion);
$row0 = mysql_fetch_assoc($result0);


do {

if ($crit == "جهات"){$test = $row0['ligue'];}
if ($crit == "نوادي"){$test = $row0['club'];}



?>
	<tr>
	  <td><div align="center"><?php echo $saison;?></div></td>
	  <td><div align="center"><?php echo $test;?></div></td>



                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test' and type = 'ممرن'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test' and type = 'ممرن'";}


$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test' and type = 'منشط'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test' and type = 'منشط'";}
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>


                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test' and type = 'حكم'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test' and type = 'حكم'";}
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test' and type = 'مسير'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test' and type = 'مسير'";}
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test' and type = 'مرافق'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test' and type = 'مرافق'";}
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>
                      <?php
if ($crit == "جهات"){$query ="SELECT * FROM entraineur where saison = '$saison' and ligue = '$test'";}
if ($crit == "نوادي"){$query ="SELECT * FROM entraineur where saison = '$saison' and club = '$test'";}
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>








  </tr>
<?php					}while	 ($row0=mysql_fetch_assoc($result0)); 
?>
	<tr>
	  <td colspan="2"><div align="center"><strong>المجموع العام</strong></div></div></td>




                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison' and type = 'ممرن'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison' and type = 'منشط'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>


                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison' and type = 'حكم'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison' and type = 'مسير'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>



                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison' and type = 'مرافق'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>
                      <?php
$query ="SELECT * FROM entraineur where saison = '$saison'";
$result = mysql_query($query,$connexion);
$nb = mysql_num_rows($result);
									 ?>
	  <td align="center"><strong><?php echo $nb;?></strong></td>








  </tr>



</table></div></div>
<?php 
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









































