<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* common/base.html.twig */
class __TwigTemplate_22005a60ab18320c3d172aebd5f5d95fca077863cd5c934bac5250f3d64cbe3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Concertagenda - Overzicht</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ie/html5shiv.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ie8.css"), "html", null, true);
        echo "\"/><![endif]-->
</head>
<body id=\"top\">

<!-- Header -->
<header id=\"header\">
    <h1><a href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "><strong>Concertagenda</strong></a></h1>

    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <h2><a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo ">You are logged in as ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo ", logout</a></h2>
    ";
        } else {
            // line 20
            echo "        <h2><a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo ">login</a></h2>
    ";
        }
        // line 22
        echo "</header>

<!-- body -->
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
<!-- Footer -->
<footer id=\"footer\">
    <ul class=\"icons\">
        <li><a href=\"https://twitter.com/odiseehogesch\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
        <li><a href=\"https://www.facebook.com/odiseehogeschool\" class=\"icon fa-facebook-square\"><span class=\"label\">Facebook</span></a></li>
        <li><a href=\"http://www.odisee.be/\" class=\"icon fa-globe\"><span class=\"label\">Website</span></a></li>
        <li><a href=\"mailto:events@odisee.be\" class=\"icon fa-envelope-o\"><span class=\"label\">Email</span></a></li>
    </ul>
    <ul class=\"copyright\">
        <li>&copy; <a href=\"http://www.ikdoeict.be/\" title=\"IkDoeICT.be\">IkDoeICT.be</a></li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    </ul>
</footer>

<!-- Scripts -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.poptrox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
<!--[if lte IE 8]><script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "common/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 25,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  97 => 27,  95 => 25,  90 => 22,  84 => 20,  76 => 18,  74 => 17,  69 => 15,  60 => 9,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
<head>
    <title>Concertagenda - Overzicht</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"{{ asset('js/ie/html5shiv.js') }}\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"{{ asset('css/ie8.css') }}\"/><![endif]-->
</head>
<body id=\"top\">

<!-- Header -->
<header id=\"header\">
    <h1><a href={{ path('index') }}><strong>Concertagenda</strong></a></h1>

    {% if app.user %}
        <h2><a href={{ path('app_logout') }}>You are logged in as {{ app.user.username }}, logout</a></h2>
    {% else %}
        <h2><a href={{ path('app_login') }}>login</a></h2>
    {% endif %}
</header>

<!-- body -->
{% block body %}
{% endblock %}

<!-- Footer -->
<footer id=\"footer\">
    <ul class=\"icons\">
        <li><a href=\"https://twitter.com/odiseehogesch\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
        <li><a href=\"https://www.facebook.com/odiseehogeschool\" class=\"icon fa-facebook-square\"><span class=\"label\">Facebook</span></a></li>
        <li><a href=\"http://www.odisee.be/\" class=\"icon fa-globe\"><span class=\"label\">Website</span></a></li>
        <li><a href=\"mailto:events@odisee.be\" class=\"icon fa-envelope-o\"><span class=\"label\">Email</span></a></li>
    </ul>
    <ul class=\"copyright\">
        <li>&copy; <a href=\"http://www.ikdoeict.be/\" title=\"IkDoeICT.be\">IkDoeICT.be</a></li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    </ul>
</footer>

<!-- Scripts -->
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.poptrox.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/skel.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/util.js') }}\"></script>
<!--[if lte IE 8]><script src=\"{{ asset('assets/js/ie/respond.min.js') }}\"></script><![endif]-->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
</html>", "common/base.html.twig", "/Users/yensdefraeye/Desktop/1920pop-yensdefraeye/Symfony/concert/templates/common/base.html.twig");
    }
}
