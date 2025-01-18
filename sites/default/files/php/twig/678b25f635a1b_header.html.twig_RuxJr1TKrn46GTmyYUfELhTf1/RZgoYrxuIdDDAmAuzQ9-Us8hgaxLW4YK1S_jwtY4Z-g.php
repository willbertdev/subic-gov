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

/* themes/custom/gavias_daudo/templates/page/header.html.twig */
class __TwigTemplate_21816e75749bac0868b520115682488f extends Template
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
        yield "<header id=\"header\" class=\"header-default\">
  
  ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            yield "    <div class=\"topbar\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"topbar-content-inner clearfix";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 8)) {
                yield " has-language-block";
            }
            yield "\"> 
              <div class=\"topbar-content\">";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 9), "html", null, true);
            yield "</div>
              ";
            // line 10
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 10)) {
                // line 11
                yield "                <div class=\"language-region\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 11), "html", null, true);
                yield "</div>
              ";
            }
            // line 13
            yield "            </div>  
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        yield "
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        yield "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 22
            yield "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            yield "  ";
        }
        yield "  

   <div class=\"header-main ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_sticky"] ?? null), "html", null, true);
        yield "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 31)) {
            // line 32
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 32), "html", null, true);
            yield "
                  ";
        }
        // line 34
        yield "                </div>
                
                <div class=\"header-inner clearfix \">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 43)) {
            // line 44
            yield "                              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 44), "html", null, true);
            yield "
                            ";
        }
        // line 46
        yield "                          </div>

                          ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 48)) {
            // line 49
            yield "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 50), "html", null, true);
            yield "
                            </div>
                          ";
        }
        // line 53
        yield "                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>

                        ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 61)) {
            // line 62
            yield "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fas fa-search\"></i></span>
                            <div class=\"search-content\">  
                              ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 65), "html", null, true);
            yield "
                            </div>  
                          </div>
                        ";
        }
        // line 69
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "quick_side", [], "any", false, false, true, 69)) {
            // line 70
            yield "                          <div class=\"quick-side-icon d-none d-lg-block d-xl-block\">
                            <div class=\"icon\"><a href=\"#\"><span class=\"qicon fas fa-bars\"></span></a></div>
                          </div>
                        ";
        }
        // line 73
        yield "  

                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "sticky_menu"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/page/header.html.twig";
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
        return array (  183 => 73,  177 => 70,  174 => 69,  167 => 65,  162 => 62,  160 => 61,  150 => 53,  144 => 50,  141 => 49,  139 => 48,  135 => 46,  129 => 44,  127 => 43,  116 => 34,  110 => 32,  108 => 31,  99 => 25,  93 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  74 => 13,  68 => 11,  66 => 10,  62 => 9,  56 => 8,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/page/header.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\page\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 20);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
