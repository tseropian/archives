<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$texte="<b><i>Une petite pensée pour des personnes<br> 
	sans lesquelles la réalisation de ce site internet <br>
	aurait été (beaucoup) plus dure ...</i></b>";
}else{
	$texte="<b><i>I would like to thank especially<br> 
	some people without whom the realisation of this site<br> 
	would have been (really a lot) more difficult...</i></b>";
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
	<img src="images/titles/credits.jpg">
</div>
<div id=main align=center>
<br><br><br>
<?php
	echo $texte;
?>
<br><br><br>
Devin Townsend & HDR staff [www.hevydevy.com]<br>
Roger Wessier<br>
Olivier Garnier<br>
Ryan [www.rvpdrums.com]<br>
Hairy Davy<br>
Antonin<br>
EmpireDead [www.irrealizm.com]<br>
oNico<br>
Elodie & Dragz [www.velvetmagazine.net]<br>
Omer [www.seventhframe.com]<br>
Geoff [www.deeppeace-design.com]<br>
Pince & Burn [www.sandandmercury.com]<br>
Sick.Again<br>
</div>
<?php
	include("include/bas.php");
?>
