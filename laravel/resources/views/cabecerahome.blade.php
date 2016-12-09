<!DOCTYPE html>
<html>
<head>
	<title>Inicio VP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/navCss.css">
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link rel="stylesheet" type="text/css" href="css/description.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hero.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/carouselCss.css">
	<link rel="stylesheet" type="text/css" href="css/create-account.css">
	<link rel="stylesheet" type="text/css" href="css/contacts.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="js/script.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>
	<script src="js/agency.js"></script>
</head>
<body>
<header>
		<input type="checkbox" id="menu-checkbox">
		<label for="menu-checkbox"><span class="icon-menu"></span></label>
		<nav>
			<ul id="lyst">
				<li><a href="#"><span class="icon-home"></span> Inicio</a></li>
				<li><a href="#noticias">Noticias</a></li>
				<li><a href="#carousel">Líderes</a></li>
				<li><a href="#">Contáctanos</a></li>
								@if(Auth::guest())

														<li><a href="{{route('login')}}">Iniciar Session</a></li>

								@else
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
										<a  class="dropdown-toggle" data-toggle="dropdown"> <b>{{ Auth::user()->username }}</b><span class="caret"></span></a>
										<ul id="login-dp" class="dropdown-menu">
											<li>
												<div class="row">
													<div class="col-md-12">
														<ul>
															<li><a href="{{route('sae')}}">SAE</a </li>
															<li><a href="{{route('logout')}}">Salir</a </li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
										</li>
									</ul>
								@endif
			</ul>
		</nav>
	</header>
	@yield('content')
