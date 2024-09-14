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

  <div class="d-flex justify-content-between  ">
    <div>
    <button id="hide">hide</button>
    <button id="show">show</button>
    <button id="toggle">toggle</button>
    <br> <br>
    <img src="image/d.png" alt="" height="250px" width="250px">
    <br> <br>
    <button id="fadein">fadein</button>
    <button id="fadeout">fadeout</button>
    <button id="fade">fade</button>
    <br> <br>
    </div>

    <div>
    <img src="image/e.png" alt="" height="200px" width="200px" id="img1">
   <button id="slideup">Slide-up</button>
   <button id="slidedown">Slide-down</button>
   <button id="slider">Slideer</button>

    </div>
  </div>


  
    
   <script>
    $('document').ready(function(){
        $('#hide').click(function(){
            $('img').hide(2000);
        })
        $('#show').click(function(){
            $('img').show(2000);
        })
        $('#toggle').click(function(){
            $('img').toggle(2000);
        })

        $('#fadein').click(function(){
            $('img').fadeIn(4000)
        })
        $('#fadeout').click(function(){
            $('img').fadeOut(4000)
        })
        $('#fade').click(function(){
            $('img').fadeToggle(3000)
        })

        $('#slideup').click(function(){
            $('#img1').slideUp(2000)
        })
        $('#slidedown').click(function(){
            $('#img1').slideDown()
        })
        $('#slider').click(function(){
            $('#img1').slideToggle()
        })
    })
   </script>
</body>
</html>