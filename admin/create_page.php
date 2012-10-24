<?php
session_start();
require('../param_bd.inc');
if(isset($_SESSION['username']) AND isset($_SESSION['acces']))
{
	if($_SESSION['acces'] == "admin")
	{
		$db = new pdo('mysql:host='.$dbHote.'dbname='.$dbName, $dbUser, $dbPass);

		if(isset($_POST['titre']) AND isset($_POST['content']) AND isset($_POST['user_id']) AND isset($_POST['sujet_id']))
		{
			$req = $db->prepare('INSERT INTO articles(titre, content, user_id, sujet_id) VALUE(:titre, :content, :user_id, :sujet_id)');

			$req->execute(
				array(
					'titre' => $_POST['titre'],
					'content' => $_POST['content'],
					'user_id' => $_POST['user_id'],
					'sujet_id' => $_POST['sujet_id']
				));
		}
	}
	else
	{
		echo "L\'utilisateur n\'est pas administrateur !";
	}
}
else
{
	echo "L\'utilisateur n\'est pas connecté !";
}
?>
