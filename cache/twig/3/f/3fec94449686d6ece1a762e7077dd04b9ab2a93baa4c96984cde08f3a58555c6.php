<?php

/* acp_ext_details.html */
class __TwigTemplate_3fec94449686d6ece1a762e7077dd04b9ab2a93baa4c96984cde08f3a58555c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_ext_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<a href=\"";
        // line 5
        echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
        echo "\" style=\"float: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("BACK");
        echo "</a>

\t<h1>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t";
        // line 9
        if ((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
            // line 10
            echo "\t<div class=\"";
            if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
                echo "successbox";
            } else {
                echo "errorbox";
            }
            echo "\">
\t\t<p>";
            // line 11
            echo (isset($context["UP_TO_DATE_MSG"]) ? $context["UP_TO_DATE_MSG"] : null);
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
\t";
        } elseif ((        // line 13
(isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 0)) {
            // line 14
            echo "\t<div class=\"errorbox notice\">
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
            echo "</p>
\t\t<p>";
            // line 16
            echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
            echo "</p>
\t\t<p><a href=\"";
            // line 17
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
\t";
        } elseif ((        // line 19
(isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 1)) {
            // line 20
            echo "\t<div class=\"errorbox notice\">
\t\t<p>";
            // line 21
            echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
            echo "</p>
\t</div>
\t";
        }
        // line 24
        echo "
\t<fieldset>
\t\t<legend>";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS");
        echo "</legend>
\t\t";
        // line 27
        if ((isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null)) {
            // line 28
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_display_name\">";
            // line 30
            echo (isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null);
            echo "</strong></dd>
\t\t</dl>
\t\t";
        }
        // line 33
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("CLEAN_NAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong id=\"meta_name\">";
        // line 35
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 37
        if ((isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null)) {
            // line 38
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("DESCRIPTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_description\">";
            // line 40
            echo (isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 43
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("VERSION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_version\">";
        // line 45
        echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
        echo "</span></dd>
\t\t</dl>
\t\t";
        // line 47
        if ((isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null)) {
            // line 48
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("HOMEPAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_homepage\"><a href=\"";
            // line 50
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "\">";
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "</a></strong></dd>
\t\t</dl>
\t\t";
        }
        // line 53
        echo "\t\t";
        if ((isset($context["META_TIME"]) ? $context["META_TIME"] : null)) {
            // line 54
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_time\">";
            // line 56
            echo (isset($context["META_TIME"]) ? $context["META_TIME"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 59
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("LICENSE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_license\">";
        // line 61
        echo (isset($context["META_LICENSE"]) ? $context["META_LICENSE"] : null);
        echo "</span></dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 65
        if (((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) &&  !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null))) {
            // line 66
            echo "\t<fieldset>
\t\t<legend>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</legend>
\t\t";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                // line 69
                echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 71
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 72
                echo $this->getAttribute($context["updates_available"], "current", array());
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
                // line 74
                if ($this->getAttribute($context["updates_available"], "download", array())) {
                    // line 75
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 76
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_LATEST");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 77
                    echo $this->getAttribute($context["updates_available"], "download", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD");
                    echo " ";
                    echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                    echo " ";
                    echo (isset($context["LATEST_VERSION"]) ? $context["LATEST_VERSION"] : null);
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 80
                echo "\t\t\t";
                if ($this->getAttribute($context["updates_available"], "announcement", array())) {
                    // line 81
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 82
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 83
                    echo $this->getAttribute($context["updates_available"], "announcement", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 86
                echo "\t\t</fieldset>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t</fieldset>
\t";
        }
        // line 90
        echo "
\t";
        // line 91
        if (((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null) || (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null))) {
            // line 92
            echo "\t<fieldset>
\t\t<legend>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("REQUIREMENTS");
            echo "</legend>
\t\t";
            // line 94
            if ((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null)) {
                // line 95
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHPBB_FAIL"]) ? $context["META_REQUIRE_PHPBB_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("PHPBB_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_phpbb\">";
                // line 97
                echo (isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 100
            echo "\t\t";
            if ((isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null)) {
                // line 101
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHP_FAIL"]) ? $context["META_REQUIRE_PHP_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("PHP_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_php\">";
                // line 103
                echo (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 106
            echo "\t</fieldset>
\t";
        }
        // line 108
        echo "
\t<fieldset>
\t\t<legend>";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("AUTHOR_INFORMATION");
        echo "</legend>
\t\t";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "meta_authors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
            // line 112
            echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("AUTHOR_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 115
            echo $this->getAttribute($context["meta_authors"], "AUTHOR_NAME", array());
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 117
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array())) {
                // line 118
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 119
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_EMAIL");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"mailto:";
                // line 120
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array());
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array());
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 123
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array())) {
                // line 124
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_HOMEPAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                // line 126
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array());
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array());
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 129
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", array())) {
                // line 130
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 131
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_ROLE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 132
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", array());
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 135
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t</fieldset>

";
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_details.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 139,  438 => 137,  431 => 135,  425 => 132,  420 => 131,  417 => 130,  414 => 129,  406 => 126,  401 => 125,  398 => 124,  395 => 123,  387 => 120,  382 => 119,  379 => 118,  377 => 117,  372 => 115,  367 => 114,  363 => 112,  359 => 111,  355 => 110,  351 => 108,  347 => 106,  341 => 103,  336 => 102,  329 => 101,  326 => 100,  320 => 97,  315 => 96,  308 => 95,  306 => 94,  302 => 93,  299 => 92,  297 => 91,  294 => 90,  290 => 88,  283 => 86,  275 => 83,  271 => 82,  268 => 81,  265 => 80,  253 => 77,  249 => 76,  246 => 75,  244 => 74,  239 => 72,  234 => 71,  230 => 69,  226 => 68,  222 => 67,  219 => 66,  217 => 65,  210 => 61,  205 => 60,  202 => 59,  196 => 56,  191 => 55,  188 => 54,  185 => 53,  177 => 50,  172 => 49,  169 => 48,  167 => 47,  162 => 45,  157 => 44,  154 => 43,  148 => 40,  143 => 39,  140 => 38,  138 => 37,  133 => 35,  128 => 34,  125 => 33,  119 => 30,  114 => 29,  111 => 28,  109 => 27,  105 => 26,  101 => 24,  95 => 21,  92 => 20,  90 => 19,  83 => 17,  79 => 16,  75 => 15,  72 => 14,  70 => 13,  61 => 11,  52 => 10,  50 => 9,  45 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
