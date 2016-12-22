var editmodal=document.getElementById("edit-modal");
var editbtn=document.getElementById("editBtn");
var edit=document.getElementById("edit");
var closeBtn1 = document.getElementById("Layer_3");



jQuery('.action').click(function(e){
		e.preventDefault();
		if ($(this).attr('data-method')=='edit'){
		$('#index').val($(this).closest('tr').find('td:nth(0)')[0].innerText);	
		$('#editlogin').val($(this).closest('tr').find('td:nth(1)')[0].innerText);
		$('#editfirst_name').val($(this).closest('tr').find('td:nth(2)')[0].innerText);
		$('#editlast_name').val($(this).closest('tr').find('td:nth(3)')[0].innerText);
		editmodal.style.display = 'block';
		$('#method').val('edit');
		}
});
edit.onclick=function(event){
	editmodal.style.display='block';
}
		
closeBtn1.onclick=function(event){
		editmodal.style.display='none';
}
window.onclick=function(event){
	if (event.target==editmodal){
	editmodal.style.display='none';
	}
}
