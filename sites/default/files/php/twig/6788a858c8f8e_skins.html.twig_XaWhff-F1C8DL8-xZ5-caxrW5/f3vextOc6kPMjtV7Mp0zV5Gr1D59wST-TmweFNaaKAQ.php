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

/* themes/custom/gavias_daudo/templates/addon/skins.html.twig */
class __TwigTemplate_18deca89680c0fa062030eede6b679b6 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fas fa-eye-dropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
\t   ";
        // line 4
        yield from         $this->loadTemplate((($context["theme_path"] ?? null) . "/customize/customize_form.html.twig"), "themes/custom/gavias_daudo/templates/addon/skins.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"//";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 13, $this->source), "html", null, true);
        yield "gvas\"></a>
\t\t\t<a class=\"item-color blue\" href=\"//";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 14, $this->source), "html", null, true);
        yield "gvas=blue\"></a>
\t\t\t<a class=\"item-color brown\" href=\"//";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 15, $this->source), "html", null, true);
        yield "gvas=brown\"></a>
\t\t\t<a class=\"item-color green\" href=\"//";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 16, $this->source), "html", null, true);
        yield "gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 17, $this->source), "html", null, true);
        yield "gvas=lilac\"></a>
\t\t\t<a class=\"item-color lime_green\" href=\"//";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 18, $this->source), "html", null, true);
        yield "gvas=lime_green\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 19, $this->source), "html", null, true);
        yield "gvas=orange\"></a>
\t\t\t<a class=\"item-color pink\" href=\"//";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 20, $this->source), "html", null, true);
        yield "gvas=pink\"></a>
\t\t\t<a class=\"item-color purple\" href=\"//";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 21, $this->source), "html", null, true);
        yield "gvas=purple\"></a>
\t\t\t<a class=\"item-color red\" href=\"//";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 22, $this->source), "html", null, true);
        yield "gvas=red\"></a>
\t\t\t<a class=\"item-color turquoise\" href=\"//";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 23, $this->source), "html", null, true);
        yield "gvas=turquoise\"></a>
\t\t\t<a class=\"item-color turquoise2\" href=\"//";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 24, $this->source), "html", null, true);
        yield "gvas=turquoise2\"></a>
\t\t\t<a class=\"item-color violet_red\" href=\"//";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 25, $this->source), "html", null, true);
        yield "gvas=violet_red\"></a>
\t\t\t<a class=\"item-color violet_red2\" href=\"//";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 26, $this->source), "html", null, true);
        yield "gvas=violet_red2\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 27, $this->source), "html", null, true);
        yield "gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme_path", "current_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/addon/skins.html.twig";
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
        return array (  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/addon/skins.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\addon\\skins.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
