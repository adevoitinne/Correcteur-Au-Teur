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

/* profile/myprofile/form.html.twig */
class __TwigTemplate_408f7ce2cecb4144838ca054c0e2db65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myprofile/form.html.twig", 1);
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
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Mon profil</h2>
            ";
        // line 7
        yield from $this->loadTemplate("_inc/notice.html.twig", "profile/myprofile/form.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "            <p>
\t\t\t\t<a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.homepage.index");
        yield "\" class=\"btn button btn-secondary\">Retour au menu</a>
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile.myprofile.password.edit");
        yield "\" class=\"btn button btn-secondary \">Modifier mon mot de passe</a>
\t\t\t</p>
\t\t\t\t";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "aria_label" => "formulaire de profil"]]);
        yield " 
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations personnelles\">
                    <legend>Moi :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom :"]);
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre prénom"]]);
        yield "
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>        
                        <div class=\"col-md-4 col-sm-12\">    
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom :"]);
        yield "
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lastname", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre nom"]]);
        yield "
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "lastname", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">    
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "birth_at", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de naissance :"]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "birth_at", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez  saisir votre date de naissance", "placeholder" => "jj/mm/aaaa"]]);
        yield "
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "birth_at", [], "any", false, false, false, 27), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div> 
                    </fieldset>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos coordonnées\">
                    <legend>Me contacter :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email :"]);
        yield "
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre email"]]);
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "contact_network", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réseau(x) de Contact :"]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "contact_network", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez obligatoirement saisir votre/vos identifiant(s) et leur réseau social associé"]]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "contact_network", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone :"]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Veuillez  saisir votre numéro de téléphone", "placeholder" => "0607080910"]]);
        yield "        
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations en tant qu'auteur\">
                    <legend>Moi en tant qu'Auteur :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "is_published", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Edité.e :"]);
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "is_published", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-check-input", "aria_label" => "Êtes-vous un auteur édité ?"]]);
        yield "
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "is_published", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "is_self_published", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Auto-Edité.e :"]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "is_self_published", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control form-check-input", "aria_label" => "Êtes-vous un auteur auto-édité ?"]]);
        yield "
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "is_self_published", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "artwork_type", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type d'œuvre :"]);
        yield "
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "artwork_type", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "aria_label" => "Quel type d'œuvre écrivez-vous ?"]]);
        yield "
                           ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "artwork_type", [], "any", false, false, false, 62), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                        <div class=\"col-12\">     
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "genres", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Genre(s) :"]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "genres", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control d-flex align-items-baseline flex-wrap gap-4", "aria_label" => "Quel genre d'œuvre écrivez-vous ?"]]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "genres", [], "any", false, false, false, 67), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations en tant que correcteur\">
                    <legend>Moi en tant que Correcteur :</legend>
                        <div class=\"col-12\">     
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "interests", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Centre(s) d'intérêt :"]);
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "interests", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control d-flex align-items-baseline flex-wrap gap-4", "aria_label" => "Quel genre d'œuvre souhaitez-vous corriger ?"]]);
        yield "
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "interests", [], "any", false, false, false, 74), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                        </div>
                    <div class=\"row justify-content-end\">
                        <button type=\"submit\" class=\"col-auto btn button btn-secondary btn-submit\">Valider</button>
                    </div>
