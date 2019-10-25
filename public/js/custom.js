

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

$(window).load(function () {
    start = event.timeStamp;
});
$(window).unload(function(){
    var time = event.timeStamp - start;
    $.ajax({
        url: 'store_progress',
        type: 'POST',
        data: JSON.stringify({ time }),
    });
    return false;
});
