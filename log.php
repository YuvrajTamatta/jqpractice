<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../crud/assets/css/bootstrap.css">
</head>
<body>
  <div class="container">
  <form id="myform">
   <h3>Log-in</h3>
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="name" id="name">
    <label for="pass" class="form-label">Password</label>
   <div class="d-flex">
   <input type="password" id="pass" name="pass" class="form-control w-75">
   <button type="button" id="show" class="btn btn-secondary  mx-3" >show</button>
   </div>

    <button class="btn btn-primary mt-4" type="submit">Login</button>
    
   </form>

   <div id="result"></div>
  </div>

  <script>

    $('document').ready(function(){
       $('#show').click(function(){
        var password=$('#pass')
        var field=password.attr('type')
        if(field=='password'){
            password.attr('type','text')
            $(this).text('hide')
        }else{
            password.attr('type','password')
            $(this).text('show')
        }
       })

       $('#myform').on('submit',function(event){
        event.preventDefault();
        var formdata=$(this).serialize();
        console.log(formdata);
        

        $('#result').text('form data : ' + formdata)

        isvalid=true
        errmsg=''

        if($('#name').val()==''){
            isvalid=false
            errmsg+='name must require'

        }

       })
    })
   
  </script>
</body>
</html>