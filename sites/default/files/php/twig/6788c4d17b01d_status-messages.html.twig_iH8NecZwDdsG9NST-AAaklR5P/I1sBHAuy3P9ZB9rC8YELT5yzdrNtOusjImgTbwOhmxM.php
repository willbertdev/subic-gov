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

/* themes/custom/gavias_daudo/templates/status-messages.html.twig */
class __TwigTemplate_34476185d321820560d195dd63b3a350 extends Template
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
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "<div data-drupal-messages>
";
        // line 23
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 57
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            yield "  ";
            if (($context["type"] == "status")) {
                yield " ";
                $context["type"] = "info";
                yield " ";
            }
            // line 26
            yield "  ";
            if (($context["type"] == "error")) {
                yield " ";
                $context["type"] = "warning";
                yield " ";
            }
            // line 27
            yield "  ";
            // line 28
            $context["classes"] = ["alert", ("alert-" . $this->sandbox->ensureToStringAllowed(            // line 30
$context["type"], 30, $this->source))];
            // line 33
            yield "  <div role=\"contentinfo\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 33)), 33, $this->source), "html", null, true);
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "role", "aria-label"), "html", null, true);
            yield ">
    ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                yield "      <div role=\"alert\">
    ";
            }
            // line 37
            yield "      ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 37))) {
                // line 38
                yield "        <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 38)), 38, $this->source), "html", null, true);
                yield "</h2>
      ";
            }
            // line 40
            yield "      ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 41
                yield "        <ul class=\"messages__list\">
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    yield "            <li class=\"messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 43, $this->source), "html", null, true);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "        </ul>
      ";
            } else {
                // line 47
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["messages"], 47, $this->source)), "html", null, true);
                yield "
      ";
            }
            // line 49
            yield "    ";
            if (($context["type"] == "error")) {
                // line 50
                yield "      </div>
    ";
            }
            // line 52
            yield "  </div>
  ";
            // line 54
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 54);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  148 => 54,  145 => 52,  141 => 50,  138 => 49,  132 => 47,  128 => 45,  119 => 43,  115 => 42,  112 => 41,  109 => 40,  103 => 38,  100 => 37,  96 => 35,  94 => 34,  87 => 33,  85 => 30,  84 => 28,  82 => 27,  75 => 26,  68 => 25,  64 => 24,  57 => 23,  50 => 57,  48 => 23,  45 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/status-messages.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 24, "if" => 25, "set" => 25);
        static $filters = array("escape" => 33, "without" => 33, "length" => 40, "first" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if', 'set'],
                ['escape', 'without', 'length', 'first'],
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
