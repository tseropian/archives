<?php
require("include/dbopen.php");
require("include/fonctions.php");

compteur();

if($l==1){
	$signer="<b>Laissez une trace de votre passage ;)</b>";
	$suivants="10 suivants >>";
	$precedents="<< 10 pr�cedents";
}else{
	$signer="<b>Leave a trace ...</b>";
	$suivants="10 next messages >>";
	$precedents="<< 10 previous messages";
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
	<img src="images/titles/guestbook.jpg">
</div>

<div id=main>
<br>
<br>
<br>				
<?php
include "include/dbopen.php";
class db_sql {
	var $record;
	function fetch_array($query_id){
		$this->record = mysqli_fetch_array($query_id, MYSQLI_ASSOC); // fixed
		return $this->record;
	}
}
										
if (!isset($_GET['entry']) || !is_numeric($_GET['entry'])) {
	$entry = 0;
} else {
	$entry = (int)$_GET['entry'];
	if ($entry < 0) $entry = 0;
}
$db_connect = new db_sql;
$sql_result = mysqli_query($link, "select count(*) as total from physiweb_guestbook");
$db_connect->fetch_array($sql_result);
$total = $db_connect->record['total'];
if ($entry >= $total) $entry = max(0, $total - 10);
$next_page = $entry+10;
$prev_page = $entry-10;
$navigation ='';
$current_page = floor($entry / 10) + 1;
$total_pages = ceil($total / 10);

if ($prev_page >= 0){
	$navigation = "<td><a href='guestbook.php?l=$l&entry=$prev_page'>$precedents</a></td>";
}else{
	$navigation = "<td>&nbsp;</td>";
}

$navigation .= "<td align=center><b>Page $current_page / $total_pages</b></td>";

if ($next_page < $total) {
	$navigation = $navigation. "<td align=right><a href='guestbook.php?l=$l&entry=$next_page'>$suivants</a></td>";
}else{
	$navigation = $navigation."<td align=right>&nbsp;</td>";
}

$requete = mysqli_query($link, "SELECT * FROM physiweb_guestbook where ligne=0 order by id desc limit " . (int)$entry . ", 10");
?>
<center>
<table width=90% cellpadding=0 cellspacing=0>
<tr>
	<td colspan=2 align=right>
<?php		echo"<a href=\"signer.php?l=$l\">$signer</a>";?>
		<br>
		<br>
	</td>
</tr>

<tr>
	<?php echo $navigation; ?>
	
</tr>
<?php
while ($ligne = mysqli_fetch_object($requete)) { // fixed
	echo "<tr>";
	echo "<td colspan=2><hr color=000000 size=1 width=50%></td>";
	echo "</tr><tr>";
	echo "<td colspan=2><br></td>";
	echo "</tr><tr>";
	echo "<td align=left><b>$ligne->name</b></td>";
	echo "<td align=right><b>$ligne->ladate</b></td>";
	echo "</tr><tr>";
	if ($ligne->email) echo "<td align=left><a href='mailto:$ligne->email'><b>$ligne->email</b></a></td>";
	else echo "<td>&nbsp;</td>";
	if ($ligne->pays) echo "<td align=right><b>$ligne->pays</b></td>";
	else echo "<td>&nbsp;</td>";
	echo "</tr><tr>";
	echo "<td>&nbsp;</td>";
	echo "<td>&nbsp;</td>";
	echo "</tr><tr>";
	echo "<td colspan=2 align=justify>$ligne->comment</td>";
	echo "</tr><tr>";
	echo "<td>&nbsp;</td>";
	echo "<td>&nbsp;</td>";
	if ($ligne->url && $ligne->url!='http://') echo "</tr><tr><td colspan=2 align=center><a href='$ligne->url' target=_blank><b>$ligne->url</b></a></td>";
	echo "</tr>";
}
?>
<tr><td colspan=2><br></td>
</tr></table>
			
</center>
</div>				
<?php
	include("include/bas.php");
?>
