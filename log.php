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
  <form action="">
   <h3>Log-in</h3>
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control">
    <label for="pass" class="form-label">Password</label>
   <div class="d-flex">
   <input type="password" id="pass" name="pass" class="form-control w-75">
   <button type="button" id="show" class="btn btn-secondary  mx-3" >show</button>
   </div>

    <button class="btn btn-primary mt-4">Login</button>
    
   </form>
  </div>

  <script>
    // $('document').ready(function(){
    //     $('#show').on('click',function(){
    //         var pass=$('#pass')
    //         var passfield=pass.attr('type')
    //         if(passfield=='password'){
    //             pass.attr('type','text')
    //             $(this).text('hide')
    //         }else{
    //             pass.attr('type', 'password')
    //             $(this).text('show')
    //         }
    //     })
    // })

    $('document').ready(function(){
        $('#show').click(function(){
            var pass=$('#pass')
            var fiels=pass.attr('type')
            if(fiels=='password'){
                pass.attr('type','text')
                $(this).text('hide')
            }else{
                pass.attr('type','password')
                $(this).text('show')
            }
        })
    })
   
  </script>
</body>
</html>