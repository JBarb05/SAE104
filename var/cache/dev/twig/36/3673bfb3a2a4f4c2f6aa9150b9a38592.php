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

/* jbarbier/about.html.twig */
class __TwigTemplate_ba3032da079a1c95479b47bcb8d39acd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/about.html.twig", 1);
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

        echo "A propos de moi";
        
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
        echo "  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
        <div class=\"card-body\">
          <h3 class=\"card-header\">Ma passion pour le VTT</h3>
          <br>
          <p class=\"card-text\">Ayant depuis longtemps commencé le vélo, je continue d'en pratiquer très régulierement.
            <br>Cela fait depuis un certain temps que je pratique le VTT. Pratique découverte par le biais de mon père, j'ai tout de suite accroché, découvrir des paysages en étant proche de la nature, tout en pratiquant un effort physique et appliquant de la technique est ce qu'il m'a plus dans la pratique.
            <br>
            <br> D'abord inscris en club de VTT XC en loisir en 2018, j'ai pu m'ameliorer grandement dans la connaissance technique que physique sur mon ancien vélo, un VTT datant des années 2008 trop petit pour moi.
            <br> 
            <br> Puis pendant l'été 2021 j'ai passé des vacances dans le queyras avec ma famille ou ma passion du vélo m'a suivie.
            <br> Ces vacances m'on fait louer un plus gros vélo (electrique) qui etant a ma taille est plus confortable et adapté à une pratique plus engagée.
            <br>
            <br> 
          </p>
        </div>
      </div>
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
        <p class=\"card-title\">Mon ancienne monture</p>
        <div class=\"card-body\">
          <img src=\"images/old_bike.jpg\" alt=\"old bike\" class=\"img-fluid rounded mx-auto\">
        </div>
      </div>  
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: auto;\">
          <p class=\"card-title\">Les Débuts</p>
          <div class=\"card-body\">
            <img src=\"images/xc_julien.jpg\" alt=\"starting\" class=\"rounded mx-auto\" style=\"width: 100%;\">
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: auto;\">
          <p class=\"card-title\">En Club</p>
          <div class=\"card-body\">
            <img src=\"images/xc_julien_2.png\" alt=\"old bike\" class=\"img-fluid rounded mx-auto\" style=\"max-width: 40rem;\">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 200;\">
          <p class=\"card-title\">Le queyras</p>
          <div class=\"card-body\">
            <img src=\"images/queyras.jpg\" alt=\"starting\" class=\"rounded mx-auto\" style=\"width: 80%;\">
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: 100%;\">
          <p class=\"card-header\">De nouveaux horizons</p>
          <div class=\"card-body\">
          <br>
            <p class=\"card-text\">Apres ces vacances, j'ai décidé l'été d'apres de commencer a travailler pour pourvoir enfin me financer le velo de mes reves.
              <br>Et apres 2mois d'effort en travail saisonnier au supermarché, le reve est enfin devenu réalité :
          </div>
        </div>
        <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: auto; margin-bottom: 5;\">
        <div class=\"card-body\">
          <img src=\"images/enduro.jpg\" alt=\"new bike\" class=\"rounded mx-auto\" style=\"width: 100%;\">
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
        <div class=\"card-body\">
          <br>
          <p class=\"card-text\">
          <br>
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
        return "jbarbier/about.html.twig";
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

{% block title %}A propos de moi{% endblock %}

{% block body %}
  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
        <div class=\"card-body\">
          <h3 class=\"card-header\">Ma passion pour le VTT</h3>
          <br>
          <p class=\"card-text\">Ayant depuis longtemps commencé le vélo, je continue d'en pratiquer très régulierement.
            <br>Cela fait depuis un certain temps que je pratique le VTT. Pratique découverte par le biais de mon père, j'ai tout de suite accroché, découvrir des paysages en étant proche de la nature, tout en pratiquant un effort physique et appliquant de la technique est ce qu'il m'a plus dans la pratique.
            <br>
            <br> D'abord inscris en club de VTT XC en loisir en 2018, j'ai pu m'ameliorer grandement dans la connaissance technique que physique sur mon ancien vélo, un VTT datant des années 2008 trop petit pour moi.
            <br> 
            <br> Puis pendant l'été 2021 j'ai passé des vacances dans le queyras avec ma famille ou ma passion du vélo m'a suivie.
            <br> Ces vacances m'on fait louer un plus gros vélo (electrique) qui etant a ma taille est plus confortable et adapté à une pratique plus engagée.
            <br>
            <br> 
          </p>
        </div>
      </div>
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 20rem;\">
        <p class=\"card-title\">Mon ancienne monture</p>
        <div class=\"card-body\">
          <img src=\"images/old_bike.jpg\" alt=\"old bike\" class=\"img-fluid rounded mx-auto\">
        </div>
      </div>  
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: auto;\">
          <p class=\"card-title\">Les Débuts</p>
          <div class=\"card-body\">
            <img src=\"images/xc_julien.jpg\" alt=\"starting\" class=\"rounded mx-auto\" style=\"width: 100%;\">
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: auto;\">
          <p class=\"card-title\">En Club</p>
          <div class=\"card-body\">
            <img src=\"images/xc_julien_2.png\" alt=\"old bike\" class=\"img-fluid rounded mx-auto\" style=\"max-width: 40rem;\">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 200;\">
          <p class=\"card-title\">Le queyras</p>
          <div class=\"card-body\">
            <img src=\"images/queyras.jpg\" alt=\"starting\" class=\"rounded mx-auto\" style=\"width: 80%;\">
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card-transparent border-primary mx-auto\" style=\"width: 100%;\">
          <p class=\"card-header\">De nouveaux horizons</p>
          <div class=\"card-body\">
          <br>
            <p class=\"card-text\">Apres ces vacances, j'ai décidé l'été d'apres de commencer a travailler pour pourvoir enfin me financer le velo de mes reves.
              <br>Et apres 2mois d'effort en travail saisonnier au supermarché, le reve est enfin devenu réalité :
          </div>
        </div>
        <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: auto; margin-bottom: 5;\">
        <div class=\"card-body\">
          <img src=\"images/enduro.jpg\" alt=\"new bike\" class=\"rounded mx-auto\" style=\"width: 100%;\">
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
        <div class=\"card-body\">
          <br>
          <p class=\"card-text\">
          <br>
            <br> 

{% endblock %}
", "jbarbier/about.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\sae104\\templates\\jbarbier\\about.html.twig");
    }
}
