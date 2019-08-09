$(document).ready(function(){

	$('.sidenav').sidenav();
	$('.tabs').tabs();
	$('.collapsible').collapsible();
	$('.fixed-action-btn').floatingActionButton();

	$('#btnLogin').click(function(){
		$('#loginBox').slideDown();
		$('#btnLogin').hide();
	});

	/*$('#btnLoginNav').click(function(){
		$('#loginBox').slideDown();
		$('.sidenav').sidenav('close');
		$('#btnLoginNav').hide();
	});*/

	$('#btnLoginPc').click(function(){
		$('#loginBox').slideDown();
		$('#btnLogin').hide();
	});

});

/*$('#btnLogin').onclick($('#btnLogin').animation(function(){
	var height = $(document).height();
	var width = $(document).width();
	var right = $('#btnLogin').marginRight();
	var left = $('#btnLogin').marginLeft();
	var comp = $('#btnLogin').width();

	while(left>2){

	}
}));*/