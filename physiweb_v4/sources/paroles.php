<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$texte="Cliquez sur la pochette du disque dont vous voulez voir les paroles.";
}else{
	$texte="Click on the cover of the album you want to get the lyrics.";
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
	<img src="images/titles/<?php echo $l;?>/paroles.jpg">
</div>
<div id=main align=center>
<br><br><br>
<?php


if(isset($_GET['id'])){
	$id=$_GET['id'];
	include "paroles/$id.php";
}else{
	echo "$texte";
?>
	<br><br>
	<a href="paroles.php?l=<?php echo $l;?>&id=haarht"><img src="images/covers/thumb_syl_haarht.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=city"><img src="images/covers/thumb_syl_city.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=om"><img src="images/covers/thumb_om.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=nosleep"><img src="images/covers/thumb_syl_nosleep.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=infinity"><img src="images/covers/thumb_infinity.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=christep"><img src="images/covers/thumb_christep.jpg" height=70 width=70 border=0></a>
	<br><br>
	<a href="paroles.php?l=<?php echo $l;?>&id=phy"><img src="images/covers/thumb_phy.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=terria"><img src="images/covers/thumb_terria.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=syl"><img src="images/covers/thumb_syl_syl.jpg" height=70 width=70 border=0></a>
	<a href="paroles.php?l=<?php echo $l;?>&id=ae"><img src="images/covers/thumb_ae.jpg" height=70 width=70 border=0></a>
<?php
}
?>
</div>							
<?php
	include("include/bas.php");
?>
