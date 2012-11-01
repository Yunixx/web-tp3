<?php 
session_start();
require('../lib/header.inc'); 
?>
<section id="main"><!-- #main content area -->
<p class="form_title">Créer une nouvelle page</p>
	<div id="create_form" title="Create a new page">
		<form method="post" action="processing/create_page.php" />
			<label for="titre">Titre: <label><br/>
			<input type="text" id="titre" name="titre" placeholder="Titre" /><br/>
			<label for="menu_titre">Menu Titre:</label><br/>
			<input type="text" id="menu_titre" name="menu_titre" placeholder="Menu titre" /><br/>
			<label for="content">Contenu: </label><br/>
			<textarea id="content" name="content" placeholder="Contenu de votre article"></textarea><br/>
			<label for="username">Nom d'utilisteur: </label><br/>
			<?php 
				/*if($_SESSION['acces'] == "admin")
				{
					// mettre le checkbox pour réduire l'acces et la drop down list avec seulement les admins
					$req = $bd->prepare("SELECT login FROM usagers WHERE acces = admin");
					$req->execute();
					$data = $req->fetchAll();
					echo '<select>';
					foreach($data as $row)
					{
						echo '<option>'.$row.'</option>';
					}
					echo '</select>';
					echo '<input type="checkbox" id="acces" name="acces" /><label for="acces">Restreindre</label><br/>';
				}else
				{
					$req = $bd->prepare("SELECT login FROM usagers");
					$req->execute();
					$data = $req->fetchAll();

					echo '<select>';
					foreach($data as $row)
					{
						echo '<option>'.$row.'</option>';
					}
					echo '</select>';
				}*/
			?>
			<input type="submit" value="Créer la page" />
		</form>
	</div>
</section><!-- end of content -->
<?php require('../lib/footer.inc'); ?>
