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

/* themes/custom/gavias_daudo/templates/page/html.html.twig */
class __TwigTemplate_4bff85075a45147347f57412c9e27968 extends Template
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
        // line 26
        yield "<!DOCTYPE html>
<html";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <title>";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">

    <js-placeholder token=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">

    ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["links_google_fonts"] ?? null));
        yield "

    ";
        // line 37
        if (($context["customize_css"] ?? null)) {
            // line 38
            yield "      <style type=\"text/css\">
        ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["customize_css"] ?? null));
            yield "
      </style>
    ";
        }
        // line 42
        yield "
    ";
        // line 43
        if (($context["customize_styles"] ?? null)) {
            // line 44
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["customize_styles"] ?? null));
            yield "
    ";
        }
        // line 46
        yield "
  </head>

  ";
        // line 49
        $context["body_classes"] = [((        // line 50
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), (( !        // line 51
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 52
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 53
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass(($context["node_id"] ?? null)))) : (""))];
        // line 56
        yield "
  <body";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 57), "html", null, true);
        yield ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>

    ";
        // line 63
        if (($context["preloader"] ?? null)) {
            yield " 
      <div id=\"gva-preloader\" >
        <div id=\"preloader-inner\" class=\"cssload-container\">
          <div class=\"wait-text\">";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Please wait..."));
            yield " </div> 
          <div class=\"cssload-item cssload-moon\"></div>
        </div>
      </div>
    ";
        }
        // line 70
        yield "  

    ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    
    ";
        // line 77
        if (($context["addon_template"] ?? null)) {
            // line 78
            yield "      <div class=\"permission-save-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["save_customize_permission"] ?? null), "html", null, true);
            yield "\">
         ";
            // line 79
            yield from $this->loadTemplate(($context["addon_template"] ?? null), "themes/custom/gavias_daudo/templates/page/html.html.twig", 79)->unwrap()->yield($context);
            // line 80
            yield "      </div>  
    ";
        }
        // line 82
        yield "    <div id=\"gva-overlay\"></div>
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "placeholder_token", "head_title", "links_google_fonts", "customize_css", "customize_styles", "logged_in", "root_path", "node_type", "node_id", "attributes", "preloader", "page_top", "page", "page_bottom", "addon_template", "save_customize_permission"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/page/html.html.twig";
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
        return array (  171 => 82,  167 => 80,  165 => 79,  160 => 78,  158 => 77,  153 => 75,  149 => 74,  145 => 73,  141 => 72,  137 => 70,  129 => 66,  123 => 63,  117 => 60,  111 => 57,  108 => 56,  106 => 53,  105 => 52,  104 => 51,  103 => 50,  102 => 49,  97 => 46,  91 => 44,  89 => 43,  86 => 42,  80 => 39,  77 => 38,  75 => 37,  70 => 35,  65 => 33,  60 => 31,  56 => 30,  52 => 29,  47 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/page/html.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\page\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "set" => 49, "include" => 79);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 51, "t" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
