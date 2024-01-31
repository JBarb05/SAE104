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

/* jbarbier/portfolioprogrammer.html.twig */
class __TwigTemplate_392529e86c44929d89c04e4e030f9b9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioprogrammer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioprogrammer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/portfolioprogrammer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello JbarbierController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
<div class=\"container\">
<div class=\"row\">
    <h1>Compétences Programmer</h1>
        <div class=\"col-md-6\">
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:80%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);\"></div>
                    <div class=\"progress-value\">80%</div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width:60%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"></div>
                    <div class=\"progress-value\">60%</div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width:40%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);\"></div>
                    <div class=\"progress-value\">40%</div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "jbarbier/portfolioprogrammer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello JbarbierController!{% endblock %}

{% block body %}
    
<div class=\"container\">
<div class=\"row\">
    <h1>Compétences Programmer</h1>
        <div class=\"col-md-6\">
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:80%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);\"></div>
                    <div class=\"progress-value\">80%</div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width:60%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"></div>
                    <div class=\"progress-value\">60%</div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width:40%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);\"></div>
                    <div class=\"progress-value\">40%</div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "jbarbier/portfolioprogrammer.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\portfolioprogrammer.html.twig");
    }
}
