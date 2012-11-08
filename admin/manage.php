<form method="pôst" action="processing/manage_page.php">
	<?php
		require('../lib/connect_bd.inc');
		$req = $bd->prepare("SELECT titre FROM articles");
		$req->execute();
		$data = $req->fetchAll();

		echo '<select id="title" name="title">';
		foreach($data as $row)
		{
			echo '<option>'.$row.'</option>';
		}
		echo '</select>';
	?>

	<label for="titre">Titre</label><br/>
	<input type="text" id="titre" name="titre" placeholder="Titre" /><br/>
	<label for="content">Contenu</label><br/>
	<textarea id="content" name="content" placeholder="Contenu de votre page"></textarea><br/>
	<!-- datepicker jquery ui -->
	<label for="acces">Accès</label>
	<?php 
		if($_SESSION['acces'] == "admin")
		{
			<input type="checkbox" id="acces" name="acces" />
		}
	?>
	<input type="submit" value="Éditer" />

</form>
