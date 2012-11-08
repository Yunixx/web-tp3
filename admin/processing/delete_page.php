<?php
session_start();
if(isset($_POST['title']) AND $_SESSION['acces'] == "admiN")
{
	try
	{
		require('../../lib/connect_bd.inc');

		$req = $bd->prepare("DELETE FROM articles WHERE titre = :letitre");
		$req->execute(
					array(
						'letitre' => $_POST['title'];
					));
		echo true;
	}catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
?>
