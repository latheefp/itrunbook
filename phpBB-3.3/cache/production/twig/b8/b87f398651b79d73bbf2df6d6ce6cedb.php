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

/* viewforum_body.html */
class __TwigTemplate_f4884e97f424f31ef3b4a97aa83ddc10 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
                }
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 29
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 30
                echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                // line 31
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t</div>
";
            }
            // line 34
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 37))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 38
            echo "\t<div class=\"action-bar top\">

\t";
            // line 40
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 41
                echo "\t\t<div class=\"buttons\">
\t\t\t";
                // line 42
                // line 43
                echo "
\t\t\t<a href=\"";
                // line 44
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button icon-button ";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t";
                // line 45
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_NEW_TOPIC");
                }
                // line 46
                echo "\t\t\t</a>

\t\t\t";
                // line 48
                // line 49
                echo "\t\t</div>
\t";
            }
            // line 51
            echo "
\t";
            // line 52
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 53
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 54
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 56
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 57
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 58
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</a>
\t\t\t\t";
                // line 59
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 64
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 66
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 66)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 67
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 68
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 68))) {
                // line 69
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 69)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 70
                echo "\t\t";
            } else {
                // line 71
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 73
            echo "\t</div>

\t</div>
";
        }
        // line 77
        echo "
";
        // line 78
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 79
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 82
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 86
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 87
                echo "
\t\t<form action=\"";
                // line 88
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 94
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 98
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 99
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 102
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 104
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 105
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 111
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 121
            echo "
";
        }
        // line 123
        echo "
";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 124));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 125
            echo "
\t";
            // line 126
            if (( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 126) &&  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 126))) {
                // line 127
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 131
            echo "
\t";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 132) ||  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 132))) {
                // line 133
                echo "\t\t<div class=\"forumbg";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 133) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 133) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 133)))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt";
                // line 138
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_TOPICS");
                } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 138) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 138) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 138)))) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 139
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 140
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 141
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 147
            echo "
\t\t<li class=\"row";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 148) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 148)) {
                echo " global-announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 148)) {
                echo " announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_STICKY", [], "any", false, false, false, 148)) {
                echo " sticky";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 148)) {
                echo " reported";
            }
            echo "\">
\t\t\t<dl class=\"icon ";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 149);
            echo "\">
\t\t\t\t<dt";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 150) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 150);
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 150);
            echo "\">
\t\t\t\t\t";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 151) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 151);
                echo "\" class=\"icon-link\"></a>";
            }
            // line 152
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 153
            // line 154
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 154) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 154);
                echo "\">";
                echo ($context["NEWEST_POST_IMG"] ?? null);
                echo "</a> ";
            }
            echo "<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 154);
            echo "\" class=\"topictitle\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 154);
            echo "</a>
\t\t\t\t\t\t";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 155) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 155))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 155);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "UNAPPROVED_IMG", [], "any", false, false, false, 155);
                echo "</a> ";
            }
            // line 156
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_DELETED", [], "any", false, false, false, 156)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 156);
                echo "\">";
                echo ($context["DELETED_IMG"] ?? null);
                echo "</a> ";
            }
            // line 157
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 157)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 157);
                echo "\">";
                echo ($context["REPORTED_IMG"] ?? null);
                echo "</a>";
            }
            echo "<br />

\t\t\t\t\t\t";
            // line 159
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 160
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 161
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 161);
                echo " &laquo; <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 161);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 161);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 162) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 162)))) {
                    echo "<br />";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 162);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 162);
                    echo "</a>";
                }
                // line 163
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 164
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 164)) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 164);
                    echo "</strong></span>";
                }
                // line 165
                echo "\t\t\t\t\t\t";
            }
            // line 166
            echo "
\t\t\t\t\t\t";
            // line 167
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 167))) {
                // line 168
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 171)) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 172)) {
                        echo "<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 172);
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 173
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 173)) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 174
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 175);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 175);
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 177
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 181
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 183
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_HAS_POLL", [], "any", false, false, false, 183)) {
                echo ($context["POLL_IMG"] ?? null);
                echo " ";
            }
            // line 184
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 184)) {
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 184);
                echo " ";
            }
            // line 185
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 185);
            echo " &raquo; ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 185);
            echo "
\t\t\t\t\t\t\t";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 186) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 186)))) {
                echo " &raquo; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 186);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 186);
                echo "</a>";
            }
            // line 187
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 189
            // line 190
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 192);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 193);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 194
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo " </dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 194);
            echo "
\t\t\t\t\t";
            // line 195
            if ( !($context["S_IS_BOT"] ?? null)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 195);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo ($context["LAST_POST_IMG"] ?? null);
                echo "</a> ";
            }
            echo "<br />";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 195);
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>

