$(document).ready(function(){
	$('.bin').click(function(){
		if (confirm("Are you sure you want to delete this news?")){
		  var id_news = $(this).attr('data_num');
		
		  var parent = $(this).parent().parent();
		
		$.ajax(
		{
		type: "GET",
		url: "deleteNews.php",
		data: {
			'id_news' : id_news,
			
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