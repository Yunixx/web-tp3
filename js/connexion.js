 $(document).ready(function() {
	
	//Monter la box de connexion
	$('#bottomImage').click(function() {
		$('#connectDiv').animate({top:0}, 1000);
	});
	
	$('#bottomImage').hover(function() {
		$('#connectDiv').animate({top:-145}, 100);
	});
	
});

