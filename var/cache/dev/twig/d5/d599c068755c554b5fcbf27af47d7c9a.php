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

/* base.html.twig */
class __TwigTemplate_b8513127c3c3b36f65adccb47ff1ab83 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<html lang=\"fr\">
    <head>
        ";
        // line 5
        yield "        ";
        // line 61
        yield "        <meta charset=\"UTF-8\">
        <title>";
        // line 62
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/functioning.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/technical-support.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/form.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        yield "\">
        <script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\" defer></script>
        <script src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/anime.min.js"), "html", null, true);
        yield "\" defer></script>
        <script src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\" defer></script>
        
    </head>
    <body>
        ";
        // line 77
        yield from $this->loadTemplate("_inc/header.html.twig", "base.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "\t\t
\t\t";
        // line 79
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 82
        yield "\t\t
        ";
        // line 83
        yield from $this->loadTemplate("_inc/footer.html.twig", "base.html.twig", 83)->unwrap()->yield($context);
        // line 84
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "C-A-T";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "
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
        return "base.html.twig";
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
        return array (  171 => 80,  158 => 79,  135 => 62,  122 => 84,  120 => 83,  117 => 82,  115 => 79,  112 => 78,  110 => 77,  103 => 73,  99 => 72,  95 => 71,  91 => 70,  87 => 69,  83 => 68,  79 => 67,  75 => 66,  71 => 65,  67 => 64,  63 => 63,  59 => 62,  56 => 61,  54 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"fr\">
    <head>
        {# // <script src=\"{{ asset('tarteaucitron/tarteaucitron.js') }}\"></script>
        //  <script type=\"text/javascript\"> #}
        {# // tarteaucitron.init({
    \t//   \"privacyUrl\": \"\", /* Url de la politique de confidentialité */
        //  //   à compléter //
        //   \"bodyPosition\": \"top\", /* top place le bandeau de consentement au début du code html, mieux pour l'accessibilité */

    \t//   \"hashtag\": \"#tarteaucitron\", /* Hashtag qui permet d'ouvrir le panneau de contrôle  */
    \t//   \"cookieName\": \"tarteaucitron\", /* Nom du cookie (uniquement lettres et chiffres) */
    
    \t//   \"orientation\": \"middle\", /* Position de la bannière (top - bottom - popup - banner) */
       
        //   \"groupServices\": true, /* Grouper les services par catégorie */
        //   \"showDetailsOnClick\": true, /* Cliquer pour ouvrir la description */
        //   \"serviceDefaultState\": \"wait\", /* Statut par défaut (true - wait - false) */
                           
    \t//   \"showAlertSmall\": false, /* Afficher la petite bannière en bas à droite */
    \t//   \"cookieslist\": false, /* Afficher la liste des cookies */
                           
        //   \"closePopup\": true, /* Afficher un X pour fermer la bannière */

        //   \"showIcon\": true, /* Afficher un cookie pour ouvrir le panneau */
        //   \"iconSrc\": \"{{ asset('img/logo-cookie.webp') }}\", /* Optionnel: URL ou image en base64 */
        //   \"iconPosition\": \"TopRight\", /* Position de l'icons: (BottomRight - BottomLeft - TopRight - TopLeft) */

    \t//   \"adblocker\": false, /* Afficher un message si un Adblocker est détecté */
                           
        //   \"DenyAllCta\" : true, /* Afficher le bouton Tout refuser */
        //   \"AcceptAllCta\" : true, /* Afficher le bouton Tout accepter */
        //   \"highPrivacy\": true, /* Attendre le consentement */
        //   \"alwaysNeedConsent\": false, /* Demander le consentement même pour les services \"Privacy by design\" */
                           
    \t//   \"handleBrowserDNTRequest\": true, /* Refuser tout par défaut si Do Not Track est activé sur le navigateur */

    \t//   \"removeCredit\": false, /* Retirer le lien de crédit vers tarteaucitron.io */
    \t//   \"moreInfoLink\": true, /* Afficher le lien En savoir plus */

        //   \"useExternalCss\": false, /* Mode expert : désactiver le chargement des fichiers .css tarteaucitron */
        //   \"useExternalJs\": false, /* Mode expert : désactiver le chargement des fichiers .js tarteaucitron */

    \t//   //\"cookieDomain\": \".my-multisite-domaine.fr\", /* Optionnel: domaine principal pour partager le consentement avec des sous domaines */
                          
        //   \"readmoreLink\": \"\", /* Changer le lien En savoir plus par défaut */
        // //   à compléter //

        //   \"mandatory\": true, /* Afficher un message pour l'utilisation de cookies obligatoires */
        //   \"mandatoryCta\": false, /* Afficher un bouton pour les cookies obligatoires (déconseillé) */
    
        //   //\"customCloserId\": \"\", /* Optionnel a11y: ID personnalisé pour ouvrir le panel */
          
        //   \"googleConsentMode\": true, /* Activer le Google Consent Mode v2 pour Google ads et GA4 */
          
        //   \"partnersList\": true /* Afficher le détail du nombre de partenaires sur la bandeau */
        // });
        // </script>
        // <script>
        // (tarteaucitron.job = tarteaucitron.job || []).push('youtube');
        // </script> #}
        <meta charset=\"UTF-8\">
        <title>{% block title %}C-A-T{% endblock %}</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/fonts.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/functioning.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/technical-support.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/form.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
        <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\" defer></script>
        <script src=\"{{ asset('js/anime.min.js') }}\" defer></script>
        <script src=\"{{ asset('js/script.js') }}\" defer></script>
        
    </head>
    <body>
        {% include \"_inc/header.html.twig\" %}
\t\t
\t\t{% block body %}

        {% endblock %}
\t\t
        {% include \"_inc/footer.html.twig\" %}
    </body>
</html>
", "base.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/base.html.twig");
    }
}
