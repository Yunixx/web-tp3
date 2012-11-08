<h1>Modification d'utilisateur</h1>
<div id="errorForm"></div>
<div id="confirmForm"></div>
<label>Utilisateurs : </label>
<select name="userGest">
<?php

	require('../lib/connect_bd.inc');
	
	$req = $bd->prepare('SELECT id, login FROM usagers');
	$req->execute();
	
	$data = $req->fetchAll();
	
	foreach($data as $content)
	{
		echo "<option value='" . $content['id'] . "'>" . $content['login'] . "</option>";
	}	
	
	$req->closeCursor();

?>
</select><br /><br />
<button id="editUserSub">Modifier</button>
<button id="eraseUserSub">Effacer</button>
