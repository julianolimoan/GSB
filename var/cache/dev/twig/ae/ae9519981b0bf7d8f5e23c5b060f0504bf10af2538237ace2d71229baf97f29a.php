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

/* visiteur/formulaire.html.twig */
class __TwigTemplate_a70edce882e55ce7c206f1ed22538aa22263609665accdcf5b02fc6d04f8690a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/formulaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/formulaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/formulaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Formulaire Ajout Article
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
<h4><center>Formulaire article</center></h4 >
<center>
<div class=\"container\">
<div class=\"well\">
<div class=\"bg-light\">
  ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

  ";
        // line 16
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 20
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Nom"]);
        echo "
      ";
        // line 22
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>

    ";
        // line 30
        echo "
    <div class=\"form-group\">
      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Prenom"]);
        echo "
      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'errors');
        echo "
       <div class=\"col-sm-4\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Adresse"]);
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresse", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>
   
    <div class=\"form-group\">
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "ville", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Ville"]);
        echo "
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "ville", [], "any", false, false, false, 49), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "ville", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
     
    </div>
     
    <div class=\"form-group\">
      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "cp", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Code Postal"]);
        echo "
      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "cp", [], "any", false, false, false, 58), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "cp", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>
   
    <div class=\"form-group\">
      ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Date d'embauche"]);
        echo "
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 66), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 68), 'widget');
        echo "
      </div>
    </div>
     
    <div class=\"form-group\">
      ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "login", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Login"]);
        echo "
      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "login", [], "any", false, false, false, 74), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "login", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>
   
        <div class=\"row\">
        <label class=\"col-md-4 control-label\"></label>
             <div class=\"col-sm-4 col-md-offset-2\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "valider", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "col-md-4 btn btn-primary"]]);
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "annuler", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "col-md-4 btn btn-primary"]]);
        echo "
            </div>
        </div> <br>
</div>
</div>
</div>
</center>
";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "session", [], "any", false, false, false, 91), "flashBag", [], "any", false, false, false, 91), "has", [0 => "success"], "method", false, false, false, 91)) {
            // line 92
            echo " <div class=\"alert alert-success\">
  ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "session", [], "any", false, false, false, 93), "flashBag", [], "any", false, false, false, 93), "get", [0 => "success"], "method", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 94
                echo "     ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo " </div>
";
        }
        // line 98
        echo "
";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'rest');
        echo "

";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
 
<!-- <a href=\"/add_article\" class=\"btn btn-outline-light\">AJOUTER NOUVEL<br/>ARTICLE</a><br/> -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 102,  277 => 99,  274 => 98,  270 => 96,  261 => 94,  257 => 93,  254 => 92,  252 => 91,  242 => 84,  238 => 83,  228 => 76,  223 => 74,  219 => 73,  211 => 68,  206 => 66,  202 => 65,  194 => 60,  189 => 58,  185 => 57,  176 => 51,  171 => 49,  167 => 48,  159 => 43,  154 => 41,  150 => 40,  142 => 35,  137 => 33,  133 => 32,  129 => 30,  121 => 25,  115 => 22,  110 => 20,  103 => 16,  98 => 13,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Formulaire Ajout Article
{% endblock %}

{% block body %}
   
<h4><center>Formulaire article</center></h4 >
<center>
<div class=\"container\">
<div class=\"well\">
<div class=\"bg-light\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

    <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.nom) }}
      <div class=\"col-sm-4\">
        {# Génération de l'input. #}
        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    {# Idem pour un autre champ. #}

    <div class=\"form-group\">
      {{ form_label(form.prenom, \"Prenom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.prenom) }}
       <div class=\"col-sm-4\">
        {{ form_widget(form.prenom) }}
      </div>
    </div>

    <div class=\"form-group\">
      {{ form_label(form.adresse, \"Adresse\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.adresse) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
   
    <div class=\"form-group\">
      {{ form_label(form.ville, \"Ville\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.ville) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
      </div>
     
    </div>
     
    <div class=\"form-group\">
      {{ form_label(form.cp, \"Code Postal\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.cp) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.cp, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
   
    <div class=\"form-group\">
      {{ form_label(form.dateEmbauche, \"Date d'embauche\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.dateEmbauche) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.dateEmbauche) }}
      </div>
    </div>
     
    <div class=\"form-group\">
      {{ form_label(form.login, \"Login\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.login) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.login, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
   
        <div class=\"row\">
        <label class=\"col-md-4 control-label\"></label>
             <div class=\"col-sm-4 col-md-offset-2\">
                {{ form_widget(form.valider, {'attr': {'class': 'col-md-4 btn btn-primary'}}) }}
                {{ form_widget(form.annuler, {'attr': {'class': 'col-md-4 btn btn-primary'}}) }}
            </div>
        </div> <br>
</div>
</div>
</div>
</center>
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
 
<!-- <a href=\"/add_article\" class=\"btn btn-outline-light\">AJOUTER NOUVEL<br/>ARTICLE</a><br/> -->


{% endblock %}", "visiteur/formulaire.html.twig", "/var/www/html/GSBVvisiteur/templates/visiteur/formulaire.html.twig");
    }
}
