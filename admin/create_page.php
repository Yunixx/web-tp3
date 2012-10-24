<?php
session_start();
require('../param_bd.inc');

$db = new pdo('mysql:host='.$dbHote.'dbname='.$dbName, $dbUser, $dbPass);

$req = $db->prepare('INSERT INTO articles(titre, content, user_id, sujet_id) VALUE()')

?>
