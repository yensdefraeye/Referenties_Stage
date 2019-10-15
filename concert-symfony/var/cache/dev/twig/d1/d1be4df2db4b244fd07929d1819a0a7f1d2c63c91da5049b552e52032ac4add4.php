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

/* concerts.html.twig */
class __TwigTemplate_269ae76991c1040c7e168ebff368f7ad24129439fd1b058a5ac32aa3d08e8979 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "common/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concerts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concerts.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "concerts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Main -->
    <div id=\"main\">
        <!-- Event table -->
        <section id=\"event_table\">
            <header class=\"major\">
                <h2>Overzicht concerten</h2>
            </header>
            <form method=\"get\" action=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo ">
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
                    ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
                // line 34
                echo "                            <tr>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "startDate", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "title", [], "any", false, false, false, 36), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "location", [], "any", false, false, false, 36), "html", null, true);
                echo ")</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["concert"], "fav", [], "any", false, false, false, 36)) {
                    echo "<a class=\"icon fa-star\" />";
                }
                echo "<br/>
                                    <form method=\"post\" action=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch");
                echo "\" style=\"margin: 0\">
                                        <input type=\"hidden\" name=\"event_id\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" />
                                        <input type=\"hidden\" name=\"fav\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "fav", [], "any", false, false, false, 39), "html", null, true);
                echo "\" />
                                        <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                                        ";
                // line 41
                if ((twig_get_attribute($this->env, $this->source, $context["concert"], "fav", [], "any", false, false, false, 41) == false)) {
                    // line 42
                    echo "                                        <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 43
$context["concert"], "fav", [], "any", false, false, false, 43) == true)) {
                    // line 44
                    echo "                                        <input type=\"submit\" value=\"verwijder uit favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                                        ";
                }
                // line 46
                echo "                                    </form>
                                </td>
                                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "price", [], "any", false, false, false, 48), "html", null, true);
                echo " &euro;</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    ";
        } elseif ((twig_length_filter($this->env, (isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 51, $this->source); })())) < 1)) {
            // line 52
            echo "                        <p>Er werden geen concerten gevonden</p>
                    ";
        }
        // line 54
        echo "                    </tbody>
                </table>
            </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  167 => 52,  164 => 51,  155 => 48,  151 => 46,  147 => 44,  145 => 43,  142 => 42,  140 => 41,  135 => 39,  131 => 38,  127 => 37,  115 => 36,  111 => 35,  108 => 34,  103 => 33,  101 => 32,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/base.html.twig' %}

{% block body %}
    <!-- Main -->
    <div id=\"main\">
        <!-- Event table -->
        <section id=\"event_table\">
            <header class=\"major\">
                <h2>Overzicht concerten</h2>
            </header>
            <form method=\"get\" action={{ path('search') }}>
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
                    {% if concerts|length > 0 %}
                        {% for concert in concerts %}
                            <tr>
                                <td>{{ concert.startDate|date('Y-m-d') }}</td>
                                <td><a href=\"{{ path('concert', {id: concert.id}) }}\">{{ concert.title }} ({{ concert.location }})</a> {% if concert.fav %}<a class=\"icon fa-star\" />{% endif %}<br/>
                                    <form method=\"post\" action=\"{{ path('switch') }}\" style=\"margin: 0\">
                                        <input type=\"hidden\" name=\"event_id\" value=\"{{ concert.id }}\" />
                                        <input type=\"hidden\" name=\"fav\" value=\"{{ concert.fav}}\" />
                                        <input type=\"hidden\" name=\"moduleAction\" value=\"switch\" />
                                        {% if concert.fav == false %}
                                        <input type=\"submit\" value=\"voeg toe aan favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                                        {% elseif concert.fav == true %}
                                        <input type=\"submit\" value=\"verwijder uit favorieten\" class=\"small\" style=\"line-height:0em; height: 2em\"/>
                                        {% endif %}
                                    </form>
                                </td>
                                <td>{{ concert.price }} &euro;</td>
                            </tr>
                        {% endfor %}
                    {% elseif concerts|length < 1 %}
                        <p>Er werden geen concerten gevonden</p>
                    {% endif %}
                    </tbody>
                </table>
            </div>
        </section>
    </div>
{% endblock %}", "concerts.html.twig", "/Users/yensdefraeye/Desktop/1920pop-yensdefraeye/Symfony vs Laravel/Symfony/concert/templates/concerts.html.twig");
    }
}
