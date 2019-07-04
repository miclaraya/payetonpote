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

/* campaign/show.html.twig */
class __TwigTemplate_0ca43c2eb45005b7ca560e4fb18309ffcf1e177dfe1c48dd726879e67ebfdda7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/show.html.twig", 1);
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

        echo "Campaign
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
                    <h5 class=\"header col s12 light\">- Organisée par :
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "
                        -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "\" src=\"/assets/images/8.jpg\"></div>
    </div>

    <!-- Show progress -->
    <section class=\"progress-section\">
        <div class=\"progress\">
            <div class=\"determinate\" style=\"width: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "%\">
                <span>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "% de l'objectif</span>
            </div>
        </div>
    </section>

    <div class=\"container participe\">
        <div
            class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"col s12 center-align\">

                    ";
        // line 38
        if (((isset($context["payment_sum"]) || array_key_exists("payment_sum", $context) ? $context["payment_sum"] : (function () { throw new RuntimeError('Variable "payment_sum" does not exist.', 38, $this->source); })()) < twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 38, $this->source); })()), "goal", [], "any", false, false, false, 38))) {
            // line 39
            echo "                        <a class=\"btn-large waves-effect waves-light pink lighten-1\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Participer</a>
                    ";
        } else {
            // line 41
            echo "                        <a class=\"btn-large waves-effect waves-light disabled pink lighten-1\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Campagne terminée</a>
                    ";
        }
        // line 43
        echo "                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">person</i>
                        </div>
                        <h3 class=\"center\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["participants_count"]) || array_key_exists("participants_count", $context) ? $context["participants_count"] : (function () { throw new RuntimeError('Variable "participants_count" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">redeem</i>
                        </div>
                        <h3 class=\"center\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["payment_sum"]) || array_key_exists("payment_sum", $context) ? $context["payment_sum"] : (function () { throw new RuntimeError('Variable "payment_sum" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form>
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea class=\"materialize-textarea\" id=\"description\" readonly=\"readonly\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" readonly=\"readonly\" type=\"number\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 81, $this->source); })()), "goal", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    ";
        // line 90
        echo "                </form>
            </div>


            <div class=\"row\">
                <div class=\"col s12 center-align\">

                    ";
        // line 97
        if (((isset($context["payment_sum"]) || array_key_exists("payment_sum", $context) ? $context["payment_sum"] : (function () { throw new RuntimeError('Variable "payment_sum" does not exist.', 97, $this->source); })()) < twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 97, $this->source); })()), "goal", [], "any", false, false, false, 97))) {
            // line 98
            echo "                        <a class=\"btn-large waves-effect waves-light pink lighten-1\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">Participer</a>
                    ";
        }
        // line 100
        echo "                    <div class=\"clearfix\"></div>
                </div>
            </div>


            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Participation</th>
                            </tr>
                        </thead>

                        <tbody>

                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 123
            echo "                                <tr>
                                    <td>
                                        ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 125, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 125), [], "array", false, false, false, 125), "showParticipant", [], "any", false, false, false, 125) == 1)) {
                // line 126
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 126), "html", null, true);
                echo "
                                        ";
            } else {
                // line 128
                echo "                                            Anonyme
                                        ";
            }
            // line 130
            echo "                                    </td>
                                    <td>
                                        ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 132, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 132), [], "array", false, false, false, 132), "showParticipant", [], "any", false, false, false, 132) == 1)) {
                // line 133
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 133), "html", null, true);
                echo "
                                        ";
            }
            // line 135
            echo "                                    </td>
                                    <td>
                                        ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 137, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 137), [], "array", false, false, false, 137), "showAmount", [], "any", false, false, false, 137) == 1)) {
                // line 138
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 138, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 138), [], "array", false, false, false, 138), "amount", [], "any", false, false, false, 138), "html", null, true);
                echo "
                                            €
                                        ";
            } else {
                // line 141
                echo "                                            Privé
                                        ";
            }
            // line 143
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Une campagne pensée pour vous\" src=\"/assets/images/10.jpg\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "campaign/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 146,  296 => 143,  292 => 141,  285 => 138,  283 => 137,  279 => 135,  273 => 133,  271 => 132,  267 => 130,  263 => 128,  257 => 126,  255 => 125,  251 => 123,  247 => 122,  223 => 100,  217 => 98,  215 => 97,  206 => 90,  200 => 81,  194 => 78,  181 => 68,  168 => 58,  151 => 43,  145 => 41,  139 => 39,  137 => 38,  122 => 26,  118 => 25,  109 => 19,  101 => 14,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campaign
{% endblock %}

{% block body %}

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">{{ campaign.title }}</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par :
                        {{ campaign.name }}
                        -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"{{ campaign.title }}\" src=\"/assets/images/8.jpg\"></div>
    </div>

    <!-- Show progress -->
    <section class=\"progress-section\">
        <div class=\"progress\">
            <div class=\"determinate\" style=\"width: {{ percentage }}%\">
                <span>{{ percentage }}% de l'objectif</span>
            </div>
        </div>
    </section>

    <div class=\"container participe\">
        <div
            class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"col s12 center-align\">

                    {% if payment_sum < campaign.goal %}
                        <a class=\"btn-large waves-effect waves-light pink lighten-1\" href=\"{{ path('payment_new', {id: campaign.id}) }}\">Participer</a>
                    {% else %}
                        <a class=\"btn-large waves-effect waves-light disabled pink lighten-1\" href=\"{{ path('payment_new', {id: campaign.id}) }}\">Campagne terminée</a>
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">person</i>
                        </div>
                        <h3 class=\"center\">{{ participants_count }}</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\">
                            <i class=\"material-icons teal-text\">redeem</i>
                        </div>
                        <h3 class=\"center\">{{ payment_sum }}</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form>
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea class=\"materialize-textarea\" id=\"description\" readonly=\"readonly\">{{ campaign.content }}</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" readonly=\"readonly\" type=\"number\" value=\"{{ campaign.goal }}\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    {# <div class=\"col s12 l6 offset-l3\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <button class=\"btn btn-large waves-effect waves-light col s12\" name=\"action\" type=\"submit\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Modifiez la campagne
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <i class=\"material-icons right\">edit</i>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div> #}
                </form>
            </div>


            <div class=\"row\">
                <div class=\"col s12 center-align\">

                    {% if payment_sum < campaign.goal %}
                        <a class=\"btn-large waves-effect waves-light pink lighten-1\" href=\"{{ path('payment_new', {id: campaign.id}) }}\">Participer</a>
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
            </div>


            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Participation</th>
                            </tr>
                        </thead>

                        <tbody>

                            {% for participant in participants %}
                                <tr>
                                    <td>
                                        {% if payments[participant.id].showParticipant == 1 %}
                                            {{ participant.name }}
                                        {% else %}
                                            Anonyme
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if payments[participant.id].showParticipant == 1 %}
                                            {{ participant.email }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if payments[participant.id].showAmount == 1 %}
                                            {{ payments[participant.id].amount }}
                                            €
                                        {% else %}
                                            Privé
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img alt=\"Une campagne pensée pour vous\" src=\"/assets/images/10.jpg\"></div>
    </div>

{% endblock %}
", "campaign/show.html.twig", "/shared/httpd/payetonpote/templates/campaign/show.html.twig");
    }
}
