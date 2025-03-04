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
class __TwigTemplate_dc523d1c09e78809475094fa816e8686 extends Template
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

        yield " 
 <main aria-label=\"contenu principal\" id=\"main\">
    <div class=\"container-fluid\">
      <div class=\"subtitle row py-4 justify-content-sm-center justify-content-md-start\">
        <h2 class=\"subtitle-text col-auto offset-md-2 border-1 shadow  py-1\">La Correction d' Auteur à Auteur</h2>
      </div>
      <div class=\"row flex-sm-column flex-md-row justify-content-around\">
        <section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
          <p class=\"h4 py-2 paragraph\">
            Que ce soit pour le présenter aux maisons d'édition ou pour se lancer dans             l'Auto-édition, un manuscrit doit au préalable être corrigé par un tiers. La correction révélera le potentiel du texte en gommant ses défauts et en soulignant ses atouts !
          </p>
          <p class=\"h4 py-2 paragraph\">
              Trouver un Correcteur compétent, disponible et qui comprenne le point de vue de l'Auteur ne sera jamais plus mission impossible.
              <strong class=\"c-a-t h3\">Correct-Au-Teur</strong> est la solution !
          </p>
          <p class=\"h4 py-2 paragraph\">
              Nous mettons en relation des auteurs pour relire et corriger, gratuitement, les travaux d'autres auteurs.
              Cliquez <a class=\"h4 fst-italic fw-bold\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("functioning.index");
        yield "\">ici</a> pour voir comment cela fonctionne.
          </p>
          <p class=\"h4 py-2 paragraph\">
              Votre manuscrit sera dans les mains d'un Auteur que vous aurez choisi selon son profil et vos échanges préalables.
          </p>
        </section>
        <div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 pb-3 image-1\">
          <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mains-entraide.png"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'entraide\">
        </div>
      </div>
      <div class=\"row flex-sm-column flex-md-row-reverse justify-content-around\">
        <section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
          <p class=\"h4 py-2 paragraph\">
            Voyez cela comme un échange de bons procédés! En effet, si votre collaboration répond à vos attentes, vous pourrez rendre la pareille à « votre » Correcteur !
          </p>
          <p class=\"h4 py-2 paragraph\">
            Concernant la protection juridique de votre œuvre, pas de crainte à avoir. Nous avons pensé à tout, aller en page <a class=\"h4 fst-italic fw-bold\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("legal-support.index");
        yield "\">Accompagnement Juridique</a> pour en savoir plus.
          </p>
          <p class=\"h4 py-2 paragraph\">
            Concernant l'aspect technique, nous vous recommandons la bonne méthode pour la correction de votre manuscrit et les échanges avec le Correcteur. Aller en page <a class=\"h4 fst-italic fw-bold\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("technical-support.index");
        yield "\">Accompagnement Technique</a>  pour en savoir plus.
          </p>
          <p class=\"h4 py-2 paragraph\">
            Créez vite votre Profil Membre, <a class=\"h4 fst-italic fw-bold\" href=\"#\">ici</a>, pour faire partie de l'Aventure <strong class=\"c-a-t h3\">Correct-Au-Teur</strong>.
          </p>
        </section>
        <div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 mb-2 image-2\">
          <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/main-ecrit.png"), "html", null, true);
        yield "\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'écriture\">
        </div>
      </div>
    </div>
  </main>
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
        return array (  132 => 46,  122 => 39,  116 => 36,  104 => 27,  94 => 20,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%} 
 <main aria-label=\"contenu principal\" id=\"main\">
    <div class=\"container-fluid\">
      <div class=\"subtitle row py-4 justify-content-sm-center justify-content-md-start\">
        <h2 class=\"subtitle-text col-auto offset-md-2 border-1 shadow  py-1\">La Correction d' Auteur à Auteur</h2>
      </div>
      <div class=\"row flex-sm-column flex-md-row justify-content-around\">
        <section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
          <p class=\"h4 py-2 paragraph\">
            Que ce soit pour le présenter aux maisons d'édition ou pour se lancer dans             l'Auto-édition, un manuscrit doit au préalable être corrigé par un tiers. La correction révélera le potentiel du texte en gommant ses défauts et en soulignant ses atouts !
          </p>
          <p class=\"h4 py-2 paragraph\">
              Trouver un Correcteur compétent, disponible et qui comprenne le point de vue de l'Auteur ne sera jamais plus mission impossible.
              <strong class=\"c-a-t h3\">Correct-Au-Teur</strong> est la solution !
          </p>
          <p class=\"h4 py-2 paragraph\">
              Nous mettons en relation des auteurs pour relire et corriger, gratuitement, les travaux d'autres auteurs.
              Cliquez <a class=\"h4 fst-italic fw-bold\" href=\"{{url('functioning.index')}}\">ici</a> pour voir comment cela fonctionne.
          </p>
          <p class=\"h4 py-2 paragraph\">
              Votre manuscrit sera dans les mains d'un Auteur que vous aurez choisi selon son profil et vos échanges préalables.
          </p>
        </section>
        <div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 pb-3 image-1\">
          <img src=\"{{ asset('img/mains-entraide.png') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'entraide\">
        </div>
      </div>
      <div class=\"row flex-sm-column flex-md-row-reverse justify-content-around\">
        <section aria-label=\"texte d'explication\" class=\"col-sm-12 col-md-8 section\">
          <p class=\"h4 py-2 paragraph\">
            Voyez cela comme un échange de bons procédés! En effet, si votre collaboration répond à vos attentes, vous pourrez rendre la pareille à « votre » Correcteur !
          </p>
          <p class=\"h4 py-2 paragraph\">
            Concernant la protection juridique de votre œuvre, pas de crainte à avoir. Nous avons pensé à tout, aller en page <a class=\"h4 fst-italic fw-bold\" href=\"{{url('legal-support.index')}}\">Accompagnement Juridique</a> pour en savoir plus.
          </p>
          <p class=\"h4 py-2 paragraph\">
            Concernant l'aspect technique, nous vous recommandons la bonne méthode pour la correction de votre manuscrit et les échanges avec le Correcteur. Aller en page <a class=\"h4 fst-italic fw-bold\" href=\"{{url('technical-support.index')}}\">Accompagnement Technique</a>  pour en savoir plus.
          </p>
          <p class=\"h4 py-2 paragraph\">
            Créez vite votre Profil Membre, <a class=\"h4 fst-italic fw-bold\" href=\"#\">ici</a>, pour faire partie de l'Aventure <strong class=\"c-a-t h3\">Correct-Au-Teur</strong>.
          </p>
        </section>
        <div class=\"col-sm-8 offset-sm-2 col-md-3 offset-md-0 mb-2 image-2\">
          <img src=\"{{ asset('img/main-ecrit.png') }}\" class=\"img-fluid illustration\" alt=\"image d'illustration de l'écriture\">
        </div>
      </div>
    </div>
  </main>
{% endblock %}
", "homepage/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/homepage/index.html.twig");
    }
}
