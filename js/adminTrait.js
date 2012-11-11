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
	 
	 //Fonction ajax pour assurer la suppression d'un usager
	 $(document.body).delegate('#eraseUserSub', 'click', function() {
	 
	 	var $idUser = $('#userGest').val();
	 
	 	$.post('admin/processing/delete_user.php', {'idUsager': $idUser}, function(answer) {
		 	
		 	if(answer == '1')
		 	{
		 		$('#main').load('admin/editUser.php', function() {
				 	$('#errorForm').fadeOut(function() {
			 			$('#confirmForm').fadeIn();
		 			});
		 			$('#confirmForm').html('<img src="images/check.gif" alt="" /> Utilisateur supprimé avec succès!');
	 			});
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
	 
	 //Fonction ajax pour assurer la modification d'un usager
	 $(document.body).delegate('#submitEditUser', 'click', function() {
	 
	 	
	 
	 });
	 
	 //Fonction ajax pour assurer la modifications des informations usager
	 $(document.body).delegate('#editUserSub', 'click', function() {
	 
	 	var $idUser = $('#userGest').val();
	 
	 	$.post('admin/processing/get_user_info.php', {'idUsager': $idUser}, function(answer) {
	 
		 	answer = answer.split(';');
	 
		 	//Apparition du formulaire
		 	if($('#modifUser').html() == "")
			{
			 	$('#modifUser').fadeOut('fast', function() {
				 	$('#modifUser').load('admin/form_gest_user.php');
				 	
				 	$('#modifUser').fadeIn(function() {
				 	$('#username').val(answer[0]);
					$('#pass').val(answer[1]);
				 	$('#typeUser').val(answer[2]);
				 	});
				});
			}
			else
			{
				$('#username').val(answer[0]);
				$('#pass').val(answer[1]);
			 	$('#typeUser').val(answer[2]);
			}
		 });
	 });
	 
	 //Fonction ajax ajouter utilisateur
	 $(document.body).delegate('#submitCreateUser', 'click', function() {
	 
	 	var $username = $('#username').val(),
	 		$password = $('#pass').val(),
	 		$type = $('#typeUser').val();
	 		
	 
	 	$.post('admin/processing/add_user.php', {'username': $username, 'password': $password, 'typeUser': $type}, function(answer) {
	 	
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

