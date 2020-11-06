<!DOCTYPE html>
<html>

<!--head-->
<?php echo View::make('partials.head') ?>

<body id="scroll">
<!--header/menu-->
<?php echo View::make('partials.header') ?>

<div class="content">

	<div class="contactImage">
		<img src="projects/utilPhotos/contactPagePhoto.jpg" alt="contactPagePhoto">
	</div>
		
	<div class="contactData">
		<p class="companyName">
			HELEN PROJEKT
		</p>
		<p class="phone">tel.
			<a href="tel:+48502598809" class="callTo">502 598 809</a>
		</p>
		<p class="eMail"> mail:
			<a href="mailto:helenprojekt@gmail.com" class="mail">helenprojekt@gmail.com</a>
		</p>
		<p class="openHoursTopic">GODZINY OTWARCIA:</p>
		<p class="openHours">Poniedziałek-Piątek 10:00 do 19:00</p>
		<p class="openHours">Sobota 10:00 do 12:00</p>			
	</div>

</div>	

</body>

<!--footer-->
<?php echo View::make('partials.footer') ?>

</html>