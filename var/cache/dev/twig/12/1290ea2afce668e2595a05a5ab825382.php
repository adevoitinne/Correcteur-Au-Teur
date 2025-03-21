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
class __TwigTemplate_ab2dd8cf337c2264dfe7c0853578ee07 extends Template
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
\t\t<div class=\"container-fluid\">
\t\t\t
\t\t\t";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myprofile/edit-password.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-sm-5 px-md-5\">
                \t<img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/reset-password.webp"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration du changement de mot de passe\"> 
            \t</div>     
\t\t\t\t<div class=\"col-md-6 col-sm-8 pb-sm-5 px-md-5\">
\t\t\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
\t\t\t\t\t";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de modification de mot de passe"]]);
        yield "
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "plainPassword", [], "any", false, false, false, 16), 'widget', ["attr" => ["aria_label" => "Veuillez obligatoirement saisir votre mot de passe"]]);
        yield "
\t\t\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
\t\t\t\t
\t\t\t\t
\t\t\t\t    <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
\t\t\t\t    </div>
                    </div>
\t\t\t\t\t";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn button btn-secondary\">Retour au menu</a>
\t\t\t\t\t<a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.form");
        yield "\" class=\"btn button btn-secondary\">Retour à mon profil</a>
\t\t\t\t</p>
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
        return array (  122 => 27,  118 => 26,  112 => 23,  103 => 17,  99 => 16,  94 => 14,  87 => 10,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
\t\t<div class=\"container-fluid\">
\t\t\t
\t\t\t{% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-sm-5 px-md-5\">
                \t<img src=\"{{ asset('img/reset-password.webp') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration du changement de mot de passe\"> 
            \t</div>     
\t\t\t\t<div class=\"col-md-6 col-sm-8 pb-sm-5 px-md-5\">
\t\t\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
\t\t\t\t\t{{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de modification de mot de passe\" } }) }}
\t\t\t\t\t
\t\t\t\t\t\t{{ form_widget(form.plainPassword, { attr: { aria_label:'Veuillez obligatoirement saisir votre mot de passe'} }) }}
\t\t\t\t\t\t{{ form_errors(form.plainPassword, { attr: { class:'text-danger'} }) }}
\t\t\t\t
\t\t\t\t
\t\t\t\t    <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
\t\t\t\t    </div>
                    </div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ url('profile.homepage.index') }}\" class=\"btn button btn-secondary\">Retour au menu</a>
\t\t\t\t\t<a href=\"{{ url('profile.myprofile.form') }}\" class=\"btn button btn-secondary\">Retour à mon profil</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "profile/myprofile/edit-password.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myprofile/edit-password.html.twig");
    }
}
