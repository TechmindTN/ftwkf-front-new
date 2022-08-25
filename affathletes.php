<?php
session_start();
////$club = $_SESSION['club'];
$club = $_SESSION['club'];
//$club = $_GET['club'];?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="en" dir="ltr">
<HEAD>
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
<TITLE>Liste athletes à valider</TITLE>
</HEAD>
<BODY id="page-top">
<div id="wrapper">
<div class="navbar-nav  sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>


<!-- <div class="col-xs-1 col-lg-3 col-md-4 col-sm-3 col-xl-2 ">
 </div> -->

 <!-- Content Wrapper -->
        <div id="content-wrapper"  class="d-flex flex-column ">





            <!-- Main Content -->
            <div id="content" >
              <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
               <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="assets/img/undraw_profile_1.svg"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="assets/img/undraw_profile_2.svg"
                        alt="...">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="assets/img/undraw_profile_3.svg"
                        alt="...">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span id="currentClub" class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $club; ?> </span>
            <img class="img-profile rounded-circle"
                src="assets/img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->
            <div class="container-fluid">
                            
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-2 text-gray-800">Athletes a valider</h1>
                               

<?php  
	   	include('connect.php');
$query1 ="SELECT saison FROM saison where actif = 1";
$result1 = mysql_query($query1,$connexion);
$row1 = mysql_fetch_row($result1);
$saison = $row1[0];

$club1 = "";
$age1 = "";
if (isset($_POST['club'])) {
  $club1 = (get_magic_quotes_gpc()) ? $_POST['club'] : addslashes($_POST['club']);
}
if (isset($_POST['age'])) {
  $age1 = (get_magic_quotes_gpc()) ? $_POST['age'] : addslashes($_POST['age']);
}
	 
	 
    if (($club=="admin")or($club=="ADMIN")or($club=="Admin") or ($club == "CENTRE")or($club == "Centre")or($club == "centre") or ($club == "NORD")or($club == "Nord")or($club == "nord") or ($club == "SUD")or($club == "Sud")or($club == "sud")or($club == "dtn")or($club == "DTN")or($club == "Dtn")) {

if (($club=="admin")or($club=="ADMIN")or($club=="Admin")) {$query1 ="SELECT club from athletess where saison = '$saison' group by club order by club";}	 
if (($club=="dtn")or($club=="DTN")or($club=="Dtn")) {$query1 ="SELECT club from athletess where saison = '$saison' group by club order by club";}	 
$result1 = mysql_query($query1,$connexion);
$row1 = mysql_fetch_assoc($result1);

$query2 ="SELECT age from athletess group by age order by age";
$result2 = mysql_query($query2,$connexion);
$row2 = mysql_fetch_assoc($result2);

	  ?>
 <form name="stat" method="post" action="">
              Club<select class="custom-select col-sm-4" name="club" size="1" id="club" tabindex="9">
     <option><?php echo $club1;?></option>
     <?php
					   do { 
                                     $res=$row1['club'];
                                      echo "<option >$res</option>";
                       } while ($row1 = mysql_fetch_assoc($result1));
?>
   </select>Age<select class="custom-select col-sm-4" name="age" size="1" id="club2" tabindex="9">
     <option><?php echo $age1;?></option>
     <?php
					   do { 
                                     $res=$row2['age'];
                                      echo "<option >$res</option>";
                       } while ($row2 = mysql_fetch_assoc($result2));
?>
   </select>
<input name="ok" type="submit" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" value = "Rechercher">
                  
          </form>

<?php } 
$query ="SELECT club FROM club where club = '$club'";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
$club=$row['club'];




$query ="SELECT * FROM athletess where club = '$club' and saison = '$saison' order by n_lic";

if (($club == "ADMIN")or($club == "admin")or($club == "Admin") or($club=="dtn")or($club=="DTN")or($club=="Dtn")){
if ($club1 <> "") {$query ="SELECT * FROM athletess where club = '$club1' and saison = '$saison' and age like '%$age1' order by n_lic";}
if ($club1 == "") {$query ="SELECT * FROM athletess where saison = '$saison' and age like '%$age1' order by n_lic";}
}

