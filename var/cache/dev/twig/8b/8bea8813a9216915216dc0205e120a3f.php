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

/* _inc/modal.html.twig */
class __TwigTemplate_6da7bc089b2f4fd6e72b934a73ce5ccc extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/modal.html.twig"));

        // line 1
        yield "<!-- Button trigger modal -->
";
        // line 5
        yield "
<!-- Modal -->
<div class=\"modal fade\" id=\"removeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"ModalLabel\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Annuler\">
                ";
        // line 14
        yield "                </button>
            </div>
            <div class=\"modal-body\">
                <p>Cette action est définitive. Vous ne pourrez pas récupérer l'élément supprimé.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_inc/modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  61 => 14,  51 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Button trigger modal -->
{# <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#removeModal\">
  Supprimer
</button> #}

<!-- Modal -->
<div class=\"modal fade\" id=\"removeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"ModalLabel\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Annuler\">
                {# <span aria-hidden=\"true\">&times;</span> #}
                </button>
            </div>
            <div class=\"modal-body\">
                <p>Cette action est définitive. Vous ne pourrez pas récupérer l'élément supprimé.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>

", "_inc/modal.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/_inc/modal.html.twig");
    }
}
