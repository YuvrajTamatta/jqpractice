<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <button>Animae</button>
    <img src="image/d.png" alt="" height="50px" width="50px" style="position: absolute;">

    <script>
        $('document').ready(function(){
            $('button').click(function(){
                $('img').animate({
                left:'100px',
                height:'400px',
                width:'400px',
                
               
            },2000)
            })
        })
    </script>
    
</body>
</html>