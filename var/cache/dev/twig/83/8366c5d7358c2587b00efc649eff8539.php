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

/* profile/myoffer/form.html.twig */
class __TwigTemplate_07848c5ae7d56a682a1a78f51ce8ac7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myoffer/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myoffer/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myoffer/form.html.twig", 1);
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
\t\t\t<h2 class=\"text-center subtitle \">Ma Demande de correction</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myoffer/form.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "            <p class=\"\">
                <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myoffer.index");
        yield "\" class=\"btn button btn-secondary\">Retour à mes demandes</a>       
            </p>
\t\t\t";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de demande de correction"]]);
        yield " 
                <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner les informations concernant votre manuscrit\">
                <legend>Mon manuscrit :</legend>
                    <div class=\"col-md-4 col-sm-12\">    
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type d'œuvre :"]);
        yield "
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Quel est le type d'œuvre ?"]]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                    </div>        
                    <div class=\"col-md-4 col-sm-12\">    
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "deadline", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Echéance envisagée :"]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "deadline", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez  renseigner l'échéance envisagée", "placeholder" => "jj/mm/aaaa"]]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "deadline", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                    </div>
                    <div class=\"col-12\">    
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "genres", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Genre(s) :"]);
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "genres", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control d-flex align-items-baseline flex-wrap gap-4", "aria_label" => "Veuillez indiquer le(s) genre(s) de l'œuvre ?"]]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "genres", [], "any", false, false, false, 27), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                    </div> 
                </fieldset>
                <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner le titre et la description de votre manuscrit\">
                <legend>Titre et Descrption succinte :</legend>
                    <div class=\"col-md-12 col-sm-12\">    
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre :"]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Quel est le titre ?"]]);
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                    </div>        
                    <div class=\"col-12\">    
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description :"]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez indiquer la description ?"]]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                    </div> 
                </fieldset>    
                <div class=\"row justify-content-end\">
                    
                    <button type=\"submit\" class=\"col-auto btn button btn-secondary btn-submit\">Valider</button>
                     
                </div>
\t\t\t";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
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
        return "profile/myoffer/form.html.twig";
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
        return array (  176 => 48,  165 => 40,  161 => 39,  157 => 38,  151 => 35,  147 => 34,  143 => 33,  134 => 27,  130 => 26,  126 => 25,  120 => 22,  116 => 21,  112 => 20,  106 => 17,  102 => 16,  98 => 15,  91 => 11,  86 => 9,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Ma Demande de correction</h2>
            {% include \"_inc/notice.html.twig\" %}
            <p class=\"\">
                <a href=\"{{ url('profile.myoffer.index') }}\" class=\"btn button btn-secondary\">Retour à mes demandes</a>       
            </p>
\t\t\t{{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de demande de correction\" } }) }} 
                <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner les informations concernant votre manuscrit\">
                <legend>Mon manuscrit :</legend>
                    <div class=\"col-md-4 col-sm-12\">    
                        {{ form_label(form.type, \"Type d'œuvre :\", { label_attr: { class:'form-label'} }) }}
                        {{ form_widget(form.type, { attr: { class:'form-control', aria_label:\"Quel est le type d'œuvre ?\"} }) }}
                        {{ form_errors(form.type, { attr: { class:'text-danger'} }) }}
                    </div>        
                    <div class=\"col-md-4 col-sm-12\">    
                        {{ form_label(form.deadline, 'Echéance envisagée :', { label_attr: { class:'form-label', } }) }}
                        {{ form_widget(form.deadline, { attr: { class:'form-control', aria_label:\"Veuillez  renseigner l'échéance envisagée\", placeholder:'jj/mm/aaaa'} }) }}
                        {{ form_errors(form.deadline, { attr: { class:'text-danger'} }) }}  
                    </div>
                    <div class=\"col-12\">    
                        {{ form_label(form.genres, 'Genre(s) :', { label_attr: { class:'form-label'} }) }}
                        {{ form_widget(form.genres, { attr: { class:'form-control d-flex align-items-baseline flex-wrap gap-4', aria_label:\"Veuillez indiquer le(s) genre(s) de l'œuvre ?\"} }) }}
                        {{ form_errors(form.genres, { attr: { class:'text-danger'} }) }}
                    </div> 
                </fieldset>
                <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner le titre et la description de votre manuscrit\">
                <legend>Titre et Descrption succinte :</legend>
                    <div class=\"col-md-12 col-sm-12\">    
                        {{ form_label(form.title, \"Titre :\", { label_attr: { class:'form-label'} }) }}
                        {{ form_widget(form.title, { attr: { class:'form-control', aria_label:\"Quel est le titre ?\"} }) }}
                        {{ form_errors(form.title, { attr: { class:'text-danger'} }) }}
                    </div>        
                    <div class=\"col-12\">    
                        {{ form_label(form.description, \"Description :\", { label_attr: { class:'form-label'} }) }}
                        {{ form_widget(form.description, { attr: { class:'form-control', aria_label:\"Veuillez indiquer la description ?\"} }) }}
                        {{ form_errors(form.description, { attr: { class:'text-danger'} }) }}
                    </div> 
                </fieldset>    
                <div class=\"row justify-content-end\">
                    
                    <button type=\"submit\" class=\"col-auto btn button btn-secondary btn-submit\">Valider</button>
                     
                </div>
\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myoffer/form.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myoffer/form.html.twig");
    }
}
