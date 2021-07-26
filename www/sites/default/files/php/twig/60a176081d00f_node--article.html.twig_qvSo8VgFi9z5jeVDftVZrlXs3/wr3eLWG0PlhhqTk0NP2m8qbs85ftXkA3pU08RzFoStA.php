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

/* themes/contrib/guesthouse_lite/templates/node--article.html.twig */
class __TwigTemplate_c5e0f60d9eb59577a3d87ccd346c7258ced92eb005d583b459d8e9455d3beddd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/guesthouse_lite/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 11
            echo "    <div class=\"node__side\">
      ";
            // line 12
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 12)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 12))) {
                // line 13
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/reading-time"), "html", null, true);
                    echo "
          <div class=\"reading-time\">
            ";
                    // line 16
                    if ((($context["minutes"] ?? null) < 1)) {
                        // line 17
                        echo "              ";
                        echo t("1<div class=\"reading-time__text\">min read</div>", array());
                        // line 20
                        echo "            ";
                    } else {
                        // line 21
                        echo "              ";
                        echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                         // line 22
($context["minutes"] ?? null), ));
                        // line 24
                        echo "            ";
                    }
                    // line 25
                    echo "          </div>
        ";
                }
                // line 27
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 27)) {
                    // line 28
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/node-side-affix"), "html", null, true);
                    echo "
          <div id=\"affix\">
        ";
                }
                // line 31
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 31)) {
                    // line 32
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/font-resize"), "html", null, true);
                    echo "
          <div class=\"content-font-settings\">
              <div class=\"font-resize\">
                <a href=\"#\" id=\"decfont\">A-</a>
                <a href=\"#\" id=\"incfont\">A+</a>
              </div>
          </div>
        ";
                }
                // line 40
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 40)) {
                    // line 41
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/post-progress"), "html", null, true);
                    echo "
          <div class=\"post-progress\">
            <div class=\"post-progress__value\"></div>
            <div class=\"post-progress__text\">";
                    // line 44
                    echo t("read", array());
                    echo "</div>
            <div class=\"post-progress__bar\"></div>
          </div>
        ";
                }
                // line 48
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 48)) {
                    // line 49
                    echo "          </div>
        ";
                }
                // line 51
                echo "      ";
            }
            // line 52
            echo "    </div>
  ";
        }
    }

    // line 55
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 56, $this->source), "html", null, true);
        echo "
  ";
        // line 57
        if ( !($context["page"] ?? null)) {
            // line 58
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 59, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 59, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 62
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 62, $this->source), "html", null, true);
        echo "
  ";
        // line 63
        if (($context["display_submitted"] ?? null)) {
            // line 64
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 64, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 66
        echo "  ";
        if ((($context["display_submitted"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 66))) {
            // line 67
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 69
            if (($context["display_submitted"] ?? null)) {
                // line 70
                echo "            <li class=\"inline-list__item\">
              <span";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                echo ">
                ";
                // line 72
                echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                // line 73
                echo "                <span class=\"node__submitted-date\">
                  ";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 74), 74, $this->source), "custom", "M d, Y"]), "html", null, true);
                echo "
                </span>
              </span>
              ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 77, $this->source), "html", null, true);
                echo "
            </li>
          ";
            }
            // line 80
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 80) && (($context["comment_count"] ?? null) > 0))) {
                // line 81
                echo "            <li class=\"inline-list__item\">
              <span class=\"comments-count__counter\">
                <i class=\"fa fa-comment-o\"></i>
                ";
                // line 84
                echo \Drupal::translation()->formatPlural(abs(                // line 86
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 87
($context["comment_count"] ?? null), ));
                // line 89
                echo "              </span>
            </li>
          ";
            }
            // line 92
            echo "      </ul>
    </div>
  ";
        }
    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guesthouse_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 99, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/guesthouse_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 101,  252 => 99,  246 => 97,  242 => 96,  235 => 92,  230 => 89,  228 => 87,  227 => 86,  226 => 84,  221 => 81,  218 => 80,  212 => 77,  206 => 74,  203 => 73,  201 => 72,  197 => 71,  194 => 70,  192 => 69,  188 => 67,  185 => 66,  179 => 64,  177 => 63,  172 => 62,  164 => 59,  159 => 58,  157 => 57,  152 => 56,  148 => 55,  142 => 52,  139 => 51,  135 => 49,  132 => 48,  125 => 44,  118 => 41,  115 => 40,  103 => 32,  100 => 31,  93 => 28,  90 => 27,  86 => 25,  83 => 24,  81 => 22,  79 => 21,  76 => 20,  73 => 17,  71 => 16,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/guesthouse_lite/templates/node--article.html.twig", "/var/www/thebuildingprojects.com/www/themes/contrib/guesthouse_lite/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 17);
        static $filters = array("escape" => 14, "format_date" => 74, "without" => 99);
        static $functions = array("attach_library" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'without'],
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
