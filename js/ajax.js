$(document).ready(function () {
    
    
    $(".recp-fsi").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'auth/receipt_del.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");
            }
        
        });     
    });


});
