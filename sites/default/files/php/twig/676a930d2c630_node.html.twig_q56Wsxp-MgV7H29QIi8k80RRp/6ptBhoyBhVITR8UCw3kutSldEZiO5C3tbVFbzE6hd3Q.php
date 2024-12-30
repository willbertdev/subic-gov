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

/* core/themes/claro/templates/classy/content/node.html.twig */
class __TwigTemplate_4a3e4cf8a7da086f857b9e3814ae9b9a extends Template
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
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : (""))];
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("claro/classy.node"), "html", null, true);
        yield "
<article";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        yield ">

  ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 77, $this->source), "html", null, true);
        yield "
  ";
        // line 78
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 79
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 79, $this->source), "html", null, true);
            yield ">
      <a href=\"";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 80, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 80, $this->source), "html", null, true);
            yield "</a>
    </h2>
  ";
        }
        // line 83
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 83, $this->source), "html", null, true);
        yield "

  ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            yield "    <footer class=\"node__meta\">
      ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 87, $this->source), "html", null, true);
            yield "
      <div";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__submitted"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            yield ">
        ";
            // line 89
            yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 90
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 90, $this->source), "html", null, true);
            yield "
      </div>
    </footer>
  ";
        }
        // line 94
        yield "
  <div";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 95), 95, $this->source), "html", null, true);
        yield ">
    ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 96, $this->source), "html", null, true);
        yield "
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/classy/content/node.html.twig";
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
        return array (  115 => 96,  111 => 95,  108 => 94,  100 => 90,  98 => 89,  94 => 88,  90 => 87,  87 => 86,  85 => 85,  79 => 83,  71 => 80,  66 => 79,  64 => 78,  60 => 77,  55 => 75,  51 => 74,  49 => 71,  48 => 70,  47 => 69,  46 => 68,  45 => 67,  44 => 65,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/classy/content/node.html.twig", "C:\\laragon\\www\\subic-gov\\core\\themes\\claro\\templates\\classy\\content\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 78, "trans" => 89);
        static $filters = array("clean_class" => 67, "escape" => 74);
        static $functions = array("attach_library" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library'],
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
