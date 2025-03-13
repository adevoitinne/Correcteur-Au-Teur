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

/* contact/index.html.twig */
class __TwigTemplate_3b685a317831e5bc44af6bce10f00b90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        yield "<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
\t<div class=\"container  mx-md-auto\">
\t\t<div class=\"row d-flex flex-sm-column flex-md-row-reverse align-items-center\">
\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-client.webp"), "html", null, true);
        yield "\" class=\"img-fluid illustration image-1\" alt=\"image d'illustration du service service-client\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-7 m-md-3\">
\t\t\t\t<h2>Contactez-nous :</h2>
\t\t\t\t";
        // line 12
        yield from $this->loadTemplate("_inc/notice.html.twig", "contact/index.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
\t\t\t\t";
        // line 15
        yield "\t\t\t\t";
        // line 22
        yield "
\t\t\t\t\t";
        // line 24
        yield "\t\t\t\t\t";
        // line 25
        yield "
\t\t\t\t\t";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de contact", "class" => "contact-form"]]);
        yield "
\t\t\t\t\t\t<div class=\"row\"> <div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre prénom"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "alert alert-danger"]]);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastname", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "lastname", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre nom"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'errors', ["attr" => ["style" => "color:red"]]);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 49
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "message", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message :"]);
        yield "
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control w-100", "aria_label" => "Veuillez obligatoirement saisir votre message"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
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
        return "contact/index.html.twig";
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
        return array (  174 => 60,  165 => 54,  161 => 53,  157 => 52,  152 => 49,  147 => 42,  143 => 41,  139 => 40,  131 => 35,  127 => 34,  123 => 33,  117 => 30,  113 => 29,  109 => 28,  104 => 26,  101 => 25,  99 => 24,  96 => 22,  94 => 15,  91 => 13,  89 => 12,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
\t<div class=\"container  mx-md-auto\">
\t\t<div class=\"row d-flex flex-sm-column flex-md-row-reverse align-items-center\">
\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t<img src=\"{{ asset('img/service-client.webp') }}\" class=\"img-fluid illustration image-1\" alt=\"image d'illustration du service service-client\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-7 m-md-3\">
\t\t\t\t<h2>Contactez-nous :</h2>
\t\t\t\t{% include \"_inc/notice.html.twig\" %}

\t\t\t\t{# j'ai essayé ce code tiré du thème mais il ne trouve pas la variable errors #}
\t\t\t\t{# {% block form_errors %}
                        {% if errors|length > 0 %}
                            {% for error in errors %}
                                <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %} d-block\">{{ error.message }}</div>
                            {% endfor %}
                        {% endif %}
                    {% endblock form_errors %} #}

\t\t\t\t\t{# {% form_theme form 'bootstrap_5_layout.html.twig'%} #}
\t\t\t\t\t{#attention quand on met ce thème, il applique d'office les classes form_control ou form_label. du coup le attr fait doublon. alors que je voulais juste que les erreurs s'écrivent en rouge  #}

\t\t\t\t\t{{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:'formulaire de contact', class:\"contact-form\" } }) }}
\t\t\t\t\t\t<div class=\"row\"> <div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
\t\t\t\t\t\t\t{{ form_errors(form.firstname, { attr: { class:'alert alert-danger'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(form.lastname, { attr: { class: 'form-control',aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
\t\t\t\t\t\t\t{{ form_errors(form.lastname) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t{{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
\t\t\t\t\t\t\t{{ form_errors(form.email, { attr: { style:'color:red'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# <div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t                                {{ form_label(form.phone, 'Téléphone :', { label_attr: { class: 'form-label'} }) }}
\t\t\t\t\t\t                                {{ form_widget(form.phone, { attr: { class: 'form-control', aria_label:'Veuillez saisir votre numéro de téléphone'} }) }}
\t\t\t\t\t\t                                {{ form_errors(form.phone) }}                                
\t\t\t\t\t\t                            </div> #}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{ form_label(form.message, 'Message :', { label_attr: { class: 'form-label'} }) }}
\t\t\t\t\t\t\t{{ form_widget(form.message, { attr: { class: 'form-control w-100', aria_label:'Veuillez obligatoirement saisir votre message'} }) }}
\t\t\t\t\t\t\t{{ form_errors(form.message) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "contact/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/contact/index.html.twig");
    }
}
