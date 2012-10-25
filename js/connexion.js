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
	$('#submitBout').click(function(event) {
		
		var $username = $('#username').val(),
			$password = $('#password').val(),
			$remember = $('input[name=remember]').is(':checked');
			
			event.preventDefault();	
			
			$.post('processing/connexion.php', {'username': $username, 'password': $password, 'remember': $remember }, function(answer) {
			alert(answer);		
		});
	});
	
});

