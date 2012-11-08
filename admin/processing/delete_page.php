<?php
require('../../lib/connect_bd.inc');

$req = $bd->prepare("DELETE FROM articles WHERE titre = :letitre");
$req->execute(
			array(
				'letitre' => $_POST['title'];
			));
echo true;

?>
