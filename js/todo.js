$(function(){
    $('body').on('click','#button',function(){
        var texts = $('#text').val()
        
        if (texts==0  || texts=="") {
            $('#err').text("Enter the task !!")
            $('#err').css({
                "color":'red',
                'font-size':'25px'
            })
            return false
            
        }else{
            $('#err').text("")

            $('ul').append("<div id='content' class='d-flex justify-content-between my-2 '><div class='d-flex'><li class='text-capitalize ' id='tex'> "+texts+" </li> <span></span></div><div><button class='btn btn-success me-2' type='button' id='done'>Done</button><button class='btn btn-danger' type='button' id='delete'>delete</button></div></div>")

            $('input[type="text"]').val('')



        }

    
    })

    $('ul').on('click','#delete',function(){
        $(this).parents('#content').remove()
    })

    $('body').on('click','#done',function(){
        $(this).parents('#content').addClass('text-decoration-line-through')
       $(this).parents('#content').css('background-color','yellow')

    })
    
    
})