$(document).ready(function(){
$('#edit-news').click(function(e){
		e.preventDefault();
		$.ajax({
		url: 'http://localhost/updateNews.php',
		data: {
			'id_news' : $('#id').val(),
			'title' : $('#title').val(),
			'url_image' :$('#url_image').val(),
			'content' :$('#news_text').val(),
		},
		success:function(res){
			  
                   alert(res); 
                   window.location = 'categoryTable.php';
                
		}
		});
		});
});