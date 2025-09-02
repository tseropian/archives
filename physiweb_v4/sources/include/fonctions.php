<?php

if(isset($_GET['l'])){
	$l=$_GET['l'];
}else{
	$l=0;
}

function compteur(){
	// $url=$_SERVER['REQUEST_URI'];
  	// $compteur_query = "SELECT * FROM physiweb_compteur WHERE adresse = '$url'";
	// $compteur_result = mysqli_query($link, $compteur_query);
	// if(mysql_num_rows($compteur_result)!=1){
	// 	$insert_compteur_query = "INSERT INTO physiweb_compteur (id, adresse, cpt) VALUES ('', '$url', '1');";
	// 	mysqli_query($link, $insert_compteur_query);
	// }else{
	// 	$compteur = mysql_fetch_object($compteur_result);
	// 	$cpt=$compteur->cpt+1;
	// 	mysqli_query($link, "UPDATE physiweb_compteur SET cpt=$cpt where adresse='$url'");
	// }
}

function do_menu($lang){

//	$chemin= strrchr( $adresse, "/" );  
//	$chemin= substr($chemin,1,strlen($chemin)-5);
	if($lang==1){
		echo"<a href=\"news.php?l=1\">news</a>_<a href=\"tour.php?l=1\">tour</a>_<a href=\"forum/\" target=\"_blank\">forum</a>_<a href=\"concerts.php?l=1\">concerts</a>_<a href=\"galerie.php?l=1\">galerie</a>_<a href=\"guestbook.php?l=1\">guestbook</a>_<a href=\"contact.php?l=1\">contact</a><br><a href=\"liens.php?l=1\">liens</a>_<a href=\"bio.php?l=1\">biographie</a>_<a href=\"paroles.php?l=1\">paroles</a>_<a href=\"dls.php?l=1\">downloads</a>_<a href=\"boots.php?l=1\">bootlegs</a><br><a href=\"presse.php?l=1\">presse</a>_<a href=\"fans.php?l=1\">fans</a>_<a href=\"sondages.php?l=1\">sondages</a>_<a href=\"credits.php?l=1\">credits</a>_<a href=\"aboutme\" target=\"_blank\">aboutme</a><br>";	}else{
		echo"<a href=\"news.php?l=0?l=0\">news</a>_<a href=\"tour.php?l=0\">tour</a>_<a href=\"forum/\" target=\"_blank\">forum</a>_<a href=\"concerts.php?l=0\">concerts</a>_<a href=\"galerie.php?l=0\">gallery</a>_<a href=\"guestbook.php?l=0\">guestbook</a>_<a href=\"contact.php?l=0\">contact</a><br><a href=\"liens.php?l=0\">links</a>_<a href=\"bio.php?l=0\">biography</a>_<a href=\"paroles.php?l=0\">lyrics</a>_<a href=\"dls.php?l=0\">downloads</a>_<a href=\"boots.php?l=0\">bootlegs</a><br><a href=\"presse.php?l=0\">press</a>_<a href=\"fans.php?l=0\">fans</a>_<a href=\"sondages.php?l=0\">polls</a>_<a href=\"credits.php?l=0\">credits</a>_<a href=\"aboutme\" target=\"_blank\">aboutme</a><br>";
	}
}
?>
