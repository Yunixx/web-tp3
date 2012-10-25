 $(document).ready(function() {
	
	var etat = "up",
	    heightBox = $('#connectDiv').height();
	
	//Animation box de connexion
	$('#bottomImage').click(function() {
		if(etat == 'up')
		{
			$('#connectDiv').animate({top:0}, 1000);
			etat = "down";
		}
		else
		{
			$('#connectDiv').animate({top:(heightBox * -1)}, 1000);
			etat = "up";
		}
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').hover(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:(heightBox * -1 + 5)}, 100);
			
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').mouseleave(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:(heightBox * -1)}, 100);
	});
	
	//Ajax connexion
	$('#submitBout').click(function(event) {
		
		var $username = $('#username').val(),
			$password = $('#password').val(),
			$remember = $('input[name=remember]').is(':checked');
			
			event.preventDefault();	
			
			$.post('processing/connexion.php', {'username': $username, 'password': $password, 'remember': $remember }, function(answer) {
			
			if(answer != '1')
			{
				ErrorGet(answer);	
				$('#connectDiv').height(178);
				heightBox = $('#connectDiv').height();
			}
			else
			{
				
			}
			
		});
	});
	
	//Fait apparaitre l'erreur lors de la connexion
	function ErrorGet($error) {
		
		$('#error').fadeIn();
		$('#error').html($error);
	}
	
});

