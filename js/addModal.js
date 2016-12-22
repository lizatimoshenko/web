var addModal=document.getElementById("add-modal");
var addBtn=document.getElementById("add");
var closeBtn2 = document.getElementById("Layer_2");

closeBtn2.onclick = function(){
	addModal.style.display='none';
}

addBtn.onclick=function(event){
	addModal.style.display='block';
		
		}
window.onclick=function(event){
		if (event.target==addModal){
		addModal.style.display='none';
		}
	}	