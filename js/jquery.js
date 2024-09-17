$("document").ready(function(){
    $("button").click(function(){
        $("img").css('height','300px')
        $("img").css('width','300px')
    })
})
$(function(){
    // $('#elm li').siblings('.sele').addClass('selected')
    $('#elm li')
    $('#elm').before('<h3>this is added</h3>')
})

$(function(){
    $('#division').css('background-color','red')
})

$('document').ready(function(){
    $('#button1').click(function(){
        $('#img3').animate({
        left:'100px',
        height:'400px',
        width:'400px',              
    },1000)
    })
})

$("body",function(){
    $("#division").css("background-color", "red")
})

$('document').ready(function(){
    $('#hide').click(function(){
        $('#ma1').hide(2000);
    })
    $('#show').click(function(){
        $('#ma1').show(2000);
    })
    $('#toggle').click(function(){
        $('#ma1').toggle(2000);
    })

    $('#fadein').click(function(){
        $('#ma1').fadeIn(4000)
    })
    $('#fadeout').click(function(){
        $('#ma1').fadeOut(4000)
    })
    $('#fade').click(function(){
        $('#ma1').fadeToggle(3000)
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

