<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ar" dir="ltr">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Un document bilingue</TITLE>
<script language="JavaScript" src="Calendar1-903.js" type="text/javascript"></script>
</HEAD>
<BODY>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 36px;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 36px;
}
-->
</style></HEAD>

<body>
<?php
include('connect.php');
$id = 0;


$id = $_POST['cod'];

$sport = $_POST['sport'];
$couleur = $_POST['couleur'];
$delais = $_POST['delais'];
$ordre = $_POST['ordre'];
$niveau = $_POST['niveau'];



if ($id == 0) {
$query ="INSERT INTO `ceinture` (`sport`, `couleur`, `delais`, `ordre`, `niveau`) VALUES ('$sport', '$couleur', '$delais', '$ordre', '$niveau')";}

else 
{
$query = "update `ceinture` set `sport`='$sport',`couleur`='$couleur', `delais`='$delais' , `ordre`='$ordre' , `niveau`='$niveau' WHERE id = '$id'";}





$result = mysql_query($query,$connexion);


?>
<script type="text/javascript">
window.location.href="affceinture.php";
</script>

<?php 
?>
</body>
</html>