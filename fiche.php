<!DOCTYPE html>
<html>
   <head>
     <title>fiche</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>
   
   <body>
   
     <?php include('header.php'); ?>
     
     <div class="game_core">
     
			<div class="div_img">
				<?php
					$Base="info201a";
					$Serveur="info.univ-lemans.fr";
					$Utilisateur="info201a_user";
					$MotDePasse="com72";

					$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

					$retour=mysql_select_db($Base,$LienBase);
			
					$id=2;//$_GET["ID"];
					
					mysql_set_charset('utf8',$LienBase);
					$Requete="SELECT * FROM FC_grp3_Jeux WHERE ID=".$id.";";
					$Response=mysql_query($Requete);
					$data=mysql_fetch_array($Response, MYSQL_ASSOC);
					if(!$retour)
					{
						echo "Connexion à la base impossible";
					}
					else
					{
						$imgpath=$data['IMG'];
					}
		
					echo "<img src=IMG/GAME/".$imgpath." alt='jaquette de ".$id."'>"
				?>	
			</div>
			
	
			<div class="game_info">
			<?php
				
				
				if(!$retour)
				{
					echo "Connexion à la base impossible";
				}
				else
				{					
					$Title=$data['Title'];
					$Description=$data['Description'];			
					$Editeur=$data['Editeur'];
					$Developeur=$data['Developeur'];
					$genrea=$data['Genre1'];
					$genreb=$data['Genre2'];
				}
				echo
				"<ul class='Description'><li>Titre du jeux : ".$Title."</li><br>
				<li>Description : ".$Description."</li><br>
				<li>Editeur : ".$Editeur."</li><br>
				<li>Developeur : ".$Developeur."</li><br>";
				if (!empty($genreb))
				{
					echo "<li>Genres : ".$genrea." / ".$genreb."</li></ul>";
				}
				else
				{
					echo "<li>Genres : ".$genrea."</li></ul>";
				}
				
					
			?>
			</div>
		</div>
		
   </body>
</html>
