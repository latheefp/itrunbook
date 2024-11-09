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

/* jumpbox.html */
class __TwigTemplate_c81ce41aee90b19734bcc0826033a2ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif (        // line 4
($context["S_VIEWFORUM"] ?? null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif (        // line 6
($context["SEARCH_TOPIC"] ?? null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif (        // line 8
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if (($context["S_DISPLAY_JUMPBOX"] ?? null)) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            if ( !($context["S_IN_MCP"] ?? null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "jumpbox_forums", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_ID", [], "any", false, false, false, 22) !=  -1)) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "LINK", [], "any", false, false, false, 23);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_NAME", [], "any", false, false, false, 23);
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 31,  158 => 26,  152 => 25,  135 => 23,  132 => 22,  128 => 21,  122 => 17,  114 => 16,  104 => 15,  95 => 14,  92 => 13,  90 => 12,  87 => 11,  75 => 9,  73 => 8,  64 => 7,  62 => 6,  53 => 5,  51 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox.html", "");
    }
}
