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

/* themes/custom/gavias_daudo/templates/node/node--article.html.twig */
class __TwigTemplate_6fac66cd5588f59cbcae7a18580dee98 extends Template
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
        $context["classes"] = ["node", "node-detail", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("node--unpublished") : ("")), ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source)))) : ("")), "clearfix"];
        // line 13
        yield "
<!-- Start Display article for teaser page -->
";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            yield " 
  <div class=\"post-block\">
    <div class=\"post-image\">
      ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
    </div>
    <div class=\"post-content text-left\">
        <div class=\"post-meta\">
          <span class=\"post-categories\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            yield "</span><span class=\"line\">-</span><span class=\"post-created\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 22), 22, $this->source), "d M, Y"), "html", null, true);
            yield " </span>
        </div>
        <h3 class=\"post-title\"> <a href=\"";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            yield "</a> </h3>            
    </div>
  </div>

";
        } elseif ((        // line 28
($context["view_mode"] ?? null) == "teaser_2")) {
            yield " 
  <div class=\"post-block teaser-2\">
    <div class=\"post-image\">
      ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield "
    </div>
    <div class=\"post-content text-center\">
        <div class=\"post-meta\">
          <span class=\"post-categories\">";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "</span><span class=\"line\">-</span><span class=\"post-created\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 35), 35, $this->source), "d M, Y"), "html", null, true);
            yield " </span>
        </div>
        <h3 class=\"post-title\"> <a href=\"";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 37, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 37, $this->source), "html", null, true);
            yield "</a> </h3>            
    </div>
  </div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 43
            yield "<!-- Start Display article for detail page -->

<article";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            yield ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["post_format"] ?? null), 48, $this->source), "html", null, true);
            yield "\">
      ";
            // line 49
            if (((($context["post_format"] ?? null) == "video") || ((($context["post_format"] ?? null) == "audio") && ($context["gva_iframe"] ?? null)))) {
                // line 50
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null), 50, $this->source));
                yield "
      ";
            } elseif (((            // line 51
($context["post_format"] ?? null) == "gallery") && CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 51))) {
                // line 52
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                yield "
      ";
            } else {
                // line 54
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                yield "
      ";
            }
            // line 55
            yield "  
    </div>

    <div class=\"post-content\">
      ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 59, $this->source), "html", null, true);
            yield "
         <h1";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 60, $this->source), "html", null, true);
            yield "</h1>
      ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
            yield "         
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            yield "</span><span class=\"line\">/</span><span class=\"post-created\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 63), 63, $this->source), "medium"), "html", null, true);
            yield " </span>
      </div>
      
      ";
            // line 66
            if (($context["display_submitted"] ?? null)) {
                // line 67
                yield "        <div class=\"node__meta hidden\">
          ";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 68, $this->source), "html", null, true);
                yield "
          <span";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 69, $this->source), "html", null, true);
                yield ">
            ";
                // line 70
                yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 71
                yield "          </span>
          ";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 72, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 75
            yield "
      <div";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            yield ">
        ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 77, $this->source), "field_image", "field_post_category", "field_post_format", "field_post_type", "field_post_embed", "field_post_gallery", "comment"), "html", null, true);
            yield "
      </div>
      ";
            // line 79
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 79)) {
                // line 80
                yield "        <div id=\"node-single-comment\">
          ";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 83
            yield "  

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label", "attributes", "post_format", "gva_iframe", "title_prefix", "title_attributes", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--article.html.twig";
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
        return array (  226 => 83,  220 => 81,  217 => 80,  215 => 79,  210 => 77,  206 => 76,  203 => 75,  197 => 72,  194 => 71,  192 => 70,  188 => 69,  184 => 68,  181 => 67,  179 => 66,  171 => 63,  166 => 61,  160 => 60,  156 => 59,  150 => 55,  144 => 54,  138 => 52,  136 => 51,  131 => 50,  129 => 49,  125 => 48,  119 => 45,  115 => 43,  104 => 37,  97 => 35,  90 => 31,  84 => 28,  75 => 24,  68 => 22,  61 => 18,  55 => 15,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--article.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15, "trans" => 70);
        static $filters = array("clean_class" => 5, "escape" => 18, "date" => 22, "raw" => 50, "format_date" => 63, "without" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'date', 'raw', 'format_date', 'without'],
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
