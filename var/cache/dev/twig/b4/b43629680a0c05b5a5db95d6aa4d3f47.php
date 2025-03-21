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

/* profile/myprofile/form.html.twig */
class __TwigTemplate_408f7ce2cecb4144838ca054c0e2db65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myprofile/form.html.twig", 1);
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
\t\t\t<h2 class=\"text-center subtitle \">Mon profil</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myprofile/form.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de profil"]]);
        yield "
                        <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\">
                            <fieldset aria-label=\"Veuillez renseigner vos informations personnelles\">
                            <legend class=\"underline\">Moi :</legend>
                                <div class=\"col-4\">    
                                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom :"]);
        yield "
                                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre prénom"]]);
        yield "
                                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>
                                <div class=\"col-4\">    
                                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom :"]);
        yield "
                                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lastname", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre nom"]]);
        yield "
                                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "lastname", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                                </div>
                                <div class=\"col-4\">    
                                    ";
        // line 28
        yield "                                </div> 
                            </fieldset>
                        </div>
                         <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\">
                            <fieldset aria-label=\"Veuillez renseigner vos coordonnées\">
                            <legend class=\"underline\">Me contacter :</legend>
                                <div class=\"col\">    
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                                </div>
                                <div class=\"col\">     
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "contact_network", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réseau(x) de Contact :"]);
        yield "
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "contact_network", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre/vos identifiant(s) et leur réseau social associé"]]);
        yield "
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "contact_network", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>
                                 <div class=\"col\">     
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone :"]);
        yield "
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "phone", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez  saisir votre numéro de téléphone", "placeholder" => "0607080910"]]);
        yield "
                                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>        
                        </div>
                        <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\"> 
                            <fieldset aria-label=\"Veuillez renseigner vos informations en tant qu'auteur\">
                            <legend class=\"underline\">Moi en tant qu'Auteur :</legend>
                                <div class=\"col\">    
                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "is_published", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Edité.e :"]);
        yield "
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "is_published", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control form-check-input", "aria_label" => "Êtes-vous un auteur édité ?"]]);
        yield "
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "is_published", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                                </div>
                                <div class=\"col-4\">     
                                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "is_self_published", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Auto-Edité.e :"]);
        yield "
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "is_self_published", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control form-check-input", "aria_label" => "Êtes-vous un auteur auto-édité ?"]]);
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "is_self_published", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>
                                <div class=\"col-4\">     
                                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "artwork_type", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type(s) d'œuvre :"]);
        yield "
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "artwork_type", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Quel(s) type(s) d'œuvre écrivez-vous"]]);
        yield "
                                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "artwork_type", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>
                                ";
        // line 73
        yield "               
                        </div>
                         <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\"> 
                            <fieldset aria-label=\"Veuillez renseigner vos informations en tant que correcteur\">
                            <legend class=\"underline\">Moi en tant que Correcteur :</legend>
                                <div class=\"col-4\">     
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "interests", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Centre(s) d'intérêt :"]);
        yield "
                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "interests", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Quel genre d'œuvre écrivez-vous"]]);
        yield "
                                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "interests", [], "any", false, false, false, 81), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                                </div>             
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
\t\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn button btn-secondary\">Retour au menu</a>
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.password.edit");
        yield "\" class=\"btn button btn-secondary\">Modifier mon mot de passe</a>
