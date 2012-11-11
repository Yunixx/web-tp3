<?php

session_start();

//On s'assure que l'utilisateur est connectŽ et qu'il est un administrateur
if(isset($_SESSION['acces']) AND $_SESSION['acces'] == 'admin')
{
	//Un numŽro d'usager est bien passer au script
	if(isset($_POST['idUsager']))
	{
		require('../../lib/connect_bd.inc');
		
		$req = $bd->prepare('SELECT login, enc_password, acces FROM usagers WHERE id=:id');
		$req->execute(array('id' => $_POST['idUsager']));
		
		$data = $req->fetchAll();
		
		echo $data[0]['login'] . ";" . $data[0]['enc_password'] . ";" . $data[0]['acces'];
	}
	else
	{
		echo "Aucun utilisateur n'ˆ ŽtŽ sŽlectionnŽ!";
	}
}
else
{
	echo "Accs refusŽ!";
}


?>