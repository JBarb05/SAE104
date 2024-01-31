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
        echo "<link rel=\"stylesheet\" href=\"/css/resume.css\">
<div class=\"resume\">
  <div class=\"base\">
    <div class=\"profile\">
      <div class=\"photo\">
        <!--<img src=\"\" /> -->
        <i class=\"fas fa-rocket\"></i>
      </div>
      <div class=\"info\">
        <h1 class=\"name\">Naomi Weatherford</h1>
        <h2 class=\"job\">Frontend Web Designer</h2>
      </div>
    </div>
    <div class=\"about\">
      <h3>About Me</h3>I'm a web designer for Fiserv, specializing in web design, graphic design, and UX. Experienced with the Adobe Creative Suite, responsive design, social media management, and prototyping.
    </div>
    <div class=\"contact\">
      <h3>Contact Me</h3>
      <div class=\"call\"><a href=\"tel:123-456-7890\"><i class=\"fas fa-phone\"></i><span>123-456-7890</span></a></div>
      <div class=\"address\"><a href=\"https://goo.gl/maps/fiTBGT6Vnhy\"><i class=\"fas fa-map-marker\"></i><span>Provo, Utah</span></a>
      </div>
      <div class=\"email\"><a href=\"mailto:astronaomical@gmail.com\"><i class=\"fas fa-envelope\"></i><span>astronaomical</span></a></div>
      <div class=\"website\"><a href=\"http://astronaomical.com/\" target=\"_blank\"> <i class=\"fas fa-home\"></i><span>astronaomical.com</span></a></div>
    </div>
    <div class=\"follow\">
      <h3>Follow Me</h3>
      <div class=\"box\">
        <a href=\"https://www.facebook.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
        <a href=\"https://www.instagram.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-instagram \"></i></a>
        <a href=\"https://www.pinterest.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-pinterest\"></i></a>
        <a href=\"https://www.linkedin.com/in/naomi-weatherford-758385112/\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a>
        <a href=\"https://codepen.io/astronaomical/\" target=\"_blank\"><i class=\"fab fa-codepen\"></i></a>
        <a href=\"https://www.behance.net/astronaomical\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
      </div>
    </div>
  </div>
  <div class=\"func\">
    <div class=\"work\">
      <h3><i class=\"fa fa-briefcase\"></i>Experience</h3>
      <ul>
        <li><span>Technical Consultant -<br>Web Design</span><small>Fiserv</small><small>Apr 2018 - Now</small></li>
        <li><span>Web Designer</span><small>Lynden</small><small>Jan 2018 - Apr 2018</small></li>
        <li><span>Intern - Web Design</span><small>Lynden</small><small>Aug 2017 - Dec 2017</small></li>
      </ul>
    </div>
    <div class=\"edu\">
      <h3><i class=\"fa fa-graduation-cap\"></i>Education</h3>
      <ul>
        <li><span>Bachelor of Science<br>Web Design and Development</span><small>BYU-Idaho</small><small>Jan. 2016 - Apr. 2018</small></li>
        <li><span>Computer Science</span><small>Edmonds Community College</small><small>Sept. 2014 - Dec. 2015</small></li>
        <li><span>High School</span><small>Henry M. Jackson High School</small><small>Jan. 2013 - Jun. 2015</small></li>
      </ul>
    </div>
    <div class=\"skills-prog\">
      <h3><i class=\"fas fa-code\"></i>Programming Skills</h3>
      <ul>
        <li data-percent=\"95\"><span>HTML5</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"90\"><span>CSS3 & SCSS</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"60\"><span>JavaScript</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"50\"><span>jQuery</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"40\"><span>JSON</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"55\"><span>PHP</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"40\"><span>MySQL</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
      </ul>
    </div>
    <div class=\"skills-soft\">
      <h3><i class=\"fas fa-bezier-curve\"></i>Software Skills</h3>
      <ul>
        <li data-percent=\"90\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Illustrator</span><small></small>
        </li>
        <li data-percent=\"75\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Photoshop</span><small></small>
        </li>
        <li data-percent=\"85\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>InDesign</span><small></small>
        </li>
        <li data-percent=\"65\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Dreamweaver</span><small></small>
        </li>
      </ul>
    </div>
    <div class=\"interests\">
      <h3><i class=\"fas fa-star\"></i>Interests</h3>
      <div class=\"interests-items\">
        <div class=\"art\"><i class=\"fas fa-palette\"></i><span>Art</span></div>
        <div class=\"art\"><i class=\"fas fa-book\"></i><span>Books</span></div>
        <div class=\"movies\"><i class=\"fas fa-film\"></i><span>Movies</span></div>
        <div class=\"music\"><i class=\"fas fa-headphones\"></i><span>Music</span></div>
        <div class=\"games\"><i class=\"fas fa-gamepad\"></i><span>Games</span></div>
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
<link rel=\"stylesheet\" href=\"/css/resume.css\">
<div class=\"resume\">
  <div class=\"base\">
    <div class=\"profile\">
      <div class=\"photo\">
        <!--<img src=\"\" /> -->
        <i class=\"fas fa-rocket\"></i>
      </div>
      <div class=\"info\">
        <h1 class=\"name\">Naomi Weatherford</h1>
        <h2 class=\"job\">Frontend Web Designer</h2>
      </div>
    </div>
    <div class=\"about\">
      <h3>About Me</h3>I'm a web designer for Fiserv, specializing in web design, graphic design, and UX. Experienced with the Adobe Creative Suite, responsive design, social media management, and prototyping.
    </div>
    <div class=\"contact\">
      <h3>Contact Me</h3>
      <div class=\"call\"><a href=\"tel:123-456-7890\"><i class=\"fas fa-phone\"></i><span>123-456-7890</span></a></div>
      <div class=\"address\"><a href=\"https://goo.gl/maps/fiTBGT6Vnhy\"><i class=\"fas fa-map-marker\"></i><span>Provo, Utah</span></a>
      </div>
      <div class=\"email\"><a href=\"mailto:astronaomical@gmail.com\"><i class=\"fas fa-envelope\"></i><span>astronaomical</span></a></div>
      <div class=\"website\"><a href=\"http://astronaomical.com/\" target=\"_blank\"> <i class=\"fas fa-home\"></i><span>astronaomical.com</span></a></div>
    </div>
    <div class=\"follow\">
      <h3>Follow Me</h3>
      <div class=\"box\">
        <a href=\"https://www.facebook.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
        <a href=\"https://www.instagram.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-instagram \"></i></a>
        <a href=\"https://www.pinterest.com/astronaomical/\" target=\"_blank\"><i class=\"fab fa-pinterest\"></i></a>
        <a href=\"https://www.linkedin.com/in/naomi-weatherford-758385112/\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a>
        <a href=\"https://codepen.io/astronaomical/\" target=\"_blank\"><i class=\"fab fa-codepen\"></i></a>
        <a href=\"https://www.behance.net/astronaomical\" target=\"_blank\"><i class=\"fab fa-behance\"></i></a>
      </div>
    </div>
  </div>
  <div class=\"func\">
    <div class=\"work\">
      <h3><i class=\"fa fa-briefcase\"></i>Experience</h3>
      <ul>
        <li><span>Technical Consultant -<br>Web Design</span><small>Fiserv</small><small>Apr 2018 - Now</small></li>
        <li><span>Web Designer</span><small>Lynden</small><small>Jan 2018 - Apr 2018</small></li>
        <li><span>Intern - Web Design</span><small>Lynden</small><small>Aug 2017 - Dec 2017</small></li>
      </ul>
    </div>
    <div class=\"edu\">
      <h3><i class=\"fa fa-graduation-cap\"></i>Education</h3>
      <ul>
        <li><span>Bachelor of Science<br>Web Design and Development</span><small>BYU-Idaho</small><small>Jan. 2016 - Apr. 2018</small></li>
        <li><span>Computer Science</span><small>Edmonds Community College</small><small>Sept. 2014 - Dec. 2015</small></li>
        <li><span>High School</span><small>Henry M. Jackson High School</small><small>Jan. 2013 - Jun. 2015</small></li>
      </ul>
    </div>
    <div class=\"skills-prog\">
      <h3><i class=\"fas fa-code\"></i>Programming Skills</h3>
      <ul>
        <li data-percent=\"95\"><span>HTML5</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"90\"><span>CSS3 & SCSS</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"60\"><span>JavaScript</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"50\"><span>jQuery</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"40\"><span>JSON</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"55\"><span>PHP</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
        <li data-percent=\"40\"><span>MySQL</span>
          <div class=\"skills-bar\">
            <div class=\"bar\"></div>
          </div>
        </li>
      </ul>
    </div>
    <div class=\"skills-soft\">
      <h3><i class=\"fas fa-bezier-curve\"></i>Software Skills</h3>
      <ul>
        <li data-percent=\"90\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Illustrator</span><small></small>
        </li>
        <li data-percent=\"75\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Photoshop</span><small></small>
        </li>
        <li data-percent=\"85\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>InDesign</span><small></small>
        </li>
        <li data-percent=\"65\">
          <svg viewbox=\"0 0 100 100\">
            <circle cx=\"50\" cy=\"50\" r=\"45\"></circle>
            <circle class=\"cbar\" cx=\"50\" cy=\"50\" r=\"45\"></circle>
          </svg><span>Dreamweaver</span><small></small>
        </li>
      </ul>
    </div>
    <div class=\"interests\">
      <h3><i class=\"fas fa-star\"></i>Interests</h3>
      <div class=\"interests-items\">
        <div class=\"art\"><i class=\"fas fa-palette\"></i><span>Art</span></div>
        <div class=\"art\"><i class=\"fas fa-book\"></i><span>Books</span></div>
        <div class=\"movies\"><i class=\"fas fa-film\"></i><span>Movies</span></div>
        <div class=\"music\"><i class=\"fas fa-headphones\"></i><span>Music</span></div>
        <div class=\"games\"><i class=\"fas fa-gamepad\"></i><span>Games</span></div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "jbarbier/resume.html.twig", "C:\\Users\\jujue\\Documents\\UNIV\\SAE104\\templates\\jbarbier\\resume.html.twig");
    }
}
