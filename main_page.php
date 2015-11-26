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
		include('colonne.php');
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
							colonne(1);
						?>
						</div>
					</div>
				</td>
				<td>
					<div class="center_col">
						<?php
							colonne(2);
						?>
					</div>
				</td>
				<td>
					<div class="right_col">
						<?php
							colonne(3);
						?>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>