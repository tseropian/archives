<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$texte="<br><br><br><center>Les derni�res news du Physiweb ...</center><br><br><a href='newsreader.php?l=1'><b>Les archives</b></a><br><br><br>";
}else{
	$texte="<br><br><center>Latest news from Physiweb ...</center><br><br><a href='newsreader.php'><b>Archives</b></a><br><br><br>";
}
$news_query="SELECT * FROM physiweb_news order by ladate desc limit 0,5";
$news=mysqli_query($link, $news_query); // <-- updated
$news_texte="";
while ($news_ligne = mysqli_fetch_array($news)) { // <-- updated
	$news_texte=$news_texte."<font id=titre_news>".$news_ligne[5]."&gt;&gt;".$news_ligne[2-$l]."</font><br><font id=source>Source : ".$news_ligne[6]."</font><br>".$news_ligne[4-$l]."<br><br><br>";

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
