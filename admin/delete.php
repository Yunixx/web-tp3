<form method="post" action"admin/processing/delete_page.php">
<label for="pages_list">Articles à supprimer</label>
<?php
	require('../lib/db_connect.inc');

	$req = $bd->prepare("SELECT titre FROM articles");
	$req->execute();
	$data = $req->fetchAll();
	echo '<select>';
	foreach($data as $row)
	{
		echo '<option'.echo $row.'</option>';
	}
	echo '</select>';
?>
<input type="submit" value="Supprimer" />
</form>
