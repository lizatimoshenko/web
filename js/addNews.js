  $(document).ready(function(){
        $('#add-news').click(function(e) {
          e.preventDefault();
          
            $.ajax({
                type :'GET',
                  url:'http://localhost/insertNews.php',
                  data:{
                    id_cat:$('#id_cat').val(),
                    title: $('#addTitle').val(),
                    url_image:$('#addImage').val(),
                    content:$('#addText').val(),
                },
                success: function(res){
                   id=$('#id_cat').val(),
                   alert(res); 
                   window.location = 'catNews.php?id_cat=id';
                
                }
            });
     });

});
