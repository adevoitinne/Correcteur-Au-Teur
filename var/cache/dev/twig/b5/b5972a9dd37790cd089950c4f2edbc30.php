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
class __TwigTemplate_e4b64559305adef3edd456680655a56c extends Template
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
    <ul>
      <li>
        <a href=\"#main\">Aller au contenu principal</a>
      </li>
    </ul>
  </nav>
  <header aria-label=\"en-tête\">
    <div class=\"top\">
      <div class=\"logo\">
        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        yield "\"  alt=\"logo du service Correct-Au-Teur\">  
      </div>
        <h1 class=\"title pt-2\">Correct-Au-Teur</h1>  
    </div>
    <div class=\"container menu\">
      <div class=\"row\">
        <nav aria-label=\"menu principal\" class=\"navbar navbar-expand-lg\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"afficher le menu\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage.index");
        yield "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("functioning.index");
        yield "\">Fonctionnement</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("legal-support.index");
        yield "\">Accompagnement Juridique</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("technical-support.index");
        yield "\">Accompagnement Technique</a>
                </li>
                ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            yield "                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin.homepage.index");
            yield "\">Administration</a>
                  </li>
                ";
        }
        // line 41
        yield "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            yield "                ";
            // line 43
            yield "                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
            yield "\">Espace membre</a>
                  </li>
                ";
        }
        // line 47
        yield "                ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 48
            yield "                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security.login");
            yield "\">Connexion / Création de profil</a>
                  </li>
                ";
        } else {
            // line 52
            yield "                   <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security.logout");
            yield "\">Déconnexion</a>
                  </li>
                ";
        }
        // line 56
        yield "                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>";
        
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
        return array (  146 => 56,  140 => 53,  137 => 52,  131 => 49,  128 => 48,  125 => 47,  119 => 44,  116 => 43,  114 => 42,  111 => 41,  105 => 38,  102 => 37,  100 => 36,  95 => 34,  89 => 31,  83 => 28,  77 => 25,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"skip-links\" aria-label=\"accéder rapidement au contenu principal\">
    <ul>
      <li>
        <a href=\"#main\">Aller au contenu principal</a>
      </li>
    </ul>
  </nav>
  <header aria-label=\"en-tête\">
    <div class=\"top\">
      <div class=\"logo\">
        <img src=\"{{ asset('img/Logo.png') }}\"  alt=\"logo du service Correct-Au-Teur\">  
      </div>
        <h1 class=\"title pt-2\">Correct-Au-Teur</h1>  
    </div>
    <div class=\"container menu\">
      <div class=\"row\">
        <nav aria-label=\"menu principal\" class=\"navbar navbar-expand-lg\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"afficher le menu\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" aria-current=\"page\" href=\"{{url('homepage.index')}}\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{url('functioning.index')}}\">Fonctionnement</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{url('legal-support.index')}}\">Accompagnement Juridique</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{url('technical-support.index')}}\">Accompagnement Technique</a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{url('admin.homepage.index')}}\">Administration</a>
                  </li>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                {# voir si je veux qu'un admin ne puisse pas y aller on ajoute 'and not is_granted('ROLE_ADMIN')'. je ne pense pas, mais à réfléchir #}
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{url('profile.homepage.index')}}\">Espace membre</a>
                  </li>
                {% endif %}
                {% if not is_granted('IS_AUTHENTICATED_FULLY')%}
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{url('security.login')}}\">Connexion / Création de profil</a>
                  </li>
                {% else %}
                   <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{url('security.logout')}}\">Déconnexion</a>
                  </li>
                {% endif %}
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>", "_inc/header.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/_inc/header.html.twig");
    }
}
