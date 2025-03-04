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

/* homepage/index.html.twig */
class __TwigTemplate_bf08a3b3f4ac19ec4b4b67fd93965761 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
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
\t\t\t<div class=\"subtitle row py-4 justify-content-sm-center justify-content-md-start\">
\t\t\t\t<h2 class=\"subtitle-text col-auto offset-md-2 border-1 shadow  py-1\">La Correction d' Auteur à Auteur</h2>
\t\t\t</div>
\t\t\t<div class=\"row flex-sm-column flex-md-row justify-content-around\">
\t\t\t\t<section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tQue ce soit pour le présenter aux maisons d'édition ou pour se lancer dans             l'Auto-édition, un manuscrit doit au préalable être corrigé par un tiers. La correction révélera le potentiel du texte en gommant ses défauts et en soulignant ses atouts !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tTrouver un Correcteur compétent, disponible et qui comprenne le point de vue de l'Auteur ne sera jamais plus mission impossible.
\t\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>
\t\t\t\t\t\test la solution !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tNous mettons en relation des auteurs pour relire et corriger, gratuitement, les travaux d'autres auteurs.
\t\t\t\t\t\tCliquez
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("functioning.index");
        yield "\">ici</a>
\t\t\t\t\t\tpour voir comment cela fonctionne.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tVotre manuscrit sera dans les mains d'un Auteur que vous aurez choisi selon son profil et vos échanges préalables.
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 pb-3 image-1\">
\t\t\t\t\t<img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mains-entraide.png"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'entraide\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row flex-sm-column flex-md-row-reverse justify-content-around\">
\t\t\t\t<section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tVoyez cela comme un échange de bons procédés! En effet, si votre collaboration répond à vos attentes, vous pourrez rendre la pareille à « votre » Correcteur !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tConcernant la protection juridique de votre œuvre, pas de crainte à avoir. Nous avons pensé à tout, aller en page
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("legal-support.index");
        yield "\">Accompagnement Juridique</a>
\t\t\t\t\t\tpour en savoir plus.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tConcernant l'aspect technique, nous vous recommandons la bonne méthode pour la correction de votre manuscrit et les échanges avec le Correcteur. Aller en page
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("technical-support.index");
        yield "\">Accompagnement Technique</a>
\t\t\t\t\t\tpour en savoir plus.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tCréez vite votre Profil Membre,
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("registration.register");
        yield "\">ici</a>, pour faire partie de l'Aventure
\t\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>.
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 mb-2 image-2\">
\t\t\t\t\t<img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/main-ecrit.png"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'écriture\">
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
        return "homepage/index.html.twig";
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
        return array (  144 => 55,  136 => 50,  128 => 45,  120 => 40,  107 => 30,  96 => 22,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
\t<main aria-label=\"contenu principal\" id=\"main\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"subtitle row py-4 justify-content-sm-center justify-content-md-start\">
\t\t\t\t<h2 class=\"subtitle-text col-auto offset-md-2 border-1 shadow  py-1\">La Correction d' Auteur à Auteur</h2>
\t\t\t</div>
\t\t\t<div class=\"row flex-sm-column flex-md-row justify-content-around\">
\t\t\t\t<section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tQue ce soit pour le présenter aux maisons d'édition ou pour se lancer dans             l'Auto-édition, un manuscrit doit au préalable être corrigé par un tiers. La correction révélera le potentiel du texte en gommant ses défauts et en soulignant ses atouts !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tTrouver un Correcteur compétent, disponible et qui comprenne le point de vue de l'Auteur ne sera jamais plus mission impossible.
\t\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>
\t\t\t\t\t\test la solution !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tNous mettons en relation des auteurs pour relire et corriger, gratuitement, les travaux d'autres auteurs.
\t\t\t\t\t\tCliquez
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"{{url('functioning.index')}}\">ici</a>
\t\t\t\t\t\tpour voir comment cela fonctionne.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tVotre manuscrit sera dans les mains d'un Auteur que vous aurez choisi selon son profil et vos échanges préalables.
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 pb-3 image-1\">
\t\t\t\t\t<img src=\"{{ asset('img/mains-entraide.png') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'entraide\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row flex-sm-column flex-md-row-reverse justify-content-around\">
\t\t\t\t<section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tVoyez cela comme un échange de bons procédés! En effet, si votre collaboration répond à vos attentes, vous pourrez rendre la pareille à « votre » Correcteur !
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tConcernant la protection juridique de votre œuvre, pas de crainte à avoir. Nous avons pensé à tout, aller en page
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"{{url('legal-support.index')}}\">Accompagnement Juridique</a>
\t\t\t\t\t\tpour en savoir plus.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tConcernant l'aspect technique, nous vous recommandons la bonne méthode pour la correction de votre manuscrit et les échanges avec le Correcteur. Aller en page
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"{{url('technical-support.index')}}\">Accompagnement Technique</a>
\t\t\t\t\t\tpour en savoir plus.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tCréez vite votre Profil Membre,
\t\t\t\t\t\t<a class=\"h4 simple-link\" href=\"{{url('registration.register')}}\">ici</a>, pour faire partie de l'Aventure
\t\t\t\t\t\t<strong class=\"c-a-t h3\">Correct-Au-Teur</strong>.
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 mb-2 image-2\">
\t\t\t\t\t<img src=\"{{ asset('img/main-ecrit.png') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'écriture\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "homepage/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/homepage/index.html.twig");
    }
}
