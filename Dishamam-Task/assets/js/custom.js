$(function(){
    // For Customer .php page 
    $('body').on('submit','#customerform',function(e){
        e.preventDefault()
        let formdata=$("#customerform").serialize()  
        
        $.ajax({
            url:'insert.php',
            type:'post',
            datatype:'json',
            data:formdata
        }).done(function(res){
            alert(res)
            $("#customerform").trigger('reset')  

           
        })
    })
    

    // For Contact .php page
    $.ajax({
        url:"view.php",
        type:'GET',
        dataType:'JSON'
    }).done(function(res){
        console.log(res);
        
       $.each(res,function(index,value){
        alert(index)
        

       })
        
    })
   
    
})