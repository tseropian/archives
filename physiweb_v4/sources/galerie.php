<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

$galerie_requete = mysqli_query($link, "SELECT * FROM physiweb_galerie order by reference desc");
$galerie_texte = '';

while ($galerie_row = mysqli_fetch_array($galerie_requete)){
	$ref=$galerie_row[1];
	$nom_galerie=$galerie_row[3-$l];
	if($galerie_row[4]!='0000-00-00'){$date_galerie=$galerie_row[4];}
	else{$date_galerie= '&nbsp;';}
	$galerie_texte=$galerie_texte."<tr><td width=75%><a href=\"thumb.php?l=$l&dir=$ref\">$nom_galerie</a></td><td width=25%>$date_galerie</b></td></tr>";
}
if($l==1){
	$texte="Bienvenue dans la galerie photo du Physiweb :)<br>Toutes les photos restent la propri�t� de leur auteur.<br>Contactez les si vous voulez les r�utiliser (e-mail sur les photo).";
}else{
	$texte="Welcome in the Physiweb pictures gallery :)<br>Every pic has a copyright.<br>Ask its author before re uising it.";
}

require("include/dbclose.php");
require("include/head.php");
?>
</head>
<body leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<?php
	include("include/haut.php");
?>
<div id=titre>
	<img src="images/titles/<?php echo $l;?>/galerie.jpg">
</div>
<div id=main>
<center>
<br>
<br>
<?php
	echo $texte;
?>
<br><br>
<table width=80% cellspacing=0 cellpadding=0 border=0>
<?php
	echo $galerie_texte;
?>
</table>
</center>
</div>
<?php
	include("include/bas.php");
?>
