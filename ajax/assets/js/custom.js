$(function () {
    $("table").hide()
    $("#searchitem").hide()
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
                <td> <button class="btn btn-success btn-sm">edit</button>
                 <button class="btn btn-danger btn-sm" data-id=${value.id} id="clientDeleteBtn"> delete</button></td>
                </tr>`)
        })
    });

    $(document).on('click', '.btn-danger', function() {
        
        var id = $(this).data('id');
        console.log(id);
        
        $.ajax({
            url: `delete.php?id=${id}`,
            type: 'POST',
            dataType: 'html',
        }).done(function(res) {
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
            alert("Data inserted")
            $("#myform").trigger("reset")
            $("table").show()
            $("#searchitem").show()
        })
    })



    $("body").on("keyup","#srchstring",function(){
        let val = $(this).val().toLowerCase()
        $("#tbody tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
        })
    })


   
// ending
})

