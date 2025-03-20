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

/* registration/register.html.twig */
class __TwigTemplate_0860069029398464e3b02567b9bfd3aa extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
\t\t<div class=\"container mx-md-auto\">
\t\t\t<div class=\"row flex-sm-column flex-md-row-reverse\">


\t\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t\t<h2>Créer votre profil :</h2>

\t\t\t\t\t";
        // line 15
        yield from $this->loadTemplate("_inc/notice.html.twig", "registration/register.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "
\t\t\t\t\t";
        // line 18
        yield "
\t\t\t\t\t";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire d'inscription"]]);
        yield "
\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de Passe :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre mot de passe"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "agreeTerms", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "AgreeTerms :"]);
        yield "
\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "agreeTerms", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-check-input", "aria_label" => "Veuillez obligatoirement approuver les CGS"]]);
        yield "
\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "agreeTerms", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
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
        return "registration/register.html.twig";
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
        return array (  172 => 42,  164 => 37,  160 => 36,  156 => 35,  148 => 30,  144 => 29,  140 => 28,  134 => 25,  130 => 24,  126 => 23,  119 => 19,  116 => 18,  113 => 16,  111 => 15,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
\t\t<div class=\"container mx-md-auto\">
\t\t\t<div class=\"row flex-sm-column flex-md-row-reverse\">


\t\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t\t<h2>Créer votre profil :</h2>

\t\t\t\t\t{% include \"_inc/notice.html.twig\" %}

\t\t\t\t\t{# les messages d'erreurs n'apparaissent pas en rouge quoique je fasse(style: 'red' ou  classe error-message avec la couleur fixée dans la feuille form.css). l'attribut n'apparait pas sur la balise li créée#}

\t\t\t\t\t{{ form_start(registrationForm, { attr: { novalidate: 'novalidate', aria_label:\"formulaire d'inscription\" } }) }}
\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.email, 'Email :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.email, { attr: { class:'text-danger'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.plainPassword, 'Mot de Passe :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.plainPassword, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre mot de passe'} }) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.plainPassword, { attr: { class:'text-danger'} }) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_label(registrationForm.agreeTerms, 'AgreeTerms :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t{{ form_widget(registrationForm.agreeTerms, { attr: { class:'form-control form-check-input', aria_label:'Veuillez obligatoirement approuver les CGS'} }) }}
\t\t\t\t\t\t{{ form_errors(registrationForm.agreeTerms, { attr: { class:'text-danger'} }) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

{% endblock %}
", "registration/register.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/registration/register.html.twig");
    }
}
