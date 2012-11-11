<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['acces']))
{
	if($_SESSION['acces'] == "admin")
	{
		require('../lib/connect_db.inc');

		if(isset($_POST['titre']) AND isset($_POST['content']) AND isset($_POST['user_id']) AND isset($_POST['sujet_id']))
		{
			try{
				$req = $db->prepare('INSERT INTO articles(titre, content, user_id, sujet_id) VALUE(:titre, :content, :user_id, :sujet_id)');

				$req->execute(
					array(
						'titre' => $_POST['titre'],
						'content' => $_POST['content'],
						'user_id' => $_POST['user_id'],
						'sujet_id' => $_POST['sujet_id']
					));
				echo true;
			}catch(Exception $e)
			{
				echo $e->getMessage();
			}
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
