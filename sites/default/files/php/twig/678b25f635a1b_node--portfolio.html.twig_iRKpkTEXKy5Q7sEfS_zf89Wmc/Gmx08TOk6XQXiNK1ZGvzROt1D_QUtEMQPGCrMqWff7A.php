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

/* themes/custom/gavias_daudo/templates/node/node--portfolio.html.twig */
class __TwigTemplate_926e890ca84b1987de9b54984c68ff35 extends Template
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
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 12
        yield "
<!-- Start Display article for teaser page -->

";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 16
            yield "
  <div class=\"portfolio-v1\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        ";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 20), "html", null, true);
            yield "
        <a class=\"link\" href=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <div class=\"category\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 25), "html", null, true);
            yield "</div>
          <h2 class=\"title\"> <a href=\"";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a> </h2>
          <div class=\"portfolio-hover\">
            <div class=\"desc\">";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 28), "html", null, true);
            yield "</div>
            <div class=\"action\"><a class=\"btn-inline\" href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            yield "</a></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

";
        } elseif ((        // line 36
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 37
            yield "  ";
            $context["body"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 37), "html", null, true);
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "
  <div class=\"portfolio-v2\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-height\"></div>
      <div class=\"content-inner\">
        <span class=\"node-index\">0";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["gva_node_index"] ?? null), "html", null, true);
            yield "</span>
        <div class=\"portfolio-information\">
          <div class=\"category\">";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 45), "html", null, true);
            yield "</div>
          <h2 class=\"title\"><a href=\"";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a> </h2>
          <div class=\"portfolio-hover\">
            <div class=\"desc\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 48), "html", null, true);
            yield "</div>
            <div class=\"action\"><a class=\"btn-theme\" href=\"";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            yield "</a></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

";
        } elseif ((        // line 56
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 57
            yield "    ";
            $context["body"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 57), "html", null, true);
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "    <div class=\"portfolio-v3 portfolio-item\">      
      <div class=\"images\">
        ";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 60), "html", null, true);
            yield "
        <div class=\"read-more\"><a class=\"link\" href=\"";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            yield "</span></a></div>
      </div>
      <div class=\"portfolio-content\">
        <div class=\"content-inner\">
          <div class=\"category\">";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 65), "html", null, true);
            yield "</div>
          <div class=\"portfolio-content-inner\">
            <h3 class=\"title\"><a href=\"";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a></h3>    
            <div class=\"desc\">";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(($context["body"] ?? null)), "html", null, true);
            yield "</div>
          </div>    
        </div>
      </div>
    </div>

";
        } elseif ((        // line 74
($context["view_mode"] ?? null) == "teaser_4")) {
            // line 75
            yield "    <div class=\"portfolio-v4\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 78), "html", null, true);
            yield "
        <a class=\"link\" href=\"";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a> </h2>
          <div class=\"category\">";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 84), "html", null, true);
            yield "</div>
        </div>    
      </div>
    </div>
  </div>
";
        } else {
            // line 90
            yield "
<!-- Start Display article for detail page -->
";
            // line 92
            $context["xcol"] = "col-md-12 col-sm-12 col-xs-12";
            // line 93
            if (($context["informations"] ?? null)) {
                // line 94
                yield "  ";
                $context["xcol"] = "col-md-6 col-sm-12 col-xs-12";
            }
            // line 95
            yield " 

<article";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 97), "addClass", ["node-detail"], "method", false, false, true, 97), "html", null, true);
            yield ">
  <div class=\"post-block portfolio-single\">
    
    <div class=\"row\">
      <div class=\"";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["xcol"] ?? null), "html", null, true);
            yield "\"> 
        <div class=\"post-thumbnail\">
          ";
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 103)) {
                // line 104
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 104), "html", null, true);
                yield " 
          ";
            }
            // line 106
            yield "        </div>
      </div>
      ";
            // line 108
            if (($context["informations"] ?? null)) {
                // line 109
                yield "      <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["xcol"] ?? null), "html", null, true);
                yield "\">
        <div class=\"portfolio-informations\">
          ";
                // line 111
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["informations"] ?? null));
                yield "
        </div>
      </div>  
      ";
            }
            // line 115
            yield "    </div> 
     
    <div class=\"post-content\">
      
      ";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
            yield "
         <h1";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 120), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h1>
      ";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
            yield "         
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 123), "html", null, true);
            yield "</span><span class=\"line\"></span><span class=\"post-created\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield " </span>
      </div>
      
      <div";
            // line 126
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 126), "html", null, true);
            yield ">
        ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_portfolio_images", "field_portfolio_tags", "field_portfolio_information", "comment"), "html", null, true);
            yield "
      </div>

      ";
            // line 130
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 130)) {
                // line 131
                yield "        <div id=\"node-single-comment\">
          ";
                // line 132
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 132), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 135
            yield "
    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label", "gva_node_index", "informations", "attributes", "title_prefix", "title_attributes", "title_suffix", "date", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--portfolio.html.twig";
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
        return array (  332 => 135,  326 => 132,  323 => 131,  321 => 130,  315 => 127,  311 => 126,  303 => 123,  298 => 121,  292 => 120,  288 => 119,  282 => 115,  275 => 111,  269 => 109,  267 => 108,  263 => 106,  257 => 104,  255 => 103,  250 => 101,  243 => 97,  239 => 95,  235 => 94,  233 => 93,  231 => 92,  227 => 90,  218 => 84,  212 => 83,  205 => 79,  201 => 78,  196 => 75,  194 => 74,  185 => 68,  179 => 67,  174 => 65,  165 => 61,  161 => 60,  157 => 58,  151 => 57,  149 => 56,  137 => 49,  133 => 48,  126 => 46,  122 => 45,  117 => 43,  110 => 38,  104 => 37,  102 => 36,  90 => 29,  86 => 28,  79 => 26,  75 => 25,  68 => 21,  64 => 20,  58 => 16,  56 => 15,  51 => 12,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--portfolio.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15);
        static $filters = array("clean_class" => 4, "escape" => 20, "t" => 29, "striptags" => 68, "raw" => 111, "without" => 127);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'striptags', 'raw', 'without'],
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
