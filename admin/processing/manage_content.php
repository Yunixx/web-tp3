<?php

require('../../lib/connect_bd.inc');

$req = $bd->prepare("UPDATE articles SET titre = :titre, date = :date, content = :content, menu_titre = :menu_titre, acces = :acces");
$req->execute(array(
				'titre' => $_POST['titre'],
				'date' => $_POST['date'],
				'content' => $_POST['content'],
				'menu_titre' => $_POST['menu_titre'],
				'acces' => $_POST['acces']
));

?>
