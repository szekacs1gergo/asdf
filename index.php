<?php
session_start();
include("kapcso.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta >
<title>
<?php 
if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		$cim="Kezdolap"									;else
	if 	($p=="szolga" && isset($_SESSION['userid'])) 	$cim="Szolgáltatásaink" 									;else
	if 	($p=="eler") 	$cim="Elérhetőségek"							;else
	if 	($p=="forum") 	$cim="Fórum" 					;else
	if 	($p=="rol") 	$cim="Rólunk" 								;else
	if 	($p=="ar") 		$cim="Áraink"								;else
	if 	($p=="kar" && isset($_SESSION['userid'])) 	$cim="Karrier"								;else
	if 	($p=="regist") 	$cim="Regisztráció"								;else
	if 	($p=="belep") 	$cim="Belépés"								;else
	if 	($p=="adatlap") $cim="Adatlap"								;else
	if 	($p=="jelszomodositas") $cim="Jelszó módosítása"								;else
	if 	($p=="felhmodositas") $cim="Felhasználónév módosítása"								;else
	if 	($p=="emmodositas") $cim="E-mail cím módosítása"								;else
	if 	($p=="profmod") $cim="Profilkép módosítása"								;else
	if 	($p=="chat") $cim="Csevegés"								;else
	
	print $cim;
?>
</title>
</head>
<body>
<div name="fejlec">
Menüs Weboldal
</div>



<div name="menu">
<?php
if(!isset($_SESSION['userid'])) 

print "
<a href='./'			>Kezdőlap</a>
<a href='./?p=gyik'		>GYIK</a>
<a href='./?p=rol'		>Rólunk</a>
<a href='./?p=eler'		>Elérhetőségek</a>
<a href='./?p=ar'		>Áraink</a>
<a href='./?p=regist'	>Regisztráció</a>
<a href='./?p=belep'	>Belépés</a>
";
else
{
print"
<a href='./'			>Kezdőlap</a>
<a href='./?p=szolga'	>Szolgáltatásaink</a>
<a href='./?p=forum'		>Fórum</a>
<a href='./?p=rol'		>Rólunk</a>
<a href='./?p=eler'		>Elérhetőségek</a>
<a href='./?p=ar'		>Áraink</a>
<a href='./?p=kar'		>Karrier</a>
<a href='./?p=chat'		>Csevegés</a>
<a href='logout.php'	target='kisablak'>Kilépés</a>
<br><br>Belépve mint:
<a href='./?p=adatlap'>$_SESSION[usn]</a>
";
}
?>

</div>
<hr>
<div name="tartalom">
<?php
	if(isset($_GET['p'])) $p=$_GET['p'];
	else $p="";
	if	($p=="") 		include("kezdolap.php")									;else
	if 	($p=="szolga" && isset($_SESSION['userid'])) 	include("szolga.php") 									;else
	if 	($p=="eler") 	include("elerhetosegek.php")							;else
	if 	($p=="forum") 	include("forum.php")					;else
	if 	($p=="rol") 	print 	"<h1>Rólunk</h1>" 								;else
	if 	($p=="ar") 		print 	"<h1>Áraink</h1>"								;else
	if 	($p=="kar" && isset($_SESSION['userid'])) 	print 	"<h1>Karrier</h1>"								;else
	if 	($p=="regist") 	include("regist.php")									;else
	if 	($p=="belep") 	include("belep.php")									;else
	if 	($p=="adatlap") include("adatlap.php")									;else
	if 	($p=="jelszomodositas") include("jelszo_form.php")									;else
	if 	($p=="felhmodositas") include("nchng.php")									;else
	if 	($p=="emmodositas") include("emmod.php")									;else
	if 	($p=="profmod") include("profmod.php")									;else
	if 	($p=="chat") include("chat.php")									;else
	print ("Error");
?>
</div>
</body>
</html>