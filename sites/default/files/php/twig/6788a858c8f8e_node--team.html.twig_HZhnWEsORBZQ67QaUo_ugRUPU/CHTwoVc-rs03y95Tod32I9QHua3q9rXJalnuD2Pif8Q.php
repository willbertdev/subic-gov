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

/* themes/custom/gavias_daudo/templates/node/node--team.html.twig */
class __TwigTemplate_765e2f5ba05252db4c6c3a0b37b9c337 extends Template
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
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), "clearfix"];
        // line 12
        yield " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            yield " 

  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
      <div class=\"socials-team\">
        ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20)) {
                // line 21
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 22
            yield " 
        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23)) {
                // line 24
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 25
            yield " 
        ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26)) {
                // line 27
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 28
            yield " 
        ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)) {
                // line 30
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 31
            yield " 
      </div>
    </div>
    <div class=\"team-content\">
      <h3 class=\"team-name\"><a href=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source));
            yield "</a></h3>
      <div class=\"team-job\">";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), 36, $this->source));
            yield "</div>
      <div class=\"team-skills\">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                yield "          ";
                $context["skill"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 39), 39, $this->source), "--");
                // line 40
                yield "          ";
                if (((($__internal_compile_0 = ($context["skill"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0["0"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "0", [], "array", false, false, true, 40)) && (($__internal_compile_1 = ($context["skill"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 40)))) {
                    // line 41
                    yield "            <div class=\"team-skill\">
              <div class=\"progress-label\">";
                    // line 42
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["skill"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2["0"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "0", [], "array", false, false, true, 42)), 42, $this->source), "html", null, true);
                    yield "</div>
               <div class=\"progress\">
                 <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 44
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["skill"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array($__internal_compile_3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 44)), 44, $this->source), "html", null, true);
                    yield "%\"><span></span></div>
                 <span class=\"percentage\"><span></span>";
                    // line 45
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["skill"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess && in_array($__internal_compile_4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_4["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 45)), 45, $this->source), "html", null, true);
                    yield "%</span>
              </div>
            </div>
          ";
                }
                // line 48
                yield "  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield " 
      </div>
    </div>
  </div>

";
        } elseif ((        // line 54
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 55
            yield "
<div";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            yield ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "
    </div>
    <div class=\"team-content\">
      <h3 class=\"team-name\"><a href=\"";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 62, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source));
            yield "</a></h3>
      ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63)) {
                yield "   
        <div class=\"team-job\">";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source));
                yield "</div>
      ";
            }
            // line 66
            yield "      <div class=\"socials-team\">
        ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67)) {
                // line 68
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 69
            yield " 
        ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70)) {
                // line 71
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 72
            yield " 
        ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73)) {
                // line 74
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 75
            yield " 
        ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76)) {
                // line 77
                yield "          <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 78
            yield " 
      </div>
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 86
            yield "<!-- Start Display article for detail page -->

<article";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 88), "addClass", ["node-detail"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            yield ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), 92, $this->source));
            yield "</div>
      <div class=\"job\">";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
            yield "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 100
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            yield "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            yield "</div>
            <div class=\"content-inner\">";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            yield "</div>
            <div class=\"socials\">
                ";
            // line 107
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107)) {
                // line 108
                yield "                  <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-facebook\"></i></a>
                ";
            }
            // line 109
            yield " 
                ";
            // line 110
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110)) {
                // line 111
                yield "                  <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_google", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-google\"></i></a>
                ";
            }
            // line 112
            yield " 
                ";
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113)) {
                // line 114
                yield "                  <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-pinterest\"></i></a>
                ";
            }
            // line 115
            yield " 
                ";
            // line 116
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116)) {
                // line 117
                yield "                  <a class=\"gva-social\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                yield "\"><i class=\"fab fa-twitter\"></i></a>
                ";
            }
            // line 118
            yield " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            yield "</div>
            <div class=\"content-inner\">";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            yield "</div>
          </div>
          <div class=\"team-skills margin-top-30\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_team_skills", [], "any", false, false, true, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 127
                yield "              ";
                $context["skill"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 127), 127, $this->source), "--");
                // line 128
                yield "              ";
                if (((($__internal_compile_5 = ($context["skill"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess && in_array($__internal_compile_5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_5["0"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "0", [], "array", false, false, true, 128)) && (($__internal_compile_6 = ($context["skill"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess && in_array($__internal_compile_6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_6["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 128)))) {
                    // line 129
                    yield "                <div class=\"team-skill margin-bottom-10\">
                  <div class=\"progress-label\">";
                    // line 130
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["skill"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess && in_array($__internal_compile_7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_7["0"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "0", [], "array", false, false, true, 130)), 130, $this->source), "html", null, true);
                    yield "</div>
                   <div class=\"progress\">
                     <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 132
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = ($context["skill"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess && in_array($__internal_compile_8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_8["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 132)), 132, $this->source), "html", null, true);
                    yield "%\"><span></span></div>
                     <span class=\"percentage\"><span></span>";
                    // line 133
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = ($context["skill"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess && in_array($__internal_compile_9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_9["1"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "1", [], "array", false, false, true, 133)), 133, $this->source), "html", null, true);
                    yield "%</span>
                  </div>
                </div>
              ";
                }
                // line 136
                yield "  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield " 
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 143
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 143), 143, $this->source), "html", null, true);
            yield ">
      ";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 144, $this->source), "field_team_name", "field_team_contact", "field_team_image", "field_team_skills", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            yield "
    </div>

    <div class=\"team-quote\"> ";
            // line 147
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            yield " </div>

    ";
            // line 149
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 149)) {
                // line 150
                yield "      <div id=\"node-single-comment\">
        ";
                // line 151
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 153
            yield "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 160
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "attributes", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--team.html.twig";
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
        return array (  434 => 160,  425 => 153,  419 => 151,  416 => 150,  414 => 149,  409 => 147,  403 => 144,  399 => 143,  391 => 137,  384 => 136,  377 => 133,  373 => 132,  368 => 130,  365 => 129,  362 => 128,  359 => 127,  355 => 126,  349 => 123,  345 => 122,  339 => 118,  333 => 117,  331 => 116,  328 => 115,  322 => 114,  320 => 113,  317 => 112,  311 => 111,  309 => 110,  306 => 109,  300 => 108,  298 => 107,  293 => 105,  289 => 104,  282 => 100,  275 => 96,  269 => 93,  265 => 92,  258 => 88,  254 => 86,  244 => 78,  238 => 77,  236 => 76,  233 => 75,  227 => 74,  225 => 73,  222 => 72,  216 => 71,  214 => 70,  211 => 69,  205 => 68,  203 => 67,  200 => 66,  195 => 64,  191 => 63,  185 => 62,  179 => 59,  173 => 56,  170 => 55,  168 => 54,  161 => 49,  154 => 48,  147 => 45,  143 => 44,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  125 => 38,  120 => 36,  114 => 35,  108 => 31,  102 => 30,  100 => 29,  97 => 28,  91 => 27,  89 => 26,  86 => 25,  80 => 24,  78 => 23,  75 => 22,  69 => 21,  67 => 20,  62 => 18,  55 => 14,  51 => 12,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--team.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14, "for" => 38);
        static $filters = array("clean_class" => 4, "escape" => 18, "e" => 35, "split" => 39, "t" => 104, "without" => 144);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'split', 't', 'without'],
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
