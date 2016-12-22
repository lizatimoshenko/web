var login=document.getElementById("modal");
var btnIn=document.getElementById("signIn");
var closeBtn = document.getElementById("close");


	
closeBtn.onclick = function(e){
	login.style.display='none';
}
btnIn.onclick=function(event){
	login.style.display='block';
}
window.onclick=function(event){
  if (event.target==modal){
	login.style.display='none';
	}
}
var modal=document.getElementById("modal-register");
var btn=document.getElementById("signUp");
var closeBtn1 = document.getElementById("Layer_1");

	
closeBtn1.onclick = function(e){
	modal.style.display='none';
}
btn.onclick=function(event){
	modal.style.display='block';
}

window.onclick=function(event){
  if (event.target==modal){
	modal.style.display='none';
	}
}


		
		
