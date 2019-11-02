

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

$(window).on('load',function () {
    start = event.timeStamp;
});
$(window).on('unload',function(){
    var time = event.timeStamp - start;
    console.log(time);
    $.ajax({
        url: 'store_progress',
        type: 'get',
        data:{'time':time },
    });
    return false;
});
