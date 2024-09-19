$(function () {
    $("#searchitem").hide()
    $('body').on('click', '.show-records', function () {
        $("table").toggle(1000)
        $("#searchitem").toggle()
       
    })
  

    $.ajax({
        url: "view.php",
        type: "GET",
        dataType: "JSON"
    }).done(function (res) {
        $.each(res, function (index, value) {

            $("#tbody").append(`<tr id=${value.id}>
                <td>${value.id}</td>                
                <td>${value.name}</td>
                <td>${value.email}</td>
                <td> <button class="btn btn-success btn-sm" data-id=${value.id} id="clientEditeBtn">edit</button>
                 <button class="btn btn-danger btn-sm" data-id=${value.id} id="clientDeleteBtn"> delete</button></td>
                </tr>`)
        })
    });

    $('body').on('click', '#clientEditeBtn', function () {
        var edid = $(this).data("id")
        $.ajax({
            url: `view.php?id=${edid}`,
            tyep: 'post',
            dataType: 'json'
        }).done(function (res) {
            $('#id').val(res.id)
            $('#name').val(res.name)
            $('#email').val(res.email)
            $('#password').val(res.password)


        })
    })

    $(document).on('click', '.btn-danger', function () {

        var id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: `delete.php?id=${id}`,
            type: 'POST',
            dataType: 'html',
        }).done(function (res) {
            location.reload();
        });
    });


    $("body").on("submit", "#myform", function (e) {
        e.preventDefault()
        let formdata = $("#myform").serialize();

        $.ajax({
            url: "insert.php",
            type: "POST",
            datatype: "json",
            data: formdata
        }).done(function (res) {
            $('input[name="id"]').val("");
            alert(res)
            $("#myform").trigger("reset")

        })
    })



    $("body").on("keyup", "#srchstring", function () {
        let val = $(this).val().toLowerCase()
        $("#tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        })
    })





    // ending
})

