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

/* themes/custom/gavias_daudo/templates/navigation/menu--main.html.twig */
class __TwigTemplate_9c0aecfb0984edd1d0acade4226a856c extends Template
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
        // line 21
        yield "
<div class=\"gva-navigation\">
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 29, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        // line 73
        yield "</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 31
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "  ";
            $macros["menus"] = $this;
            // line 33
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 34
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "      <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["gva_menu gva_menu_main"], "method", false, false, true, 35), "html", null, true);
                    yield ">
      
    ";
                } else {
                    // line 38
                    yield "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 40
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    yield "      ";
                    $context["class_mega_menu"] = "";
                    // line 42
                    yield "      ";
                    $context["class_columns"] = "";
                    // line 43
                    yield "      ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 43), "gva_layout", [], "any", false, false, true, 43) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 44
                        yield "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        yield " 
      ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "attributes", [], "any", false, false, true, 45), "gva_layout", [], "any", false, false, true, 45) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        yield "   
        ";
                        // line 46
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        yield " 
        ";
                        // line 47
                        $context["class_columns"] = Twig\Extension\CoreExtension::join(["menu-columns-", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "gva_layout_columns", [], "any", false, false, true, 47)], "");
                        // line 48
                        yield "      ";
                    }
                    yield "    
      ";
                    // line 50
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 52
$context["item"], "is_expanded", [], "any", false, false, true, 52)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 53
$context["item"], "is_collapsed", [], "any", false, false, true, 53)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("menu-item--active-trail") : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 55
$context["item"], "attributes", [], "any", false, false, true, 55), "gva_class", [], "any", false, false, true, 55),                     // line 56
($context["class_mega_menu"] ?? null),                     // line 57
($context["class_columns"] ?? null)];
                    // line 60
                    yield "      <li ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 60), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 60), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true);
                    yield ">
        <a data-link_id=\"link-";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                    yield "\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "html", null, true);
                    yield "\">";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "gva_icon", [], "any", false, false, true, 61) != "")) {
                        yield " <i class=\"fa ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "gva_icon", [], "any", false, false, true, 61), "html", null, true);
                        yield "\"></i>";
                    }
                    // line 62
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62)), "html", null, true);
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 62) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "gva_layout", [], "any", false, false, true, 62) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        yield "<span class=\"icaret nav-plus fas fa-chevron-down\"></span>";
                    }
                    // line 63
                    yield "        </a>
        ";
                    // line 64
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 64), "gva_layout", [], "any", false, false, true, 64) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 65
                        yield "          <div class=\"sub-menu\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gva_block_content", [], "any", false, false, true, 65));
                        yield "</div>
        ";
                    }
                    // line 66
                    yield "  
        ";
                    // line 67
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 67)) {
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 67, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 67), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                    }
                    // line 68
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/navigation/menu--main.html.twig";
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
        return array (  188 => 70,  181 => 68,  177 => 67,  174 => 66,  168 => 65,  166 => 64,  163 => 63,  157 => 62,  147 => 61,  142 => 60,  140 => 57,  139 => 56,  138 => 55,  137 => 54,  136 => 53,  135 => 52,  134 => 50,  129 => 48,  127 => 47,  123 => 46,  119 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  100 => 40,  96 => 38,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  66 => 31,  58 => 73,  53 => 29,  50 => 24,  48 => 23,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/navigation/menu--main.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 40, "set" => 41);
        static $filters = array("escape" => 35, "join" => 47, "without" => 60, "trim" => 62, "raw" => 65);
        static $functions = array("random" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'without', 'trim', 'raw'],
                ['random'],
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
