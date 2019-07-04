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

/* campaign/payment.html.twig */
class __TwigTemplate_48d067195ee28b3b79d292b5526079786a267cc646bf4d9c3aace3e5ebcec545 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/payment.html.twig", 1);
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

        echo "Payment
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
                <h1 class=\"header center white-text light\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo " -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Titre de la campagne\" src=\"/assets/images/8.jpg\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Participez en quelques secondes</h4>
                </div>
            </div>
            <!-- Form Section -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                            <input type=\"hidden\" name=\"campaign_id\" value=\"\" >
                            <h5 class=\"center\">Votre identité</h5>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"email\" name=\"email\" type=\"email\" class=\"validate\">
                                <label for=\"email\">Votre Email</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"name\" name=\"name\" type=\"text\" class=\"validate\">
                                <label for=\"name\">Votre nom</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"amount\" name=\"amount\" type=\"number\" class=\"validate\" value=\"\"  >
                                <label for=\"amount\">Votre participation</label>
                            </div>

                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Paiement</h5>
                            <div class=\"form-row\">
                                <label for=\"card-element\">
                                    Credit or debit card
                                </label>
                                <div id=\"card-element\">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\">
                                    Participer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
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
        return "campaign/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  121 => 31,  100 => 13,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Payment
{% endblock %}

{% block body %}

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">{{ campaign.title }}</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : {{ campaign.name }} -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Titre de la campagne\" src=\"/assets/images/8.jpg\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Participez en quelques secondes</h4>
                </div>
            </div>
            <!-- Form Section -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        {{ form_start(form) }}
                            <input type=\"hidden\" name=\"campaign_id\" value=\"\" >
                            <h5 class=\"center\">Votre identité</h5>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"email\" name=\"email\" type=\"email\" class=\"validate\">
                                <label for=\"email\">Votre Email</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"name\" name=\"name\" type=\"text\" class=\"validate\">
                                <label for=\"name\">Votre nom</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"amount\" name=\"amount\" type=\"number\" class=\"validate\" value=\"\"  >
                                <label for=\"amount\">Votre participation</label>
                            </div>

                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Paiement</h5>
                            <div class=\"form-row\">
                                <label for=\"card-element\">
                                    Credit or debit card
                                </label>
                                <div id=\"card-element\">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\">
                                    Participer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "campaign/payment.html.twig", "/shared/httpd/payetonpote/templates/campaign/payment.html.twig");
    }
}
