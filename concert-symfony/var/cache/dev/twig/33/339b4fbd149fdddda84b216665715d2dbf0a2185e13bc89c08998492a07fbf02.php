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

/* concert_image.html.twig */
class __TwigTemplate_13548274880c4fff22569e4eee9bff5ca978322aab7acf65fdffd026d2fa4de3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert_image.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "concert_image.html.twig", 1);
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
        <section id=\"concert\">
            ";
        // line 8
        if (((isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 8, $this->source); })()) ||  !twig_test_empty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "                <header class=\"major\">
                    <h2>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
                </header>
                <div class=\"table-wrapper\">
                    <div class=\"box alt\">

                        <div class=\"row 50% uniform\">
                            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 16, $this->source); })()), "path", [], "any", false, false, false, 16)), "html", null, true);
            echo "\" alt=\"\" /></span></div>
                        </div>
                    </div>
                    <p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concert", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Terug naar concert</a></p>
                </div>
            ";
        } elseif ((        // line 21
(isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 21, $this->source); })()) || twig_test_empty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "                <p>Concert of image werd niet gevonden.</p>
            ";
        }
        // line 24
        echo "        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "concert_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  101 => 22,  99 => 21,  94 => 19,  88 => 16,  79 => 10,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/base.html.twig' %}

{% block body %}
    <!-- Main -->
    <div id=\"main\">
        <!-- Event table -->
        <section id=\"concert\">
            {% if concert or image is not empty %}
                <header class=\"major\">
                    <h2>{{ concert.title }}</h2>
                </header>
                <div class=\"table-wrapper\">
                    <div class=\"box alt\">

                        <div class=\"row 50% uniform\">
                            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"{{ asset('images/') ~ image.path }}\" alt=\"\" /></span></div>
                        </div>
                    </div>
                    <p><a href=\"{{ path('concert', {id: concert.id}) }}\">Terug naar concert</a></p>
                </div>
            {% elseif concert or image is empty %}
                <p>Concert of image werd niet gevonden.</p>
            {% endif %}
        </section>
    </div>
{% endblock %}", "concert_image.html.twig", "/Users/yensdefraeye/Desktop/1920pop-yensdefraeye/Symfony vs Laravel/Symfony/concert/templates/concert_image.html.twig");
    }
}
