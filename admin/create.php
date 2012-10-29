<?php 
session_start();
require('../lib/connect_db.inc');
?>

<div id="create_form" title="Create a new page">
	<form method="post" action="processing/create_page.php" />
		<label for="titre">Titre<label><b4/>
		<input type="text" id="titre" name="titre" placeholder="Titre" /><br/>
		<label for="content">Contenu</label>
		<textarea id="content" name="content" placeholder="Contenu de votre article" cols="43" rows="10"></textarea><br/>
		<label for="username">Nom d'utilisteur</label>
		<?php if($_SESSION['admin'] == "admin")
		{
			// mettre le checkbox pour réduire l'acces et la drop down list avec seulement les admins
			<input type="checkbox" id="acces" name="acces" /><label for="acces">Restreindre</label><br/>
		}else
		{
			// mettre la drop down list avec les membres et les admins
		}
		<input type="submit" value="Créer la page" />
	</form>

</div>
