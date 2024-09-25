$(function () {
   

    // For Validation
    $('#customerform').validate({
        rules:{
            company:{
                required:true,              

            },
            phone:{
                digits:true,
                required:true,
                minlength:10,
                maxlength:10,
            },
            city:{
                required:true,

            }
        }

    })

    // For Customer .php page 
    $('body').on('submit', '#customerform', function (e) {
        e.preventDefault()
        let formdata = $("#customerform").serialize()

        $.ajax({
            url: 'insert.php',
            type: 'post',
            dataType: 'json',
            data: formdata
        }).done(function (res) {
            $('.response').append(`<div class="alert alert-warning" role="alert"><h4>${res}</h4></div>`)
            $("#customerform").trigger('reset')
        })
    })
    console.log('hello');

    $.ajax({
        url: 'view.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            $.each(data, function (index, value) {
                $('#customer').append(`<option>${value.company}</option>`)

            })

        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
        }
    });

})
