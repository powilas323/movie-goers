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
class __TwigTemplate_ef47ca1fd0c620d3fe2011e774a12cb8ecd84697f5f4557ca7391d5bb36a847c extends Template
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
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal\">Movie Goers</h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-dark\" href=\"#\">Features</a>
    <a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
    <a class=\"p-2 text-dark\" href=\"#\">Support</a>
    <a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
  </nav>
  <a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
  <h5 class=\"my-0 mr-md-auto font-weight-normal\">Movie Goers</h5>
  <nav class=\"my-2 my-md-0 mr-md-3\">
    <a class=\"p-2 text-dark\" href=\"#\">Features</a>
    <a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
    <a class=\"p-2 text-dark\" href=\"#\">Support</a>
    <a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
  </nav>
  <a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>
</div>
", "navbar.html.twig", "/var/www/html/IT_projektas/templates/navbar.html.twig");
    }
}
