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

/* themes/custom/gavias_daudo/templates/navigation/pager.html.twig */
class __TwigTemplate_f75ff6a582cf87af7c2ee548b71a064a extends Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            yield "  <nav class=\"pager\">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 36
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 36)) {
                // line 37
                yield "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38), "href", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38), "attributes", [], "any", false, false, true, 38), 38, $this->source), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 40), "text", [], "any", true, true, true, 40)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 40), "text", [], "any", false, false, true, 40), 40, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 44
            yield "      ";
            // line 45
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 45)) {
                // line 46
                yield "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 47), "href", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), 47, $this->source), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 49), "text", [], "any", true, true, true, 49)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 49), "text", [], "any", false, false, true, 49), 49, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 53
            yield "      ";
            // line 54
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 54)) {
                // line 55
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 57
            yield "      ";
            // line 58
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 58));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 59
                yield "        <li class=\"pager__item";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                yield "\">
          ";
                // line 60
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 61
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 62
                    yield "          ";
                } else {
                    // line 63
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 64
                    yield "          ";
                }
                // line 65
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 65, $this->source), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), 65, $this->source), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">
              ";
                // line 67
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                yield "
            </span>";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 69, $this->source), "html", null, true);
                // line 70
                yield "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "      ";
            // line 74
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 74)) {
                // line 75
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 77
            yield "      ";
            // line 78
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 78)) {
                // line 79
                yield "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "href", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "attributes", [], "any", false, false, true, 80), 80, $this->source), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 82
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", true, true, true, 82)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", false, false, true, 82), 82, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 86
            yield "      ";
            // line 87
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 87)) {
                // line 88
                yield "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "href", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "attributes", [], "any", false, false, true, 89), 89, $this->source), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", true, true, true, 91)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", false, false, true, 91), 91, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 95
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/navigation/pager.html.twig";
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
        return array (  224 => 95,  217 => 91,  213 => 90,  205 => 89,  202 => 88,  199 => 87,  197 => 86,  190 => 82,  186 => 81,  178 => 80,  175 => 79,  172 => 78,  170 => 77,  166 => 75,  163 => 74,  161 => 73,  153 => 70,  151 => 69,  147 => 67,  137 => 65,  134 => 64,  131 => 63,  128 => 62,  125 => 61,  123 => 60,  118 => 59,  113 => 58,  111 => 57,  107 => 55,  104 => 54,  102 => 53,  95 => 49,  91 => 48,  83 => 47,  80 => 46,  77 => 45,  75 => 44,  68 => 40,  64 => 39,  56 => 38,  53 => 37,  50 => 36,  46 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/navigation/pager.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\navigation\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "for" => 58, "set" => 61);
        static $filters = array("escape" => 38, "t" => 38, "without" => 38, "default" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'default'],
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
