<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();
if($l==1){
	$texte="<br><br><center>Les archives du Physiweb ...</center><br>";
	
}else{
	$texte="<br><br><center>Archives from Physiweb ...</center><br>";
}
$news_texte="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$news_query="SELECT * FROM physiweb_news WHERE id='$id'";
	$news=mysqli_query($link, $news_query);
	while ($news_ligne = mysqli_fetch_array($news)) {
		$news_texte=$news_texte."<center><a href='newsreader.php?l=$l'><b>&lt;&lt;</b></a></center><bR><br><font id=titre_news>".$news_ligne[5]."&gt;&gt;".$news_ligne[2-$l]."</font><br><font id=source>Source : ".$news_ligne[6]."</font><br>".$news_ligne[4-$l]."<br><br><br>";
	}
}else{
	$news_query="SELECT * FROM physiweb_news ORDER BY ladate DESC";
	$news=mysqli_query($link, $news_query);
	
	while ($news_ligne = mysqli_fetch_array($news)) {
		$ligne_id=$news_ligne[0];
		$ligne_date=$news_ligne[5];
		$ligne_titre=$news_ligne[2-$l];
		$news_texte=$news_texte."<font id=titre_news>$ligne_date&gt;&gt;</font><a href='newsreader.php?l=$l&id=$ligne_id'>$ligne_titre</a><br><br>";
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
				<img src="images/titles/news.jpg">
			</div>
			<div id=main>				
<?php
	echo $texte;
	echo $news_texte;
?>				
			</div>							
<?php
	include("include/bas.php");
?>
