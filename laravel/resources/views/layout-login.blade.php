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
<body style="background-color: white;">
<header>
    <input type="checkbox" id="menu-checkbox">
    <label for="menu-checkbox"><span class="icon-menu"></span></label>
    <nav>
        <ul id="lyst">
            <li><a href="{{route('/')}}"><span class="icon-home"></span> Inicio</a></li>

        </ul>
    </nav>
</header>
@yield('content')
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
