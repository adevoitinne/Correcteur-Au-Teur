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

/* admin/contact/index.html.twig */
class __TwigTemplate_e4612f371a653495d4c39d5e69413ab3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact/index.html.twig", 1);
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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
                    <h2>Messages de contact</h2>
                    ";
        // line 9
        yield from $this->loadTemplate("_inc/notice.html.twig", "admin/contact/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "                    <table class=\"table table-striped\">
                        <tr>
                            <th>Date</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            ";
        // line 17
        yield "                            <th>Message</th>
                            <th></th>
                        </tr>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                            <tr  id=\"row_message_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "_id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getDatetimeFromTimestamp(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 22), "timestamp", [], "array", false, false, false, 22)), "d/m/y"), "html", null, true);
            yield "</td>
                                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "lastname", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "email", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                                ";
            // line 27
            yield "                                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                <td>
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
                                                    <p>Cette action est définitive. Vous ne pourrez pas récupérer le message supprimé.</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <a class=\"btn btn-primary\" href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.contact.remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "_id", [], "any", false, false, false, 44)]), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                    </table>
                    <p>
\t\t\t\t        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.homepage.index");
        yield "\" class=\"btn btn-secondary\">Retour à l'Espace administration</a>
\t\t\t        </p>
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
        return "admin/contact/index.html.twig";
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
        return array (  162 => 54,  158 => 52,  144 => 44,  123 => 27,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  102 => 21,  98 => 20,  93 => 17,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
                    <h2>Messages de contact</h2>
                    {% include \"_inc/notice.html.twig\" %}
                    <table class=\"table table-striped\">
                        <tr>
                            <th>Date</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            {# <th>Téléphone</th> #}
                            <th>Message</th>
                            <th></th>
                        </tr>
                        {% for message in messages %}
                            <tr  id=\"row_message_{{ message._id }}\">
                                <td>{{message.date['timestamp']|get_datetime_from_timestamp|date('d/m/y')}}</td>
                                <td>{{message.firstname}}</td>
                                <td>{{message.lastname}}</td>
                                <td>{{message.email}}</td>
                                {# <td>{{message.phone is not null ? message.phone : '-'}}</td>  #}
                                <td>{{message.message}}</td>
                                <td>
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
                                                    <p>Cette action est définitive. Vous ne pourrez pas récupérer le message supprimé.</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <a class=\"btn btn-primary\" href=\"{{ url('admin.contact.remove', { 'id': message._id }) }}\">Oui, supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>    
                        {% endfor %}
                    </table>
                    <p>
\t\t\t\t        <a href=\"{{ url('admin.homepage.index') }}\" class=\"btn btn-secondary\">Retour à l'Espace administration</a>
\t\t\t        </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "admin/contact/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/admin/contact/index.html.twig");
    }
}
