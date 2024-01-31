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

/* jbarbier/resume.html.twig */
class __TwigTemplate_26eabb458c413c00a120610b41a7d527 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/resume.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/resume.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/resume.html.twig", 1);
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

        echo "Hello JbarbierController!";
        
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
        echo "
<body>
  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card-transparent mx-auto\" style=\"max-width: 20rem;\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              <h1>Julien Barbier</h1>
              <p>41 Rue Emile Noirot, 42300 Roanne</p>
              <p>18 ans</p>
              <p>07 86 76 68 91</p>
              <a href=\"mailto:julien.barbier@skiff.com\">julien.barbier@skiff.com</a>
              <br>
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12\">
      <div class=\"card mx-auto\" style=\"max-width: 60rem;\">
        <p class=\"card-text\">
          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h2 class=\"card-text\">Ingénieur en Réseau et Télécommunications</h2>
              </div>
            </div>
          </div>


          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Compétences</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>R&T/informatique : Installation et gestion de réseaux, maîtrise de la programmation (c, c++, python) et d'outils informatiques (suite office, photoshop...)</li>
                    <li>Employé Libre services : Mise en rayon, gestion de stocks, facing, Rotation DLC, orientation client</li>
                    <li>Aide éducateur : Aide aux devoirs et surveillance d'étude, gestion de groupe</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Expériences</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>Août 2023 : EC2 Vente Caisses, E. Leclerc Chaponnay, Sodichap SAS</li>
                    <li>2020-2023 : Aide Éducateur Internat, Lycée Maurice La Mache, Lyon 8</li>
                    <li>2020-2023 : Ateliers Industriels, Lycée Maurice La Mache</li>
                    <li>2020-2023 : Accompagnant VTT, Corbas VTT</li>
                    <li>Juillet 2020 : Stage d'observation de seconde, Lycée Maurice La Mache</li>
                    <li>Juin 2019 : Stage d'observation de troisième, SOA Agencement, St Symphorien d'Ozon</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Formation</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>En préparation : BUT Réseau et Télécoms, IUT de Roanne</li>
                    <li>2023 : Permis B</li>
                    <li>2023 : BAC STI2D spécialité SIN, Lycée Maurice La Mache</li>
                    <li>2018-2020 : Attestation scolaire de sécurité routière niveaux 1 et 2</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Autres</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>Langues : Anglais (C1), Espagnol (A2+)</li>
                    <li>Loisirs : Montagne, Informatique, Travaux manuels, Aéromodélisme</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>

<div class=\"container mt-4\">
  <form>
    <div class=\"form-group\">
      <label class=\"form-label mt-4\"><strong>Téléchargement du CV</strong></label>
      <div class=\"form-group\">
        <div class=\"input-group mb-3\">
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Votre Mail\">
        </div>
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Votre Nom\" id=\"VotreNom\" aria-describedby=\"button-addon2\">
          <button class=\"btn btn-primary\" type=\"button\" id=\"button-addon2\" onclick=\"checkForm()\">Télécharger</button>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  function checkForm() {
    const email = document.getElementById('exampleInputEmail').value;
    const name = document.getElementById('VotreNom').value;

    if (email.length > 0 && name.length > 0) {
      // Check if it is a valid email address
      const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
      if (emailRegex.test(email)) {
        // Download the PDF
        const downloadLink = document.createElement('a');
        downloadLink.href = '/documents/CV Barbier Julien.pdf';
        downloadLink.setAttribute('download', 'CV Barbier Julien.pdf');
        downloadLink.click();
      } else {
        alert('Veuillez entrer une adresse email valide.');
      }
    }
  }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "jbarbier/resume.html.twig";
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
{% block title %}Hello JbarbierController!{% endblock %}
{% block body %}

<body>
  <div class=\"container mt-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card-transparent mx-auto\" style=\"max-width: 20rem;\">
          <div class=\"card-body\">
            <p class=\"card-text\">
              <h1>Julien Barbier</h1>
              <p>41 Rue Emile Noirot, 42300 Roanne</p>
              <p>18 ans</p>
              <p>07 86 76 68 91</p>
              <a href=\"mailto:julien.barbier@skiff.com\">julien.barbier@skiff.com</a>
              <br>
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-12\">
      <div class=\"card mx-auto\" style=\"max-width: 60rem;\">
        <p class=\"card-text\">
          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h2 class=\"card-text\">Ingénieur en Réseau et Télécommunications</h2>
              </div>
            </div>
          </div>


          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Compétences</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>R&T/informatique : Installation et gestion de réseaux, maîtrise de la programmation (c, c++, python) et d'outils informatiques (suite office, photoshop...)</li>
                    <li>Employé Libre services : Mise en rayon, gestion de stocks, facing, Rotation DLC, orientation client</li>
                    <li>Aide éducateur : Aide aux devoirs et surveillance d'étude, gestion de groupe</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Expériences</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>Août 2023 : EC2 Vente Caisses, E. Leclerc Chaponnay, Sodichap SAS</li>
                    <li>2020-2023 : Aide Éducateur Internat, Lycée Maurice La Mache, Lyon 8</li>
                    <li>2020-2023 : Ateliers Industriels, Lycée Maurice La Mache</li>
                    <li>2020-2023 : Accompagnant VTT, Corbas VTT</li>
                    <li>Juillet 2020 : Stage d'observation de seconde, Lycée Maurice La Mache</li>
                    <li>Juin 2019 : Stage d'observation de troisième, SOA Agencement, St Symphorien d'Ozon</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Formation</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>En préparation : BUT Réseau et Télécoms, IUT de Roanne</li>
                    <li>2023 : Permis B</li>
                    <li>2023 : BAC STI2D spécialité SIN, Lycée Maurice La Mache</li>
                    <li>2018-2020 : Attestation scolaire de sécurité routière niveaux 1 et 2</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
              <div class=\"card-body\">
                <h3 class=\"card-header\">Autres</h3>
                <p class=\"card-text\">
                  <ul>
                    <li>Langues : Anglais (C1), Espagnol (A2+)</li>
                    <li>Loisirs : Montagne, Informatique, Travaux manuels, Aéromodélisme</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>

<div class=\"container mt-4\">
  <form>
    <div class=\"form-group\">
      <label class=\"form-label mt-4\"><strong>Téléchargement du CV</strong></label>
      <div class=\"form-group\">
        <div class=\"input-group mb-3\">
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Votre Mail\">
        </div>
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Votre Nom\" id=\"VotreNom\" aria-describedby=\"button-addon2\">
          <button class=\"btn btn-primary\" type=\"button\" id=\"button-addon2\" onclick=\"checkForm()\">Télécharger</button>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  function checkForm() {
    const email = document.getElementById('exampleInputEmail').value;
    const name = document.getElementById('VotreNom').value;

    if (email.length > 0 && name.length > 0) {
      // Check if it is a valid email address
      const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
      if (emailRegex.test(email)) {
        // Download the PDF
        const downloadLink = document.createElement('a');
        downloadLink.href = '/documents/CV Barbier Julien.pdf';
        downloadLink.setAttribute('download', 'CV Barbier Julien.pdf');
        downloadLink.click();
      } else {
        alert('Veuillez entrer une adresse email valide.');
      }
    }
  }
</script>
{% endblock %}", "jbarbier/resume.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\resume.html.twig");
    }
}
