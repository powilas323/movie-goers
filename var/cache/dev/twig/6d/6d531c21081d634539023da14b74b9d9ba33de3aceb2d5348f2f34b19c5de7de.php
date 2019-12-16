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

/* navbar.html */
class __TwigTemplate_64b8acd9f6bcc24f0b6902a1c7986be16959ff4d080fcf14ce0a2a27ae603c7e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"index\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"{\$root}/movie/1\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"reviews/1\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"#\">Support</a>
    <a class=\"p-2 text-white\" href=\"#\">Pricing</a>
  </nav>
  <a class=\"btn btn-outline-primary\" href=\"login\">Prisijungti</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm bg-dark\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal text-white\"><a class=\"p-2 text-white \" href=\"index\">Movie Gers</a></h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-white \" href=\"{\$root}/movie/1\">Filmu sarasas</a>
    <a class=\"p-2 text-white\" href=\"reviews/1\">Apzvalgu sarasas</a>
    <a class=\"p-2 text-white\" href=\"#\">Support</a>
    <a class=\"p-2 text-white\" href=\"#\">Pricing</a>
  </nav>
  <a class=\"btn btn-outline-primary\" href=\"login\">Prisijungti</a>
</div>
", "navbar.html", "/var/www/html/IT_projektas/templates/navbar.html");
    }
}
