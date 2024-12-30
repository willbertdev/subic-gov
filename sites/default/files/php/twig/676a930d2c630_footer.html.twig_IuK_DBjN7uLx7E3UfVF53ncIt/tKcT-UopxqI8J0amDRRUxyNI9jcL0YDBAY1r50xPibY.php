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

/* @gavias_daudo/page/footer.html.twig */
class __TwigTemplate_aebed370a0cdcf2eb0c09d985cecdf6d extends Template
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
        yield "
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 5)) {
            // line 6
            yield "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 18
        yield "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 22)) {
            // line 23
            yield "                <div class=\"footer-first col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 23, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 23, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 27
        yield "
              ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 28)) {
            // line 29
            yield "               <div class=\"footer-second col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 29, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 29, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 33
        yield "
              ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 34)) {
            // line 35
            yield "                <div class=\"footer-third col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 35, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 35, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 39
        yield "
              ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 40)) {
            // line 41
            yield "                 <div class=\"footer-four col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 41, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 41, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 45
        yield "           </div>   
        </div>
    </div>  

    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_footer", [], "any", false, false, true, 49)) {
            // line 50
            yield "     <div class=\"footer-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"after-footer clearfix area\">
                  ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_footer", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
    ";
        }
        // line 62
        yield "
  </div>   

  ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 65)) {
            // line 66
            yield "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            yield "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 74
        yield "
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "footer_first_size", "footer_second_size", "footer_third_size", "footer_four_size"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gavias_daudo/page/footer.html.twig";
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
        return array (  189 => 74,  181 => 69,  176 => 66,  174 => 65,  169 => 62,  159 => 55,  152 => 50,  150 => 49,  144 => 45,  138 => 42,  131 => 41,  129 => 40,  126 => 39,  120 => 36,  113 => 35,  111 => 34,  108 => 33,  102 => 30,  95 => 29,  93 => 28,  90 => 27,  84 => 24,  77 => 23,  75 => 22,  69 => 18,  59 => 11,  52 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gavias_daudo/page/footer.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\page\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
