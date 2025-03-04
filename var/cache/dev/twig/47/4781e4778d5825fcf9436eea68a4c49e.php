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

/* profile/myprofile/edit-password.html.twig */
class __TwigTemplate_ed8b1ceb3c990e0c8d39b4c2fcd40e5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/edit-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/edit-password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myprofile/edit-password.html.twig", 1);
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
\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myprofile/edit-password.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de profil"]]);
        yield "
                        <div class=\"row\">
                           
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "plainPassword", [], "any", false, false, false, 16), 'widget', ["attr" => ["aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "             
                            </div>
                     
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
                <p>
\t\t\t\t        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn button btn-secondary\">Retour au menu</a>
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.form");
        yield "\" class=\"btn button btn-secondary\">Modifier mon profil</a>
\t\t\t        </p>
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
        return "profile/myprofile/edit-password.html.twig";
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
        return array (  119 => 27,  115 => 26,  109 => 23,  100 => 17,  96 => 16,  87 => 10,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
            {% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de profil\" } }) }}
                        <div class=\"row\">
                           
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_widget(form.plainPassword, { attr: { aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(form.plainPassword, { attr: { class:'text-danger'} }) }}             
                            </div>
                     
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        {{ form_end(form) }}
\t\t\t\t</div>
                <p>
\t\t\t\t        <a href=\"{{ url('profile.homepage.index') }}\" class=\"btn button btn-secondary\">Retour au menu</a>
                        <a href=\"{{ url('profile.myprofile.form') }}\" class=\"btn button btn-secondary\">Modifier mon profil</a>
\t\t\t        </p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myprofile/edit-password.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myprofile/edit-password.html.twig");
    }
}
