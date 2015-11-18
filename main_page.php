<!DOCTYPE html>

<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
		include('header.php');
	?>
	<div class="contener">
		<div class="news"></div>
		<table class="tab_games">
			<tr>
				<th>Consoles Portables</th>
				<th>Consoles de Salon</th>
				<th>PC</th>
			</tr>
			<tr>
				<td>
					<div class="left_col">
						<?php
							$jeux = 'FC_grp3_Jeux';
							$link = mysql_connect('test', 'info201a_user', 'com72');
							$retour = mysql_select_db('info201a',$link);
		
							if ($retour)
							{
								$requete="SELECT * FROM ".$jeux." ;";
								$result = mysql_query($requete,$link);
				
								if($result)
								{
									mysql_set_charset('utf8', $link);
									
									$tmp =0;
									while($data = mysql_fetch_array($result, MYSQL_ASSOC ))
									{
										if($tmp%2==0)
										{
											echo '<div class="obj_left">';
											echo '<a href="fiche.php?ID='.$data['ID'].'">';
											echo '<img src="IMG/GAME/'.$data["IMG"].'" alt= "Jaquette du jeux '.$data["Title"].'">';
											echo '<span>'.$data["Title"].'<br><br>Année : '.$data["Annee"].'<br>Editeur : '.$data["Editeur"].'<br>Developpeur : '.$data["Developeur"].'<br>Genre : '.$data["Genre1"].'/'.$data["Genre2"].'</span>';
											echo '</a>';
											echo '</div>';
										}
										else 
										{
											echo '<div class="obj_right">';
											echo '<a href="fiche.php?ID='.$data['ID'].'">';
											echo '<img src="IMG/GAME/'.$data["IMG"].'" alt= "Jaquette du jeux '.$data["Title"].'">';
											echo '<span>'.$data["Title"].'<br><br>Année : '.$data["Annee"].'<br>Editeur : '.$data["Editeur"].'<br>Developpeur : '.$data["Developeur"].'<br>Genre : '.$data["Genre1"].'/'.$data["Genre2"].'</span>';
											echo '</a>';
											echo '</div>';
										}
										$tmp++;
									}
								}
								else 
								{
									echo "Erreur <br> <a href='./authentification.html'>Retour</a>";
								}
							}
							else 
							{
								echo "Connexion impossible";		
							}
						?>
						<!--<div class="obj_left">
							<a href="fiche.php">
								<img src="images/games/portables/pokemon_bleu.png" alt="Jaquette du jeu ">
								<span>Pokémon Version Bleu<br><br>Année : 1996<br>Editeur : Nintendo<br>Developpeur : Game Freak<br>Genre : RPG/Aventure</span>
							</a>
						</div>
						<div class="obj_right">
							<a href="fiche.php">
								<img src="images/games/portables/pokemon_rouge.png" alt="Jaquette du jeu ">
								<span>Pokémon Version Rouge<br><br>Année : 1996<br>Editeur : Nintendo<br>Developpeur : Game Freak<br>Genre : RPG/Aventure</span>
							</a>-->
						</div>
					</div>
				</td>
				<td>
					<div class="center_col">
					
					</div>
				</td>
				<td>
					<div class="right_col">
					
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
