<?php
require("include/dbopen.php");
require("include/fonctions.php");
compteur();
$liens_texte="";
if(isset($_GET['id_link'])){
	$id_link=$_GET['id_link'];
	
	$redir_query="SELECT * FROM physiweb_links WHERE id=$id_link";
	$redir=mysqli_query($link, $redir_query);
	$redir_ligne = mysqli_fetch_array($redir);
	$url=$redir_ligne[2];
	header("location: $url");

}

$annu_query="SELECT * FROM physiweb_annuaire";
$annu=mysqli_query($link, $annu_query);
$annu_texte="";
while ($annu_ligne = mysqli_fetch_array($annu)){
	$annu_texte=$annu_texte."<b><a href=\"liens.php?l=$l&cat=".$annu_ligne[0]."\">[".$annu_ligne[2-$l]."]<a/> </b>";
}
if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	
	$liens_query="SELECT * FROM physiweb_links WHERE cat=$cat ORDER BY titre asc";
	$liens=mysqli_query($link, $liens_query);
	
	while ($liens_ligne = mysqli_fetch_array($liens)){
		$liens_texte=$liens_texte."<b>".$liens_ligne[1]."</b> :: [<a href=\"liens.php?l=$l&id_link=".$liens_ligne[0]."\" target=\"_blank\">".$liens_ligne[2]."</a>]<br>";
	}
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
	<img src="images/titles/<?php echo $l;?>/liens.jpg">
</div>
<div id=main>				
<br>
<br>
<br>
<div align=center>
<?php echo $annu_texte;?>
</div>
<br><br>
<?php
	echo $liens_texte;
?>
<div align=center>
<br><br><br>
<a href="images/banner.jpg" target="_blank"><img src="images/banner.jpg" height=68 width=480 alt="http://www.physiweb.com/images/banner.jpg" border=0><br>
<i>http://www.physiweb.com/images/banner.jpg</i></a>
</div>				
</div>							
<?php
	include("include/bas.php");
?>
