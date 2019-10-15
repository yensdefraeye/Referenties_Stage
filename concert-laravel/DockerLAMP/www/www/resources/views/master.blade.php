<!DOCTYPE HTML>
<html>
<head>
    <title>Concertagenda - Overzicht</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{asset('js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{asset('css/ie8.css')}}"/><![endif]-->
</head>
<body id="top">

<!-- Header -->
<header id="header">
    <h1><a href="index.php"><strong>Concertagenda</strong></a></h1>
</header>

@yield('maincontent')

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="https://twitter.com/odiseehogesch" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="https://www.facebook.com/odiseehogeschool" class="icon fa-facebook-square"><span class="label">Facebook</span></a></li>
        <li><a href="http://www.odisee.be/" class="icon fa-globe"><span class="label">Website</span></a></li>
        <li><a href="mailto:events@odisee.be" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; <a href="http://www.ikdoeict.be/" title="IkDoeICT.be">IkDoeICT.be</a></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/skel.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<!--[if lte IE 8]><script src="{{asset('js/jquery.min.js')}}"></script><![endif]-->
<script src="{{asset('js/mai.js')}}"></script>

</body>
</html>