 $(document).ready(function() {
	
	var etat = "up";
	
	//Animation box de connexion
	$('#bottomImage').click(function() {
		if(etat == 'up')
		{
			$('#connectDiv').animate({top:0}, 1000);
			etat = "down";
		}
		else
		{
			$('#connectDiv').animate({top:-150}, 1000);
			etat = "up";
		}
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').hover(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:-145}, 100);
			
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').mouseleave(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:-150}, 100);
	});
	
	//Ajax connexion
	$('submitBout').click(function() {
		
		var $username = $('#username').val(),
			$password = $('#password').val();
			
			$.post('processing/connexion.php', {'username': $username, 'password': $password }, function(answer) {
			alert(answer);		
		});
	});
	
});

