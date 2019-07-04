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

/* campaign/new.html.twig */
class __TwigTemplate_7e9faf66c9c7b56cb28fd9d187bb5b134ea27cf8ba62d50d524c6db814506233 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Campaign
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\" src=\"/assets/images/11.jpg\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Créez votre campagne maintenant</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">

                        ";
        // line 39
        echo twig_include($this->env, $context, "campaign/_form.html.twig");
        echo "

                    </div>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "campaign/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Campaign
{% endblock %}

{% block body %}

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\" src=\"/assets/images/11.jpg\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Créez votre campagne maintenant</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">

                        {{ include('campaign/_form.html.twig') }}

                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "campaign/new.html.twig", "/shared/httpd/payetonpote/templates/campaign/new.html.twig");
    }
}