\t\t\t    </p>
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
        return "profile/myprofile/form.html.twig";
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
        return array (  254 => 91,  250 => 90,  244 => 87,  235 => 81,  231 => 80,  227 => 79,  219 => 73,  214 => 66,  210 => 65,  206 => 64,  200 => 61,  196 => 60,  192 => 59,  186 => 56,  182 => 55,  178 => 54,  168 => 47,  164 => 46,  160 => 45,  154 => 42,  150 => 41,  146 => 40,  140 => 37,  136 => 36,  132 => 35,  123 => 28,  117 => 22,  113 => 21,  109 => 20,  103 => 17,  99 => 16,  95 => 15,  87 => 10,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Mon profil</h2>
            {% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de profil\" } }) }}
                        <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\">
                            <fieldset aria-label=\"Veuillez renseigner vos informations personnelles\">
                            <legend class=\"underline\">Moi :</legend>
                                <div class=\"col-4\">    
                                    {{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
                                    {{ form_errors(form.firstname, { attr: { class:'text-danger'} }) }}
                                </div>
                                <div class=\"col-4\">    
                                    {{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.lastname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
                                    {{ form_errors(form.lastname, { attr: { class:'text-danger'} }) }}  
                                </div>
                                <div class=\"col-4\">    
                                    {# {{ form_label(form.birth_at, 'Date de naissance :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.birth_at, { attr: { class:'form-control', aria_label:'Veuillez  saisir votre date de naissance'} }) }}
                                    {{ form_errors(form.birth_at, { attr: { class:'text-danger'} }) }} #}
                                </div> 
                            </fieldset>
                        </div>
                         <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\">
                            <fieldset aria-label=\"Veuillez renseigner vos coordonnées\">
                            <legend class=\"underline\">Me contacter :</legend>
                                <div class=\"col\">    
                                    {{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                    {{ form_errors(form.email, { attr: { class:'text-danger'} }) }}  
                                </div>
                                <div class=\"col\">     
                                    {{ form_label(form.contact_network, 'Réseau(x) de Contact :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.contact_network, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre/vos identifiant(s) et leur réseau social associé'} }) }}
                                    {{ form_errors(form.contact_network, { attr: { class:'text-danger'} }) }}
                                </div>
                                 <div class=\"col\">     
                                    {{ form_label(form.phone, 'Téléphone :', { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.phone, { attr: { class:'form-control', aria_label:'Veuillez  saisir votre numéro de téléphone', placeholder:'0607080910'} }) }}
                                    {{ form_errors(form.phone, { attr: { class:'text-danger'} }) }}
                                </div>        
                        </div>
                        <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\"> 
                            <fieldset aria-label=\"Veuillez renseigner vos informations en tant qu'auteur\">
                            <legend class=\"underline\">Moi en tant qu'Auteur :</legend>
                                <div class=\"col\">    
                                    {{ form_label(form.is_published, \"Edité.e :\", { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.is_published, { attr: { class:'form-control form-check-input', aria_label:'Êtes-vous un auteur édité ?'} }) }}
                                    {{ form_errors(form.is_published, { attr: { class:'text-danger'} }) }}  
                                </div>
                                <div class=\"col-4\">     
                                    {{ form_label(form.is_self_published, \"Auto-Edité.e :\", { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.is_self_published, { attr: { class:'form-control form-check-input', aria_label:'Êtes-vous un auteur auto-édité ?'} }) }}
                                    {{ form_errors(form.is_self_published, { attr: { class:'text-danger'} }) }}
                                </div>
                                <div class=\"col-4\">     
                                    {{ form_label(form.artwork_type, \"Type(s) d'œuvre :\", { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.artwork_type, { attr: { class:'form-control', aria_label:\"Quel(s) type(s) d'œuvre écrivez-vous\"} }) }}
                                    {{ form_errors(form.artwork_type, { attr: { class:'text-danger'} }) }}
                                </div>
                                {# <div class=\"col-4\">     
                                    {{ form_label(form.genres, \"Genre(s) :\", { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.genres, { attr: { class:'form-control', aria_label:\"Quel genre d'œuvre écrivez-vous\"} }) }}
                                    {{ form_errors(form.genres, { attr: { class:'text-danger'} }) }}
                                </div> #}
               
                        </div>
                         <div class=\"row d-flex justify-content-between flex-sm-col flex-md-row\"> 
                            <fieldset aria-label=\"Veuillez renseigner vos informations en tant que correcteur\">
                            <legend class=\"underline\">Moi en tant que Correcteur :</legend>
                                <div class=\"col-4\">     
                                    {{ form_label(form.interests, \"Centre(s) d'intérêt :\", { label_attr: { class:'form-label'} }) }}
                                    {{ form_widget(form.interests, { attr: { class:'form-control', aria_label:\"Quel genre d'œuvre écrivez-vous\"} }) }}
                                    {{ form_errors(form.interests, { attr: { class:'text-danger'} }) }}
                                </div>             
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Valider</button>
                        </div>
\t\t\t        {{ form_end(form) }}
\t\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"{{ url('profile.homepage.index') }}\" class=\"btn button btn-secondary\">Retour au menu</a>
                    <a href=\"{{ url('profile.myprofile.password.edit') }}\" class=\"btn button btn-secondary\">Modifier mon mot de passe</a>
\t\t\t    </p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myprofile/form.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myprofile/form.html.twig");
    }
}
