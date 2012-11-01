<h4>Bienvenue <?php 

if(isset($_SESSION['id']))
	echo $_SESSION['login'];

else
{
	?>
	<span id="nameUser"></span>	
<?php
}	
 ?>!</h4>
    		
    		<ul>
    			<a href="#"><li>- <span id="addPage">Ajouter une page</span></li></a>
    			<a href="#"><li>- <span id="editPage">Éditer une page</span></li></a>
    			<a href="#"><li>- <span id="delPage">Supprimer des articles</span></li></a>
    			<a href="#"><li>- <span id="addUser">Ajouter un utilisateur</span></li></a>
    			<a href="#"><li>- <span id="editUser">Gestion des utilisateurs</span></li></a>
    		</ul>
    		<a href="#"><span id="lienDeco">Déconnexion</span></a>
