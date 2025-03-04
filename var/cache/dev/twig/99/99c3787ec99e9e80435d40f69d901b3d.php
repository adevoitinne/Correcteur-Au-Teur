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
class __TwigTemplate_096807a1d8b3b5a45f186a7addf233d0 extends Template
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
                            
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "               
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "plainPassword", [], "any", false, false, false, 31), 'widget', ["attr" => ["aria_label" => "Veuillez obligatoirement saisir votre mot de passe"]]);
        yield "
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "   
                            </div>
                            
                        </div>   
                        <div>
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "agreeTerms", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "AgreeTerms :"]);
        yield "
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "agreeTerms", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement approuver les CGS"]]);
        yield "
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "agreeTerms", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "            
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_end');
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
        return array (  171 => 44,  163 => 39,  159 => 38,  155 => 37,  147 => 32,  143 => 31,  137 => 28,  133 => 27,  129 => 26,  120 => 20,  117 => 19,  114 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                            
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(registrationForm.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(registrationForm.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(registrationForm.email, { attr: { class:'text-danger'} }) }}               
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_widget(registrationForm.plainPassword, { attr: {  aria_label:'Veuillez obligatoirement saisir votre mot de passe'} }) }}
                                {{ form_errors(registrationForm.plainPassword, { attr: { class:'text-danger'} }) }}   
                            </div>
                            
                        </div>   
                        <div>
                            {{ form_label(registrationForm.agreeTerms, 'AgreeTerms :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(registrationForm.agreeTerms, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement approuver les CGS'} }) }}
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
