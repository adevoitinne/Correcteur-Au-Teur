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
class __TwigTemplate_5a9a36ca23c2b6a2ae99163056e56a16 extends Template
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

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
            <div class=\"row flex-sm-column flex-md-row-reverse\">
                
                
                    
                
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Créer votre profil :</h2>

                    ";
        // line 16
        yield from $this->loadTemplate("_inc/notice.html.twig", "registration/register.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "                    
";
        // line 19
        yield "
                    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire d'inscription"]]);
        yield "
                        <div class=\"row\">
                            ";
        // line 32
        yield "                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "               
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe :"]);
        yield "
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "               
                            </div>
                            ";
        // line 49
        yield "                        </div>   
                        <div>
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "agreeTerms", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe :"]);
        yield "
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "agreeTerms", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "agreeTerms", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "            
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>      
        </div>
    </main>
    
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
        return array (  177 => 58,  169 => 53,  165 => 52,  161 => 51,  157 => 49,  152 => 42,  148 => 41,  144 => 40,  138 => 37,  134 => 36,  130 => 35,  125 => 32,  120 => 20,  117 => 19,  114 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
            <div class=\"row flex-sm-column flex-md-row-reverse\">
                
                
                    
                
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Créer votre profil :</h2>

                    {% include \"_inc/notice.html.twig\" %}
                    
{# les messages d'erreurs n'apparaissent pas en rouge quoique je fasse(style: 'red' ou  classe error-message avec la couleur fixée dans la feuille form.css). l'attribut n'apparait pas sur la balise li créée#}

                    {{ form_start(registrationForm, { attr: { novalidate: 'novalidate', aria_label:\"formulaire d'inscription\" } }) }}
                        <div class=\"row\">
                            {# <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
                                {{ form_errors(form.firstname, { attr: { class:'text-danger'} }) }}
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.lastname, { attr: { class: 'form-control',aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
                                {{ form_errors(form.lastname, { attr: { class: 'error-message'} }) }}
                            </div> #}
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(registrationForm.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(registrationForm.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(registrationForm.email, { attr: { class:'text-danger'} }) }}               
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(registrationForm.plainPassword, 'Mot de passe :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(registrationForm.plainPassword, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(registrationForm.plainPassword, { attr: { class:'text-danger'} }) }}               
                            </div>
                            {# <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.phone, 'Téléphone :', { label_attr: { class: 'form-label'} }) }}
                                {{ form_widget(form.phone, { attr: { class: 'form-control', aria_label:'Veuillez saisir votre numéro de téléphone'} }) }}
                                {{ form_errors(form.phone, { attr: { class: 'text-danger'} }) }}                                
                            </div> #}
                        </div>   
                        <div>
                            {{ form_label(registrationForm.agreeTerms, 'Mot de passe :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(registrationForm.agreeTerms, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(registrationForm.agreeTerms, { attr: { class:'text-danger'} }) }}            
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        {{ form_end(registrationForm) }}
                </div>
            </div>      
        </div>
    </main>
    
{% endblock %}
", "registration/register.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/registration/register.html.twig");
    }
}
