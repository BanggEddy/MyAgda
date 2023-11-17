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

/* contact/show.html.twig */
class __TwigTemplate_7bcc331c1e179fe004d665b27672f390 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "contact/show.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <div class=\"container\">
        <h1>Détails du contact</h1>

        <dl class=\"row\">
            <dt class=\"col-sm-3\">Nom</dt>
            <dd class=\"col-sm-9\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-3\">Prénom</dt>
            <dd class=\"col-sm-9\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-3\">Email</dt>
            <dd class=\"col-sm-9\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-3\">Téléphone</dt>
            <dd class=\"col-sm-9\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 20, $this->source); })()), "telephone", [], "any", false, false, false, 20), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-3\">User ID</dt>
            <dd class=\"col-sm-9\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 23, $this->source); })()), "usercontact", [], "any", false, false, false, 23), "html", null, true);
        echo "</dd>
        </dl>

        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"btn btn-secondary mt-3\">Retour à la liste des contacts</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  99 => 23,  93 => 20,  87 => 17,  81 => 14,  75 => 11,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/contact/show.html.twig #}

{% extends 'admin.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Détails du contact</h1>

        <dl class=\"row\">
            <dt class=\"col-sm-3\">Nom</dt>
            <dd class=\"col-sm-9\">{{ contact.nom }}</dd>

            <dt class=\"col-sm-3\">Prénom</dt>
            <dd class=\"col-sm-9\">{{ contact.prenom }}</dd>

            <dt class=\"col-sm-3\">Email</dt>
            <dd class=\"col-sm-9\">{{ contact.email }}</dd>

            <dt class=\"col-sm-3\">Téléphone</dt>
            <dd class=\"col-sm-9\">{{ contact.telephone }}</dd>

            <dt class=\"col-sm-3\">User ID</dt>
            <dd class=\"col-sm-9\">{{ contact.usercontact }}</dd>
        </dl>

        <a href=\"{{ path('app_contact') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste des contacts</a>
    </div>
{% endblock %}
", "contact/show.html.twig", "/var/www/html/myagenda/templates/contact/show.html.twig");
    }
}
