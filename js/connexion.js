 $(document).ready(function() {
	
	var etat = "up";
	
	//Monter la box de connexion
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
	
	//Petit bum lorsque la fen�tre est haute
	$('#bottomImage').hover(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:-145}, 100);
			
	});
	
	//Petit bum lorsque la fen�tre est haute
	$('#bottomImage').mouseleave(function() {
		if(etat == "up")
			$('#connectDiv').animate({top:-150}, 100);
	});
	
});

