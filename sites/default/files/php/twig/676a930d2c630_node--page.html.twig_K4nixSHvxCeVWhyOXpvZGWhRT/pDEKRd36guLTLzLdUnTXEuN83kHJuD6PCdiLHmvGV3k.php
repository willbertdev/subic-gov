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

/* themes/custom/gavias_daudo/templates/node/node--page.html.twig */
class __TwigTemplate_f86717718fec82e50c4de2cdded2df79 extends Template
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
        // line 2
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : (""))];
        // line 11
        if ((($context["teaser"] ?? null) == true)) {
            yield " 
<div";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "about"), "html", null, true);
            yield ">
  <div class=\"header-title\">
    ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
            yield "
      <h2";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 15, $this->source), "html", null, true);
            yield "</h2>
    ";
            // line 16
            $context["title_suffix"] = "";
            // line 17
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 17, $this->source), "html", null, true);
            yield "
    ";
            // line 18
            if (($context["display_submitted"] ?? null)) {
                // line 19
                yield "      <div class=\"node__meta\">
        ";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 20, $this->source), "html", null, true);
                yield "
        <span";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 21, $this->source), "html", null, true);
                yield ">
          ";
                // line 22
                yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 23
                yield "        </span>
        ";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 24, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 27
            yield "  </div>
  <div";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            yield ">
    ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 29, $this->source), "html", null, true);
            yield "
  </div>
</div>
<!-- End Display article for teaser page -->
";
        } else {
            // line 34
            yield "<!-- Start Display article for detail page -->

<div";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "about"), "html", null, true);
            yield ">
  <div class=\"header-title\">
  
    <div class=\"container\">
      <h1 class=\"title\"><span>";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            yield "</span></h1>
    </div>
  </div>
  
  <div";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            yield ">
    ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "html", null, true);
            yield "
  </div>
</div>

";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "teaser", "attributes", "title_prefix", "title_attributes", "label", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--page.html.twig";
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
        return array (  138 => 45,  134 => 44,  127 => 40,  120 => 36,  116 => 34,  108 => 29,  104 => 28,  101 => 27,  95 => 24,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  79 => 19,  77 => 18,  72 => 17,  70 => 16,  64 => 15,  60 => 14,  55 => 12,  51 => 11,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--page.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 11, "trans" => 22);
        static $filters = array("clean_class" => 4, "escape" => 12, "without" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
