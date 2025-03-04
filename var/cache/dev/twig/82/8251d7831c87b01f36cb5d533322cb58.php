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

/* contact/contact.html.twig */
class __TwigTemplate_2df7b53888430b9fc375869e19e595eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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
        yield "    <main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
            <div class=\"row flex-sm-column flex-md-row-reverse\">
                <div class=\"col-sm-12 col-md-4 align-self-center\">
                    <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-client.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"image d'illustration du service service-client\">
                </div>
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Contactez-nous :</h2>

                    ";
        // line 13
        yield from $this->loadTemplate("_inc/notice.html.twig", "contact/contact.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                    
";
        // line 16
        yield "
                    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de contact"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom :"]);
        yield "
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre prénom"]]);
        yield "
                                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "firstname", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "lastname", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom :"]);
        yield "
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lastname", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre nom"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "lastname", [], "any", false, false, false, 27), 'errors', ["attr" => ["class" => "error-message"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "               
                            </div>
                            ";
        // line 41
        yield "                        </div>   
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "message", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message :"]);
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "message", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control w-100", "aria_label" => "Veuillez obligatoirement saisir votre message"]]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "message", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
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
        return "contact/contact.html.twig";
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
        return array (  169 => 52,  160 => 46,  156 => 45,  152 => 44,  147 => 41,  142 => 34,  138 => 33,  134 => 32,  126 => 27,  122 => 26,  118 => 25,  112 => 22,  108 => 21,  104 => 20,  98 => 17,  95 => 16,  92 => 14,  90 => 13,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
    <main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
            <div class=\"row flex-sm-column flex-md-row-reverse\">
                <div class=\"col-sm-12 col-md-4 align-self-center\">
                    <img src=\"{{ asset('img/service-client.webp') }}\" class=\"img-fluid\" alt=\"image d'illustration du service service-client\">
                </div>
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Contactez-nous :</h2>

                    {% include \"_inc/notice.html.twig\" %}
                    
{# les messages d'erreurs n'apparaissent pas en rouge quoique je fasse(style: 'red' ou  classe error-message avec la couleur fixée dans la feuille form.css). l'attribut n'apparait pas sur la balise li créée#}

                    {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:'formulaire de contact' } }) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
                                {{ form_errors(form.firstname, { attr: { class:'text-danger'} }) }}
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.lastname, { attr: { class: 'form-control',aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
                                {{ form_errors(form.lastname, { attr: { class: 'error-message'} }) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(form.email, { attr: { class:'text-danger'} }) }}               
                            </div>
                            {# <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.phone, 'Téléphone :', { label_attr: { class: 'form-label'} }) }}
                                {{ form_widget(form.phone, { attr: { class: 'form-control', aria_label:'Veuillez saisir votre numéro de téléphone'} }) }}
                                {{ form_errors(form.phone, { attr: { class: 'text-danger'} }) }}                                
                            </div> #}
                        </div>   
                        <div class=\"row\">
                            <div class=\"col-12\">
                                {{ form_label(form.message, 'Message :', { label_attr: { class: 'form-label'} }) }}
                                {{ form_widget(form.message, { attr: { class: 'form-control w-100', aria_label:'Veuillez obligatoirement saisir votre message'} }) }}
                                {{ form_errors(form.message, { attr: { class: 'text-danger'} }) }}
                            </div>
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        {{ form_end(form) }}
                </div>
            </div>      
        </div>
    </main>
{% endblock %} ", "contact/contact.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/contact/contact.html.twig");
    }
}
