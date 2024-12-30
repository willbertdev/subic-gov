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

/* modules/contrib/user_activity_log/templates/user-activity-log-tpl.html.twig */
class __TwigTemplate_f704688f922c8d10e6a8c0962bd128d0 extends Template
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
        // line 15
        yield "
<div class =\"user-activity-log\">
  <ul>
    <li>Total nodes created (";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodes_count"] ?? null), 18, $this->source), "html", null, true);
        yield ")</li>
  </ul>
  <ul>
    <li> Total comment created (";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 21, $this->source), "html", null, true);
        yield ")</li>
  </ul>
  <h3> ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Recent Created Node"));
        yield "</h3>

  <ul>
    ";
        // line 26
        if (Twig\Extension\CoreExtension::testEmpty(($context["list_nodes"] ?? null))) {
            // line 27
            yield "        <li> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No Recent Nodes."));
            yield " </li>
    ";
        }
        // line 29
        yield "
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list_nodes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 31
            yield "      <div class=\"node-list\">
        <li><a href=\"";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield "\">
        ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "</a></li>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
  </ul>

  <h3> Recent Comments</h3>

  <ul>
    ";
        // line 42
        if (Twig\Extension\CoreExtension::testEmpty(($context["list_comments"] ?? null))) {
            // line 43
            yield "        <li> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No Recent Comments."));
            yield " </li>
    ";
        }
        // line 45
        yield "
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list_comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 47
            yield "      <div class=\"node-list\">
        <li> ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Commented on"));
            yield " <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["node"], "uri", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            yield "\">
        ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            yield "</a></li>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "  </ul>

  <a href=\"";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user_activity_log.nodes"));
        yield "\">Show more</a>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["nodes_count", "comment_count", "list_nodes", "list_comments"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/user_activity_log/templates/user-activity-log-tpl.html.twig";
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
        return array (  142 => 54,  138 => 52,  129 => 49,  123 => 48,  120 => 47,  116 => 46,  113 => 45,  107 => 43,  105 => 42,  97 => 36,  88 => 33,  84 => 32,  81 => 31,  77 => 30,  74 => 29,  68 => 27,  66 => 26,  60 => 23,  55 => 21,  49 => 18,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/user_activity_log/templates/user-activity-log-tpl.html.twig", "C:\\laragon\\www\\subic-gov\\modules\\contrib\\user_activity_log\\templates\\user-activity-log-tpl.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "for" => 30);
        static $filters = array("escape" => 18, "t" => 23);
        static $functions = array("path" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't'],
                ['path'],
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
