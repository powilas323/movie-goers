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

/* UserManagement/register.html.twig */
class __TwigTemplate_cca0dbe3076183b507c932f532e2379d3ee844bff1564e6ec2a6cf186d595119 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserManagement/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "UserManagement/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Registracija
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  <section class=\"jumbotron text-center\">
    <div class=\"container\">
      <h1>Registracija</h1>
  </section>
<div class=\"album py-5 bg-light\">
\t<div class=\"container\">
\t\t<form>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Username</label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
\t\t    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputPassword1\">Password</label>
\t\t    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
\t\t  </div>
\t\t  <div class=\"form-group form-check\">
\t\t    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
\t\t    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
\t\t  </div>
\t\t  <button type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UserManagement/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Registracija
{% endblock %}

{% block content %}
  <section class=\"jumbotron text-center\">
    <div class=\"container\">
      <h1>Registracija</h1>
  </section>
<div class=\"album py-5 bg-light\">
\t<div class=\"container\">
\t\t<form>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Username</label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
\t\t    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputPassword1\">Password</label>
\t\t    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
\t\t  </div>
\t\t  <div class=\"form-group form-check\">
\t\t    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
\t\t    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
\t\t  </div>
\t\t  <button type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t</form>
\t</div>
</div>
{% endblock %}", "UserManagement/register.html.twig", "/var/www/html/IT_projektas/templates/UserManagement/register.html.twig");
    }
}
