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

/* _inc/notice.html.twig */
class __TwigTemplate_ebcf5f320f1c48055c5f56669faad3e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/notice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/notice.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 2
            yield "\t<p class=\"alert alert-success\">
\t\t";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["notice"], "html", null, true);
            yield "
\t</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["danger"]) {
            // line 8
            yield "\t<p class=\"alert alert-danger\">
\t\t";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["danger"], "html", null, true);
            yield "
\t</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['danger'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_inc/notice.html.twig";
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
        return array (  74 => 9,  71 => 8,  67 => 7,  64 => 6,  55 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for notice in app.flashes('notice')%}
\t<p class=\"alert alert-success\">
\t\t{{ notice }}
\t</p>
{% endfor %}

{% for danger in app.flashes('danger')%}
\t<p class=\"alert alert-danger\">
\t\t{{ danger }}
\t</p>
{% endfor %}
", "_inc/notice.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/_inc/notice.html.twig");
    }
}
