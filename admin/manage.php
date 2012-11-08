<form method="pôst" action="processing/manage_page.php">
	<?php
		/**
		 * Mettre une dropdown liste avec les articles 
		 * et changer le contenu du form à l'aide de ajax
		 * dépendant la page choisie
		 **/
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
