function modal(id,content){
	if ($("#"+id).length == 0){
		$('body').append('<div id="'+id+'" class="modal" ></div>');
		$.ajax({
			url:content,
			success: function(data){
				$('#'+id).append('<div id="modal"><span class="modalClose">×</span>'+data+'</div>');
				var modal = document.getElementById(id);
				var span = document.getElementsByClassName("modalClose")[0];
				span.onclick = function(){
					modal.style.display = "none";
				}
				window.onclick = function(event){
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			},
			error: function (xhr,thrownError){
				$('#'+id).append('<div class="modAlert"><h3>'+content+'</h3><input class="modalAcept" type="button" value="Aceptar"></div>');
				$(".modalAcept").click(function(){
					$('#'+id).css('display','none');
				})
			}
		});
	}
}
function plus(){//objeto longPress
	var pressTimer;
	$('#plusCont').remove('#plusLogIn');
	if ($("#plus").length == 0){
		$('#plusCont').append('<img id="plus" class="plus" src="http://loopzone.org/wp-content/themes/LoopBlog/images/plus.png">');
		$('#plus').mousedown(function(){
			pressTimer = window.setTimeout(function() {
				
				if($('#userDash').length > 0){
					$('#userDash').css('display','flex');
				}else{
					modal('userDash','views/dashBoard.html');
					$('#userDash').css('display','flex');
				}
			},300);
		}).mouseup(function(){// evento click
			clearTimeout(pressTimer);
			//compartir RRSS 
		});
	}
}
function faceLogin(){
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1857724527809655',
			xfbml      : true,
			version    : 'v2.7'
		});
		statusUser();
	};

	function statusUser(){  
		FB.getLoginStatus(function(response){  
			if (response.status === 'connected'){
				plus();
			}else if(response.status === 'not_authorized'){
				modal('authModal','views/authorized.html');
			}else{
				$('#plusCont').append('<img id="plusLogIn" class="plus" src="http://loopzone.org/wp-content/themes/LoopBlog/images/fb.png">');
				$('#plusLogIn').click(function(){
					login();
				});
			} 
		}); 
	} 
	function login(){  
		FB.login(function(response){ 
			if (response['status']  == "unknown"){
				modal('authModal','views/authorized.html');
			}else{
			    statusUser();
			} 	  
		},{scope: 'public_profile, user_likes, user_friends, email'});  
	}
}
document.oncontextmenu = function(){return false;}
$(document).ready(function(){
	faceLogin();
	modal('pagLoop','views/viewLoop.html');
	modal('pagAbout','views/viewAbout.html');
	modal('pagTerms','views/viewTerm.html');
	modal('pagEmpresa','views/viewEmpresa.html');
	$('#viewLoop').click(function(){
		$('#pagLoop').css('display','flex');
	});
	$('#viewAbout').click(function(){
		$('#pagAbout').css('display','flex');
	});
	$('#viewTerm').click(function(){
		$('#pagTerms').css('display','flex');
	});
	$('#viewEmpresa').click(function(){
		$('#pagEmpresa').css('display','flex');
	});
});