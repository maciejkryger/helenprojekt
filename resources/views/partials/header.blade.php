<div class="logo" >
	<img src="/logo.jpg">		
</div>

<div class="socialMedia">
	<a href="https://www.facebook.com/helenprojekt/"><i class="fab fa-facebook-square"></i></a>
	<a href="https://www.instagram.com/helenprojekt/"><i class="fab fa-instagram"></i></a>
</div>

<div class="menu" id="menu">
	<p id="m0">STRONA GŁÓWNA</p>
	<p id="m1">PROJEKTY</p>
	<p id="m2">O NAS</p>
	<p id="m3">PUBLIKACJE</p>
	<p id="m4">KONTAKT</p>
</div>




<!-- Top Mobile Navigation Menu -->
<div class="mobileMenu">
<div class="topnav">
  <div class="active">STRONA GŁÓWNA</div>
  <div id="myLinks">
	<p id="mm0">STRONA GŁÓWNA</p>
	<p id="mm1">PROJEKTY</p>
	<p id="mm2">O NAS</p>
	<p id="mm3">PUBLIKACJE</p>
	<p id="mm4">KONTAKT</p>
  </div>

  	<div class="hamburger" onclick="myFunction(this),myFunction2()">
  		<div class="bar1"></div>
  		<div class="bar2"></div>
  		<div class="bar3"></div>
    </div>
</div>
</div>

<script type="text/javascript">
	function myFunction(x) {
  		x.classList.toggle("change");
	}

function myFunction2() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>