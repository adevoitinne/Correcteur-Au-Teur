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
class __TwigTemplate_2e26918f2e3ec6d0bc7f0a942371d618 extends Template
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
\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
\t\t\t";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myprofile/edit-password.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de modification de mot de passe"]]);
        yield "
\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), 'widget', ["attr" => ["aria_label" => "Veuillez obligatoirement saisir votre mot de passe"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t    <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
\t\t\t\t\t    </div>
                    </div>
\t\t\t\t\t";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn button btn-secondary\">Retour au menu</a>
\t\t\t\t\t<a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.form");
        yield "\" class=\"btn button btn-secondary\">Modifier mon profil</a>
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
        return array (  117 => 25,  113 => 24,  107 => 21,  98 => 15,  94 => 14,  87 => 10,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
\t\t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Modifier mon mot de passe :</h2>
\t\t\t{% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t{{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de modification de mot de passe\" } }) }}
\t\t\t\t\t<div class=\"row\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_widget(form.plainPassword, { attr: { aria_label:'Veuillez obligatoirement saisir votre mot de passe'} }) }}
\t\t\t\t\t\t\t{{ form_errors(form.plainPassword, { attr: { class:'text-danger'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t    <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
\t\t\t\t\t    </div>
                    </div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ url('profile.homepage.index') }}\" class=\"btn button btn-secondary\">Retour au menu</a>
\t\t\t\t\t<a href=\"{{ url('profile.myprofile.form') }}\" class=\"btn button btn-secondary\">Modifier mon profil</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "profile/myprofile/edit-password.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myprofile/edit-password.html.twig");
    }
}
