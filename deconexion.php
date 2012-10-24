<?php
/**
 * @Author : Justin Lavoie et Jonathan Roy
 * @File : description.php
 * @Description : Script permettant de déconnecter un utilisateur
 **/
session_start();
session_destroy();

// On retourne true pour dire 
// à Ajax que ça a fonctionné
echo true;
?>
