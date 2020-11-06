
$("body").css("cursor", "progress");

$(document).ready(function() { 
   	
 	$("body").css("cursor", "default");

    /*mark action menu items*/
	var link = window.location.pathname;
 	if(link=='/' || link=='' ){
 		$("#m0").addClass('marked');
        $(".active").text('');
 	}

    if(link.substr(0, 8)=='/project'){
        $("#m1").addClass('marked');
        $(".active").text('PROJEKTY'); 
    }

 	if(link=='/about'){
 		$("#m2").addClass('marked');
        $(".active").text('O NAS');
 	}

	if(link=='/publication'){
 		$("#m3").addClass('marked');
        $(".active").text('PUBLIKACJE');
 	}

    if(link=='/contact'){
        $("#m4").addClass('marked');
        $(".active").text('KONTAKT');
    }

    if(link=='/contact'){
        $("#m4").addClass('marked');
        $(".active").text('KONTAKT');
    }


	/*href menu actions*/
    $(".logo img").click(function(){
        window.location.href='/';
    });


    $("#m0,#mm0").click(function(){
    	// alert('Załadowano poprawnie'); 
        window.location.href='/';
  
    });

    $("#m1,#mm1").click(function(){
        window.location.href='/project';
    });


    $("#m2,#mm2").click(function(){
        window.location.href='/about';
     });

    $("#m3,#mm3").click(function(){
        window.location.href='/publication';    
    });
    $("#m4,#mm4").click(function(){
        window.location.href='/contact';    
    });

    /*href project actions*/
    $("#p1").click(function(){
        window.location.href='/project/mieszkanie-z-antresola-zalasewo-park'; 
    });

    $("#p2").click(function(){
        window.location.href='/project/parter-domu-w-suchym-lesie'; 
    });

    $("#p3").click(function(){
        window.location.href='/project/srodecka-lazienka'; 
    });
    
    $("#p4").click(function(){
        window.location.href='/project/w-starym-mlynie'; 
    });


$(function(){
 
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('.scrollTopButton').addClass('show');
        } else {
            $('.scrollTopButton').removeClass('show');
        }
    });
 
    $('.scrollTopButton').click(function() {
        $('html, body').animate({scrollTop:0},700);
    });
});

function myFunction(x) {
  x.classList.toggle("change");
}




}); 



