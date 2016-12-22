$(document).ready(function(){
$('#editBtn').click(function(e){
		e.preventDefault();
		$.ajax({
		url: 'http://localhost/updateUser.php',
		data: {
			'id_user' : $('#index').val(),
			'login' : $('#editlogin').val(),
			'first_name' :$('#editfirst_name').val(),
			'last_name' :$('#editlast_name').val(),
		},
		success:function(res){
			 location.reload();
		}
		});
		});
});