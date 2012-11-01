$(document).ready(function() {
	
	 //Load le formulaire pour ajouter des utlisateurs
	 $(document.body).delegate('#addUser', 'click', function() {
	 	 $('#main').fadeOut('fast', function() {
		 	$('#main').load('admin/adduser.php');
		 	$('#main').fadeIn();
		 });
	 });
	 
	 //Fonction ajax 

});

