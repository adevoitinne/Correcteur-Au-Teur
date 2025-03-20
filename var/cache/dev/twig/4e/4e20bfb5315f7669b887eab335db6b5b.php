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

/* profile/myrequest/index.html.twig */
class __TwigTemplate_6fad16a3cc9ddddc432b2624ae5a51c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myrequest/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myrequest/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myrequest/index.html.twig", 1);
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
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myrequest/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<p>
\t\t\t\t    ";
        // line 12
        yield "\t\t\t    </p>
                    
                     <table class=\"table  table-bordered table-striped\">
                        <tr class=\"table-danger\">
                            
                            <th>id</th> 
                            
                        </tr>
                        <tr>
                            <th>id</th> 
                            
                        </tr>
                        
                        ";
        // line 56
        yield "                    </table>
\t\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn btn-secondary\">Retour au menu</a> 
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
        return "profile/myrequest/index.html.twig";
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
        return array (  108 => 59,  103 => 56,  88 => 12,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
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
\t\t\t\t    {# <a href=\"{{ url('profile.myrequest.form') }}\" class=\"btn btn-secondary\">Créer une nouvelle demande</a>  #}
\t\t\t    </p>
                    
                     <table class=\"table  table-bordered table-striped\">
                        <tr class=\"table-danger\">
                            
                            <th>id</th> 
                            
                        </tr>
                        <tr>
                            <th>id</th> 
                            
                        </tr>
                        
                        {# {% for request in requests %}
                            <tr>
                                
                                <td>{{request.id}}</td>
                                <td>
                                    <a href=\"{{ url('profile.myrequest.form', { id: request.id }) }}\" class=\"btn btn-warning\">Consulter/Modifier</a>
                                    <button data-bs-toggle=\"modal\" data-bs-target=\"#removeModal\" class=\"btn btn-danger\">Supprimer</button>

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
                                                    <a class=\"btn btn-primary\" href=\"{{ url('profile.myrequest.remove', { id: request.id }) }}\">Oui, supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>    
                        {% endfor %} #}
                    </table>
\t\t\t\t</div>
                <p>
\t\t\t\t    <a href=\"{{ url('profile.homepage.index') }}\" class=\"btn btn-secondary\">Retour au menu</a> 
\t\t\t    </p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myrequest/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myrequest/index.html.twig");
    }
}
