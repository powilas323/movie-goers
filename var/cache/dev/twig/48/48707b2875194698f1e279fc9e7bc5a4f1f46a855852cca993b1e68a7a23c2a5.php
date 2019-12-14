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

/* footer.html.twig */
class __TwigTemplate_5bce385743b7730dea979a08b2c8251184cb3f7603eb46eb882b0190ce37b7a2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"text-muted\">
  <div class=\"container\">
    <p class=\"float-right\">
      <a href=\"#\">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href=\"https://getbootstrap.com/\">Visit the homepage</a> or read our <a href=\"/docs/4.4/getting-started/introduction/\">getting started guide</a>.</p>
  </div>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"text-muted\">
  <div class=\"container\">
    <p class=\"float-right\">
      <a href=\"#\">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href=\"https://getbootstrap.com/\">Visit the homepage</a> or read our <a href=\"/docs/4.4/getting-started/introduction/\">getting started guide</a>.</p>
  </div>
</footer>", "footer.html.twig", "/var/www/html/IT_projektas/templates/footer.html.twig");
    }
}
