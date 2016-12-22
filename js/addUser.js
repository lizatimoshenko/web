  $(document).ready(function(){
        $('#addBtn').click(function(e) {
          e.preventDefault();
         var login1 =$('#addlogin').val();
         console.log(login1);
         var password1 = $('#addpass').val();
         var passСоnf1 = $('#addpassConf').val();
         var first_name1 = $('#addfirst_name').val();
         var last_name1 = $('#addlast_name').val();
         var group=1;
         console.log(group);
          
            $.ajax({
                type :'POST',
                  url:'http://localhost/addUser.php',
                  data:{
                  login1:login1,
                  password1:password1,
                  first_name1:first_name1,
                  last_name1:last_name1,
                  group:group
                },
                success: function(res){
                   if(res =="OK")
                   {
                      alert("добавлен!");
                     }
                   else{
                   alert(res); 
                  location.reload();
                 }
                
                }
            });
     });

});
