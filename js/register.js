$('#register').click(function() {
                var login =$('#newlogin').val();
                
                var password = $('#newpass').val();
               
                var first_name = $('#first_name').val();

                var last_name = $('#first_name').val();
            $.ajax({
              type :'POST',
                url:'action.php',
                data:{
                  login:login,
                  password:password,
                  first_name:first_name,
                  last_name:last_name
        },
                success: function(){
                  window.location = 'index.php';
                }
            });
     });


 