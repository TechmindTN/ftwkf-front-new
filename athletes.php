<?php
session_start();
	include('connect.php');
//$club = $_SESSION['club'];
$club = $_SESSION['club'];
//$club = $_GET['club'];
if ($club == null) {
?>	 
<script type="text/javascript">
window.location.href="index.html";
</script>

<?php	 }

$query ="SELECT club FROM club where club = '$club'";
$result = mysql_query($query,$connexion);
$row = mysql_fetch_assoc($result);
$club = $row['club'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ar" dir="ltr">
<HEAD>


        <title>Ajout athletes</title>

<!-- Custom fonts for this template-->

<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<!-- Custom styles for this template-->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

function verif()
{
var nom = document.forms[0].nom.value;
var prenom= document.forms[0].prenom.value;
var nom_e = document.forms[0].nom-e.value;
var prenom_e = document.forms[0].prenom_e.value;
var sexe = document.forms[0].sexe.value;
var date_naissance = document.forms[0].date_naissance.value;
var res = document.forms[0].res.value;
var nat = document.forms[0].nat.value;
var passport = document.forms[0].passport.value;
var date_livr = document.forms[0].date_livr.value;
var date_exp = document.forms[0].date_exp.value;
var qualite = document.forms[0].qualite.value;
var pay = document.forms[0].pay.value;
var photo = document.forms[0].photo.value;
var ppass = document.forms[0].ppass.value;


if (document.forms[0].nom.value == ''){ alert ('hghg')  ;
return false;}

else
  {
document.forms[0].method = "get";
document.forms[0].action = "addathlete.php";
document.forms[0].submit();
  }


}

//-->
</script>
<link href="Calendar.css" rel="stylesheet" type="text/css" />
<link href="../../styles/default.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="Popup Date Picker, Softricks Javascript Calendar" />
<meta name="Description" content="Softricks Javascript Popup date picker calendar. The most versatile and feature-packed popup calendar for taking date inputs on the web." />
</HEAD>

<BODY>
<div id="wrapper">

            <!-- Sidebar -->
            <div class="navbar-nav sidebar sidebar-dark accordion">
            <!-- Sidebar -->
            <div id='side'></div></div>  
            <div class="container ml-1">        
            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <div class="row">    
            <div class="col-lg-12">
                   
            <div class="p-5">
            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajout athletes</h1>
                            </div>
  <form action="addathlete.php" method="post" enctype="multipart/form-data" name="MForm">
  <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >Nom :   </label>
                                        <input name="nom" type="text" id="nom" tabindex="1" size="25" value ="" class="form-control form-control-user"   >
                                    </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Prénom : </label>
                                        <input name="prenom" type="text" id="prenom" value =""   class="form-control form-control-user" required >
                                    </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label>CIN</label>
                                    <input name="cin" type="text" id="cin" tabindex="7" size="25" value ="" class="form-control form-control-user" required>
                                    </div>
                                  
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                <label>Date naissance: </label>
                                     <div class="form-group row">
                                   <div class="col-sm-4 mb-3 mb-sm-0"><label>Jour </label> <input name="jour" type="text" id="jour" tabindex="3" size="4" maxlength="2" value =""  class="form-control form-control-user" required></div> 
                                   <div class="col-sm-4 mb-3 mb-sm-0"> <label>Mois </label>
                                   <input required name="mois" type="text" id="mois" tabindex="4" size="4" maxlength="2" value ="" class="form-control form-control-user">
                                  </div> 
                                   <div class="col-sm-4 mb-3 mb-sm-0"><label>année</label> <input required name="annee" type="text" id="annee" tabindex="5" size="8" maxlength="4" value ="" class="form-control form-control-user"></div></div>
                                     
                                  </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Sexe: </label>
                                    <select  class="form-control form-control-user" name="sexe" size="1" id="sexe" required>
                                       <option> </option>
                                       <option>ذكر</option>
                                       <option>أنثى</option>
                                     </select>
                                  </div>
                                  <div class="col-sm-4 mb-3 mb-sm-0">
                                  <label>Nationalité : </label>
                                  <input required name="nationalite" type="text" id="nationalite" tabindex="10" size="25" value ="" class="form-control form-control-user">
                                  
                                  </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >sport :   </label>
                                      <select name="sport" size="1" id="sport" tabindex="6" class="form-control form-control-user" required>
                                      <option></option>
        <option>وشوكونغ فو</option>
        <option>كمبو</option>
        <option>ديكايتو ريو</option>
        <option>الدفاع عن النفس بودو</option>
        <option>فوفينام فيات فوداو</option>
        <option>فوت وات فان فوداوو و الأنشطة التابعة</option>
        <option>هابكيدو</option><option>الكيسندو</option></select>
                                    </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Photo: </label>
                                    <input name="photo" type="file" id="photo" size="1" tabindex="15" class="form-control-file" required>
                                    </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Photo CIN: </label>
                                    <input name="photoid" type="file" id="photoid" size="1" tabindex="15"  class="form-control-file" required>
                                    </div>
                                  
                                </div>
                                                                          
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                <label>Certificat du médecin : </label>
                                     
                                <input name="photobor" type="file" id="photobor" size="1" tabindex="15" class="form-control-file" required>
                                  </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>autorisation parentale :  </label>
                                    <input name="photoeng" type="file" id="photobor" size="1" tabindex="15"class="form-control-file" required>                                  </div>
                                  <div class="col-sm-4 mb-3 mb-sm-0 text-center">
                                  <input name="club" type="hidden" id="cin" tabindex="10" size="25" value ="<?php echo $club ; ?> ">
  <p align="center"><br>
      <input type="submit" name="valider" id="valider" value="valider"  class="btn btn-primary">
  </p>
                                  </div>
                                  </div>
 
 
	  


</form></div></div></div></div></div></div></div>
<!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script src="template.js"></script>
</body>

</html>
