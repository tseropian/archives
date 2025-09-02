<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$texte="Le but de cette page est de rassembler tous les articles concernant <br>Devin de pr�s ou de loin, parus dans la presse mondiale :) 		<br><br>Si vous pensez �tre en possession d'une coupure int�ressante<br>ou vous connaissez un site ou figure une interview avec le grand, <br>n'h�sitez pas � me l'envoyer (sous forme �lectronique ou papier). Pour ca, une seule solution : le <a href=\"contact.php?l=1\">mail</a>";

}else{
	$texte="One of my goals is to gather all articles and interviews <br>about Devin issued in the world press. <br><br>If you think you own anything that could interest me, <br>just send me an e mail.";

}

include("include/dbopen.php");

function do_contenu_cat($categorie_id, $lang){
	global $link; // add this line
	$cat_contenu='';
	$articleid=mysqli_query($link, "SELECT * FROM physiweb_presse WHERE cat=$categorie_id ORDER BY ordre desc");
	while ($article = mysqli_fetch_array($articleid)){
		$lang_cont=$article[5];
		$cat_contenu=$cat_contenu."<tr><td width=90%>".$article[3-$lang]."</td><td width=10%><img src=\"images/".$lang_cont.".jpg\"></td></tr>
		<tr><td><br></td></tr>";
	}
	return $cat_contenu;
}



$requete = mysqli_query($link, "SELECT * FROM physiweb_presse_cat order by id");
$liste_presse='';
while ($ligne=mysqli_fetch_array($requete)){
$cat_id=$ligne[0];
$contenu_cat=do_contenu_cat($cat_id, $l);
$langu=2-$l;

$liste_presse=$liste_presse."<tr><td colspan=2><b>&nbsp;&nbsp;&gt;&gt;".$ligne[$langu].$contenu_cat."</b><br></td></tr>";			
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
	<img src="images/titles/presse.jpg">
	</div>
	
	<div id=main>
	<center>				
<?php
	echo $texte;
?>
	</center>
	<table width=100%>
<?php	 
	echo $liste_presse;
?>
	</table>
	</div>							
<?php
	include("include/bas.php");
?>
