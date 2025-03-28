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

/* profile/offer/detail.html.twig */
class __TwigTemplate_1f1002db9b695da970d6014b603f1576 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/offer/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/offer/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/offer/detail.html.twig", 1);
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
\t\t\t<h2 class=\"text-center subtitle \">Demande de correction n°";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        yield " </h2>
            ";
        // line 10
        yield "            <p class=\"\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.offer.index");
        yield "\" class=\"btn button btn-secondary\">Retour à la liste</a>       
            </p>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Informations concernant le manuscrit\">
            <legend>Manuscrit :</legend>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                   Type d'œuvre :  ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), "html", null, true);
        yield "
                </div>        
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Echéance envisagée : ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 19, $this->source); })()), "deadline", [], "any", false, false, false, 19), "html", null, true);
        yield "
                </div>
                <div class=\"col-12 paragraph\">    
                    Genre(s) :
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 23, $this->source); })()), "genres", [], "any", false, false, false, 23));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 24
            yield "                        ";
            yield ((($context["genre"] != CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 24))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 24) . ", "), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 24), "html", null, true)));
            yield "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                </div> 
            </div>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Titre et description du manuscrit\">
            <legend>Titre et Descrption succinte :</legend>
                <div class=\"col-12 paragraph\">    
                    Titre : ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        yield "
                </div>        
                <div class=\"col-12 paragraph\">    
                    Description : ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        yield "
                </div> 
            </div>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Informations concernant l'auteur\">
            <legend>Auteur :</legend>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Prénom : ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 40, $this->source); })()), "member", [], "any", false, false, false, 40), "firstname", [], "any", false, false, false, 40), "html", null, true);
        yield "
                </div>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Nom : ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 43, $this->source); })()), "member", [], "any", false, false, false, 43), "lastname", [], "any", false, false, false, 43), "html", null, true);
        yield "
                </div>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Email : ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 46, $this->source); })()), "member", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
        yield "
                </div>
                ";
        // line 51
        yield "                ";
        // line 52
        yield "            </div>

\t\t\t
\t
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
        return "profile/offer/detail.html.twig";
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
        return array (  183 => 52,  181 => 51,  176 => 46,  170 => 43,  164 => 40,  155 => 34,  149 => 31,  142 => 26,  125 => 24,  108 => 23,  101 => 19,  95 => 16,  87 => 11,  84 => 10,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Demande de correction n°{{offer.id}} </h2>
            {# je voulais ajouter du : {{offer.created_at|date('dd/mm/yy')}} mais même erreur que pour l'affichage de contact_network
            
            Dans mon cours ils mentionnaient d'écrire les propriétés en camelCase plutôt qu'avec des underscores. Est-ce cela qui crée l'erreur?#}
            <p class=\"\">
                <a href=\"{{ url('profile.offer.index') }}\" class=\"btn button btn-secondary\">Retour à la liste</a>       
            </p>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Informations concernant le manuscrit\">
            <legend>Manuscrit :</legend>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                   Type d'œuvre :  {{offer.type}}
                </div>        
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Echéance envisagée : {{offer.deadline }}
                </div>
                <div class=\"col-12 paragraph\">    
                    Genre(s) :
                    {% for genre in offer.genres %}
                        {{genre != loop.last ? genre.name ~ ', ' : genre.name}}
                    {% endfor %}
                </div> 
            </div>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Titre et description du manuscrit\">
            <legend>Titre et Descrption succinte :</legend>
                <div class=\"col-12 paragraph\">    
                    Titre : {{offer.title}}
                </div>        
                <div class=\"col-12 paragraph\">    
                    Description : {{offer.description}}
                </div> 
            </div>
            <div class=\"row justify-content-between section g-1\" aria-label=\"Informations concernant l'auteur\">
            <legend>Auteur :</legend>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Prénom : {{offer.member.firstname}}
                </div>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Nom : {{offer.member.lastname}}
                </div>
                <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Email : {{offer.member.email }}
                </div>
                {# <div class=\"col-md-4 col-sm-12 paragraph\">    
                    Réseau(x) de contact : {{offer.member.contact_network }}
                </div> #}
                {#  Neither the property \"contact_network\" nor one of the methods \"contact_network()\", \"getcontact_network()\"/\"iscontact_network()\"/\"hascontact_network()\" or \"__call()\" exist and have public access in class \"Proxies\\__CG__\\App\\Entity\\Member\".#}
            </div>

\t\t\t
\t
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/offer/detail.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/offer/detail.html.twig");
    }
}
