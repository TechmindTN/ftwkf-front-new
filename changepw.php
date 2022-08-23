<?php
session_start();
$club = $_SESSION['club'];
//$club = $_SESSION['club'];
//$club = $_GET['club'];

if ($club == null) {
?>	 
<script type="text/javascript">
window.location.href="index.html";
</script>

<?php	 }
?>
<html>
<!-- Date de cr�ation: 26/05/02 -->
<head>
	  <!-- Custom fonts for this template -->
	  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title></title>
<meta name="Author" content="Usager non enregistr�">
<meta name="Generator" content="WebExpert 2000">
<base target="_self">
<style>
.ml-1 {
  margin-left: 20% !important;
}</style>
</head>
<body>
<p>
  <script language="JavaScript1.2" >
function Verification(theForm)
{
	if((document.forms[0].club.value == null) || (document.forms[0].club.value == ''))
	{
		alert("Veuillez remplir votre club S.V.P.");
		document.forms[0].club.focus();
		return false;
	}
	else
	{
		if((document.forms[0].Password.value == null) || (document.forms[0].Password.value == ''))
		{
			alert("Veuillez remplir votre Password S.V.P.");
			document.forms[0].Password.focus();
			return false;
		}
	}
	return true;
}

</script>

  

</p>
<body id="page-top">
<div id="wrapper">
<div class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div class="container ">
            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 ml-1">
            <div class="row">
                       
            <div class="col-lg-12">
                        <div class="p-5">
<form  name="form1" method="post" action= "changepw.php" onSubmit= "writecookie()"  >

<div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Changer mot de passe</h1>
                            </div>
	<div class="form-group row">
	<div class="col-sm-4 mb-3 mb-sm-0">
                                
								</div>  <div class="col-sm-3 mb-3 mb-sm-0">
                                <label>Nouveau mot de passe</label>
		<input type="password" name="pw" maxlength="4" required class="form-control">
		 <p>(4 Characters Minimum)</p>
								</div>  <div class="col-sm-3 mb-5 mb-sm-0">
                            <br>
	    <input type="Submit" name="Submit" value="Valider" class="btn btn-danger" > 
		<input type="hidden" name="club" value="<?php echo $club;?>">
      </div>
</div>
</form>
<?php
	include('connect.php');
//$federation = $_SESSION['federation'];
//$pers = $_SESSION['pers'];
//$tache = $_SESSION['tache'];
//$sexe = $_SESSION['sexe'];
//$age = $_SESSION['age'];
//$code = $_SESSION['code'];
//$club = $_SESSION['club'];
//$club = $_SESSION['club'];
//$club = $_GET['club'];
$pw = "1";
if (isset($_POST['pw'])) {
  $pw = (get_magic_quotes_gpc()) ? $_POST['pw'] : addslashes($_POST['pw']);
}
$test = substr("$pw", 3, 1);

if (($pw != "1") and ($test != "")) {

//if ($code == null){
$query =sprintf("UPDATE `club` SET `pw` = '%s' where club = '$club'", $pw);//}
//else {
//$query =sprintf("UPDATE `staff` SET `pw` = '%s' where `code` ='$code'", $pw);}


$result = mysql_query($query,$connexion)or die(mysql_error());
?> 
<script type="text/javascript">
window.location.href="corp.php";
</script>

<?PHP
}else{if ($pw != "1"){
echo "Mot de Passe Incorrect";}}
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