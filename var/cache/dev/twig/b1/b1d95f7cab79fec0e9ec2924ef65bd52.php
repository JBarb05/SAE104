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

/* jbarbier/index.html.twig */
class __TwigTemplate_79fbf57317b53f16941b5ac11da9b417 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/index.html.twig", 1);
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

        echo "Site de Julien Barbier";
        
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
        echo "<div class=\"container mt-4\">
  <div class=\"row\">
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
      <div class=\"card-body\">
        <h3 class=\"card-title\">Qui suis-je ?</h3>
        <p class=\"card-text\">Je m'appelle <strong>Julien Barbier</strong> et suis actuellement scolarisé en premiere année de Réseau et telecoms à l'IUT de Roanne.</p>
        <p class=\"card-text\">Je suis grandement passionné par l'informatique, plus particulièrement dans le domaine de l'IT et de la gestion/mise en place de réseaux que je maitrise déja grandement. 
        <br>Mais grâce a ma formation je sais aussis faire de la :</p>
        <ul>
          <li>Création d'application</li> 
          <li>Création de site web</li>
          <li>Création de scripts</li>
        </ul>
      </div>
    </div>
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
      <div class=\"card-body\">
        <img src=\"images/julien.png\" alt=\"Julien Barbier\" class=\"img-fluid rounded mx-auto\">
      </div>
    </div>
</div>
</div>

<div class=\"row\">
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
      <div class=\"card-body text-center\">
        <h3 class=\"card-title\"><strong> Quelques informations</strong></h3>
        <p class=\"card-text\">
          <p>Age : <strong>18 ans</strong>
          <p>Adresse : <strong>41 rue Emile Noirot, 42300, Roanne</strong>
          <p>Mail :<a href=\"mailto:julien.barbier@skiff.com\"> <strong>julien.barbier@skiff.com</strong></a></p>
          <p>Telephone : <strong>07 86 76 68 91</strong>
          <p>Permis B : <strong>Oui</strong>
          <br>
        <a href=\"/about\" class=\"btn btn-lg btn-dark btn-primary\" role=\"button\" aria-pressed=\"true\">Pour en savoir plus...</a>
      </div>
    </div>
</div>
<br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "jbarbier/index.html.twig";
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

{% block title %}Site de Julien Barbier{% endblock %}

{% block body %}
<div class=\"container mt-4\">
  <div class=\"row\">
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
      <div class=\"card-body\">
        <h3 class=\"card-title\">Qui suis-je ?</h3>
        <p class=\"card-text\">Je m'appelle <strong>Julien Barbier</strong> et suis actuellement scolarisé en premiere année de Réseau et telecoms à l'IUT de Roanne.</p>
        <p class=\"card-text\">Je suis grandement passionné par l'informatique, plus particulièrement dans le domaine de l'IT et de la gestion/mise en place de réseaux que je maitrise déja grandement. 
        <br>Mais grâce a ma formation je sais aussis faire de la :</p>
        <ul>
          <li>Création d'application</li> 
          <li>Création de site web</li>
          <li>Création de scripts</li>
        </ul>
      </div>
    </div>
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
      <div class=\"card-body\">
        <img src=\"images/julien.png\" alt=\"Julien Barbier\" class=\"img-fluid rounded mx-auto\">
      </div>
    </div>
</div>
</div>

<div class=\"row\">
    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
      <div class=\"card-body text-center\">
        <h3 class=\"card-title\"><strong> Quelques informations</strong></h3>
        <p class=\"card-text\">
          <p>Age : <strong>18 ans</strong>
          <p>Adresse : <strong>41 rue Emile Noirot, 42300, Roanne</strong>
          <p>Mail :<a href=\"mailto:julien.barbier@skiff.com\"> <strong>julien.barbier@skiff.com</strong></a></p>
          <p>Telephone : <strong>07 86 76 68 91</strong>
          <p>Permis B : <strong>Oui</strong>
          <br>
        <a href=\"/about\" class=\"btn btn-lg btn-dark btn-primary\" role=\"button\" aria-pressed=\"true\">Pour en savoir plus...</a>
      </div>
    </div>
</div>
<br>

{% endblock %}

", "jbarbier/index.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\index.html.twig");
    }
}
