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

/* posting_editor.html */
class __TwigTemplate_a6a1c63729ae4108603936756517549f extends \Twig\Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->extensions['phpbb\template\twig\extension']->lang("ICON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_ICON");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_icon", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 9);
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 9);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 9);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "S_ICON_CHECKED", [], "any", false, false, false, 9);
                echo " tabindex=\"1\" /><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_IMG", [], "any", false, false, false, 9);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_WIDTH", [], "any", false, false, false, 9);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_HEIGHT", [], "any", false, false, false, 9);
                echo "\" alt=\"\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t";
        // line 23
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            // line 26
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
            // line 28
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 29
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 30
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 30)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 31
                echo "\t";
            }
            // line 32
            echo "\t";
        }
        // line 33
        echo "
\t";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 39
        echo "\t
\t\t";
        // line 40
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 40)))) {
            // line 41
            echo "\t\t\t<strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 43
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "A_SMILEY_CODE", [], "any", false, false, false, 43);
                echo "', true); return false;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_IMG", [], "any", false, false, false, 43);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_WIDTH", [], "any", false, false, false, 43);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_HEIGHT", [], "any", false, false, false, 43);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_CODE", [], "any", false, false, false, 43);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_DESC", [], "any", false, false, false, 43);
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t";
        }
        // line 46
        echo "\t\t";
        if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
            // line 47
            echo "\t\t\t<br /><a href=\"";
            echo ($context["U_MORE_SMILIES"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 49
        echo "\t\t";
        // line 50
        echo "\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 51
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 52
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 52))) {
                echo "<hr />";
            }
            // line 53
            echo "\t\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t\t";
            // line 54
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 55
                echo "\t\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 56
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 57
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t\t";
            }
            // line 59
            echo "\t\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 62
        echo "\t\t";
        // line 63
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 64
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 65
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 66
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 67
            echo "\t\t";
        }
        // line 68
        echo "\t</div>

\t";
        // line 70
        // line 71
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 73
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t</div>

\t";
        // line 76
        // line 77
        echo "\t</fieldset>

";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", [], "any", false, false, false, 79) == 1)) {
            // line 80
            echo "
\t";
            // line 81
            if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
                // line 82
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 85
            echo "
\t";
            // line 86
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 86) == 1))) {
                // line 87
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 90
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 91
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 92
                // line 93
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 94
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 95
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 96
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 103
            echo "
\t";
            // line 104
            if ((( !($context["S_PRIVMSGS"] ?? null) &&  !($context["S_SHOW_DRAFTS"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 104) == 1))) {
                // line 105
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if (($context["SHOW_PANEL"] ?? null)) {
                    echo ($context["SHOW_PANEL"] ?? null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 107
                echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 108
                if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                    // line 109
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 111
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    // line 116
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 117
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t";
                // line 121
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 124
            echo "
\t";
            // line 125
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 125) == 1))) {
                // line 126
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 130
                // line 131
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 132
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 134
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 135
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 137
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 138
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 140
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 141
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 143
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 144
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 146
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 147
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 149
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 150
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                    echo " [";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 152
                echo "
\t\t\t";
                // line 153
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 154
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 156
                echo "
\t\t\t";
                // line 157
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 158
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 159
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_AS");
                    }
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_type", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 160);
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 160);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 160);
                        echo "\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "S_CHECKED", [], "any", false, false, false, 160);
                        echo " />";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "L_TOPIC_TYPE", [], "any", false, false, false, 160);
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 163
                echo "
\t\t\t";
                // line 164
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 165
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 166
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"";
                    // line 167
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 168
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 171
                echo "
\t\t\t";
                // line 172
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 173
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 175
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 176
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 177
                    if ((($context["S_DELETE_ALLOWED"] ?? null) && ($context["S_SOFTDELETE_ALLOWED"] ?? null))) {
                        // line 178
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 180
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 182
                echo "
\t\t\t";
                // line 183
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 184
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 185
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 186
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 189
                echo "\t\t</fieldset>
\t\t";
            }
            // line 191
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 191,  667 => 189,  661 => 186,  656 => 185,  653 => 184,  651 => 183,  648 => 182,  644 => 180,  638 => 178,  636 => 177,  630 => 176,  625 => 175,  621 => 173,  619 => 172,  616 => 171,  610 => 168,  604 => 167,  599 => 166,  596 => 165,  594 => 164,  591 => 163,  568 => 160,  559 => 159,  556 => 158,  554 => 157,  551 => 156,  547 => 154,  545 => 153,  542 => 152,  532 => 150,  529 => 149,  521 => 147,  518 => 146,  510 => 144,  507 => 143,  499 => 141,  496 => 140,  488 => 138,  485 => 137,  477 => 135,  474 => 134,  466 => 132,  463 => 131,  462 => 130,  456 => 126,  454 => 125,  451 => 124,  446 => 121,  444 => 120,  438 => 117,  435 => 116,  432 => 115,  425 => 111,  421 => 109,  419 => 108,  415 => 107,  405 => 105,  403 => 104,  400 => 103,  390 => 96,  381 => 95,  374 => 94,  367 => 93,  366 => 92,  362 => 91,  358 => 90,  353 => 87,  351 => 86,  348 => 85,  343 => 82,  341 => 81,  338 => 80,  336 => 79,  332 => 77,  331 => 76,  317 => 73,  313 => 71,  312 => 70,  308 => 68,  305 => 67,  298 => 66,  289 => 65,  284 => 64,  281 => 63,  279 => 62,  272 => 59,  267 => 57,  263 => 56,  258 => 55,  256 => 54,  251 => 53,  247 => 52,  244 => 51,  241 => 50,  239 => 49,  231 => 47,  228 => 46,  225 => 45,  206 => 43,  202 => 42,  197 => 41,  195 => 40,  192 => 39,  188 => 37,  176 => 36,  173 => 35,  172 => 34,  169 => 33,  166 => 32,  163 => 31,  150 => 30,  146 => 29,  144 => 28,  132 => 26,  127 => 25,  124 => 24,  122 => 23,  119 => 22,  118 => 21,  115 => 20,  109 => 17,  104 => 16,  101 => 15,  99 => 14,  96 => 13,  91 => 10,  68 => 9,  60 => 8,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_editor.html", "");
    }
}
