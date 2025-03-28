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

/* profile/myoffer/index.html.twig */
class __TwigTemplate_84c92f405c707d9d4d0d2703ab63a5d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myoffer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myoffer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myoffer/index.html.twig", 1);
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
\t\t\t<h2 class=\"text-center subtitle \">Mes Demandes</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myoffer/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<p>
\t\t\t\t    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myoffer.form");
        yield "\" class=\"button btn btn-secondary\">Créer une nouvelle demande</a> 
\t\t\t    </p>
                <table class=\"table table-bordered table-hover table-responsive\">
                    <tr class=\"table-secondary\">
                        <th class=\"text-center\">Numéro</th>
                        ";
        // line 17
        yield "                        <th class=\"text-center\">Titre</th>
                        <th class=\"text-center\">Description</th>

                        <th>Actions</th>
                    </tr>                                            
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 23
            yield "                        <tr>
                            <td class=\"text-center\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                            ";
            // line 26
            yield "                            <td class=\"text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myoffer.form.update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"button btn btn-secondary\">Consulter/Modifier</a>
                            <button data-bs-toggle=\"modal\" data-bs-target=\"#removeModal\" class=\"btn btn-danger p-2\">Supprimer</button>

                            <div class=\"modal fade\" id=\"removeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header d-flex justify-content-between\">
                                            <h5 class=\"modal-title\" id=\"ModalLabel\">Confirmation de suppression</h5>
                                                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Annuler\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Cette action est définitive. Vous ne pourrez pas récupérer la demande supprimée.</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <a class=\"btn btn-primary\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myoffer.remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Oui, supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </td>
                        </tr>    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield " 
                </table>
\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"button btn btn-secondary\">Retour au menu</a> 
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
        return "profile/myoffer/index.html.twig";
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
        return array (  164 => 57,  158 => 53,  144 => 46,  124 => 29,  119 => 27,  114 => 26,  110 => 24,  107 => 23,  103 => 22,  96 => 17,  88 => 11,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Mes Demandes</h2>
            {% include \"_inc/notice.html.twig\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<p>
\t\t\t\t    <a href=\"{{ url('profile.myoffer.form') }}\" class=\"button btn btn-secondary\">Créer une nouvelle demande</a> 
\t\t\t    </p>
                <table class=\"table table-bordered table-hover table-responsive\">
                    <tr class=\"table-secondary\">
                        <th class=\"text-center\">Numéro</th>
                        {# <th class=\"text-center\">Date de création</th> #}
                        <th class=\"text-center\">Titre</th>
                        <th class=\"text-center\">Description</th>

                        <th>Actions</th>
                    </tr>                                            
                    {% for offer in offers %}
                        <tr>
                            <td class=\"text-center\">{{offer.id}}</td>
                            {# <td class=\"text-center\">{{offer.created_at|date('dd/mm/yy')}}</td> #}
                            <td class=\"text-center\">{{offer.title}}</td>
                            <td class=\"text-center\">{{offer.description}}</td>
                            <td>
                            <a href=\"{{ url('profile.myoffer.form.update', { id: offer.id }) }}\" class=\"button btn btn-secondary\">Consulter/Modifier</a>
                            <button data-bs-toggle=\"modal\" data-bs-target=\"#removeModal\" class=\"btn btn-danger p-2\">Supprimer</button>

                            <div class=\"modal fade\" id=\"removeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header d-flex justify-content-between\">
                                            <h5 class=\"modal-title\" id=\"ModalLabel\">Confirmation de suppression</h5>
                                                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Annuler\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Cette action est définitive. Vous ne pourrez pas récupérer la demande supprimée.</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <a class=\"btn btn-primary\" href=\"{{ url('profile.myoffer.remove', { id: offer.id }) }}\">Oui, supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </td>
                        </tr>    
                    {% endfor %} 
                </table>
\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"{{ url('profile.homepage.index') }}\" class=\"button btn btn-secondary\">Retour au menu</a> 
\t\t\t    </p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myoffer/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myoffer/index.html.twig");
    }
}
