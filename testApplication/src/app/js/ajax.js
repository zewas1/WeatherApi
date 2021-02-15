
$(document).ready(function(){
    $("#submissionForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'dataCheck.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(response)
            {
                alert(response);
            }
        }
        )
    });
});

