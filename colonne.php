<?php
	function colonne($type)
	{
		$jeux = 'VR_grp3_Jeux';
		$support = 'VR_grp3_Supports';	
		$link = mysql_connect('info.univ-lemans.fr', 'info201a_user', 'com72');
		$retour = mysql_select_db('info201a',$link);
		mysql_set_charset('utf8', $link);
		if ($retour)
		{
			$requete="SELECT * FROM ".$jeux." WHERE `Support` IN ( SELECT ID FROM ".$support." WHERE TYPE =".$type." );";
			$result = mysql_query($requete,$link);
			if($result)
			{
				$tmp =0;
				while($data = mysql_fetch_array($result, MYSQL_ASSOC ))
				{
					if($tmp%2==0)
					{
						echo '<div class="obj_left">';
						echo '<a href="fiche.php?ID='.$data['ID'].'">';
						echo '<img src="IMG/GAME/'.$data["IMG"].'" alt= "Jaquette du jeux '.$data["Title"].'">';
						echo '<span>'.$data["Title"].'<br><br>Année : '.$data["Annee"].'<br>Editeur : '.$data["Editeur"].'<br>Developpeur : '.$data["Developpeur"].'<br>Genre : '.$data["Genre1"].'/'.$data["Genre2"].'</span>';
						echo '</a>';
						echo '</div>';
					}
					else
					{
						echo '<div class="obj_right">';
						echo '<a href="fiche.php?ID='.$data['ID'].'">';
						echo '<img src="IMG/GAME/'.$data["IMG"].'" alt= "Jaquette du jeux '.$data["Title"].'">';
						echo '<span>'.$data["Title"].'<br><br>Année : '.$data["Annee"].'<br>Editeur : '.$data["Editeur"].'<br>Developpeur : '.$data["Developpeur"].'<br>Genre : '.$data["Genre1"].'/'.$data["Genre2"].'</span>';
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
		mysql_close($link);
	}
?>