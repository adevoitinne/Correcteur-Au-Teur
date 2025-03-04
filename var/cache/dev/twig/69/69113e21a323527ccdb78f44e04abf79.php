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

/* _inc/header.html.twig */
class __TwigTemplate_1f0f6a2b06d21ebab1a38d054be7faff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/header.html.twig"));

        // line 1
        yield "<nav class=\"skip-links\" aria-label=\"accéder rapidement au contenu principal\">
\t<ul>
\t\t<li><a href=\"#main\">Aller au contenu principal</a></li>
\t</ul>
</nav>
<header aria-label=\"en-tête\">
\t<div class=\"top\">
\t\t<div class=\"logo\">
\t\t\t<img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        yield "\" alt=\"logo du service Correct-Au-Teur\">
\t\t</div>
\t\t<h1 class=\"title pt-2\">Correct-Au-Teur</h1>
\t</div>
\t<div class=\"container menu\">
\t\t<div class=\"row\">
\t\t\t<nav aria-label=\"menu principal\" class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"afficher le menu\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage.index");
        yield "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("functioning.index");
        yield "\">Fonctionnement</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("legal-support.index");
        yield "\">Accompagnement Juridique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("technical-support.index");
        yield "\">Accompagnement Technique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 35
            yield "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.homepage.index");
            yield "\">Administration</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 39
        yield "\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 40
            yield "\t\t\t\t\t\t\t\t";
            // line 41
            yield "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
            yield "\">Espace membre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 45
        yield "\t\t\t\t\t\t\t";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 46
            yield "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security.login");
            yield "\">Connexion / Création de profil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 50
            yield "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security.logout");
            yield "\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
</header>
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
        return "_inc/header.html.twig";
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
        return array (  144 => 54,  138 => 51,  135 => 50,  129 => 47,  126 => 46,  123 => 45,  117 => 42,  114 => 41,  112 => 40,  109 => 39,  103 => 36,  100 => 35,  98 => 34,  93 => 32,  87 => 29,  81 => 26,  75 => 23,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"skip-links\" aria-label=\"accéder rapidement au contenu principal\">
\t<ul>
\t\t<li><a href=\"#main\">Aller au contenu principal</a></li>
\t</ul>
</nav>
<header aria-label=\"en-tête\">
\t<div class=\"top\">
\t\t<div class=\"logo\">
\t\t\t<img src=\"{{ asset('img/Logo.png') }}\" alt=\"logo du service Correct-Au-Teur\">
\t\t</div>
\t\t<h1 class=\"title pt-2\">Correct-Au-Teur</h1>
\t</div>
\t<div class=\"container menu\">
\t\t<div class=\"row\">
\t\t\t<nav aria-label=\"menu principal\" class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"afficher le menu\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{url('homepage.index')}}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('functioning.index')}}\">Fonctionnement</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('legal-support.index')}}\">Accompagnement Juridique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('technical-support.index')}}\">Accompagnement Technique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('admin.homepage.index')}}\">Administration</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t\t\t\t\t{# voir si je veux qu'un admin ne puisse pas y aller on ajoute 'and not is_granted('ROLE_ADMIN')'. je ne pense pas, mais à réfléchir #}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('profile.homepage.index')}}\">Espace membre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY')%}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('security.login')}}\">Connexion / Création de profil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{url('security.logout')}}\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
</header>
", "_inc/header.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/_inc/header.html.twig");
    }
}
