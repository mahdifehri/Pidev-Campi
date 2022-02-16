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

/* back_evenement/index.html.twig */
class __TwigTemplate_30383048e666df2688f96e379cbd1619aa29f8089ca61805725fc6099920a16c extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back_evenement/index.html.twig", 1);
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

        echo "Hello BackEvenementController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Ajouter un événement</h4>
            <p class=\"card-description\"> Veuillez remplir les champs vides </p>
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            <form class=\"forms-sample\">
                <div class=\"form-group\">
                    <!-- <label for=\"exampleInputName1\">Name</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputName1\" placeholder=\"Name\"> -->
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "destination", [], "any", false, false, false, 16), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date", [], "any", false, false, false, 23), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nbr_participants_max", [], "any", false, false, false, 31), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nbr_participants_max", [], "any", false, false, false, 32), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'row');
        echo "
                </div>


                <!--<div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword4\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword4\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleSelectGender\">Gender</label>
                    <select class=\"form-control\" id=\"exampleSelectGender\">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>File upload</label>
                    <input type=\"file\" name=\"img[]\" class=\"file-upload-default\">
                    <div class=\"input-group col-xs-12\">
                        <input type=\"text\" class=\"form-control file-upload-info\" disabled=\"\" placeholder=\"Upload Image\">
                        <span class=\"input-group-append\">
                            <button class=\"file-upload-browse btn btn-primary\" type=\"button\">Upload</button>
                          </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputCity1\">City</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputCity1\" placeholder=\"Location\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleTextarea1\">Textarea</label>
                    <textarea class=\"form-control\" id=\"exampleTextarea1\" rows=\"4\"></textarea>
                </div>  -->
                <button type=\"submit\" class=\"btn btn-primary mr-2\">Submit</button>
                <button class=\"btn btn-dark\">Cancel</button>
            </form>
            ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 75,  152 => 35,  146 => 32,  142 => 31,  136 => 28,  132 => 27,  126 => 24,  122 => 23,  116 => 20,  112 => 19,  106 => 16,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello BackEvenementController!{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Ajouter un événement</h4>
            <p class=\"card-description\"> Veuillez remplir les champs vides </p>
            {{ form_start(form) }}
            <form class=\"forms-sample\">
                <div class=\"form-group\">
                    <!-- <label for=\"exampleInputName1\">Name</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputName1\" placeholder=\"Name\"> -->
                    {{ form_label (form.destination) }}
                    {{ form_widget (form.destination) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label (form.description) }}
                    {{ form_widget (form.description) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label (form.date) }}
                    {{ form_widget (form.date) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label (form.prix) }}
                    {{ form_widget (form.prix) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label (form.nbr_participants_max) }}
                    {{ form_widget (form.nbr_participants_max) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row (form.image) }}
                </div>


                <!--<div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword4\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword4\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleSelectGender\">Gender</label>
                    <select class=\"form-control\" id=\"exampleSelectGender\">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>File upload</label>
                    <input type=\"file\" name=\"img[]\" class=\"file-upload-default\">
                    <div class=\"input-group col-xs-12\">
                        <input type=\"text\" class=\"form-control file-upload-info\" disabled=\"\" placeholder=\"Upload Image\">
                        <span class=\"input-group-append\">
                            <button class=\"file-upload-browse btn btn-primary\" type=\"button\">Upload</button>
                          </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputCity1\">City</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputCity1\" placeholder=\"Location\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleTextarea1\">Textarea</label>
                    <textarea class=\"form-control\" id=\"exampleTextarea1\" rows=\"4\"></textarea>
                </div>  -->
                <button type=\"submit\" class=\"btn btn-primary mr-2\">Submit</button>
                <button class=\"btn btn-dark\">Cancel</button>
            </form>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "back_evenement/index.html.twig", "C:\\wamp64\\www\\campi\\templates\\back_evenement\\index.html.twig");
    }
}
