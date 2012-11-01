<div id="connectForm">
    	<?php
    	
    	if(isset($_SESSION['id']))
    	{
	    	include('admin/menu_admin.php');	
    	}
    	else
    	{
    	?>
    	<h2>Connexion</h2>
    	<div id="error">
    	Message d'erreur
    	</div>
    	<form action="#" method="post">
		<label>Pseudo : </label><br /><input type="text" id="username" name="username" value='<?php echo $username; ?>' /><br />
		<label>Mot de passe :</label><br /><input type="password" id="password" name="password" value='<?php echo $pass; ?>'/>
		<input type="checkbox" id="remember" value="Remember" name="remember" checked="<?php echo $check; ?>" /><span id="rememberLabel">Se souvenir de moi</span>
		<input type="button" id="submitBout" value="Se connecter" />
    	</form>
    	<?php } ?>
</div>