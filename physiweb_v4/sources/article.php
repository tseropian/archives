<?php
require("include/dbopen.php");
require("include/fonctions.php");
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	echo "ERREUR";
}
compteur();

include("include/dbopen.php");
	$requete=mysqli_query($link, "SELECT * FROM physiweb_articles WHERE id='$id'");
	$ligne=mysqli_fetch_object($requete);
	$titre=$ligne->titre;
	$texte=$ligne->texte;
	$auteur=$ligne->auteur;
	include("include/dbclose.php");

	if($l==1){
		$retour="Retour � la section presse";
	}
	else{
		$retour="Back to press section";
	}
require("include/head.php");
?>
</head>
<body leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<?php
	include("include/haut.php");
?>
	<div id=titre>
		<img src="images/titles/live.jpg">
	</div>
	<div id=main>				
<?php
	echo "$titre<br><br><a href=\"presse.php?l=$l\"><b>$retour</b></a><br><br>$texte<br><br>$auteur<br><br><a href=\"presse.php?l=$l\"><b>$retour</b></a>";
?>				
	</div>							
<?php
	include("include/bas.php");
?>
