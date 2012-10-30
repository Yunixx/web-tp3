<?php require('../lib/header.inc'); ?>
<section id="main"><!-- #main content area -->
<p class="form_title">Créer une nouvelle page</p>
	<div id="create_form" title="Create a new page">
		<form method="post" action="processing/create_page.php" />
			<label for="titre">Titre: <label><br/>
			<input type="text" id="titre" name="titre" placeholder="Titre" /><br/>
			<label for="content">Contenu: </label><br/>
			<textarea id="content" name="content" placeholder="Contenu de votre article"></textarea><br/>
			<label for="username">Nom d'utilisteur: </label><br/>
			<?php 
				/*if($_SESSION['admin'] == "admin")
				{
					// mettre le checkbox pour réduire l'acces et la drop down list avec seulement les admins
					echo '<input type="checkbox" id="acces" name="acces" /><label for="acces">Restreindre</label><br/>';'
				}else
				{
					// mettre la drop down list avec les membres et les admins
				}*/
			?>
			<input type="submit" value="Créer la page" />
		</form>
	</div>
</section><!-- end of content -->
<?php require('../lib/footer.inc'); ?>
