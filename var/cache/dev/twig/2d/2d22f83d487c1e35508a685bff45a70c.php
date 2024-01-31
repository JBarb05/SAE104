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

/* jbarbier/portfolioconnecter.html.twig */
class __TwigTemplate_1c2b8bc1d5262398e2150a7a53513288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioconnecter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioconnecter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/portfolioconnecter.html.twig", 1);
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

        echo "Connecter";
        
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
        echo "    <link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
    <div class=\"container\">
        <div class=\"row\">
            <h1>Connecter les entreprises et les usagers</h1>
            <div class=\"row\">
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:77%;\"></div>
                                    <div class=\"progress-value\">77%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:32%;\"></div>
                                    <div class=\"progress-value\">32%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:90%;\"></div>
                                    <div class=\"progress-value\">90%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:15%;\"></div>
                                    <div class=\"progress-value\">15%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Communiquer avec un client ou un collaborateur</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:65%;\"></div>
                                    <div class=\"progress-value\">65%</div>
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
        return "jbarbier/portfolioconnecter.html.twig";
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
{% block title %}Connecter{% endblock %}
{% block body %}
    <link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
    <div class=\"container\">
        <div class=\"row\">
            <h1>Connecter les entreprises et les usagers</h1>
            <div class=\"row\">
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:77%;\"></div>
                                    <div class=\"progress-value\">77%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:32%;\"></div>
                                    <div class=\"progress-value\">32%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:90%;\"></div>
                                    <div class=\"progress-value\">90%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:15%;\"></div>
                                    <div class=\"progress-value\">15%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"progress-outer\">
                    <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Communiquer avec un client ou un collaborateur</p>
                            <p class=\"card-content\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:65%;\"></div>
                                    <div class=\"progress-value\">65%</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "jbarbier/portfolioconnecter.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\portfolioconnecter.html.twig");
    }
}
