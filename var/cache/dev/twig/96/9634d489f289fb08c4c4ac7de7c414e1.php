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

/* _inc/footer.html.twig */
class __TwigTemplate_a7ca543729930d6d5ca881d37fb58a2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/footer.html.twig"));

        // line 1
        yield " <footer class=\"sticky-md-bottom\" aria-label=\"pied-de-page\">
    <div class=\"bottom\">
      <div class=\"contact\">
        <p>Pour nous contacter :</p>
      </div>
      <nav aria-label=\"menu des moyens de contact\" class=\"socials\">
        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact.index");
        yield "\" class=\"socials-link\">Formulaire de contact</a>
        <a href=\"#\" class=\"socials-link\">
          <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/linkedin.png"), "html", null, true);
        yield "\" alt=\"lien Linkedin\">
        </a>
        <a href=\"#\" class=\"socials-link\">
          <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Instagram_icon.png"), "html", null, true);
        yield "\" alt=\"lien Instagram\">
        </a>   
      </nav>
      <div class=\"cgs-link\">
        <a href=\"documents/cgs-v1.pdf\" aria-label=\"accéder aux conditions générales\">CGS</a>
      </div>
    </div>
  </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_inc/footer.html.twig";
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
        return array (  67 => 12,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <footer class=\"sticky-md-bottom\" aria-label=\"pied-de-page\">
    <div class=\"bottom\">
      <div class=\"contact\">
        <p>Pour nous contacter :</p>
      </div>
      <nav aria-label=\"menu des moyens de contact\" class=\"socials\">
        <a href=\"{{url('contact.index')}}\" class=\"socials-link\">Formulaire de contact</a>
        <a href=\"#\" class=\"socials-link\">
          <img src=\"{{ asset('img/linkedin.png') }}\" alt=\"lien Linkedin\">
        </a>
        <a href=\"#\" class=\"socials-link\">
          <img src=\"{{ asset('img/Instagram_icon.png') }}\" alt=\"lien Instagram\">
        </a>   
      </nav>
      <div class=\"cgs-link\">
        <a href=\"documents/cgs-v1.pdf\" aria-label=\"accéder aux conditions générales\">CGS</a>
      </div>
    </div>
  </footer>", "_inc/footer.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/_inc/footer.html.twig");
    }
}
