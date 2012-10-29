/**
 * @Author : Justin Lavoie <jlavoie1602@gmail.com>
 * @File : create_form,js
 * @Description : Formulaire de création de page utilisant jquery ui
 **/

$(document).ready(function(){

	$('#load').click(function(){
		$('#bg').fadeIn();
		$('#load-div').load('create.html');
		$('#load-div').dialog({draggable: false});
	});
});
