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

/* navbar_header.html */
class __TwigTemplate_9dfbd609ea2667ffe667a46605a5f04d12bdbee59bbecc407e18991786872c70 extends \Twig\Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 6
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 11
        // line 12
        echo "
\t\t\t\t\t";
        // line 13
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 15
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo " 
\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                // line 22
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 25
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 27
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 32
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 34
            echo "\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 37
        // line 38
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 42
        // line 43
        echo "\t\t<li class=\"small-icon icon-faq\" ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo "><a href=\"";
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 44
        // line 45
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 46
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            echo "<li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 47
        echo "
\t";
        // line 48
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 49
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 50
            // line 51
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 52
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 56
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 57
            echo "\t
\t\t\t\t\t\t";
            // line 58
            // line 59
            echo "\t
\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 60
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 61
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</a></li>
\t
\t\t\t\t\t\t";
            // line 63
            // line 64
            echo "\t
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 66
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 70
            // line 71
            echo "\t\t</li>
\t\t";
            // line 72
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 73
                echo "\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 74
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 77
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 78
                echo "\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 79
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 80
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 80)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 81
                echo "\t\t\t</li>
\t\t";
            }
            // line 83
            echo "\t";
        } else {
            // line 84
            echo "\t\t<li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t";
            // line 85
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 86
                echo "\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a></li>
\t\t";
            }
            // line 88
            echo "\t\t";
            // line 89
            echo "\t";
        }
        // line 90
        echo "\t</ul>

\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 93
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 94
        echo "\t\t";
        // line 95
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 96
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 96);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 97
        echo "\t\t\t";
        // line 98
        echo "\t\t\t<span class=\"crumb\"";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 98);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "navlinks", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 100
            echo "\t\t\t\t";
            // line 101
            echo "\t\t\t\t<span class=\"crumb\"";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 101);
            if (twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 101)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 101);
            }
            echo "><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 101);
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 101);
            echo "</span></a></span>
\t\t\t\t";
            // line 102
            // line 103
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t";
        // line 105
        echo "\t\t</li>
\t\t";
        // line 106
        // line 107
        echo "
\t\t";
        // line 108
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 109
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 111
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 111,  424 => 109,  422 => 108,  419 => 107,  418 => 106,  415 => 105,  413 => 104,  407 => 103,  406 => 102,  393 => 101,  391 => 100,  387 => 99,  378 => 98,  376 => 97,  366 => 96,  363 => 95,  361 => 94,  358 => 93,  353 => 90,  350 => 89,  348 => 88,  340 => 86,  338 => 85,  329 => 84,  326 => 83,  322 => 81,  310 => 80,  302 => 79,  297 => 78,  294 => 77,  284 => 74,  281 => 73,  279 => 72,  276 => 71,  275 => 70,  264 => 66,  260 => 64,  259 => 63,  250 => 61,  242 => 60,  239 => 59,  238 => 58,  235 => 57,  227 => 56,  214 => 52,  211 => 51,  210 => 50,  203 => 49,  201 => 48,  198 => 47,  187 => 46,  176 => 45,  175 => 44,  160 => 43,  159 => 42,  153 => 38,  152 => 37,  148 => 35,  145 => 34,  136 => 33,  128 => 32,  125 => 31,  123 => 30,  120 => 29,  113 => 27,  106 => 25,  99 => 24,  92 => 22,  87 => 21,  79 => 19,  76 => 18,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  57 => 11,  50 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
