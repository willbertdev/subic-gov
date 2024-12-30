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

/* themes/custom/gavias_daudo/templates/node/node--service.html.twig */
class __TwigTemplate_5236c2f716e45e6e721d41b3db50d345 extends Template
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
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            yield " 
  <div class=\"service-block\">
    <div class=\"box-content\">
       <div class=\"frontend\">
          <div class=\"frontend-content\">
            <div class=\"service-block-content\">
              ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 20)) {
                // line 21
                yield "                <div class=\"service-icon\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                yield "</div>
              ";
            }
            // line 22
            yield "  
              <div class=\"service-content\">
                  <h3 class=\"title\"><a href=\"";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            yield "</a></h3>
                  <div class=\"desc\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "</div>
              </div>
          </div>  
          </div>   
       </div>
       <div class=\"backend\">
          <div class=\"content-be\">
            <div class=\"service-block-content\">
              <div class=\"service-content\">
                <div class=\"service-images lightGallery\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            yield "</div>
                <h3 class=\"title\"><a href=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 35, $this->source), "html", null, true);
            yield "</a></h3>
                <div class=\"readmore\"><a class=\"btn-inline\" href=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            yield "</a></div>
              </div>  
            </div>    
          </div>
       </div>
    </div>
  </div> 

";
        } elseif ((        // line 44
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 45
            yield "
  <div class=\"service-block-2\">      
    <div class=\"service-images lightGallery\">";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            yield "</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
          ";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 50)) {
                // line 51
                yield "            <div class=\"service-icon\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 52
            yield " 
          <div class=\"content-bottom\">
              <h3 class=\"title\"><a href=\"";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 54, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
            yield "</a></h3>
              <div class=\"desc\">";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield "</div>
              <div class=\"read-more\">
              <a class=\"link-readmore btn-inline\" href=\"";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 57, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            yield "</a>
            </div>
          </div>  
       </div>    
    </div>
  </div>

";
        } elseif ((        // line 64
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 65
            yield "
  <div class=\"service-block-3 grid\">  
    <div class=\"service-images\">";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            yield "</div>
    <div class=\"service-content\">
      ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 69)) {
                // line 70
                yield "        <div class=\"service-icon\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "</div>
      ";
            }
            // line 71
            yield "  
      <h3 class=\"title\"><a href=\"";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 72, $this->source), "html", null, true);
            yield "</a></h3>
      <div class=\"read-more\"><a href=\"";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 73, $this->source), "html", null, true);
            yield "\" class=\"btn-inline\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            yield "</a></div>
    </div>
  </div>

";
        } else {
            // line 78
            yield "
<article";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            yield ">
  <div class=\"service-block-singe\">
    <div class=\"service-images-inner\">
      ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_images", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            yield "
      ";
            // line 83
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 83))) {
                // line 84
                yield "          <div class=\"service-icon\"><span class=\"icon\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_service_icon", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                yield "</span></div>
        ";
            }
            // line 86
            yield "    </div>
    <div class=\"post-content\">
      ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 88, $this->source), "html", null, true);
            yield "
         <h1";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            yield "</h1>
      ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            yield "      

      <div";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 92), 92, $this->source), "html", null, true);
            yield ">
        ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 93, $this->source), "field_service_images", "field_service_icon", "comment"), "html", null, true);
            yield "
      </div>
      <div id=\"node-single-comment\">
        <div id=\"comments\">
          ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            yield "
        </div>  
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label", "attributes", "title_prefix", "title_attributes", "title_suffix", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--service.html.twig";
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
        return array (  252 => 97,  245 => 93,  241 => 92,  236 => 90,  230 => 89,  226 => 88,  222 => 86,  216 => 84,  214 => 83,  210 => 82,  204 => 79,  201 => 78,  191 => 73,  185 => 72,  182 => 71,  176 => 70,  174 => 69,  169 => 67,  165 => 65,  163 => 64,  151 => 57,  146 => 55,  140 => 54,  136 => 52,  130 => 51,  128 => 50,  122 => 47,  118 => 45,  116 => 44,  103 => 36,  97 => 35,  93 => 34,  81 => 25,  75 => 24,  71 => 22,  65 => 21,  63 => 20,  54 => 14,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--service.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14);
        static $filters = array("clean_class" => 5, "escape" => 21, "t" => 36, "render" => 83, "without" => 93);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'render', 'without'],
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