\t\t\t    ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
                
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
        return "profile/myprofile/form.html.twig";
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
        return array (  263 => 79,  255 => 74,  251 => 73,  247 => 72,  239 => 67,  235 => 66,  231 => 65,  225 => 62,  221 => 61,  217 => 60,  211 => 57,  207 => 56,  203 => 55,  197 => 52,  193 => 51,  189 => 50,  181 => 45,  177 => 44,  173 => 43,  167 => 40,  163 => 39,  159 => 38,  153 => 35,  149 => 34,  145 => 33,  136 => 27,  132 => 26,  128 => 25,  122 => 22,  118 => 21,  114 => 20,  108 => 17,  102 => 16,  95 => 12,  90 => 10,  86 => 9,  83 => 8,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main aria-label=\"contenu principal\" id=\"main\">
    \t<div class=\"container-fluid\">
\t\t\t<h2 class=\"text-center subtitle \">Mon profil</h2>
            {% include \"_inc/notice.html.twig\" %}
            <p>
\t\t\t\t<a href=\"{{ url('profile.homepage.index') }}\" class=\"btn button btn-secondary\">Retour au menu</a>
                <a href=\"{{ url('profile.myprofile.password.edit') }}\" class=\"btn button btn-secondary \">Modifier mon mot de passe</a>
\t\t\t</p>
\t\t\t\t{{ form_start(form, { attr: { novalidate: 'novalidate', aria_label:\"formulaire de profil\" } }) }} 
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations personnelles\">
                    <legend>Moi :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            {{ form_label(form.firstname, 'Prénom :', { label_attr: { class:'form-label'} }) }}                                {{ form_widget(form.firstname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre prénom'} }) }}
                            {{ form_errors(form.firstname, { attr: { class:'text-danger'} }) }}
                        </div>        
                        <div class=\"col-md-4 col-sm-12\">    
                            {{ form_label(form.lastname, 'Nom :', { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.lastname, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre nom'} }) }}
                            {{ form_errors(form.lastname, { attr: { class:'text-danger'} }) }}  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">    
                            {{ form_label(form.birth_at, 'Date de naissance :', { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.birth_at, { attr: { class:'form-control', aria_label:'Veuillez  saisir votre date de naissance', placeholder:'jj/mm/aaaa'} }) }}
                            {{ form_errors(form.birth_at, { attr: { class:'text-danger'} }) }}
                        </div> 
                    </fieldset>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos coordonnées\">
                    <legend>Me contacter :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            {{ form_label(form.email, 'Email :', { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.email, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre email'} }) }}
                            {{ form_errors(form.email, { attr: { class:'text-danger'} }) }}  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            {{ form_label(form.contact_network, 'Réseau(x) de Contact :', { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.contact_network, { attr: { class:'form-control', aria_label:'Veuillez obligatoirement saisir votre/vos identifiant(s) et leur réseau social associé'} }) }}
                            {{ form_errors(form.contact_network, { attr: { class:'text-danger'} }) }}
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            {{ form_label(form.phone, 'Téléphone :', { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.phone, { attr: { class:'form-control', aria_label:'Veuillez  saisir votre numéro de téléphone', placeholder:'0607080910'} }) }}        
                            {{ form_errors(form.phone, { attr: { class:'text-danger'} }) }}
                        </div>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations en tant qu'auteur\">
                    <legend>Moi en tant qu'Auteur :</legend>
                        <div class=\"col-md-4 col-sm-12\">    
                            {{ form_label(form.is_published, \"Edité.e :\", { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.is_published, { attr: { class:'form-control form-check-input', aria_label:'Êtes-vous un auteur édité ?'} }) }}
                            {{ form_errors(form.is_published, { attr: { class:'text-danger'} }) }}  
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            {{ form_label(form.is_self_published, \"Auto-Edité.e :\", { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.is_self_published, { attr: { class:'form-control form-check-input', aria_label:'Êtes-vous un auteur auto-édité ?'} }) }}
                            {{ form_errors(form.is_self_published, { attr: { class:'text-danger'} }) }}
                        </div>
                        <div class=\"col-md-4 col-sm-12\">     
                            {{ form_label(form.artwork_type, \"Type d'œuvre :\", { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.artwork_type, { attr: { class:'form-control', aria_label:\"Quel type d'œuvre écrivez-vous ?\"} }) }}
                           {{ form_errors(form.artwork_type, { attr: { class:'text-danger'} }) }}
                        </div>
                        <div class=\"col-12\">     
                            {{ form_label(form.genres, \"Genre(s) :\", { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.genres, { attr: { class:'form-control d-flex align-items-baseline flex-wrap gap-4', aria_label:\"Quel genre d'œuvre écrivez-vous ?\"} }) }}
                            {{ form_errors(form.genres, { attr: { class:'text-danger'} }) }}
                        </div>
                    <fieldset class=\"row justify-content-between\" aria-label=\"Veuillez renseigner vos informations en tant que correcteur\">
                    <legend>Moi en tant que Correcteur :</legend>
                        <div class=\"col-12\">     
                            {{ form_label(form.interests, \"Centre(s) d'intérêt :\", { label_attr: { class:'form-label'} }) }}
                            {{ form_widget(form.interests, { attr: { class:'form-control d-flex align-items-baseline flex-wrap gap-4', aria_label:\"Quel genre d'œuvre souhaitez-vous corriger ?\"} }) }}
                            {{ form_errors(form.interests, { attr: { class:'text-danger'} }) }}
                        </div>
                    <div class=\"row justify-content-end\">
                        <button type=\"submit\" class=\"col-auto btn button btn-secondary btn-submit\">Valider</button>
                    </div>
\t\t\t    {{ form_end(form) }}
                
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}", "profile/myprofile/form.html.twig", "/Volumes/T7 Shield/dossier-de-travail/templates/profile/myprofile/form.html.twig");
    }
}
