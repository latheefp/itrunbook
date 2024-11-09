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

/* posting_buttons.html */
class __TwigTemplate_bc11b5fc365352eada08d5aa35f2ff81 extends \Twig\Template
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
<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 5)) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_NAME", [], "any", false, false, false, 11);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 31
            echo "\t\t\t,cb_";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 31);
            echo ": '";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "A_BBCODE_HELPLINE", [], "any", false, false, false, 31);
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}

// ]]>
</script>
";
        // line 52
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 53
        echo "
";
        // line 54
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 55
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 62
            // line 63
            echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2 bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
            // line 66
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP");
            echo "\" />
\t";
            // line 67
            if (($context["S_BBCODE_QUOTE"] ?? null)) {
                // line 68
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP");
                echo "\" />
\t";
            }
            // line 70
            echo "\t<input type=\"button\" class=\"button2 bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
            // line 71
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_LISTITEM_HELP");
            echo "\" />
\t";
            // line 74
            if (($context["S_BBCODE_IMG"] ?? null)) {
                // line 75
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP");
                echo "\" />
\t";
            }
            // line 77
            echo "\t";
            if (($context["S_LINKS_ALLOWED"] ?? null)) {
                // line 78
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP");
                echo "\" />
\t";
            }
            // line 80
            echo "\t";
            if (($context["S_BBCODE_FLASH"] ?? null)) {
                // line 81
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_D_HELP");
                echo "\" />
\t";
            }
            // line 83
            echo "\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 86
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 87
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                // line 88
                echo "\t\t\t<option value=\"150\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 89
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                    // line 90
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 92
                echo "\t\t";
            }
            // line 93
            echo "\t</select>
\t<input type=\"button\" class=\"button2 bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            // line 94
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP");
            echo "\" />

\t";
            // line 96
            // line 97
            echo "
\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 99
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG_CLEAN", [], "any", false, false, false, 99);
                echo "\" name=\"addbbcode";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 99);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 99);
                echo "\" onclick=\"bbstyle(";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 99);
                echo ")\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 99);
                echo "\" />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "</div>
";
            // line 102
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 102,  339 => 101,  322 => 99,  318 => 98,  315 => 97,  314 => 96,  307 => 94,  304 => 93,  301 => 92,  295 => 90,  293 => 89,  288 => 88,  286 => 87,  282 => 86,  278 => 85,  274 => 84,  269 => 83,  263 => 81,  260 => 80,  254 => 78,  251 => 77,  245 => 75,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  226 => 70,  220 => 68,  218 => 67,  214 => 66,  210 => 65,  206 => 64,  203 => 63,  202 => 62,  193 => 57,  189 => 55,  187 => 54,  184 => 53,  170 => 52,  161 => 46,  154 => 42,  143 => 33,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  56 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_buttons.html", "");
    }
}
