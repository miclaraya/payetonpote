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

/* base.html.twig */
class __TwigTemplate_bba37f563a5e776d38bf009e5eb5758fe244c8d7e87958a2d3f9274361dbccac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
        <title>
            ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "        </title>
        <!--Import Google Icon Font-->
        <link
        href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link
        href=\"/assets/css/materialize.min.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Custom styles-->
        <link href=\"/assets/css/styles.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/> ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        </head>
        <body>

            <div class=\"navbar-fixed\">
                <nav class=\"white\">
                    <div class=\"nav-wrapper\">
                        <a class=\"brand-logo center\" href=\"/\">Cagnot'Potes</a>
                        <ul class=\"right hide-on-med-and-down\">
                            <li>
                                <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"/campaign/new\">Créer une campagne</a>
                            </li>
                        </ul>

                        <ul class=\"sidenav\" id=\"nav-mobile\">
                            <li>
                                <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"/campaign/new\">Créer une campagne</a>
                            </li>
                        </ul>
                        <a class=\"sidenav-trigger\" data-target=\"nav-mobile\" href=\"#\">
                            <i class=\"material-icons\">menu</i>
                        </a>
                    </div>
                </nav>
            </div>

            <!-- Success message -->
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            echo "                <div class=\"success-message green lighten-2 valign-wrapper\">
                    <span class=\"center-align\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
            <footer class=\"page-footer teal\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\">Cagnot'Potes</h5>
                            <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                        </div>
                        <div class=\"col l3 s12 offset-l3\">
                            <h5 class=\"white-text\">Liens</h5>
                            <ul class=\"footer-links\">
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
                                </li>
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
                                </li>
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Créer une campagne</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        Made with love by
                        <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                    </div>
                </div>
            </footer>
            ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "            <!--JavaScript at end of body for optimized loading-->
            <script src=\"/assets/js/materialize.min.js\" type=\"text/javascript\"></script>
            <!--Init & custom scripts-->
            <script src=\"/assets/js/scripts.js\" type=\"text/javascript\"></script>
            <!--Stripe script-->
            <script src=\"https://js.stripe.com/v3/\"></script>
            ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "        </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "            <meta charset=\"UTF-8\">
            <meta content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\" name=\"viewport\">
            <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Default
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
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

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 95,  261 => 88,  243 => 56,  225 => 21,  205 => 11,  192 => 5,  182 => 4,  170 => 96,  168 => 95,  160 => 89,  158 => 88,  125 => 57,  123 => 56,  120 => 55,  110 => 51,  106 => 49,  102 => 48,  74 => 22,  72 => 21,  62 => 13,  60 => 11,  56 => 9,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block meta %}
            <meta charset=\"UTF-8\">
            <meta content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\" name=\"viewport\">
            <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">
        {% endblock %}

        <title>
            {% block title %}Default
            {% endblock %}
        </title>
        <!--Import Google Icon Font-->
        <link
        href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link
        href=\"/assets/css/materialize.min.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Custom styles-->
        <link href=\"/assets/css/styles.css\" media=\"screen,projection\" rel=\"stylesheet\" type=\"text/css\"/> {% block stylesheets %}{% endblock %}
        </head>
        <body>

            <div class=\"navbar-fixed\">
                <nav class=\"white\">
                    <div class=\"nav-wrapper\">
                        <a class=\"brand-logo center\" href=\"/\">Cagnot'Potes</a>
                        <ul class=\"right hide-on-med-and-down\">
                            <li>
                                <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"/campaign/new\">Créer une campagne</a>
                            </li>
                        </ul>

                        <ul class=\"sidenav\" id=\"nav-mobile\">
                            <li>
                                <a class=\"waves-effect waves-light btn pink lighten-1\" href=\"/campaign/new\">Créer une campagne</a>
                            </li>
                        </ul>
                        <a class=\"sidenav-trigger\" data-target=\"nav-mobile\" href=\"#\">
                            <i class=\"material-icons\">menu</i>
                        </a>
                    </div>
                </nav>
            </div>

            <!-- Success message -->
            {% for message in app.flashes('success') %}
                <div class=\"success-message green lighten-2 valign-wrapper\">
                    <span class=\"center-align\">
                        {{ message }}
                    </span>
                </div>
            {% endfor %}

            {% block body %}{% endblock %}

            <footer class=\"page-footer teal\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\">Cagnot'Potes</h5>
                            <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                        </div>
                        <div class=\"col l3 s12 offset-l3\">
                            <h5 class=\"white-text\">Liens</h5>
                            <ul class=\"footer-links\">
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
                                </li>
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
                                </li>
                                <li>
                                    <a class=\"white-text\" href=\"#!\">Créer une campagne</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        Made with love by
                        <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                    </div>
                </div>
            </footer>
            {% block footer %}{% endblock %}
            <!--JavaScript at end of body for optimized loading-->
            <script src=\"/assets/js/materialize.min.js\" type=\"text/javascript\"></script>
            <!--Init & custom scripts-->
            <script src=\"/assets/js/scripts.js\" type=\"text/javascript\"></script>
            <!--Stripe script-->
            <script src=\"https://js.stripe.com/v3/\"></script>
            {% block javascripts %}{% endblock %}
        </body>
    </html>
", "base.html.twig", "/shared/httpd/payetonpote/templates/base.html.twig");
    }
}
