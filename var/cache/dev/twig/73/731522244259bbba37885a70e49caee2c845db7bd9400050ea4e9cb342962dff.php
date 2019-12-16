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

/* navbar.html.twig */
class __TwigTemplate_97634ac1445a98e60ac6a67dc3b7d4e205e313dbcc7bf93019a6ea804ac5ba91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movie_list");
        echo "\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reviews_list");
        echo "\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
  </nav>
  ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "    <a class=\"btn btn-outline-danger\" href=\"#\">Atsijungti</a>
  ";
        } else {
            // line 11
            echo "  \t<a class=\"btn btn-outline-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Prisijungti</a>
  \t<a class=\"btn btn-outline-primary\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Registruotis</a>
  ";
        }
        // line 14
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 12,  64 => 11,  60 => 9,  58 => 8,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"{{ path('index') }}\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"{{ path('movie_list') }}\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"{{ path('reviews_list') }}\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"\">Filmo kurimas</a>
  </nav>
  {% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <a class=\"btn btn-outline-danger\" href=\"#\">Atsijungti</a>
  {% else %}
  \t<a class=\"btn btn-outline-primary\" href=\"{{ path('login') }}\">Prisijungti</a>
  \t<a class=\"btn btn-outline-primary\" href=\"{{ path('register') }}\">Registruotis</a>
  {% endif %}
</div>
", "navbar.html.twig", "/var/www/html/IT_projektas/templates/navbar.html.twig");
    }
}
