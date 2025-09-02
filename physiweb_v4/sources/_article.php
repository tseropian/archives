<?
	include "include/head.php";
?>
</head>
<body leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<?
	include "include/haut.php";
	
	include("include/dbopen.php");
	$requete = mysqli_query($link, "SELECT * FROM articles WHERE id='$id'");
	$ligne=mysql_fetch_object($requete);
	$titre=$ligne->titre;
	$texte=$ligne->texte;
	$auteur=$ligne->auteur;
	include("include/dbclose.php");
	
	if($l==1){
		$retour="Retour � la section presse";
	}
	else{
		$retour="Back to Press section";
	}
?>
<div id="texte">
<table width=100% height=100% cellspacing=0 cellpadding=0>
<tr>
	<td valign=top bgcolor="#663333">
		<table width=100% cellspacing=0 cellpadding=0>
		<tr>
			<td bgcolor="#000000">
				<div align=right id=titre>
				<b>&gt;&gt;<? echo $titre; ?>&nbsp;&nbsp;</b>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		
		<tr>
			<td>
				<div align=center>
				<? echo "<a href=\"presse.php?l=$l\"><b>$retour</b></a>"; ?>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		
		<tr>
			<td>
				<div align=center>
				<table width=95% cellspacing=0 cellpadding=0>
				<tr>
					<td>
						<div align=justify>
						<? echo $texte; ?>
						</div>
					</td>
				</tr>
				</table>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		
		<tr>
			<td>
				<div align=right>				
						<b><? echo $auteur; ?></b>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		
		<tr>
			<td>
				<div align=center>
				<? echo "<a href=\"presse.php?l=$l\"><b>$retour</b></a>"; ?>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>				
