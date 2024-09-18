$(function(){
    $("body").on("submit","#myform",function(e){
        e.preventDefault()
        let formdata=$("#myform").serialize();
        console.log(formdata);

        

        $.ajax({
            url:"insert.php",
            type:"POST",
            datatype:"json",
            data:formdata
        }).done(function(res){
            alert("Data inserted")
            $("#myform").trigger("reset")
            $("input[name='name']").val('')
        })
    })
})