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

/* modules/custom/gavias_view/templates/views-view-gvaportfolio.html.twig */
class __TwigTemplate_930d463a6498bc688cc781c644169a90 extends Template
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
        if (($context["attributes"] ?? null)) {
            // line 2
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            yield ">
";
        }
        // line 4
        yield "   
   ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            yield "      <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            yield "</h3>
   ";
        }
        // line 8
        yield "  
  <nav class=\"portfolio-filter\">
    <ul class=\"nav nav-tabs\">
      ";
        // line 11
        if (($context["show_all"] ?? null)) {
            // line 12
            yield "        <li><a class=\"btn-filter all active ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 12, $this->source), "html", null, true);
            yield "\" href=\"#\" data-filter=\"*\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
            yield "</span></a></li>
      ";
        }
        // line 14
        yield "
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["terms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            yield "        <li class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "\"><a href=\"#\" class=\"btn-filter ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 16, $this->source), "html", null, true);
            yield "\" data-filter=\".";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "</span></a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['term'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </ul> 
  </nav> 

  <div class=\"gva-portfolio-items clearfix\">
    <div class=\"row\">
      <div class=\"isotope-items view-portfolio\" data-pid=\"";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 23, $this->source), "html", null, true);
        yield "\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25), 25, $this->source));
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "      </div>
    </div>
  </div>  
   
";
        // line 31
        if (($context["attributes"] ?? null)) {
            // line 32
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "show_all", "pid", "terms", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/gavias_view/templates/views-view-gvaportfolio.html.twig";
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
        return array (  132 => 32,  130 => 31,  124 => 27,  115 => 25,  111 => 24,  107 => 23,  100 => 18,  85 => 16,  81 => 15,  78 => 14,  70 => 12,  68 => 11,  63 => 8,  57 => 6,  55 => 5,  52 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/gavias_view/templates/views-view-gvaportfolio.html.twig", "C:\\laragon\\www\\subic-gov\\modules\\custom\\gavias_view\\templates\\views-view-gvaportfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 15);
        static $filters = array("escape" => 2, "t" => 12, "raw" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'raw'],
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
