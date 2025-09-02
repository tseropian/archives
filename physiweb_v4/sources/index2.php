<?php
if(isset($_GET['l'])){
	$l=$_GET['l'];
}else{
	$l=0;
	}

	$fichier="./cpt.txt";
	$fp = @fopen($fichier, "r");
	$visites = fgets($fp, 8);
	fclose($fp);                               	
	
	if (!(isset($hevydevy) && $hevydevy=="compteur")){	
		$visites++;	
		setcookie("hevydevy","compteur",time()+2*360,"");	
		$fp = @fopen($fichier, "w");	fputs($fp, $visites);	fclose($fp);	
	}
	
	$link= @mysql_connect("localhost","root","");	
	if ($link){
		$connexion_reussie= @mysql_selectdb("hevydevy_v4");	
		if ($connexion_reussie){
			Header("location: news.php?l=$l");
		}else{
			echo "Naviguer sur le Physiweb nécessite la connexion à une base de donnée.<br>Cette dernière a échouée.<BR>Désolé ....";				
		}	
	}	
?>
