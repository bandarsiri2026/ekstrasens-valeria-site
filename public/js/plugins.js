$(document).ready(function(){
	$('.carousel').carousel({
		
	interval:5000
	});
});

//Scroll

var scrollButton=$("#scroll-top");
$(window).on('scroll', function()
{
	if($(this).scrollTop()>=700) 
	{
		scrollButton.show();
	}
	else
	{
	     scrollButton.hide();
	}

	
	});
scrollButton.click(function()
	{
		$("html,body").animate({scrollTop:0},1000);
});


//loading Screen
$(window).on('load', function()
{
    $(".loading-overlay .sk-cube-grid").fadeOut(50, function () {

        // Show The Scroll

        $("body").css("overflow", "auto");

        $(this).parent().fadeOut(50, function () {

            $(this).remove();
        });
    });
});


// language=JQuery-CSS
$('.inputTelephone').keyup(function () {
	$('.submit').attr('disabled',true);

	$name=$('.inputName').val().length;
	$email=$('.inputEmail').val().length;
	$telephone=$('.inputTelephone').val().length;

	if ($name > 3 && $email > 8 && $telephone > 8 ){
		$('.submit').attr('disabled',false);
	}

});
