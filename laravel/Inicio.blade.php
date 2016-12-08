<!DOCTYPE html>
<html>
    <?php
    $cont = file_get_contents("header.php"); 
    echo $cont;
    $cont2 = file_get_contents("menu.php"); 
    echo $cont2;
    ?>
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
	  <!-- Overlay -->
	  <div class="overlay"></div>

	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#bs-carousel" data-slide-to="1"></li>
	    <li data-target="#bs-carousel" data-slide-to="2"></li>
	  </ol>
	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item slides active">
	      <div class="slide-1"></div>
	      <div class="hero">
	        <hgroup>
	            <h1>Voluntad popular</h1>        
	            <h3>Por una mejor Venezuela</h3>
	        </hgroup>
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-2"></div>
	      <div class="hero">        
	        <!--hgroup>
	            <h1>We are smart</h1>        
	            <h3>Get start your next awesome project</h3>
	        </hgroup>       
	        <button class="btn btn-hero btn-lg" role="button">See all features</button-->
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-3"></div>
	      <div class="hero">
	      </div>
	    </div>
	  </div> 
	</div>
	<main>
		<section id="description" class="post">
			<h3>Noticias</h3>
			<marquee>
				Voluntad Popular en un movimiento plural y democrático, organizado en Redes Populares para la acción social y lo político. Nuestro compromiso es el progreso, que definimos como la conquista de los derechos sociales, económicos, políticos y humanos de cada venezolano.
			</marquee>
		</section>
		<section id="main-slider"></section>
		<?php 
            $cont = file_get_contents("noticias.php"); 
        echo $cont;
        ?>
		<section id="create-account">
			<b>Listo para seguir luchando?</b>
			<form action="/new">
				<br>
				<input type="text" name="first" placeholder="Ingresa tu primer nombre">
				<br>  
				<br>  
				<input type="email" name="mail" placeholder="Ingresa tu correo">
				<br>  
				<br>
				<input type="submit" value="Únete">
			</form>
		</section>
		<!--start arrows for slider-->
		<span id="la"><</span>
		<span id="ra">></span>
		<!--end arrows for slider-->
		<?php 
            $cont = file_get_contents("carousel.php"); 
        echo $cont;
        ?>
	</main>
	<footer id="final">
		<div id="anuncio">Este es el sitio web de Juventudes VP</div>
		<section id="contacts">
			<form>
				<h3>Envíanos un mensaje!</h3>
				<br>
				<input type="email" name="mail" placeholder="Tu correo">
				<br>  
				<br>
				<input type="text" name="asunto" placeholder="Asunto">
				<br>  
				<br>
				<div><textarea name="msg" placeholder="Tu mensaje"></textarea></div>
				<br>  
				<br>
				<input type="submit" value="Únete">
			</form>
			<!--div id="twitter">
				<a
					class="twitter-timeline"  
					href="https://twitter.com/search?q=%40VoluntadPopular" 
					data-widget-id="806199571399446528">
					Síguenos en @VoluntadPopular
				</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            	</script>
        	</div-->
		</section>
		<ul id="icons">
			<li><span class="icon-facebook3"></span></li>
			<li><span class="icon-twitter2"></span></li>
			<li><span class="icon-youtube3"></span></li>
			<li><span class="icon-instagram"></span></li>
		</ul>
	</footer>
</body>
</html>