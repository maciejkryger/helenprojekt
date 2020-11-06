<!DOCTYPE html>
<html>

<!--head-->
<?php echo View::make('partials.head') ?>

<body id="scroll">
<!--header/menu-->
<?php echo View::make('partials.header') ?>


<div class="content">




	<div class="slideContent">
    <div class="mySlides">
  		<img src="/projects/mieszkanie-z-antresola-zalasewo-park/1.jpg" style="width:100%">
      <!--logo signature with marketing sentense-->
      <?php echo View::make('partials.logoSignature') ?>
    </div>
    <div class="mySlides">
      <img src="/projects/parter-domu-w-suchym-lesie/1.jpg" style="width:100%">
      <!--logo signature with marketing sentense-->
      <?php echo View::make('partials.logoSignature') ?>
    </div>
    <div class="mySlides">
      <img src="/projects/srodecka-lazienka/1.jpg" style="width:100%">
      <!--logo signature with marketing sentense-->
      <?php echo View::make('partials.logoSignature') ?>
    </div>
    <div class="mySlides">
      <img src="/projects/w-starym-mlynie/1.jpg" style="width:100%">
      <!--logo signature with marketing sentense-->
      <?php echo View::make('partials.logoSignature') ?>
    </div>
  		
  		
  		

	</div>
	
  <script type="text/javascript">
    
/*slide show on main page*/
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 5000); // Change image every 5 seconds
    };
  </script>




</div>	



</body>

<!--footer-->
<?php echo View::make('partials.footer') ?>

</html>