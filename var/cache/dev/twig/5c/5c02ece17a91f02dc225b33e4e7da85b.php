<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* profile/myrequest/form.html.twig */
class __TwigTemplate_86ce437f2cbdccee1fe9f7d682a8e9bd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myrequest/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myrequest/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myrequest/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Ma Demande</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myrequest/form.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t ";
        // line 11
        yield "                        <div class=\"row\">
                           
                        </div>
                        <div class=\"row\">
                            ";
        // line 20
        yield "                           
                     
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        ";
        // line 26
        yield "\t\t\t\t</div>
                <p>
\t\t\t\t        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn btn-secondary\">Retour au menu</a>
                        ";
        // line 30
        yield "\t\t\t        </p>
\t\t\t</div>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/myrequest/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 30,  104 => 28,  100 => 26,  93 => 20,  87 => 11,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Ma Demande</h2>
            {% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t {# {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de demande\" } }) }} #}
                        <div class=\"row\">
                           
                        </div>
                        <div class=\"row\">
                            {# <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(form.email, { attr: { class:'text-danger'} }) }}               
                            </div> #}
                           
                     
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        {# {{ form_end(form) }} #}
\t\t\t\t</div>
                <p>
\t\t\t\t        <a href=\"{{ url('profile.homepage.index') }}\" class=\"btn btn-secondary\">Retour au menu</a>
                        {# <a href=\"{{ url('profile.myprofile.password.edit') }}\" class=\"btn btn-secondary\">Modifier mon mot de passe</a> #}
\t\t\t        </p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myrequest/form.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myrequest/form.html.twig");
    }
}
