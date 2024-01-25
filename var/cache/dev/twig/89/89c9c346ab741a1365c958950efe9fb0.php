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

/* jbarbier/portfolio.html.twig */
class __TwigTemplate_d622e59e07b2944a197d030fd1c8b122 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Compétences";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container mt-4\">
    <div class=\"row text-center\">
      <h3>Mon Portfolio de Compétences</h3>
    </div>
    <div class=\"row align-middle\">
      <div class=\"btn-group\" role=\"group\">
        <a href=\"/portfolio/connecter\" class=\"btn btn-secondary btn-dark\">Connecter</a>
        <a href=\"/portfolio/administrer\" class=\"btn btn-secondary btn-dark\">Administrer</a>
        <a href=\"/portfolio/programmer\" class=\"btn btn-secondary btn-dark\">Programmer</a>
      </div>
    </div>


    <!--a href=\"/cv\"
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
        <div class=\"card-body\">
          <img src=\"images/julien.png\" alt=\"Julien Barbier\" class=\"img-fluid rounded mx-auto\">
        </div>
        </a-->


        <!--div class=\"bs-component\">
          <div class=\"progress\"> 
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <br>
          <div class=\"progress\">
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
      </div>
    </div>
  </div-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "jbarbier/portfolio.html.twig";
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
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes Compétences{% endblock %}
{% block body %}
  <div class=\"container mt-4\">
    <div class=\"row text-center\">
      <h3>Mon Portfolio de Compétences</h3>
    </div>
    <div class=\"row align-middle\">
      <div class=\"btn-group\" role=\"group\">
        <a href=\"/portfolio/connecter\" class=\"btn btn-secondary btn-dark\">Connecter</a>
        <a href=\"/portfolio/administrer\" class=\"btn btn-secondary btn-dark\">Administrer</a>
        <a href=\"/portfolio/programmer\" class=\"btn btn-secondary btn-dark\">Programmer</a>
      </div>
    </div>


    <!--a href=\"/cv\"
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
        <div class=\"card-body\">
          <img src=\"images/julien.png\" alt=\"Julien Barbier\" class=\"img-fluid rounded mx-auto\">
        </div>
        </a-->


        <!--div class=\"bs-component\">
          <div class=\"progress\"> 
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <br>
          <div class=\"progress\">
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
      </div>
    </div>
  </div-->
{% endblock %}", "jbarbier/portfolio.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\portfolio.html.twig");
    }
}
