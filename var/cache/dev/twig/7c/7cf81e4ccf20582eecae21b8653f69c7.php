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

/* legal-support/index.html.twig */
class __TwigTemplate_bbbbc98ed7c91f9e534f5c830b7cb40f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal-support/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal-support/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "legal-support/index.html.twig", 1);
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
\t\t<div class=\"container-fluid px-md-4 row-gap-5\">
\t\t\t<div class=\"row d-flex flex-md-row flex-sm-column align-items-center column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 col-sm-10\">
\t\t\t\t\t<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/juridique.png"), "html", null, true);
        yield "\" class=\"img-fluid images\" alt=\"image d'illustration du juridique\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 offset-md-1 col-sm-12 align-items-center section\">
\t\t\t\t\t<p class=\"paragraph h4 py-2\">
\t\t\t\t\t\tLa protection juridique de votre manuscrit est un élément fondamental et nous le comprenons. Afin de sécuriser cette partie nous avons deux moyens complémentaires :
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex flex-md-row-reverse flex-sm-column align-items-center column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 offset-md-1 col-sm-10\">
\t\t\t\t\t<img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/propriete-intellectuelle.png"), "html", null, true);
        yield "\" class=\"img-fluid images\" alt=\"image d'illustration de la propriété intellectuelle\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 col-sm-12 section\">
\t\t\t\t\t<p class=\"paragraph align-self-center h4 py-2\">
\t\t\t\t\t\tTout d'abord lors de la création de son profil, chaque Auteur - Correcteur s'engage à respecter les CGS, consultables
\t\t\t\t\t\t<a href=\"documents/cgs-v1.pdf\" class=\"h4 simple-link\">ici</a>, et surtout la propriété intellectuelle de l'Auteur concernant son manuscrit et ses idées originales.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex flex-md-row flex-sm-column column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 col-sm-10\">
\t\t\t\t\t<img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/confidential-agreement.png"), "html", null, true);
        yield "\" class=\"img-fluid images\" alt=\"image d'illustration de l'engagement de confidentialité\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 offset-md-1 col-sm-12 align-items-center section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tDe plus, avant de transmettre votre manuscrit à un Auteur - Correcteur pour correction, nous vous demandons de lui faire signer un engagement de confidentialité et de respect de la propriété intellectuelle du manuscrit et de vos idées originales.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tLe modèle d'engagement a été élaboré avec notre équipe juridique dans le but d'éviter des délits de plagiat ou vol de manuscrit et d'idées originales. Téléchargez-le ici : en version
\t\t\t\t\t\t<a href=\"documents/accord-confidentialite.docx\" class=\"h4 simple-link\">Word</a>
\t\t\t\t\t\tou en version
\t\t\t\t\t\t<a href=\"documents/accord-confidentialite.pdf\" class=\"h4 simple-link\">PDF</a>.
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
        return "legal-support/index.html.twig";
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
        return array (  109 => 29,  95 => 18,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body%}
\t<main aria-label=\"contenu principal\" id=\"main\" class=\"my-auto\">
\t\t<div class=\"container-fluid px-md-4 row-gap-5\">
\t\t\t<div class=\"row d-flex flex-md-row flex-sm-column align-items-center column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 col-sm-10\">
\t\t\t\t\t<img src=\"{{ asset('img/juridique.png') }}\" class=\"img-fluid images\" alt=\"image d'illustration du juridique\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 offset-md-1 col-sm-12 align-items-center section\">
\t\t\t\t\t<p class=\"paragraph h4 py-2\">
\t\t\t\t\t\tLa protection juridique de votre manuscrit est un élément fondamental et nous le comprenons. Afin de sécuriser cette partie nous avons deux moyens complémentaires :
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex flex-md-row-reverse flex-sm-column align-items-center column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 offset-md-1 col-sm-10\">
\t\t\t\t\t<img src=\"{{ asset('img/propriete-intellectuelle.png') }}\" class=\"img-fluid images\" alt=\"image d'illustration de la propriété intellectuelle\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 col-sm-12 section\">
\t\t\t\t\t<p class=\"paragraph align-self-center h4 py-2\">
\t\t\t\t\t\tTout d'abord lors de la création de son profil, chaque Auteur - Correcteur s'engage à respecter les CGS, consultables
\t\t\t\t\t\t<a href=\"documents/cgs-v1.pdf\" class=\"h4 simple-link\">ici</a>, et surtout la propriété intellectuelle de l'Auteur concernant son manuscrit et ses idées originales.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex flex-md-row flex-sm-column column-gap-3 py-3\">
\t\t\t\t<div class=\"col-md-2 col-sm-10\">
\t\t\t\t\t<img src=\"{{ asset('img/confidential-agreement.png') }}\" class=\"img-fluid images\" alt=\"image d'illustration de l'engagement de confidentialité\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 offset-md-1 col-sm-12 align-items-center section\">
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tDe plus, avant de transmettre votre manuscrit à un Auteur - Correcteur pour correction, nous vous demandons de lui faire signer un engagement de confidentialité et de respect de la propriété intellectuelle du manuscrit et de vos idées originales.
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"h4 py-2 paragraph\">
\t\t\t\t\t\tLe modèle d'engagement a été élaboré avec notre équipe juridique dans le but d'éviter des délits de plagiat ou vol de manuscrit et d'idées originales. Téléchargez-le ici : en version
\t\t\t\t\t\t<a href=\"documents/accord-confidentialite.docx\" class=\"h4 simple-link\">Word</a>
\t\t\t\t\t\tou en version
\t\t\t\t\t\t<a href=\"documents/accord-confidentialite.pdf\" class=\"h4 simple-link\">PDF</a>.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "legal-support/index.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/legal-support/index.html.twig");
    }
}
