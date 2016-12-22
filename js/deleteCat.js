$(document).ready(function(){
	$('.bin').click(function(){
		if (confirm("Are you sure you want to delete this category?")){
		  var id = $(this).attr('data_num');
		  console.log(id);
		  var parent = $(this).parent().parent();
		
		$.ajax(
		{
		type: "GET",
		url: "deleteCat.php",
		data: {
			'id_cat' : id,
			
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