<?php
session_start();

//On s'assure que l'utilisateur est connecté et qu'il est un administrateur
if(isset($_SESSION['acces']) AND $_SESSION['acces'] == 'admin')
{
	//Un numéro d'usager est bien passer au script
	if(isset($_POST['idUsager']))
	{
		require('../../lib/connect_bd.inc');
		
		$req = $bd->prepare('DELETE FROM usagers WHERE id=:id');
		$req->execute(array('id' => $_POST['idUsager']));
		
		echo "1";
	}
	else
	{
		echo "Aucun utilisateur n'à été sélectionné!";
	}
}
else
{
	echo "Accès refusé!";
}

?>