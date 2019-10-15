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

/* common/header.html.twig */
class __TwigTemplate_9a275b88ab221096541bdb09f6f83bcebdee20cbbde0bcc3fd70632dbd074a72 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/header.html.twig"));

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
    <h1><a href=\"index.php\"><strong>Concertagenda</strong></a></h1>
</header>

<!-- Main -->
<div id=\"main\">
    <!-- Event table -->
    <section id=\"event_table\">
        <header class=\"major\">
            <h2>Overzicht concerten</h2>
        </header>
        <form method=\"get\" action=\"index.php\">
            <div class=\"row uniform 50%\">
                <div class=\"6u 12u\$(xsmall)\"></div>
                <div class=\"3u 12u\$(xsmall)\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"\" placeholder=\"Zoekterm\" />
                </div>
                <div class=\"3u 12u\$(xsmall)\">
                    <input type=\"submit\" value=\"Zoeken\" class=\"special fit small\" style=\"height: 3.4em\"/>
                </div>
            </div>
        </form>
        <div class=\"table-wrapper\">
            <table>
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>Naam en locatie</th>
                    <th>Prijs</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>21 jul 2017 - 10u00</td>
                    <td>Tomorrowland (De Schorre, Boom)<br/>
                        <form method=\"post\" action=\"index.php\" style=\"margin: 0\">
                            <input type=\"hidden\" name=\"event_id\" value=\"1\" />
                            <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                            <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                        </form>
                    </td>
                    <td>281,00 &euro;</td>
                </tr>
                <tr>
                    <td>10 apr 2018 - 15u00</td>
                    <td>Finale HUMO&#039;s Rock Rally (AB, Brussel)<br/>
                        <form method=\"post\" action=\"index.php\" style=\"margin: 0\">
                            <input type=\"hidden\" name=\"event_id\" value=\"2\" />
                            <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                            <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                        </form>
                    </td>
                    <td>14,00 &euro;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

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
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.poptrox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
<!--[if lte IE 8]><script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 93,  157 => 92,  153 => 91,  149 => 90,  145 => 89,  141 => 88,  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
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
    <h1><a href=\"index.php\"><strong>Concertagenda</strong></a></h1>
</header>

<!-- Main -->
<div id=\"main\">
    <!-- Event table -->
    <section id=\"event_table\">
        <header class=\"major\">
            <h2>Overzicht concerten</h2>
        </header>
        <form method=\"get\" action=\"index.php\">
            <div class=\"row uniform 50%\">
                <div class=\"6u 12u\$(xsmall)\"></div>
                <div class=\"3u 12u\$(xsmall)\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"\" placeholder=\"Zoekterm\" />
                </div>
                <div class=\"3u 12u\$(xsmall)\">
                    <input type=\"submit\" value=\"Zoeken\" class=\"special fit small\" style=\"height: 3.4em\"/>
                </div>
            </div>
        </form>
        <div class=\"table-wrapper\">
            <table>
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>Naam en locatie</th>
                    <th>Prijs</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>21 jul 2017 - 10u00</td>
                    <td>Tomorrowland (De Schorre, Boom)<br/>
                        <form method=\"post\" action=\"index.php\" style=\"margin: 0\">
                            <input type=\"hidden\" name=\"event_id\" value=\"1\" />
                            <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                            <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                        </form>
                    </td>
                    <td>281,00 &euro;</td>
                </tr>
                <tr>
                    <td>10 apr 2018 - 15u00</td>
                    <td>Finale HUMO&#039;s Rock Rally (AB, Brussel)<br/>
                        <form method=\"post\" action=\"index.php\" style=\"margin: 0\">
                            <input type=\"hidden\" name=\"event_id\" value=\"2\" />
                            <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                            <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                        </form>
                    </td>
                    <td>14,00 &euro;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

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
</html>", "common/header.html.twig", "/Users/yensdefraeye/Desktop/1920pop-yensdefraeye/Symfony vs Laravel/Symfony/concert/templates/common/header.html.twig");
    }
}
