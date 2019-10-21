

$(document).ready(function () {
    $('div.card').fadeIn(500);
});

$( "#heart" ).click(function() {
        if($('#heart').hasClass('far'))
        {
            $(this).removeClass('far');
            $(this).addClass('fas'); 
        }
         
        else if($('#heart').hasClass('fas'))
        {
            $(this).removeClass('fas');
            $(this).addClass('far'); 
        }
    
  });
  $( "#check" ).click(function() {
    if($('#check').hasClass('far'))
    {
        $(this).removeClass('far');
        $(this).addClass('fas'); 
    }
     
    else if($('#check').hasClass('fas'))
    {
        $(this).removeClass('fas');
        $(this).addClass('far'); 
    }

});