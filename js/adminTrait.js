$(document).ready(function() {
	
	 //Load le formulaire pour ajouter des utlisateurs
	 $(document.body).delegate('#addUser', 'click', function() {
	 	 $('#main').fadeOut('fast', function() {
		 	$('#main').load('admin/adduser.php');
		 	$('#main').fadeIn();
		 });
	 });
	
	 //Load le formulaire pour modifier des utilisateurs
	 $(document.body).delegate('#editUser', 'click', function() {
	 	 $('#main').fadeOut('fast', function() {
		 	$('#main').load('admin/editUser.php');
		 	$('#main').fadeIn();
		 });
	 });
	 
	 //Fonction ajax ajouter utilisateur
	 $(document.body).delegate('#submitCreateUser', 'click', function() {
	 
	 	var $username = $('#username').val(),
	 		$password = $('#pass').val(),
	 		$type = $('#typeUser').val();
	 		
	 
	 	$.post('admin/processing/add_user.php', {'username': $username, 'password': $password, 'typeUser': $type }, function(answer) {
	 	
	 		if(answer == '1')
	 		{
	 			$('#errorForm').fadeOut(function() {
		 			$('#confirmForm').fadeIn();
	 			});
	 			$('#confirmForm').html('<img src="images/check.gif" alt="" /> Utilisateur ajouté avec succès!');
	 			$('#username').val("");
	 			$('#pass').val("");
	 			$('#typeUser').val("admin");
	 		}
	 		else
	 		{
	 			$('#confirmForm').fadeOut(function() {
		 			$('#errorForm').fadeIn();
	 			});
	 			$('#errorForm').html("<img src='images/error.png' alt='' />" + answer);
	 		}
		});
	 
	 });
});

