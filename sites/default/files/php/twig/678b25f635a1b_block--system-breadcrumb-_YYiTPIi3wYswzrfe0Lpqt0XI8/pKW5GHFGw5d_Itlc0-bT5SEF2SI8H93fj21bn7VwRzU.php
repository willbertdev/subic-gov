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

/* themes/custom/gavias_daudo/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_b9c17fc2e9fec8cd7a49871021d9a3cb extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        $context["title_classes"] = "";
        // line 33
        if ((($context["label"] ?? null) == "")) {
            // line 34
            $context["title_classes"] = "no-title";
        }
        // line 37
        $context["classes"] = ["block gva-block-breadcrumb", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 39))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 40
($context["plugin_id"] ?? null))),         // line 41
($context["title_classes"] ?? null)];
        // line 44
        yield "

<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 48), "html", null, true);
        yield ">
      <div class=\"breadcrumb-style gva-parallax-background\" style=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["custom_style"] ?? null), "html", null, true);
        yield "\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breadcrumb_title"] ?? null), "html", null, true);
        yield " </h2>
            ";
        // line 52
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 57
        yield "          </div> 
        <div class=\"gva-parallax-inner skrollable skrollable-between\" data-bottom-top=\"top: -80%;\" data-top-bottom=\"top: 0%;\"></div>    
      </div> 
    </div>  
  </div>  
</div>  

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "configuration", "plugin_id", "attributes", "custom_style", "breadcrumb_title", "custom_classes", "content_attributes", "content"]);        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "              <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["custom_classes"] ?? null), "html", null, true);
        yield "\">
                <div";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["content block-content"], "method", false, false, true, 54), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "</div>
              </div>  
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/block/block--system-breadcrumb-block.html.twig";
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
        return array (  103 => 54,  98 => 53,  91 => 52,  78 => 57,  76 => 52,  72 => 51,  67 => 49,  63 => 48,  57 => 44,  55 => 41,  54 => 40,  53 => 39,  52 => 37,  49 => 34,  47 => 33,  45 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/block/block--system-breadcrumb-block.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\block\\block--system-breadcrumb-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 33, "block" => 52);
        static $filters = array("clean_class" => 39, "escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
