<?php

session_start();

if(isset($_SESSION['login']))
{

	if(isset($_POST['username']) AND $_POST['username'] != NULL AND isset($_POST['password']) AND $_POST['password'] != NULL))
	{
		
	}
	
	else
	{
		echo "Veuillez remplir tous les champs!";
	}

}

else
{
	echo "Veuillez vous connecter pour accder ˆ cette page!";
}

?>