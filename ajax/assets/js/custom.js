$(function () {
    $("table").fadeIn()
    $.ajax({
        url: "view.php",
        type: "GET",
        dataType: "JSON"
    }).done(function (res) {
        $.each(res, function (index, value) {

            $("#tbody").append(`<tr>
                <td>${value.id}</td>                
                <td>${value.name}</td>
                <td>${value.email}</td>
                <td> <button class="btn btn-success btn-sm">edit</button>
                 <button class="btn btn-danger btn-sm">delete</button></td>
                </tr>`)
        })
    });

    $("body").on("submit", "#myform", function (e) {
        e.preventDefault()
        let formdata = $("#myform").serialize();
        console.log(formdata);

        $.ajax({
            url: "insert.php",
            type: "POST",
            datatype: "json",
            data: formdata
        }).done(function (res) {
            alert("Data inserted")
            $("#myform").trigger("reset")
            $("input[name='name']").val('')
        })
        $('table').fadeOut()



        // ending
    })

})





