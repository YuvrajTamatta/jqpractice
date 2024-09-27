$(function () {

    // $('#customerform').validate({
    //     rules:{
    //         phone:{
    //             digits:true
    //         }
    //     }
    // })

    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

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
            setTimeout(() => {
                window.location.reload()
            }, 4000)
            $("#customerform").trigger('reset')
        })
    })

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

                $('#checkval').removeAttr('disabled', 'disabled')
                $('#checkval').removeAttr('checked', 'checked')

                $('#customer').on('change', function () {

                    if ($(this).val() == value.company) {
                        if (value.primary_contact == 1) {
                            $('#checkval').attr('disabled', 'disabled')
                            $('#checkval').attr('checked', 'checked')

                        } else if (value.primary_contact == 0) {
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
        $.ajax({
            url: 'insert.php?type=contact',
            type: 'post',
            datatype: 'json',
            data: contactdata
        }).done(function (res) {
            $('.responses').append(`<div class="alert alert-warning" role="alert"><h4>${res}</h4></div>`)

            setTimeout(() => {
                window.location.reload()
            }, 2000)
            $('#contactform').trigger('reset')


        })

    })

    $.ajax({
        url: "view.php?type=display",
        type: 'get',
        dataType: 'JSON'
    }).done(function (res) {
        if (res.length > 0) {
            $('#showndata').empty()
            $.each(res, function (i, v) {
                $('#showndata').append(`<tr> 
                    <td>${v.id}</td>
                    <td>${v.company}</td>
                    <td>${v.first_name} ${v.last_name}</td>
                    <td>${v.email}</td>
                    <td>${v.phone}</td>
                    <td>
                       <button class="btn btn-sm btn-success me-2" id="customerdelete" value=${v.id}> Edit </button>
                    <button class="btn btn-sm btn-danger" id="customerdelete" value=${v.id}>delete </button>
                 </td>
                </tr>`);
            });
        } else {
            alert('No data found.');
        }

    }).fail(function (xhr, status, error) {
        console.log("AJAX request failed: " + status + ", " + error);
    });


    // Delete Functionality
    $('body').on('click', '#customerdelete', function () {
        var id = $(this).val()
        $.ajax({
            url: `delete.php?id=${id}&type=contact`,
            type: 'post',
            datatype: 'json'
        }).done(function (res) {
            $('.responses').append(`<div class="alert alert-danger" role="alert"><h4>${res}</h4></div>`)

            setTimeout(() => {
                window.location.reload()
            }, 500)
        })

    })

    $.ajax({
        url:"view.php?type=joindata",
        type:"get",
        dataType:'json'
    }).done(function(res){
        if (res.length > 0) {
            $('#joindata').empty()
            $.each(res, function (i, v) {
                $('#joindata').append(`<tr> 
                    <td>${v.id}</td>
                    <td>${v.company}</td>
                    <td>${v.first_name} ${v.last_name}</td>
                    <td>${v.email}</td>
                    <td>${v.phone}</td>
                    <td>${v.created_at}</td>

                    <td>
                       <button class="btn btn-sm btn-success me-2" id="customeredit" value=${v.id}> Edit </button>
                    <button class="btn btn-sm btn-danger" id="customerdelete" value=${v.id}>delete </button>
                 </td>
                </tr>`);
            });
        } else {
            alert('No data found.');
        }

    }).fail(function (xhr, status, error) {
        console.log("AJAX request failed: " + status + ", " + error);
    });


    // Edit
    $('body').on('click', '#customeredit', function () {
        var edid = $(this).data("id")
        $.ajax({
            url: `view.php?id=${edid}&type=joindata`,
            tyep: 'post',
            dataType: 'json'
        }).done(function (res) {
            $('#id').val(res.id)
            $('#name').val(res.name)
            $('#email').val(res.email)
            $('#password').val(res.password)


        })
    })





    function time(){
        let time = new Date()
        let curenttime = time.toLocaleString()
        $('#time').text(curenttime)
    }
    setInterval(time,1000);


$('body').on('submit','#projectform',function(e){
    
    e.preventDefault()
    var datas = $(this).serialize()
    $.ajax({
        url:"insert.php?type=project",
        type:'post',
        dataType:'json',
        data:datas
    }).done(function(res){
        setTimeout(()=>{
            window.location.reload()
        },1000)
        alert(res)

    })
    

})

            
})