\t";
            // line 200
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_LAST_ROW", [], "any", false, false, false, 200)) {
                // line 201
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 205
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 207
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 208
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 210
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "
";
        // line 216
        if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 217
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_FORUM_ACTION"] ?? null);
            echo "\">
\t\t<fieldset class=\"display-options\">
\t";
            // line 219
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 220
                echo "\t\t\t<label>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_TOPICS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t\t<label>";
                // line 221
                echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t\t<label>";
                // line 222
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 223
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" class=\"button2\" />
\t";
            }
            // line 225
            echo "\t\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 229
        echo "
";
        // line 230
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 230)) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 231
            echo "\t<div class=\"action-bar bottom\">
\t\t";
            // line 232
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 233
                echo "\t\t\t<div class=\"buttons\">
\t\t\t\t";
                // line 234
                // line 235
                echo "
\t\t\t\t<a href=\"";
                // line 236
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button icon-button ";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t";
                // line 237
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_NEW_TOPIC");
                }
                // line 238
                echo "\t\t\t\t</a>

\t\t\t\t";
                // line 240
                // line 241
                echo "\t\t\t</div>
\t\t";
            }
            // line 243
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 245
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 245)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 246
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 247
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 247))) {
                // line 248
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 248)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 249
                echo "\t\t\t";
            } else {
                // line 250
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 252
            echo "\t\t</div>
\t</div>
";
        }
        // line 255
        echo "
";
        // line 256
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 256)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 257
        echo "
";
        // line 258
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 259
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 260
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 261
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 264
        echo "
";
        // line 265
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 266
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 267
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rules", [], "any", false, false, false, 268));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo twig_get_attribute($this->env, $this->source, $context["rules"], "RULE", [], "any", false, false, false, 268);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 271
        echo "
";
        // line 272
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 272)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  973 => 272,  970 => 271,  956 => 268,  952 => 267,  949 => 266,  947 => 265,  944 => 264,  938 => 261,  926 => 260,  923 => 259,  921 => 258,  918 => 257,  906 => 256,  903 => 255,  898 => 252,  892 => 250,  889 => 249,  876 => 248,  874 => 247,  869 => 246,  861 => 245,  857 => 243,  853 => 241,  852 => 240,  848 => 238,  842 => 237,  826 => 236,  823 => 235,  822 => 234,  819 => 233,  817 => 232,  814 => 231,  812 => 230,  809 => 229,  803 => 225,  798 => 223,  794 => 222,  788 => 221,  780 => 220,  778 => 219,  772 => 217,  770 => 216,  767 => 215,  756 => 210,  752 => 208,  749 => 207,  743 => 205,  737 => 201,  735 => 200,  717 => 195,  709 => 194,  703 => 193,  697 => 192,  693 => 190,  692 => 189,  688 => 187,  678 => 186,  669 => 185,  663 => 184,  658 => 183,  654 => 181,  649 => 178,  643 => 177,  633 => 175,  631 => 174,  625 => 173,  618 => 172,  615 => 171,  611 => 170,  607 => 168,  605 => 167,  602 => 166,  599 => 165,  590 => 164,  587 => 163,  575 => 162,  561 => 161,  558 => 160,  556 => 159,  544 => 157,  535 => 156,  527 => 155,  512 => 154,  511 => 153,  508 => 152,  502 => 151,  491 => 150,  487 => 149,  467 => 148,  464 => 147,  455 => 141,  451 => 140,  447 => 139,  433 => 138,  422 => 133,  420 => 132,  417 => 131,  411 => 127,  409 => 126,  406 => 125,  401 => 124,  398 => 123,  394 => 121,  381 => 111,  376 => 109,  368 => 105,  362 => 104,  356 => 102,  350 => 99,  345 => 98,  328 => 94,  319 => 88,  316 => 87,  314 => 86,  307 => 82,  302 => 79,  300 => 78,  297 => 77,  291 => 73,  285 => 71,  282 => 70,  269 => 69,  267 => 68,  262 => 67,  254 => 66,  250 => 64,  242 => 59,  234 => 58,  228 => 57,  224 => 56,  219 => 54,  216 => 53,  214 => 52,  211 => 51,  207 => 49,  206 => 48,  202 => 46,  196 => 45,  180 => 44,  177 => 43,  176 => 42,  173 => 41,  171 => 40,  167 => 38,  165 => 37,  162 => 36,  148 => 34,  140 => 31,  137 => 30,  135 => 29,  133 => 28,  130 => 27,  124 => 23,  119 => 21,  114 => 20,  106 => 18,  104 => 17,  95 => 14,  93 => 13,  90 => 12,  86 => 10,  72 => 9,  66 => 8,  62 => 6,  60 => 5,  59 => 4,  50 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
