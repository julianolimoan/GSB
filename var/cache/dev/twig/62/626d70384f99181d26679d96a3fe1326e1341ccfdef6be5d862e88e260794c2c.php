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

/* visiteur/connexion.html.twig */
class __TwigTemplate_2140d58995abe81ccccf53dcc0ca7518a8f152e26ff21cb455d72086ea5a0774 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/connexion.html.twig", 1);
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

        // line 4
        echo "    Formulaire login
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h3><center>Formulaire Login</center></h3>

        <br>

        <div class=\"well\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            ";
        // line 17
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 21
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "login", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Login"]);
        // line 22
        echo "
                ";
        // line 24
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "login", [], "any", false, false, false, 24), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    ";
        // line 27
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "login", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 28
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 34
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "mdp", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Password"]);
        // line 35
        echo "
                ";
        // line 37
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "mdp", [], "any", false, false, false, 37), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    ";
        // line 40
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "mdp", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 41
        echo "
                </div>
            </div>

            ";
        // line 47
        echo "            <div class=\"row\">
                <label class=\"col-md-4 control-label\"></label>
                <div class=\"col-sm-4 col-md-offset-2\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "valider", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "col-md-4 btn btn-primary"]]);
        // line 51
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "annuler", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "col-md-4 btn btn-primary"]]);
        // line 53
        echo "
                </div>
            </div>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "_token", [], "any", false, false, false, 56), 'row');
        echo "
        </div>


        ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashBag", [], "any", false, false, false, 60), "has", [0 => "success"], "method", false, false, false, 60)) {
            // line 61
            echo "            <div class=\"alert alert-success\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashBag", [], "any", false, false, false, 62), "get", [0 => "success"], "method", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 63
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div>
        ";
        }
        // line 67
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'rest');
        echo "
        ";
        // line 70
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  202 => 68,  199 => 67,  195 => 65,  186 => 63,  182 => 62,  179 => 61,  177 => 60,  170 => 56,  165 => 53,  163 => 52,  160 => 51,  158 => 50,  153 => 47,  147 => 41,  144 => 40,  138 => 37,  135 => 35,  132 => 34,  125 => 28,  122 => 27,  116 => 24,  113 => 22,  110 => 21,  103 => 17,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
    Formulaire login
{% endblock %}

{% block body %}

    <center>
        <h3><center>Formulaire Login</center></h3>

        <br>

        <div class=\"well\">
            {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.login, \"Login\", {'label_attr':
{'class': 'col-sm-3 control-label'}}) }}
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.login) }}
                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.login, {'attr': {'class':
'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.mdp, \"Password\", {'label_attr':
{'class': 'col-sm-3 control-label'}}) }}
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.mdp) }}
                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mdp, {'attr': {'class':
'form-control'}}) }}
                </div>
            </div>

            {# Pour le bouton, pas de label ni d'erreur, on affiche
juste le widget #}
            <div class=\"row\">
                <label class=\"col-md-4 control-label\"></label>
                <div class=\"col-sm-4 col-md-offset-2\">
                    {{ form_widget(form.valider, {'attr': {'class':
'col-md-4 btn btn-primary'}}) }}
                    {{ form_widget(form.annuler, {'attr': {'class':
'col-md-4 btn btn-primary'}}) }}
                </div>
            </div>
            {{form_row(form._token)}}
        </div>


        {% if app.session.flashBag.has('success') %}
            <div class=\"alert alert-success\">
                {% for msg in app.session.flashBag.get('success') %}
                    {{ msg }}
                {% endfor %}
            </div>
        {% endif %}

        {{ form_rest(form) }}
        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}
    </center>
{% endblock %}", "visiteur/connexion.html.twig", "/var/www/html/GSBVvisiteur/templates/visiteur/connexion.html.twig");
    }
}
