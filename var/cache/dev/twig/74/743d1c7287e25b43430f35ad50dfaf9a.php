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

/* admin/member/index.html.twig */
class __TwigTemplate_0a8e1ba17ca317319d978fe598dcf39d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/member/index.html.twig", 1);
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
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2>Membres</h2>
\t\t\t\t\t";
        // line 9
        yield from $this->loadTemplate("_inc/notice.html.twig", "admin/member/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t";
        // line 14
        yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 16
            yield "\t\t\t\t\t\t\t<tr id=\"row_member_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.member.detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Consult</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    <button data-bs-toggle=\"modal\" data-bs-target=\"#removeModal\" class=\"btn btn-danger\">Remove</button>
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
                                                    <p>Cette action est définitive. Le profil du membre ne pourra pas être récupéré.</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <a class=\"btn btn-primary\" href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.member.remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">Oui, supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 47
            yield "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "\t\t\t\t\t</table>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.homepage.index");
        yield "\" class=\"btn btn-secondary\">Retour à l'Espace administration</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
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
        return "admin/member/index.html.twig";
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
        return array (  152 => 52,  148 => 50,  140 => 47,  127 => 36,  107 => 19,  102 => 17,  97 => 16,  93 => 15,  90 => 14,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2>Membres</h2>
\t\t\t\t\t{% include '_inc/notice.html.twig' %}
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t{# à compléter #}
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% for member in members %}
\t\t\t\t\t\t\t<tr id=\"row_member_{{ member.id }}\">
\t\t\t\t\t\t\t\t<td>{{member.email}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ url('admin.member.detail', { id: member.id }) }}\" class=\"btn btn-secondary\">Consult</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    <button data-bs-toggle=\"modal\" data-bs-target=\"#removeModal\" class=\"btn btn-danger\">Remove</button>
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
                                                    <p>Cette action est définitive. Le profil du membre ne pourra pas être récupéré.</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <a class=\"btn btn-primary\" href=\"{{ url('admin.member.remove', { 'id': member.id }) }}\">Oui, supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{# <a href=\"{{ url('admin.member.remove', { id: member.id }) }}\" class=\"btn btn-danger\">Remove</a> #}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</table>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"{{ url('admin.homepage.index') }}\" class=\"btn btn-secondary\">Retour à l'Espace administration</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}

{# à compléter quand member complet #}
", "admin/member/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/admin/member/index.html.twig");
    }
}
