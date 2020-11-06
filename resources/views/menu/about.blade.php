<!DOCTYPE html>
<html>

<!--head-->
<?php echo View::make('partials.head') ?>

<body id="scroll">
<!--header/menu-->
<?php echo View::make('partials.header') ?>


<div class="content">
	<div class="aboutContect">
		<div class="aboutPhoto">
			<img src="projects/utilPhotos/HP_zdjecieprofilowe.jpg" alt="contactPagePhoto">
		</div>
		<div class="aboutText">
		
			<p class="aboutTextDescription">Założycielką oraz główną projektantką biura HELEN PROJEKT jest Agnieszka Górna, absolwentka Wydziału Budownictwa Lądowego Politechniki Poznańskiej. Ukończyła również studia podyplomowe Zarządzanie Projektami na Uniwersytecie Ekonomicznym w Poznaniu.</p>

			<p class="aboutTextDescription">Blisko 10-letnie doświadczenie w nadzorach wykonawczych na największych poznańskich i wielkopolskich budowach sprawia, że rozwiązania stosowane przez nią w projektach sprawdzają się w codziennym użytkowaniu oraz nadążają za najnowszymi trendami.</p>

			<p class="aboutTextDescription">Zamiłowanie do aranżacji wnętrz przerodziło się w kolejny projekt jakim jest HELEN PROJEKT.</p>

			<p class="aboutTextDescription">Z chęcią podzielimy się z Państwem naszą wiedzą, doświadczeniem oraz pomysłami.</p>

			<div class="aboutTextSignature">
				<p>Zapraszamy do kontaktu,</p>
				<p>Agnieszka Górna/Projektant wnętrz</p>
			</div>
			
		</div>
	</div>
	<div class="aboutOpinions">
		<p>Opinie naszych klientów</p>
		<img src="projects/utilPhotos/opinions.jpg" alt="opinie">
	</div>

</div>	


</body>

<!--footer-->
<?php echo View::make('partials.footer') ?>

</html>