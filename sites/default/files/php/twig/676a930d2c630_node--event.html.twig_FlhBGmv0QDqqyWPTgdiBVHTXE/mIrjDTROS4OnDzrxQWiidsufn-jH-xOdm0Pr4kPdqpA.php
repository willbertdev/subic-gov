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

/* themes/custom/gavias_daudo/templates/node/node--event.html.twig */
class __TwigTemplate_13452630fc8827d5c621f34d0ea68460 extends Template
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
        $context["classes"] = ["node", "node-detail", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("node--unpublished") : ("")), ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source)))) : ("")), "clearfix"];
        // line 13
        $context["conBody"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "
<!-- Start Display article for teaser page -->
";
        // line 18
        if ((($context["view_mode"] ?? null) == "teaser")) {
            yield " 
  <article";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            yield ">
    <div class=\"event-block\">
      <div class=\"event-image text-center\">
        ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_image", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            yield "
        <div class=\"date\"> 
          <span class=\"day\">";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_start", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "j")));
            yield "</span><span class=\"month\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_start", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "F")));
            yield "</span>
        </div>
      </div>
      <div class=\"event-content\">  
        <div class=\"event-info\">
          <div class=\"title\"><a href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 29, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 29, $this->source), "html", null, true);
            yield "</a></div>
          <div class=\"event-meta\">
            <span class=\"event-time\"> ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_time", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield " </span>&nbsp;-&nbsp;<span class=\"event-address\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_address", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield " </span> 
          </div>
          <div class=\"body\">";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["conBody"] ?? null), 33, $this->source)), "html", null, true);
            yield "</div>
        </div>
      </div>  
    </div>   
  </article>  

";
        } elseif ((        // line 39
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 40
            yield "
  <div class=\"event-block-2\">
    <div class=\"event-image text-center\">
      ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_image", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            yield " 
      <div class=\"event-date\">
        <span class=\"date\">";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["event_date"] ?? null), "day", [], "any", false, false, true, 45), 45, $this->source)));
            yield "</span>
        <span class=\"month\">";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["event_date"] ?? null), "month", [], "any", false, false, true, 46), 46, $this->source)));
            yield "</span>
      </div>
    </div>
    <div class=\"content-inner clearfix\">
      <div class=\"event-content-inner\">
        <div class=\"event-content\">
          <h3";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            yield "><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 52, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            yield "</a></h3>    
          <div class=\"event-meta\">
            <span class=\"event-time\"> ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_time", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            yield " </span>&nbsp;&nbsp;-&nbsp;&nbsp;<span class=\"event-address\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_address", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            yield " </span> 
          </div>
          <div class=\"event-line\"></div>  
          <div class=\"event-description\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["conBody"] ?? null), 57, $this->source)), "html", null, true);
            yield "</div>
        </div>
      </div>
    </div>  
  </div>

";
        } else {
            // line 64
            yield "
<article";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [CoreExtension::getAttribute($this->env, $this->source, ($context["classes"] ?? null), "addClass", ["node-detail"], "method", false, false, true, 65)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
            yield ">
  <div class=\"post-block event-full\">
    <div class=\"post-thumbnail\">
      ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_image", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            yield "
      <div class=\"event-info clearfix\">
        <div class=\"date clearfix\"><i class=\"fa fa-calendar\"></i>";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_start", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            yield " <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-clock-o\"></i></span> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_time", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            yield "</div>
        <div class=\"address clearfix\"><i class=\"fa fa-map-marker\"></i>";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_address", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            yield "</div>
      </div>
    </div>
    <div class=\"post-content\">
      ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 75, $this->source), "html", null, true);
            yield "
         <h1";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            yield "</h1>
      ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 77, $this->source), "html", null, true);
            yield "        
      
      <div";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            yield ">
        ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 80, $this->source), "field_event_image", "field_event_start", "field_event_address", "field_event_time", "field_event_map", "comment"), "html", null, true);
            yield "
      </div>
      <script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js?sensor=true&key=AIzaSyDWg9eU2MO9E0PF1ZMw9sFVJoPVU4Z6s3o\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_uri"] ?? null), 83, $this->source), "html", null, true);
            yield "/vendor/gmap3.js\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_uri"] ?? null), 84, $this->source), "html", null, true);
            yield "/vendor/jquery.ui.map.min.js\"></script>
      <div class=\"map margin-top-30\">
        ";
            // line 86
            $context["link"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_map", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86);
            // line 87
            yield "        <div id=\"map_canvas_event\" class=\"map_canvas\" style=\"width:100%; height:400px;\"></div>
          ";
            // line 88
            $context["style_map"] = "[{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#d3d3d3\"}]},{\"featureType\":\"transit\",\"stylers\":[{\"color\":\"#808080\"},{\"visibility\":\"off\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#b3b3b3\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"weight\":1.8}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#d7d7d7\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ebebeb\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#a7a7a7\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#efefef\"}]},{\"featureType\":\"road\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#696969\"}]},{\"featureType\":\"administrative\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#737373\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#d6d6d6\"}]},{\"featureType\":\"road\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#dadada\"}]}]";
            // line 89
            yield "          <script type=\"text/javascript\">
            jQuery(document).ready(function(\$) {
              var stmapdefault = '";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 91, $this->source), "html", null, true);
            yield "';
              var marker = {position:stmapdefault}
              var content = '";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            yield "<br>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_address", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            yield "';
              jQuery('#map_canvas_event').gmap({
                'scrollwheel':false,
                'zoom': 14,
                'center': stmapdefault,
                'mapTypeId':google.maps.MapTypeId.ROADMAP,
                'styles': ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["style_map"] ?? null), 99, $this->source));
            yield ",
                'callback': function() {
                   var self = this;
                   self.addMarker(marker).click(function(){
                      if(content){
                         self.openInfoWindow({'content': content}, self.instance.markers[0]);
                      }                     
                   });
                },
                panControl: true
              });
            });
          </script>
      </div>
      
      ";
            // line 114
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 114)) {
                // line 115
                yield "        <div id=\"node-single-comment\">
          ";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 118
            yield " 

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "attributes", "url", "label", "event_date", "title_attributes", "title_prefix", "title_suffix", "content_attributes", "theme_uri"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gavias_daudo/templates/node/node--event.html.twig";
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
        return array (  281 => 118,  275 => 116,  272 => 115,  270 => 114,  252 => 99,  241 => 93,  236 => 91,  232 => 89,  230 => 88,  227 => 87,  225 => 86,  220 => 84,  216 => 83,  210 => 80,  206 => 79,  201 => 77,  195 => 76,  191 => 75,  184 => 71,  178 => 70,  173 => 68,  167 => 65,  164 => 64,  154 => 57,  146 => 54,  137 => 52,  128 => 46,  124 => 45,  119 => 43,  114 => 40,  112 => 39,  103 => 33,  96 => 31,  89 => 29,  79 => 24,  74 => 22,  68 => 19,  64 => 18,  60 => 16,  53 => 14,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gavias_daudo/templates/node/node--event.html.twig", "C:\\laragon\\www\\subic-gov\\themes\\custom\\gavias_daudo\\templates\\node\\node--event.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 18);
        static $filters = array("clean_class" => 5, "escape" => 14, "t" => 24, "date" => 24, "striptags" => 33, "without" => 80, "raw" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'date', 'striptags', 'without', 'raw'],
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
