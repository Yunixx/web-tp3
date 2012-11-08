<h1>Création d'utilisateur</h1>
<div id="errorForm"></div>
<div id="confirmForm"></div>
<label>Nom de l'utilisateur : </label><input type="text" id="username" name="username" /><br /><br />
<label>Mot de passe : </label><input type="password" id="pass" name="pass" /><br /><br />

<label>Type d'utilisateur : </label><select name="typeUser" id="typeUser">
	<option value="admin">Administrateur</option>
	<option value="membre">Membre</option>
</select><br /><br />

<button id="submitCreateUser">Soumettre</button>