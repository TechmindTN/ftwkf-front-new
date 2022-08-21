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
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Ajout compétition</TITLE>
<script language="JavaScript" src="Calendar1-903.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
function TryCallFunction() {
	var sd = document.MForm.txt_mydate.value.split("\/");
	document.MForm.txt_mymonth.value = sd[0];
	document.MForm.txt_myday.value = sd[1];
	document.MForm.txt_myyear.value = sd[2];
}

function submitdnld() {
	document.form1.submit();
}
</script>
<script language="JavaScript" type="text/javascript">
<!--


function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link href="Calendar.css" rel="stylesheet" type="text/css" />
<link href="../../styles/default.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="Popup Date Picker, Softricks Javascript Calendar" />
<meta name="Description" content="Softricks Javascript Popup date picker calendar. The most versatile and feature-packed popup calendar for taking date inputs on the web." />
<style>
.ml-1 {
  margin-left: 20% !important;
}</style>
</HEAD>

<body>

<?php 
	   	include('connect.php');

$query ="SELECT cat FROM param group by cat order by cat";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);

?>
<div id="wrapper">
<div class="navbar-nav sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>
            <div class="container ml-1">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter compétition</h1>
                            </div>
<form class="user" action="addprogramme.php" method="post" enctype="multipart/form-data" name="MForm">
                                 <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Competition    </label>
                                        <input name="action" type="text" id="action" tabindex="1" size="70" class="form-control " 
                                     required> 
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Discipline</label>
                                    
                                    <select name="sport" size="1" id="sport" tabindex="6" class="custom-select " required>
        <option>Choisir...  </option>        
        <option>وشوكونغ فو</option><option>كمبو</option><option>ديكايتو ريو</option><option>الدفاع عن النفس بودو</option><option>فوفينام فيات فوداو</option><option>فوت وات فان فوداوو و الأنشطة التابعة</option><option>هابكيدو</option><option>الكيسندو</option></select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Place</label>
                                    
                                        <input name="lieu" type="text" id="lieu" tabindex="3" size="25" class="form-control " required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Année    </label>
                                        
                                     <input name="annee" type="text" id="annee" tabindex="12" size="15" class="form-control " required>
                                    </div>
                                    <div class="col-sm-4  mb-3 mb-sm-0">
                                    <label>Niveau</label>
                                    <select name="niveau" size="1" id="niveau" tabindex="5"  class="custom-select " required>
                                    <option selected>Choisir niveau</option>
                                    <option>Eliminatoire</option>
        <option>Final Directe</option>
        <option>Final Après Eliminatoire</option>
      </select>            
                                    </div>
                                    <div class="col-sm-4">
                                    <label>Date</label>
                                    <input name="date" type="date" id="date" tabindex="6" size="15" class="form-control " required>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Deadline    </label>
                                        <input name="delais" type="date" id="delais" tabindex="12" size="15" class="form-control " required>
                                     
                                    </div>
                                    <div class="col-sm-4">
                                    <label>Type</label>
                                    <select name="type" size="1" id="type2" tabindex="5" class="custom-select " required>
           <option selected>Choisir type</option>
     <option>كطا</option>
        <option>فردي</option>
      </select>
                    </div>
                                    <div class="col-sm-4  mb-3 mb-sm-0">
                                    <label>Age</label>
                                    <select name="cat" size="1" id="type" tabindex="2"  class="custom-select " required>
        <option>_</option>
        <?php     do { 
                                     $res=$row['cat'];
                                      echo "<option >$res</option>";
 }while	 ($row=mysql_fetch_assoc($result));?>
      </select>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Min    </label>
                                        <input name="min" type="text" id="min" tabindex="12" size="15" class="form-control "
                                     required>
                                        
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Max</label>
                                    <input name="max" type="text" id="max" tabindex="12" size="15" class="form-control "
                                     required>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <p align="center"><br>
      <input type="submit" name="valider" id="valider" value="Valider" class="btn btn-primary">
  </p>
                                    </div>
                                    
                                </div>
  
</form></div> </div></div></div></div></div></div>
   <!-- Bootstrap core JavaScript-->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="template.js"></script>
</body>

</html>
