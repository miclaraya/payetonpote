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

/* payment/new.html.twig */
class __TwigTemplate_52ad450f8b539ad78d92b38a7e751db54eb7268b5ac1db9adfff93102f7bfa1f extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/new.html.twig", 1);
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
                    <h5 class=\"header col s12 light\">- Organisée par :
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "
                        -</h5>
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
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                        <h5 class=\"center\">Votre identité</h5>
                        <div class=\"input-field col s12 l6\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "participant", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), 'label', ["label" => "Votre nom"]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "participant", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), 'widget');
        echo "
                        </div>
                        <div class=\"input-field col s12 l6\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "participant", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), 'label', ["label" => "Votre email"]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "participant", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), 'widget');
        echo "
                        </div>
                        <div class=\"input-field col s12 l6\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "amount", [], "any", false, false, false, 44), 'label', ["label" => "Votre participation"]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "amount", [], "any", false, false, false, 45), 'widget');
        echo "
                        </div>
                        <div class=\"input-field col s12 l3\">
                            <label>
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "show_participant", [], "any", false, false, false, 49), 'widget');
        echo "
                                <span>Afficher votre nom</span>
                            </label>
                        </div>
                        <div class=\"input-field col s12 l3\">
                            <label>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "show_amount", [], "any", false, false, false, 55), 'widget');
        echo "
                                <span>Afficher le montant</span>
                            </label>
                        </div>


                        <input type=\"hidden\" id=\"payment_participant_campaign\" name=\"payment[participant][campaign]\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">

                        <div class=\"clearfix\"></div>
                        <h5 class=\"center\">Paiement</h5>
                        <div class=\"form-row\">
                            <label for=\"card-element\">
                                Carte bancaire
                            </label>
                            <div
                                id=\"card-element\"><!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display Element errors. -->
                            <div id=\"card-errors\" role=\"alert\"></div>
                        </div>
                        <div class=\"input-field col s12 l6\">
                            <a class=\"btn btn-large waves-effect waves-light grey col s12\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\">Annuler</a>
                        </div>
                        <div class=\"input-field col s12 l6\">
                            <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\">
                                Participer
                                <i class=\"material-icons right\">euro_symbol</i>
                            </button>
                        </div>
                        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
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

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    <script>
        const stripe = Stripe('pk_test_KmhVHUX90CP3CCP5x8D0xzkH00OPyH176V');
        const elements = stripe.elements();

        // 2
        // Custom styling can be passed to options when creating an Element.
        const style = {
            base: { // Add your base input styles here. For example:
                fontSize: '16px',
                color: \"#32325d\"
            }
        };

        // Create an instance of the card Element.
        const card = elements.create('card', {style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // 3
        // Create a token or display an error when the form is submitted.
        const form = document.querySelector('form[name=\"payment\"]');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const {token, error} = await stripe.createToken(card);

            if (error) { // Inform the customer that there was an error.
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else { // Send the token to your server.
                stripeTokenHandler(token);
            }
        });

        // 4
        const stripeTokenHandler = (token) => { // Insert the token ID into the form so it gets submitted to the server
            const form = document.querySelector('form[name=\"payment\"]');
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "payment/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 95,  227 => 94,  209 => 85,  198 => 77,  179 => 61,  170 => 55,  161 => 49,  154 => 45,  150 => 44,  144 => 41,  140 => 40,  134 => 37,  130 => 36,  124 => 33,  102 => 14,  96 => 11,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
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
                    <h5 class=\"header col s12 light\">- Organisée par :
                        {{ campaign.name }}
                        -</h5>
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
                        <h5 class=\"center\">Votre identité</h5>
                        <div class=\"input-field col s12 l6\">
                            {{ form_label(form.participant.name, 'Votre nom')}}
                            {{ form_widget(form.participant.name)}}
                        </div>
                        <div class=\"input-field col s12 l6\">
                            {{ form_label(form.participant.email, 'Votre email')}}
                            {{ form_widget(form.participant.email)}}
                        </div>
                        <div class=\"input-field col s12 l6\">
                            {{ form_label(form.amount, 'Votre participation')}}
                            {{ form_widget(form.amount) }}
                        </div>
                        <div class=\"input-field col s12 l3\">
                            <label>
                                {{ form_widget(form.show_participant) }}
                                <span>Afficher votre nom</span>
                            </label>
                        </div>
                        <div class=\"input-field col s12 l3\">
                            <label>
                                {{ form_widget(form.show_amount) }}
                                <span>Afficher le montant</span>
                            </label>
                        </div>


                        <input type=\"hidden\" id=\"payment_participant_campaign\" name=\"payment[participant][campaign]\" value=\"{{ campaign.id }}\">

                        <div class=\"clearfix\"></div>
                        <h5 class=\"center\">Paiement</h5>
                        <div class=\"form-row\">
                            <label for=\"card-element\">
                                Carte bancaire
                            </label>
                            <div
                                id=\"card-element\"><!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display Element errors. -->
                            <div id=\"card-errors\" role=\"alert\"></div>
                        </div>
                        <div class=\"input-field col s12 l6\">
                            <a class=\"btn btn-large waves-effect waves-light grey col s12\" href=\"{{ path('campaign_show', {id: campaign.id}) }}\">Annuler</a>
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

{% block javascripts %}
    <script>
        const stripe = Stripe('pk_test_KmhVHUX90CP3CCP5x8D0xzkH00OPyH176V');
        const elements = stripe.elements();

        // 2
        // Custom styling can be passed to options when creating an Element.
        const style = {
            base: { // Add your base input styles here. For example:
                fontSize: '16px',
                color: \"#32325d\"
            }
        };

        // Create an instance of the card Element.
        const card = elements.create('card', {style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // 3
        // Create a token or display an error when the form is submitted.
        const form = document.querySelector('form[name=\"payment\"]');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const {token, error} = await stripe.createToken(card);

            if (error) { // Inform the customer that there was an error.
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else { // Send the token to your server.
                stripeTokenHandler(token);
            }
        });

        // 4
        const stripeTokenHandler = (token) => { // Insert the token ID into the form so it gets submitted to the server
            const form = document.querySelector('form[name=\"payment\"]');
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
{% endblock %}
", "payment/new.html.twig", "/shared/httpd/payetonpote/templates/payment/new.html.twig");
    }
}
