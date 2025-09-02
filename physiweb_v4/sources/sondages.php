<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$texte="<br><br><b>/!\ EN CONSTRUCTION /!\</b>";
}else{
	$texte="<br><br><b>/!\ UNDER CONSTRUCTION /!\</b>";
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
				<img src="images/titles/<?php echo $l;?>/sondages.jpg">
			</div>
			<div id=main>				
<?php
	echo $texte;
?>				
			</div>							
<?php
	include("include/bas.php");
?>
