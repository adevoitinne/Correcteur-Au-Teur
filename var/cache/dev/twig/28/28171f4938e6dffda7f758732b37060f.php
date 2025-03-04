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
class __TwigTemplate_2d083b31fa8d4bc8220518335b34f45e extends Template
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
        yield "    <main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
        <div class=\"container  mx-md-auto\">
            <div class=\"row d-flex flex-sm-column flex-md-row-reverse align-items-center\">
                <div class=\"col-sm-12 col-md-4\">
                    <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-client.webp"), "html", null, true);
        yield "\" class=\"img-fluid illustration image-1\" alt=\"image d'illustration du service service-client\">
                </div>
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Contactez-nous :</h2>

                    ";
        // line 13
        yield from $this->loadTemplate("_inc/notice.html.twig", "contact/index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                     
                     ";
        // line 16
        yield "                     ";
        // line 23
        yield "
                    ";
        // line 25
        yield "                ";
        // line 26
        yield "
                    ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de contact", "class" => "contact-form"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom :"]);
        yield "
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "firstname", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre prénom"]]);
        yield "
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstname", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "alert alert-danger"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom :"]);
        yield "
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastname", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre nom"]]);
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors', ["attr" => ["style" => "color:red"]]);
        yield "               
                            </div>
                            ";
        // line 51
        yield "                        </div>   
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message :"]);
        yield "
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "message", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control w-100", "aria_label" => "Veuillez obligatoirement saisir votre message"]]);
        yield "
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "message", [], "any", false, false, false, 56), 'errors');
        yield "
                            </div>
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
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
        return array (  176 => 62,  167 => 56,  163 => 55,  159 => 54,  154 => 51,  149 => 44,  145 => 43,  141 => 42,  133 => 37,  129 => 36,  125 => 35,  119 => 32,  115 => 31,  111 => 30,  105 => 27,  102 => 26,  100 => 25,  97 => 23,  95 => 16,  92 => 14,  90 => 13,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
    <main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
        <div class=\"container  mx-md-auto\">
            <div class=\"row d-flex flex-sm-column flex-md-row-reverse align-items-center\">
                <div class=\"col-sm-12 col-md-4\">
                    <img src=\"{{ asset('img/service-client.webp') }}\" class=\"img-fluid illustration image-1\" alt=\"image d'illustration du service service-client\">
                </div>
                <div class=\"col-sm-12 col-md-7 m-md-3\">
                    <h2>Contactez-nous :</h2>

                    {% include \"_inc/notice.html.twig\" %}
                     
                     {# j'ai essayé ce code tiré du thème mais il ne trouve pas la variable errors #}
                     {# {% block form_errors %}
                        {% if errors|length > 0 %}
                            {% for error in errors %}
                                <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %} d-block\">{{ error.message }}</div>
                            {% endfor %}
                        {% endif %}
                    {% endblock form_errors %} #}

                    {# {% form_theme form 'bootstrap_5_layout.html.twig'%} #}
                {#attention quand on met ce thème, il applique d'office les classes form_control ou form_label. du coup le attr fait doublon. alors que je voulais juste que les erreurs s'écrivent en rouge  #}

                    {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:'formulaire de contact', class:\"contact-form\" } }) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
                                {{ form_errors(form.firstname, { attr: { class:'alert alert-danger'} }) }}
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.lastname, { attr: { class: 'form-control',aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
                                {{ form_errors(form.lastname) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                                {{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                                {{ form_errors(form.email, { attr: { style:'color:red'} }) }}               
                            </div>
                            {# <div class=\"col-md-6 col-sm-12\">
                                {{ form_label(form.phone, 'Téléphone :', { label_attr: { class: 'form-label'} }) }}
                                {{ form_widget(form.phone, { attr: { class: 'form-control', aria_label:'Veuillez saisir votre numéro de téléphone'} }) }}
                                {{ form_errors(form.phone) }}                                
                            </div> #}
                        </div>   
                        <div class=\"row\">
                            <div class=\"col-12\">
                                {{ form_label(form.message, 'Message :', { label_attr: { class: 'form-label'} }) }}
                                {{ form_widget(form.message, { attr: { class: 'form-control w-100', aria_label:'Veuillez obligatoirement saisir votre message'} }) }}
                                {{ form_errors(form.message) }}
                            </div>
                        </div>
                        <div>
                             <button type=\"submit\" class=\"btn button btn-secondary btn-submit\">Envoyer</button>
                        </div>
\t\t\t        {{ form_end(form) }}
                </div>
            </div>      
        </div>
    </main>
{% endblock %} ", "contact/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/contact/index.html.twig");
    }
}
