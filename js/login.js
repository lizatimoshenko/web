
$(document).ready(function()
		{
			$('#log').click(function() {
            $.ajax({
            	type : 'POST',
                url: 'auth.php',
                success: function(data){
                   window.location = 'index.php';
                }
            });
        });
 });

