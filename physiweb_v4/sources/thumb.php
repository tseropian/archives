<!--
Script trouvé sur http://www.phpscripts-fr.net
Modifié par Garth							garth6@caramail.com
Re modifié par Flying Nemo					bionicvisa@hotmail.com
Re Re modifié et Finalisé par Thoomis		webmaster@hevydevy.fr.st
 -->
<SCRIPT LANGUAGE="JavaScript">
function PopupQuiMarche(page,largeur,hauteur,options) {
  var top=(screen.height-hauteur)/2;
  var left=(screen.width-largeur)/2;
  window.open(page,"","top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options);
}
</SCRIPT>

<?php
// vérification du dir

require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if(isset($_GET['dir'])){
	$dir=$_GET['dir'];
}else{
	echo "ERROR";
}

if($l==1){
	$texte="Bienvenue dans la galerie photo du Physiweb :)<br>Toutes les photos restent la propriété de leur auteur.<br>Contactez les si vous voulez les réutiliser (e-mail sur les photo).";
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
<center>
<?php
// Start of PARAMETERS section
	$ishome='';
	$columns=4;                 		//number of images per line
	$ratio=1;                  			//ratio imageSize / thumbnailImageSize
//	$scriptname= $path.php";    	//filename of this script
// End of PARAMETERS section

//Initialisation des variables
	$counter=0;
	$nbfiles = 0;
	$currfile =  "";
	$fichier[0] =  "";
//Fin initialisation

	$mydirectory="images/galerie/$dir";
	$mydiraccesimggrande="images/galerie/$dir/pics/";
	$mydiraccesimgpetite="images/galerie/$dir/";

	$handle=opendir($mydirectory);
	while ($currfile = readdir($handle)){
		$currfilelien=$mydiraccesimggrande.$currfile;
		$currfile=$mydiraccesimgpetite.$currfile;
		$extension= strtolower(substr( strrchr( $currfile,  "." ), 1 ));
		if ($extension== "gif" || $extension== "jpg" || $extension== "jpeg"){
			$nbfiles++;
			$fichier[$nbfiles] = $currfile;
			if ($ishome==""){
				//size = GetImageSize($currfile);
				//$width = $size[0] / $ratio;
				//$height = $size[1] / $ratio;
				echo "<A href='javascript:PopupQuiMarche(\"pic.php?filename=$currfilelien\",800,600,\"menubar=no,scrollbars=YES,statusbar=no\")'><img src='$currfile'border=0 width=100 height=75></A>&nbsp;&nbsp;";
				$counter++;
				if ($counter == $columns){
					$counter = 0;
				    echo  "<br><br>";
				}
			}
		}
	}
	closedir($handle);
	?>
</center>
</div>
<?php
	include("include/bas.php");
?>
