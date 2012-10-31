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
			$('#connectDiv').animate({top:(heightBox * -1)}, 1000, function() {
				etat = "up";
			});
		}
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').mouseenter(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:'+=5'}, 100);
			
	});
	
	//Petit bum lorsque la fenêtre est haute
	$('#bottomImage').mouseleave(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:'-=5'}, 100);
			
	});
	
	//Ajax connexion
	$(document.body).delegate('#submitBout', 'click', function() {
		
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
						$('#bottomImage').fadeOut();
						$('#connectForm').fadeOut(function() {
						
							$('#connectForm').load('admin/menu_admin.php', 
							function() {

								$('#connectForm').fadeIn();
								$('#nameUser').html($username);
						});
					});
					$('#error').fadeOut(); 
			}
			
		});
	});
	
	//Ajax déconnexion
	$(document.body).delegate('#lienDeco', 'click', function () {
			
			event.preventDefault();
			
			$.post('processing/deconnexion.php', {}, function() {
				
				$('#connectForm').fadeOut('fast', function() {
					
					$('#connectForm').load('admin/connexion_input.php', function() {
						$('#connectForm').fadeIn();
						$('.dontDisplay').fadeIn();
						$('#bottomImage').fadeIn();
					});	
				});
			});
	});
	
	//Fait apparaitre l'erreur lors de la connexion
	function ErrorGet($error) {
		
		$('#error').fadeIn();
		$('#error').html($error);
	}
	
});

