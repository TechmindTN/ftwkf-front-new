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
<html lang="ar" dir="ltr">
<HEAD>
<style>
.ml-1 {
  margin-left:10.5% !important;
}</style>
  <!-- Custom fonts for this template -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</HEAD>
<script language="javascript" type="text/javascript">
// You can place JavaScript like this
</script>
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

<?php
	   	include('connect.php');

$query2 ="SELECT saison from athletes Group By saison order by saison";
$result2 = mysql_query($query2,$connexion);
$row2 = mysql_fetch_assoc($result2);


?>
<div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Saison</h1>
                            </div>
                            <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <select name="saison" class="custom-select">
                      <option>-</option>
                      <?php
					   do { 
                                     $res=$row2['saison'];
                                      echo "<option >$res</option>";
                       } while ($row2 = mysql_fetch_assoc($result2));
?>    </select>
                                    </div> 
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <form name="stat" method="post" action="expliste.php">
    </tr>
                <tr>
   
                <tr>
                  <td colspan="3" valign="center"><div align="center">
<input name="ok" type="submit" class="btn btn-primary" value="Exporter">
                  </td>
                </tr>
              </table>
          </form>
                                    </div> 
                                 

          </form></td>
        </tr>
</table>
      </td>
  </tr>
</table>
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