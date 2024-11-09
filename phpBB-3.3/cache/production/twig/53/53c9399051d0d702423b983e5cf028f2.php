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

/* viewtopic_topic_tools.html */
class __TwigTemplate_16cf087c2ca17f4990f983c9604fc5ed extends \Twig\Template
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
        if (( !($context["S_IS_BOT"] ?? null) && (((((($context["U_WATCH_TOPIC"] ?? null) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if (($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo ($context["U_WATCH_TOPIC"] ?? null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo ($context["S_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo ($context["S_BOOKMARK_TOGGLE"] ?? null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo ($context["S_BOOKMARK_TOPIC"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (($context["U_BUMP_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo ($context["U_BUMP_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if (($context["U_EMAIL_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo ($context["U_EMAIL_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if (($context["U_PRINT_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo ($context["U_PRINT_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            // line 22
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 22,  133 => 21,  122 => 20,  111 => 19,  100 => 18,  88 => 15,  85 => 14,  82 => 13,  62 => 10,  53 => 9,  50 => 8,  49 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_topic_tools.html", "");
    }
}
