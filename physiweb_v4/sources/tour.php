<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

$tour_query="SELECT * from physiweb_tour where online = '1' order by ladate asc";
$tour_result=mysqli_query($link, $tour_query);
if(mysqli_num_rows($tour_result)==0){
	if($l==1){
		$texte="<b>Pas de tourn�e pour l'instant :(</b>";
	}else{
		$texte="<b>No tourdates for the moment :(</b>";
	}
}else{
		while($tour=mysqli_fetch_array($tour_result)){
			$tour_date=$tour[1];
			$tour_ville=$tour[2];
			$tour_salle=$tour[3];
			$tour_groupe=$tour[4];
			//echo 
			
			$tour_tab="";
			$tour_tab=$tour_tab."<tr><td align=center width=15%>$tour_date</td><td align=center>$tour_ville</td><td align=center>$tour_salle</td><td align=center>$tour_groupe</td></tr>";
		}
	$texte="<i>SYL = Strapping Young Lad - dTb = Devin Townsend Band</i><br><br><table width=95% cellspacing=0 cellpadding=0>".$tour_tab."</table>";
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
	<img src="images/titles/tour.jpg">
</div>
<div id=main>
<br><br><br><center>				
<?php
	echo $texte;
?>				
</center>
</div>							
<?php
	include("include/bas.php");
?>
