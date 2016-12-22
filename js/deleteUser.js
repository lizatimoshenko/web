$(document).ready(function(){
	$('.bin').click(function(){
		if (confirm("Are you sure you want to delete this row?")){
		  var id = $(this).attr('data_num');
		  var parent = $(this).parent().parent();
		
		$.ajax(
		{
		type: "GET",
		url: "deleteUser.php",
		data: {
			'id_user' : id,
			
		},
		cache: false,
		
		success: function(res)
		{
			
				parent.fadeOut('fast', function() {
			     $(this).remove();});
				
			
	}
		});
	 }
	});
		
		
});