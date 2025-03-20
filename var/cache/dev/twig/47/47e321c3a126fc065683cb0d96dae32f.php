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

/* functioning/index.html.twig */
class __TwigTemplate_e6653856ca3994b3292327ca8a8bd361 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functioning/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functioning/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "functioning/index.html.twig", 1);
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
\t\t<div class=\"explanation\">
\t\t\t<div class=\"left-band\">
\t\t\t\t<p class=\"h5\">
\t\t\t\t\tProfil membre créé</p>
\t\t\t</div>
\t\t\t<div class=\"operation-diagram\">
\t\t\t\t<div class=\"big-image\">
\t\t\t\t\t<img class=\"diagram\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/operation-diagram.png"), "html", null, true);
        yield "\" alt=\"diagramme de fonctionnement de Correct-Au-Teur\">
\t\t\t\t</div>
\t\t\t\t<div class=\"small-image\">
\t\t\t\t\t<img class=\"diagram\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/operation-diagram-smartphone.png"), "html", null, true);
        yield "\" alt=\"diagramme de fonctionnement de Correct-Au-Teur\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"right-band\">
\t\t\t\t<p class=\"h5\">
\t\t\t\t\tProfil membre créé</p>
\t\t\t\t<p class=\"h5\">Reçoit une alerte quand une demande de correction correspond à ses centres d'intérêts</p>
\t\t\t</div>
\t\t\t<div class=\"bottom-band text-center\">
\t\t\t\t<p class=\"fw-bold h4\">Créez vite votre Profil Membre
\t\t\t\t\t<a class=\"h4 simple-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("registration.register");
        yield "\">ici</a>, pour faire partie de l'Aventure
\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>
\t\t\t\t</p>
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
        return "functioning/index.html.twig";
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
        return array (  105 => 25,  92 => 15,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
\t<main aria-label=\"contenu principal\" id=\"main\">
\t\t<div class=\"explanation\">
\t\t\t<div class=\"left-band\">
\t\t\t\t<p class=\"h5\">
\t\t\t\t\tProfil membre créé</p>
\t\t\t</div>
\t\t\t<div class=\"operation-diagram\">
\t\t\t\t<div class=\"big-image\">
\t\t\t\t\t<img class=\"diagram\" src=\"{{ asset('img/operation-diagram.png') }}\" alt=\"diagramme de fonctionnement de Correct-Au-Teur\">
\t\t\t\t</div>
\t\t\t\t<div class=\"small-image\">
\t\t\t\t\t<img class=\"diagram\" src=\"{{ asset('img/operation-diagram-smartphone.png') }}\" alt=\"diagramme de fonctionnement de Correct-Au-Teur\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"right-band\">
\t\t\t\t<p class=\"h5\">
\t\t\t\t\tProfil membre créé</p>
\t\t\t\t<p class=\"h5\">Reçoit une alerte quand une demande de correction correspond à ses centres d'intérêts</p>
\t\t\t</div>
\t\t\t<div class=\"bottom-band text-center\">
\t\t\t\t<p class=\"fw-bold h4\">Créez vite votre Profil Membre
\t\t\t\t\t<a class=\"h4 simple-link\" href=\"{{ url('registration.register') }}\">ici</a>, pour faire partie de l'Aventure
\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "functioning/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/functioning/index.html.twig");
    }
}
