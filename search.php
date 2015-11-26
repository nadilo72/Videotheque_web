<!DOCTYPE html>

<html>
<head>
	<title>Recherche</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="results">
		<?php		
			$search = $_GET["keyword"];
			$jeux = 'VR_grp3_Jeux';
			$link = mysql_connect('info.univ-lemans.fr', 'info201a_user', 'com72');
			$retour = mysql_select_db('info201a',$link);
			mysql_set_charset('utf8', $link);
			if($retour)
			{
				$requete = "SELECT * FROM ".$jeux." WHERE Title IS LIKE (".$search."%);";
				$result = mysql_query($requete,$link);
				if($result)
				{
					while($data=mysql_fetch_array($result, MYSQL_ASSOC))
					{
						echo "<div class= 'result'> <img alt = 'Jaquette du jeux ".$data["Title"]."' src = 'IMG/GAME/".$data["IMG"]."'/>";
						echo "<div class='data_result'>Nom : ".$data["Title"]."</div>";
					}				
				}
				else 
				{
					echo "Erreur dans la requete";
				}
			}
			else
			{
				echo "Erreur de connexion à la BDD";
			}
		?>	
	</div>
</body>
</html>