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
        echo "<link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
    <div class=\"container\">
        <div class=\"row\">
            <h1>Créer des outils et applications informatiques pour les R&T </h1>
            <div class=\"row\">
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:100%;\"></div>
                                    <div class=\"progress-value\">100%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:100%;\"></div>
                                    <div class=\"progress-value\">100%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:74%;\"></div>
                                    <div class=\"progress-value\">74%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:87%;\"></div>
                                    <div class=\"progress-value\">87%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:65%;\"></div>
                                    <div class=\"progress-value\">65%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:90%;\"></div>
                                    <div class=\"progress-value\">90%</div>
                                </div>
                            </p>
                        </div>
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
<link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
    <div class=\"container\">
        <div class=\"row\">
            <h1>Créer des outils et applications informatiques pour les R&T </h1>
            <div class=\"row\">
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:100%;\"></div>
                                    <div class=\"progress-value\">100%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:100%;\"></div>
                                    <div class=\"progress-value\">100%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:74%;\"></div>
                                    <div class=\"progress-value\">74%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:87%;\"></div>
                                    <div class=\"progress-value\">87%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:65%;\"></div>
                                    <div class=\"progress-value\">65%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:90%;\"></div>
                                    <div class=\"progress-value\">90%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "jbarbier/portfolioprogrammer.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\portfolioprogrammer.html.twig");
    }
}