$result = mysql_query($query,$connexion);
$totalRows = mysql_num_rows($result);
//query('SET NAMES UTF8');
$row = mysql_fetch_assoc($result);
?>

</div>
<div class="card-body">
                            <div class="table-responsive">
<table  class="table table-bordered" width="100%" id="dataTable">
	<thead>
	<tr>
	    <td ><div align = "center"> <strong> Saison </strong> </div> </td>
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
		<td> <div align = "center"> <strong> Photo </strong></div></td>
		<td ><div align = "center"> <strong> Identité</strong></div></td>
		<td ><div align = "center"> <strong> Fiche Medical</strong></div></td>
		<td ><div align = "center"> <strong> Eng Parental</strong></div></td>
		<td >Actions</td>
	</tr>
  </thead>
  <tbody>
<?php
//$federation = $_SESSION['federation'];
//$pers = $_SESSION['pers'];
//$tache = $_SESSION['tache'];
//$sexe = $_SESSION['sexe'];
//$age = $_SESSION['age'];
//$saison = $_SESSION['saison'];


do {

//	  $file1 = "C:\Program Files\EasyPHP-5.3.3.1\www\tunisie judo/photo/". $row['photo'];
//clearstatcache($clear_realpath_cache = true, $file1);
	//  $file2 = "www\tunisie-judo.org/photoid/". $row['photoid'];

//clearstatcache($clear_realpath_cache = true, $file2);
$ren = $row['obs'];
if ($ren <> "") {$phott =$ren; }
else {$phott =$row['n_lic']; }

if ($ren <> "") {
?>
	<tr bgcolor="#088C20" style="color:#fff">
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

<?php 

if ($ren <> "") {
 $phott = $row['photo'];
 ?>
	  <td><img src="./photo/<?php echo $phott;?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photoid/<?php echo $phott;?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photobor/<?php echo $saison;?>/<?php echo $phott;?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photoeng/<?php echo $saison;?>/<?php echo $phott;?>?<?php echo time(); ?>" width="33" height="50"></td>
      <?PHP 
	  }
else {
 ?>
	  <td><img src="./photot/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photoidt/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photobor/<?php echo $saison;?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="33" height="50"></td>
	  <td><img src="./photoeng/<?php echo $saison;?>/<?php echo $phott.".jpg";?>?<?php echo time(); ?>" width="33" height="50"></td>
      <?PHP 
	  }
	?> 
<td>
   <?PHP   if (($club == "ADMIN")or($club == "Admin")or($club == "admin")) { ?>
     
        <div align="center" ><a style="color:#000" href ='licenceverif.php?naiss<?php echo "=$row[date_naiss]";?>&club<?php echo "=$row[club]";?>&club1<?php echo "=$club";?>&nom<?php echo "=$row[nom]";?>&prenom<?php echo "=$row[prenom]";?>&code<?php echo "=$row[n_lic]";?>&cin<?php echo "=$row[cin]";?>'><b>Verifier</b></a>
     
	 </div>
	 <?PHP  } else {
if (($club <> "CENTRE")and($club <> "Centre")and($club <> "centre") and ($club <> "NORD")and($club <> "Nord")and($club <> "nord") and ($club <> "SUD")and($club <> "Sud")and($club <> "sud")and($club <> "dtn")and($club <> "DTN")and($club <> "Dtn")) {		  
		  
		  
		  ?>       
        <div align="center"><a  style="color:#000" href ='updathleteverif.php?code<?php echo "=$row[n_lic]";?>&club<?php echo "=$club";?>'><b>Modifier</b></a>
	</div>
      <?PHP  } }
?>	  
	  
        
        <?PHP 
      if ($club==$row['club']) { ?>
     
        <a  style="color:#000"href ='delathletes.php?code<?php echo "=$row[n_lic]";?>&club<?php echo "=$club";?>'><img src="sup.png" width="16" height="16"></a>
      <?PHP  } ?>       
        
        </td>
  
  </tr>
<?php					}while	 ($row=mysql_fetch_assoc($result)); 


?> 
</tbody>
</table>
</div></div></div></div></div>
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