
$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $("form"); 
    var add_button      = $(".add_form_field"); 

    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="text" name = "horse_sum_four"/><a href="#" class="delete">Delete</a></div>'); //add input box
        }
                else
                {
                alert('You Reached the limits')
                }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
