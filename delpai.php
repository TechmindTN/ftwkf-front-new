<?php
session_start();
include('connect.php');

$club = $_SESSION['club'];
 if ($club == null) {
?>	 
<script type="text/javascript">
window.location.href="index.html";
</script>

<?php	 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image:  url(../sigle1.gif);
}
-->
</style></head>

<body>
<?php
	 

$code=$_GET['code'];


$query ="DELETE FROM `paiement` where `id` = '$code'";

$result = mysql_query($query,$connexion)or die( mysql_error() );
?>
<script type="text/javascript">
window.location.href="affpaiement.php";
</script>

</body>
</html>