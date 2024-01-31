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

/* jbarbier/portfolioadministrer.html.twig */
class __TwigTemplate_e1f3fde6266d07aa682ae8248963289d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioadministrer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jbarbier/portfolioadministrer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jbarbier/portfolioadministrer.html.twig", 1);
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

        echo "Administrer";
        
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
        echo "<link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
<div class=\"container\">
    <div class=\"row\">
        <h1>Administrer les réseaux et l’Internet</h1>
        <div class=\"row\">
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:95%;\"></div>
                                <div class=\"progress-value\">95%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Comprendre les principes et standards du codage de l’information</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:78%;\"></div>
                                <div class=\"progress-value\">78%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</p>
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
                        <p class=\"card-text\">Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et administration des réseaux et services fournis (DHCP, DNS, ...)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:80%;\"></div>
                                <div class=\"progress-value\">80%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Savoir identifier les dysfonctionnements du réseau local</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:95%;\"></div>
                                <div class=\"progress-value\">95%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:85%;\"></div>
                                <div class=\"progress-value\">85%</div>
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
        return "jbarbier/portfolioadministrer.html.twig";
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
{% block title %}Administrer{% endblock %}
{% block body %}
<link rel=\"stylesheet\" href=\"/css/portfolio2.css\">
<div class=\"container\">
    <div class=\"row\">
        <h1>Administrer les réseaux et l’Internet</h1>
        <div class=\"row\">
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:95%;\"></div>
                                <div class=\"progress-value\">95%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Comprendre les principes et standards du codage de l’information</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:78%;\"></div>
                                <div class=\"progress-value\">78%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</p>
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
                        <p class=\"card-text\">Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et administration des réseaux et services fournis (DHCP, DNS, ...)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:80%;\"></div>
                                <div class=\"progress-value\">80%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Savoir identifier les dysfonctionnements du réseau local</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:95%;\"></div>
                                <div class=\"progress-value\">95%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"progress-outer\">
                <div class=\"card-transparent border-primary mx-auto\" style=\"max-width: 60rem;\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</p>
                        <p class=\"card-content\">
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width:85%;\"></div>
                                <div class=\"progress-value\">85%</div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "jbarbier/portfolioadministrer.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\portfolioadministrer.html.twig");
    }
}
