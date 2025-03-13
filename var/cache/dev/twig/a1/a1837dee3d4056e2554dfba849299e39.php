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

/* emails/password-reset.html.twig */
class __TwigTemplate_dab06671729d91fbe1d7371f08778016 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        // line 1
        yield "<h1>Réinitialisation de votre Mot de Passe sur le site Correct-Au-Teur</h1>
<p>Bonjour ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "email", [], "any", false, false, false, 2), "html", null, true);
        yield "</p>
";
        // line 4
        yield "<p>Pour réinitialiser votre Mot de Passe,  veuillez cliquer sur le lien ci-dessous.</p>
<p><a href=\"";
        // line 5
        yield (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 5, $this->source); })());
        yield "\">Lien</a></p>
<p>Ce lien expirera dans 3 heures</p>
<p>Merci</p>
<p>L'équipe Correct-Au-Teur</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/password-reset.html.twig";
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
        return array (  58 => 5,  55 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Réinitialisation de votre Mot de Passe sur le site Correct-Au-Teur</h1>
<p>Bonjour {{ user.email }}</p>
{# mettre le prénom quand profil complet #}
<p>Pour réinitialiser votre Mot de Passe,  veuillez cliquer sur le lien ci-dessous.</p>
<p><a href=\"{{ url|raw }}\">Lien</a></p>
<p>Ce lien expirera dans 3 heures</p>
<p>Merci</p>
<p>L'équipe Correct-Au-Teur</p>", "emails/password-reset.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/emails/password-reset.html.twig");
    }
}
