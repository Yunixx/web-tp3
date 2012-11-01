<p class="form_title">Créer une nouvelle page</p>
	<div id="create_form" title="Create a new page">
		<form method="post" action="processing/create_page.php" />
			<label for="titre">Titre: <label><br/>
			<input type="text" id="titre" name="titre" placeholder="Titre" /><br/>
			<label for="menu_titre">Menu Titre:</label><br/>
			<input type="text" id="menu_titre" name="menu_titre" placeholder="Menu titre" /><br/>
			<label for="content">Contenu: </label><br/>
			<textarea id="content" name="content" placeholder="Contenu de votre article"></textarea><br/>
			<input type="checkbox" id="acces" name="acces" /><label for="acces">Restreindre</label><br/>
			<input type="submit" value="Créer la page" />
		</form>
	</div>
