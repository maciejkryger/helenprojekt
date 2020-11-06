<!DOCTYPE html>
<html>


<!--head-->
<?php echo View::make('partials.head') ?>

<body id="scroll">


<!--header/menu-->
<?php echo View::make('partials.header') ?>




	<div class="content">
		<div class="project" id="p1">
			<img src="/projects/mieszkanie-z-antresola-zalasewo-park/1.jpg" alt="Mieszkanie z antresola Zalasewo Park">
			<span>Mieszkanie z antresolą Zalasewo Park</span>
		</div>
		<div class="project" id="p2">
			<img src="/projects/parter-domu-w-suchym-lesie/1.jpg" alt="Parter domu w Suchym Lesie">
			<span>Parter domu w Suchym Lesie</span>
		</div>
		<div class="project" id="p3">
			<img src="/projects/srodecka-lazienka/1.jpg" alt="Śródecka łazienka">
			<span>Śródecka łazienka</span>
		</div>
		<div class="project" id="p4">
			<img src="/projects/w-starym-mlynie/1.jpg" alt="W Starym Młynie">
			<span>W Starym Młynie</span>
		</div>
	</div>

</body>


<!--footer-->
<?php echo View::make('partials.footer') ?>

</html>