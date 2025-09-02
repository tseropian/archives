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
				<img src="images/titles/contact.jpg">
			</div>
			<div id=main>				
			<br>
			<br>
			<b>:: Physiweb ::</b><br>
			<br>
			<b>[E-Mail] :: </b>followtheway at physiweb dot com<br>
			<br>
			<b>[ICQ] ::</b> <a href='http://wwp.icq.com/scripts/contact.dll?msgto=70067306'><img src='http://wwp.icq.com/scripts/online.dll?icq=67285053&img=5' border=0 width=18 height=18><b>70067306</b></a><br>
			<br>
			<b>[MSN] :: </b>thoomis at hotmail dot com<br>
			<br>
			<br>
			<b>:: Hevy Devy Records ::</b><br>
			<br>
			[E-Mail] :: hevydevy at shaw dot ca<br>
			<br>
			<br>
			<b>:: Strapping Young Lad ::</b><br>
			<br>
			<b>[E-Mail] :: </b>strappingyounglad at strappingyounglad dot com<br>	
			</div>							
<?php
	include("include/bas.php");
?>
