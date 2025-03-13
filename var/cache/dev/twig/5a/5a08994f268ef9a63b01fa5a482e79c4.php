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

/* technical-support/index.html.twig */
class __TwigTemplate_ca0d0cad20896bf3496e4575d1811b87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technical-support/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technical-support/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "technical-support/index.html.twig", 1);
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
  <main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
    <div class=\"container-fluid px-md-5 row-gap-md-5\">
      <div class=\"row flex-md-row flex-sm-column justify-content-center align-items-center column-gap-2 my-5\">
        <div class=\"col-12 text-center\">
          <p class=\"h4 py-2\">
            Le moyen le plus simple pour transmettre son manuscrit à votre correcteur et pour faciliter les échanges durant la phase de correction est le service Google Docs (lien ci-dessous) : 
          </p>
          <a href=\"https://workspace.google.com/intl/fr-CA/products/docs/\" target=\"_blank\" aria-label=\"lien vers Google Docs\">
            <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-google-docs.png"), "html", null, true);
        yield "\" alt=\"logo Google Docs\" class=\"logo-gd\">
          </a>
        </div>
      </div>
      <div class=\"row flex-md-row flex-sm-column justify-content-center align-items-center column-gap-2 my-5\">
        <div class=\"col-md-4 col-sm-12 text-center\">
          <p class=\"h4 py-2\">
            Cette vidéo vous aidera à démarrer sur Google Docs en toute confiance :
          </p>
          <p class=\"h4 py-2\">
            En cas de besoin, n'hésitez pas à nous contacter <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact.index");
        yield "\" class=\"h4 simple-link\">ici</a> pour un support.
          </p>
        </div>
        <div class=\"col-md-7 col-sm-12 text-center\">
          <div class=\"video\">
            <iframe width=\"659\" height=\"371\" src=\"https://www.youtube.com/embed/1lwumGvmEEM\" title=\"Tuto Google Docs pour les Nuls | Les Indispensables\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen>
            </iframe>
            ";
        // line 30
        yield "          </div>
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
        return "technical-support/index.html.twig";
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
        return array (  109 => 30,  99 => 22,  86 => 12,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%} 
  <main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
    <div class=\"container-fluid px-md-5 row-gap-md-5\">
      <div class=\"row flex-md-row flex-sm-column justify-content-center align-items-center column-gap-2 my-5\">
        <div class=\"col-12 text-center\">
          <p class=\"h4 py-2\">
            Le moyen le plus simple pour transmettre son manuscrit à votre correcteur et pour faciliter les échanges durant la phase de correction est le service Google Docs (lien ci-dessous) : 
          </p>
          <a href=\"https://workspace.google.com/intl/fr-CA/products/docs/\" target=\"_blank\" aria-label=\"lien vers Google Docs\">
            <img src=\"{{ asset('img/logo-google-docs.png') }}\" alt=\"logo Google Docs\" class=\"logo-gd\">
          </a>
        </div>
      </div>
      <div class=\"row flex-md-row flex-sm-column justify-content-center align-items-center column-gap-2 my-5\">
        <div class=\"col-md-4 col-sm-12 text-center\">
          <p class=\"h4 py-2\">
            Cette vidéo vous aidera à démarrer sur Google Docs en toute confiance :
          </p>
          <p class=\"h4 py-2\">
            En cas de besoin, n'hésitez pas à nous contacter <a href=\"{{ url('contact.index') }}\" class=\"h4 simple-link\">ici</a> pour un support.
          </p>
        </div>
        <div class=\"col-md-7 col-sm-12 text-center\">
          <div class=\"video\">
            <iframe width=\"659\" height=\"371\" src=\"https://www.youtube.com/embed/1lwumGvmEEM\" title=\"Tuto Google Docs pour les Nuls | Les Indispensables\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen>
            </iframe>
            {# <div class=\"youtube_player\" videoID=\"1lwumGvmEEM\" width=\"659\" height=\"371\" theme=\"light\" rel=\"0\" controls=\"1\" showinfo=\"0\" autoplay=\"0\" mute=\"0\" srcdoc=\"\" loop=\"0\" loading=\"0\" data-start=\"start\" data-end=\"end\"></div> #}
          </div>
        </div>      
      </div> 
    </div>
  </main>
{% endblock %}", "technical-support/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/technical-support/index.html.twig");
    }
}
