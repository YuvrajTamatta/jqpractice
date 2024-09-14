<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
</head>
<style>
    .font{
        font-size: 50px;
    }
</style>
<body>
    <img height="200px" width="200px" alt="not found">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, cupiditate.
    </p>
    
    <script>
        $('img').attr('src','image/d.png');
        $('p').addClass('font')
        $('p').arrt('class','hello')
    </script>
</body>
</html>