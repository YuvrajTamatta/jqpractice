$(function () {
    $('body').on('submit', '#form', function (e) {
        e.preventDefault()

        var email = $('#email').val()
        if (email === "") {
            $('#err').text('enter email')
            $('#err').css('color', 'red')
        }

        $('#result1').text($('form').serialize())


    })

    $('body').on('focus', '#name', function (I) {
        $(this).css('background-color', 'yellow');
    })

    $('body').on('blur', '#name', function () {
        $(this).css('background-color', 'transparent')
    })

    $('#image1').attr({
        'src': 'image/d.png',
        'height': '130px',
        'width': '130px'
    })
    $('#image1').addClass('my-3')

    $('#image1').on('mouseenter',function(){
        $('#image1').hide(2000)
    })


    $('body').on('click', '#show1', function () {
              
        $('#image1').toggle(2000)
        if ($(this).text()=="hide") {
            $(this).text('show')           
        }else{
            $(this).text('hide')
        }
    })

    $('body').on('click', '#show2', function () {
        var pass = $('#password')
        var passfield = pass.attr('type')
        if (passfield == 'password') {
            pass.attr('type', 'text')
            $(this).text('hide')
        } else {
            pass.attr('type', 'password')
            $(this).text('show')
        }
    })

    // $('ul li').empty()

    // $('body').on('click', '#dark', function () {
    //     if ($("body").hasClass("bg-dark")) {
    //         $("body").removeClass("bg-dark");
    //         $(this).text("ON");
    //     } else {
    //         $("body").addClass("bg-dark");
    //         $("body").addClass('text-light')
    //         $(this).text("OFF");
    //     }
    // })

    $('body').on('click','#dark',function(){
             $('body').toggleClass('bg-dark')
        $('body').toggleClass('text-light')

        // }
    })
})