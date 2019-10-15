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

/* concert_detail.html.twig */
class __TwigTemplate_6e597f4ef2bf5b0f7a07e54fe7dbab22a700e8a5869b3c562b1dcc2dcaac70eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert_detail.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "concert_detail.html.twig", 1);
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
        echo "    <div id=\"main\">
        <!-- Event table -->
        <section id=\"concert\">
            ";
        // line 7
        if ( !twig_test_empty((isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "                <header class=\"major\">
                    <h2>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</h2>
                </header>
                <div class=\"table-wrapper\">
                    <table>
                        <tbody>
                        <tr>
                            <th>Datum</th>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 16, $this->source); })()), "startDate", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>Locatie</th>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 20, $this->source); })()), "location", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>Prijs</th>
                            <td>
                                ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 25, $this->source); })()), "price", [], "any", false, false, false, 25), "html", null, true);
            echo " &euro;
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class=\"box alt\">
                        <div class=\"row 50% uniform\">
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "                                <div class=\"4u\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image", ["conc_id" => twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "img_id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"image fit thumb\"><img src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 34)), "html", null, true);
                echo "\" alt=\"\" /></a></div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </div>
                    </div>
                ";
        } elseif (twig_test_empty(        // line 38
(isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                    <p>Dit concert werd niet gevonden.</p>
                ";
        }
        // line 41
        echo "                    <p><a href=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo ">Terug naar overzicht</a></p>
                </div>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  135 => 39,  133 => 38,  129 => 36,  118 => 34,  114 => 33,  103 => 25,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/base.html.twig' %}

{% block body %}
    <div id=\"main\">
        <!-- Event table -->
        <section id=\"concert\">
            {% if concert is not empty %}
                <header class=\"major\">
                    <h2>{{ concert.title }}</h2>
                </header>
                <div class=\"table-wrapper\">
                    <table>
                        <tbody>
                        <tr>
                            <th>Datum</th>
                            <td>{{ concert.startDate|date('Y-m-d') }}</td>
                        </tr>
                        <tr>
                            <th>Locatie</th>
                            <td>{{ concert.location }}</td>
                        </tr>
                        <tr>
                            <th>Prijs</th>
                            <td>
                                {{ concert.price }} &euro;
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class=\"box alt\">
                        <div class=\"row 50% uniform\">
                            {% for image in images %}
                                <div class=\"4u\"><a href=\"{{ path('image', {conc_id: concert.id, img_id: image.id}) }}\" class=\"image fit thumb\"><img src=\"{{ asset('images/') ~ image.path }}\" alt=\"\" /></a></div>
                            {% endfor %}
                        </div>
                    </div>
                {% elseif concert is empty %}
                    <p>Dit concert werd niet gevonden.</p>
                {% endif %}
                    <p><a href={{ path('index') }}>Terug naar overzicht</a></p>
                </div>
        </section>
    </div>
{% endblock %}", "concert_detail.html.twig", "/Users/yensdefraeye/Desktop/1920pop-yensdefraeye/Symfony vs Laravel/Symfony/concert/templates/concert_detail.html.twig");
    }
}
