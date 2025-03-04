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

/* profile/homepage/index.html.twig */
class __TwigTemplate_f4b8befcaae1237128ca89e8ec2bee71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/homepage/index.html.twig", 1);
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
        yield "\t<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">C'est parti pour l'aventure Correc-Au-teur !</h2>
\t\t\t<p class=\"h4 text-center paragraph pb-5\">Vous êtes dans l'espace privé. Seuls les membres y ont accès.</p>
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 grid-menu\">
\t\t\t\t\t<p class=\"title-1 title-menu h4\">Mon profil</p>
\t\t\t\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.form");
        yield "\" class=\"btn button btn-secondary link-menu link-1\">Gérer</a>
\t\t\t\t\t<p class=\"title-2 title-menu h4\">Mes demandes de correction</p>
\t\t\t\t\t<a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myrequest.index");
        yield "\" class=\"btn button btn-secondary link-menu link-2\">Gérer</a>
\t\t\t\t\t<p class=\"title-3 title-menu h4\">Toutes les demandes</p>
\t\t\t\t\t<a href=\"#\" class=\"btn button btn-secondary link-menu link-3\">Consulter</a>
\t\t\t\t\t<p class=\"title-4 title-menu h4\">Me déconnecter</p>
\t\t\t\t\t<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security.logout");
        yield "\" class=\"btn button btn-secondary link-menu link-4\">Déconnexion</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-12 row\">
\t\t\t\t\t<div class=\"col-6 mx-auto mt-sm-4 mt-md-0 mb-2 image-2\">
          \t\t\t\t<img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/aventure_livre.png"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'avanture littéraire\">
        \t\t\t</div>
\t\t\t\t\t<section aria-label=\"texte d'explication\" class=\"section col-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"h4 py-2 px-2 paragraph\">Depuis ce menu, vous pourrez gérer votre profil, vos demandes de corrections.</p>
\t\t\t\t\t\t<p class=\"h4 py-2 px-2 paragraph\">Vous pourrez également consulter les demandes de corrections des autres Auteurs membres.</p>
\t\t\t\t\t</section>
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
        return "profile/homepage/index.html.twig";
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
        return array (  104 => 21,  97 => 17,  90 => 13,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">C'est parti pour l'aventure Correc-Au-teur !</h2>
\t\t\t<p class=\"h4 text-center paragraph pb-5\">Vous êtes dans l'espace privé. Seuls les membres y ont accès.</p>
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 grid-menu\">
\t\t\t\t\t<p class=\"title-1 title-menu h4\">Mon profil</p>
\t\t\t\t\t<a href=\"{{url('profile.myprofile.form')}}\" class=\"btn button btn-secondary link-menu link-1\">Gérer</a>
\t\t\t\t\t<p class=\"title-2 title-menu h4\">Mes demandes de correction</p>
\t\t\t\t\t<a href=\"{{ url('profile.myrequest.index')}}\" class=\"btn button btn-secondary link-menu link-2\">Gérer</a>
\t\t\t\t\t<p class=\"title-3 title-menu h4\">Toutes les demandes</p>
\t\t\t\t\t<a href=\"#\" class=\"btn button btn-secondary link-menu link-3\">Consulter</a>
\t\t\t\t\t<p class=\"title-4 title-menu h4\">Me déconnecter</p>
\t\t\t\t\t<a href=\"{{url('security.logout')}}\" class=\"btn button btn-secondary link-menu link-4\">Déconnexion</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-12 row\">
\t\t\t\t\t<div class=\"col-6 mx-auto mt-sm-4 mt-md-0 mb-2 image-2\">
          \t\t\t\t<img src=\"{{ asset('img/aventure_livre.png') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'avanture littéraire\">
        \t\t\t</div>
\t\t\t\t\t<section aria-label=\"texte d'explication\" class=\"section col-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"h4 py-2 px-2 paragraph\">Depuis ce menu, vous pourrez gérer votre profil, vos demandes de corrections.</p>
\t\t\t\t\t\t<p class=\"h4 py-2 px-2 paragraph\">Vous pourrez également consulter les demandes de corrections des autres Auteurs membres.</p>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/homepage/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/homepage/index.html.twig");
    }
}
