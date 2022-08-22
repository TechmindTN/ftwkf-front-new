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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Ajout staff</TITLE>
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
<script language="JavaScript" src="verif.js" type="text/javascript"></script> 

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
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<!-- Custom styles for this template-->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
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
                                <h1 class="h4 text-gray-900 mb-4">Ajout de Staff</h1>
                            </div> 
  <form action="addentraineur.php" method="post" enctype="multipart/form-data" name="MForm" onSubmit="return verif_formulaire()">
  <div class="form-group row">
<div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >Nom :   </label>
                                      <input name="nom" type="text" id="nom" tabindex="1" size="25" value ="" class="form-control form-control-user"   >
                                    </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Prénom : </label>
                                    <input name="prenom" type="text" id="prenom" tabindex="2" size="25" value ="" class="form-control form-control-user"  >
                                    </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label>Sexe</label>
                                      <select name="sexe" size="1" id="sexe" tabindex="13" class="custom-select">
        <option>--</option>        <option>ذكر</option>
        <option>أنثى</option>
</select>                                    </div>
                                  
                                </div>
                                <div class="form-group row">
<div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >Discipline :   </label>
                                      <select name="sport" size="1" id="sport" tabindex="6" class="custom-select">
        <option>--</option>        <option></option>
        <option>وشوكونغ فو</option><option>كمبو</option><option>ديكايتو ريو</option><option>الدفاع عن النفس بودو</option><option>فوفينام فيات فوداو</option><option>فوت وات فان فوداوو و الأنشطة التابعة</option><option>هابكيدو</option><option>الكيسندو</option></select>                                    </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Degre : </label>
                                    <select name="degre" size="1" id="degre" tabindex="9" class="custom-select">
        <option>-- </option>
        <option>مدرب فدرالي</option>
        <option>درجة اولى</option>
        <option>درجة ثانية</option>
        <option>درجة ثالثه</option>
      </select>                                    </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label>Grade</label>
                                      <select name="grade" size="1" id="grade" tabindex="12" class="custom-select">
        <option> --</option>       
       <option>أسود درجة أولى</option>
       <option>أسود درجة ثانية</option>
       <option>أسود درجة ثالثة</option>
       <option>أسود درجة رابعة</option>
       <option>أسود درجة خامسة</option>
       <option>أسود درجة سادسة</option>
       <option>أسود درجة سابعة</option>
      </select>      </div>
                                  
                                </div>
                                <div class="form-group row">
<div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >Grade Arbitrage :   </label>
                                      <select name="gradear" size="1" id="degre2" tabindex="9"class="custom-select" >
        <option>--</option>
        <option>درجة اولى</option>
        <option>درجة ثانية</option>
        <option>درجة ثالثه</option>
         <option>جهوي</option>
       <option>مغاربي</option>
        <option>قاري</option>
        <option>إفريقي</option>
        <option>دولي</option>
      </select>                                    </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Type : </label>
                                    <select name="type" size="1" id="type" tabindex="9" class="custom-select">
        <option>--</option>
        <option>مسير</option>
        <option>ممرن</option>
        <option>مدرب فدرالي</option>
        <option>مرافق</option>
      </select>                                    </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label>Date Naissance :</label>
                                      <input name="naiss" type="date" id="naiss" tabindex="1" size="15" value="<?php echo $row['naiss'];?>" class="form-control form-control-user">                    </div>
                                  
                                </div> 
                                <div class="form-group row">
<div class="col-sm-4 mb-3 mb-sm-0">
                                      <label >CIN  :   </label>
                                      <input name="cin" type="text" id="nom2" tabindex="1" size="25" value =""  class="form-control form-control-user">                                </div>
                                    <div class="col-sm-4 col-sm-4 mb-3 mb-sm-0">
                                    <label>Photo : </label>
                                    <input name="photo" type="file" id="photo" size="1" tabindex="15" class="form-control-file">
                                  </div>
                                
                               
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                      <label>Diplome  :</label>
                                      <input name="photo2" type="file" id="diplome" size="1" tabindex="15" class="form-control-file">                    </div>
                                  
                                </div> 


<p align="center">
      <input type="submit" name="valider" id="valider" value="Valider" class="btn btn-primary">
  </p>
</form>
</div></div></div></div></div></div>
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
