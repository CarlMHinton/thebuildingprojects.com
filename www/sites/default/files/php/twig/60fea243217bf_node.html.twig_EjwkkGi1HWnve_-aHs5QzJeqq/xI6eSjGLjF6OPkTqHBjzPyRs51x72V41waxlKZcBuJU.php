<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* node.html.twig */
class __TwigTemplate_2b12518ecf86fac900d85664aef626850d674bdd7b4c680e71e873a71be4ad81 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
            'share_links' => [$this, 'block_share_links'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/node"), "html", null, true);
        echo "
<article";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ">
  <div class=\"node__container\">
    ";
        // line 84
        $this->displayBlock('node_side', $context, $blocks);
        // line 86
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo ">
      <header class=\"node__header\">
        ";
        // line 88
        $this->displayBlock('meta_area', $context, $blocks);
        // line 111
        echo "      </header>
      ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "    </div>
    ";
        // line 116
        $this->displayBlock('share_links', $context, $blocks);
        // line 118
        echo "  </div>
</article>
";
    }

    // line 84
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    ";
    }

    // line 88
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 89, $this->source), "html", null, true);
        echo "
          ";
        // line 90
        if ( !($context["page"] ?? null)) {
            // line 91
            echo "            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
              <a href=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 92, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 92, $this->source), "html", null, true);
            echo "</a>
            </h2>
          ";
        }
        // line 95
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 95, $this->source), "html", null, true);
        echo "
          ";
        // line 96
        if (($context["display_submitted"] ?? null)) {
            // line 97
            echo "            <div class=\"node__meta\">
              ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 98, $this->source), "html", null, true);
            echo "
              <span";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
            echo ">
                ";
            // line 100
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 101
($context["author_name"] ?? null), "@date" =>             // line 103
($context["date"] ?? null), ));
            // line 106
            echo "              </span>
              ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 107, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 110
        echo "        ";
    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 113, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 116
    public function block_share_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "    ";
    }

    public function getTemplateName()
    {
        return "node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 117,  170 => 116,  163 => 113,  159 => 112,  155 => 110,  149 => 107,  146 => 106,  144 => 103,  143 => 101,  139 => 100,  135 => 99,  131 => 98,  128 => 97,  126 => 96,  121 => 95,  113 => 92,  108 => 91,  106 => 90,  101 => 89,  97 => 88,  93 => 85,  89 => 84,  83 => 118,  81 => 116,  78 => 115,  76 => 112,  73 => 111,  71 => 88,  65 => 86,  63 => 84,  58 => 82,  54 => 81,  50 => 80,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "node.html.twig", "themes/contrib/guesthouse_lite/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "block" => 84, "if" => 90, "trans" => 100);
        static $filters = array("clean_class" => 72, "escape" => 80);
        static $functions = array("attach_library" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
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
