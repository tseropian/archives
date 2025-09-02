<?
	include "include/head.php";
?>
</head>
<body leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<?
	include "include/haut.php";
					
					if ($id) {
						include "paroles/$id.php";
							} 
					else {
					if ($l==1)
						{
						 echo("
						 		<div id=texte>
								<table width=100% height=100% cellspacing=0 cellpadding=0>
								<tr>
								<td valign=top bgcolor=\"#663333\">
								<table width=100% cellspacing=0 cellpadding=0>
								<tr>
									<td bgcolor=\"#000000\">
										<div align=right id=titre>
										&gt;&gt;Les paroles&nbsp;&nbsp;
										</div>
									</td>
								</tr>

								<tr>
									<td bgcolor=\"#663333\">
										<br>
									</td>
								</tr>
								
								<tr>
									<td bgcolor=\"#663333\">
 										<div align=center>						 													
										<img src=\"img/covers/thumb_syl_haarht.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_syl_city.jpg\" height=70 width=70 border=0></a>
										<a href=\"paroles.php?l=1&id=om\"><img src=\"img/covers/thumb_om.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_syl_nosleep.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_infinity.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_christep.jpg\" height=70 width=70 border=0></a>
										<br><br>
										<a href=\"paroles.php?l=1&id=phy\"><img src=\"img/covers/thumb_phy.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_terria.jpg\" height=70 width=70 border=0></a>
										</div>
									</td>
								</tr>
								</table>
								</td>
								</tr>
								</table>								
								");
						}
					else 
						{
						 echo("
<div id=texte>
								<table width=100% height=100% cellspacing=0 cellpadding=0>
								<tr>
								<td valign=top bgcolor=\"#663333\">
								<table width=100% cellspacing=0 cellpadding=0>
								<tr>
									<td bgcolor=\"#000000\">
										<div align=right id=titre>
										&gt;&gt;Lyrics&nbsp;&nbsp;
										</div>
									</td>
								</tr>

								<tr>
									<td bgcolor=\"#663333\">
										<br>
									</td>
								</tr>
								
								<tr>
									<td bgcolor=\"#663333\">
 										<div align=center>						 			
										<img src=\"img/covers/thumb_syl_haarht.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_syl_city.jpg\" height=70 width=70 border=0></a>
										<a href=\"paroles.php?l=0&id=om\"><img src=\"img/covers/thumb_om.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_syl_nosleep.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_infinity.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_christep.jpg\" height=70 width=70 border=0></a>
										<br><br>
										<a href=\"paroles.php?l=0&id=phy\"><img src=\"img/covers/thumb_phy.jpg\" height=70 width=70 border=0></a>
										<img src=\"img/covers/thumb_terria.jpg\" height=70 width=70 border=0></a>
										</div>
									</td>
								</tr>
								</table>
								</td>
								</tr>
								</table>		
							");						
						}}
					?>
					
</table>
</body>
</html>
