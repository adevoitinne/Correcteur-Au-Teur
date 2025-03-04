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

/* security/login.html.twig */
class __TwigTemplate_10c4951b56b0400784e894f9512d1ca7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Log in!";
        
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
        yield "    <main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
        ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), "html", null, true);
            yield "</div>
        ";
        }
        // line 11
        yield "
        ";
        // line 17
        yield "
        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de connexion"]]);
        yield "
            
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 col-sm-12 px-5\">
                    <h2 class=\"mb-3  text-center\">Déjà membre ?</h2>
                    <div class=\"text-center\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["value" => (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "</div>
                    <div class=\"text-center\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de Passe :"]);
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "password", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre mot de passe"]]);
        yield "</div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Se connecter</button>
                    </div>
                </div>                       
                <div class=\"col-md-6 col-sm-12 px-5\">
                    <h2 class=\"mb-4 text-center\">Nouveau membre ?</h2>
                    <p class=\"text-center form-label mt-3\">Afin de commencer l'aventure <strong class=\"c-a-t h3\">Correct-Au-Teur</strong>, il suffit d'un clic et de moins de 5 minutes:</p>
                    <div class=\"text-center\">
                        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("registration.register");
        yield "\" class=\"btn btn-secondary btn-submit\" >Créez mon Profil</a>
                    </div>
                </div>
                <p>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                </p>                  
            </div>
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        yield "
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
        return "security/login.html.twig";
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
        return array (  163 => 42,  157 => 39,  150 => 35,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  118 => 18,  115 => 17,  112 => 11,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <main aria-label=\"contenu principal\" id=\"main\">
        <div class=\"container mx-md-auto\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey }}</div>
        {% endif %}

        {# {% if app.user %}
            <div class=\"mb-3\">
                Vous êtes connecté en tant que {{ app.user.userIdentifier }},  <a href=\"{{ path('security.logout') }}\">Logout</a>
            </div>
        {% endif %} #}

        {{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:'formulaire de connexion' } }) }}
            
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 col-sm-12 px-5\">
                    <h2 class=\"mb-3  text-center\">Déjà membre ?</h2>
                    <div class=\"text-center\">{{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                    {{ form_widget(form.email, { attr: { value: last_username, class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}</div>
                    <div class=\"text-center\">{{ form_label(form.password, 'Mot de Passe :', { label_attr: { class: 'form-label'} }) }}
                    {{ form_widget(form.password, { attr: { class: 'form-control', aria_label:'Veuillez obligatoirement saisir votre mot de passe'} }) }}</div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-secondary btn-submit\">Se connecter</button>
                    </div>
                </div>                       
                <div class=\"col-md-6 col-sm-12 px-5\">
                    <h2 class=\"mb-4 text-center\">Nouveau membre ?</h2>
                    <p class=\"text-center form-label mt-3\">Afin de commencer l'aventure <strong class=\"c-a-t h3\">Correct-Au-Teur</strong>, il suffit d'un clic et de moins de 5 minutes:</p>
                    <div class=\"text-center\">
                        <a href=\"{{url('registration.register')}}\" class=\"btn btn-secondary btn-submit\" >Créez mon Profil</a>
                    </div>
                </div>
                <p>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                </p>                  
            </div>
        {{ form_end(form) }}
        </div>
    </main>

{% endblock %}
", "security/login.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/security/login.html.twig");
    }
}
