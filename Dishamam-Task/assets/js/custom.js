$(function () {
    // For Validation
    // $('#customerform').validate({
    //     rules:{
    //         company:{
    //             required:true,              

    //         },
    //         phone:{
    //             digits:true,
    //             required:true,
    //             minlength:10,
    //             maxlength:10,
    //         },
    //         city:{
    //             required:true,

    //         }
    //     }

    // })

    // For Customer .php page 
    $('body').on('submit', '#customerform', function (e) {
        e.preventDefault()
        let formdata = $("#customerform").serialize()

        $.ajax({
            url: `insert.php?type=customer`,
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
        url: 'view.php?type=customer',
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

    $.ajax({
        url: 'view.php?type=contact',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            

            $.each(data, function (index, value) {
                console.log(value.primary_contact);

                $('#checkval').removeAttr('disabled', 'disabled')
                $('#checkval').removeAttr('checked', 'checked')

                $('#customer').on('change',function(){     

                    if ($(this).val() == value.company) {
                        if(value.primary_contact == 1){
                            $('#checkval').attr('disabled', 'disabled')
                            $('#checkval').attr('checked', 'checked')

                        }else if(value.primary_contact == 0) {
                            $('#checkval').removeAttr('disabled', 'disabled')
                            $('#checkval').removeAttr('checked', 'checked')

                        }
                                         

                        
                    }
                })
               
                
            })
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
        }
    });

    $('body').on('submit', '#contactform', function (e) {
        e.preventDefault()
        let contactdata = $(this).serialize()
        console.log(contactdata);
        $.ajax({
            url: 'insert.php?type=contact',
            type: 'post',
            datatype: 'json',
            data: contactdata
        }).done(function (res) {
            $('.response').append(`<div class="alert alert-warning" role="alert"><h4>${res}</h4></div>`)
            e.preventDefault()
            window.location.reload(4000)

            // $('#contactform').trigger('reset')


        })

    })

})
