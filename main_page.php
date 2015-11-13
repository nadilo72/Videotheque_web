<!DOCTYPE html>

<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
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
						/*
						foreach($array as $id)
						{
							echo '<div class="obj_left">';
								echo '<a href="fiche.php'.$id.'">';
									echo '<img src="'.$img.'" alt="'.$alt.'">';
									echo '<span>'.$name.'<br><br>Année : '.$year.'<br>Editeur : '.$Editeur.'<br>Developpeur : '.$Developpeur.'<br>Genre : '.$genre.'</span>';
								echo '</a>';
							echo '</div>';
						}
						*/
						?>
						<div class="obj_left">
							<a href="fiche.php">
								<img src="images/games/portables/pokemon_bleu.png" alt="Jaquette du jeu ">
								<span>Pokémon Version Bleu<br><br>Année : 1996<br>Editeur : Nintendo<br>Developpeur : Game Freak<br>Genre : RPG/Aventure</span>
							</a>
						</div>
						<div class="obj_right">
							<a href="fiche.php">
								<img src="images/games/portables/pokemon_rouge.png" alt="Jaquette du jeu ">
								<span>Pokémon Version Rouge<br><br>Année : 1996<br>Editeur : Nintendo<br>Developpeur : Game Freak<br>Genre : RPG/Aventure</span>
							</a>
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