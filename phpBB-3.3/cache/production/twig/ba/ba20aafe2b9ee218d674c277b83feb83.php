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

/* attachment.html */
class __TwigTemplate_88b9fe0278e6f10bf43cd413bb4e844d extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "_file", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 4
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_DENIED", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t<p>[";
                echo twig_get_attribute($this->env, $this->source, $context["_file"], "DENIED_MESSAGE", [], "any", false, false, false, 5);
                echo "]</p>
\t";
            } else {
                // line 7
                echo "\t\t";
                // line 8
                echo "
\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_THUMBNAIL", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "THUMB_IMAGE", [], "any", false, false, false, 11);
                    echo "\" class=\"postimage\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 11);
                    echo " (";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "FILESIZE", [], "any", false, false, false, 11);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "SIZE_LANG", [], "any", false, false, false, 11);
                    echo ") ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 11);
                    echo "\" /></a></dt>
\t\t\t";
                    // line 12
                    if (twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 12)) {
                        echo "<dd> ";
                        echo twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 12);
                        echo "</dd>";
                    }
                    // line 13
                    echo "\t\t</dl>
\t\t";
                }
                // line 15
                echo "
\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_IMAGE", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_INLINE_LINK", [], "any", false, false, false, 18);
                    echo "\" class=\"postimage\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 18);
                    echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t\t";
                    // line 19
                    if (twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 19)) {
                        echo "<dd><em>";
                        echo twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 19);
                        echo "</em></dd>";
                    }
                    // line 20
                    echo "\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 20);
                    echo " (";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "FILESIZE", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "SIZE_LANG", [], "any", false, false, false, 20);
                    echo ") ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 20);
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 23
                echo "
\t\t";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_FILE", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["_file"], "UPLOAD_ICON", [], "any", false, false, false, 26)) {
                        echo twig_get_attribute($this->env, $this->source, $context["_file"], "UPLOAD_ICON", [], "any", false, false, false, 26);
                        echo " ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 26);
                    echo "</a></dt>
\t\t\t";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 27)) {
                        echo "<dd><em>";
                        echo twig_get_attribute($this->env, $this->source, $context["_file"], "COMMENT", [], "any", false, false, false, 27);
                        echo "</em></dd>";
                    }
                    // line 28
                    echo "\t\t\t<dd>(";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "FILESIZE", [], "any", false, false, false, 28);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "SIZE_LANG", [], "any", false, false, false, 28);
                    echo ") ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 28);
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 31
                echo "
\t\t";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_WM_FILE", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->
\t\t\t<object width=\"320\" height=\"285\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 34);
                    echo "\">
\t\t\t\t<param name=\"url\" value=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 35);
                    echo "\" />
\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t<param name=\"src\" value=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 44);
                    echo "\" />
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t\t<object width=\"320\" height=\"285\" type=\"video/x-ms-wmv\" data=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 46);
                    echo "\">
\t\t\t\t\t\t<param name=\"src\" value=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 47);
                    echo "\" />
\t\t\t\t\t\t<param name=\"controller\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t\t</object>
\t\t\t\t<!--<![endif]-->
\t\t\t</object>

\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 61
$context["_file"], "S_FLASH_FILE", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "WIDTH", [], "any", false, false, false, 62);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "HEIGHT", [], "any", false, false, false, 62);
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_VIEW_LINK", [], "any", false, false, false, 63);
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_VIEW_LINK", [], "any", false, false, false, 69);
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "WIDTH", [], "any", false, false, false, 69);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "HEIGHT", [], "any", false, false, false, 69);
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 71
$context["_file"], "S_QUICKTIME_FILE", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "\t\t\t<object id=\"qtstream_";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 72);
                    echo "\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0\" width=\"320\" height=\"285\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 73);
                    echo "\" />
\t\t\t\t<param name=\"controller\" value=\"true\" />
\t\t\t\t<param name=\"autoplay\" value=\"false\" />
\t\t\t\t<param name=\"type\" value=\"video/quicktime\" />
\t\t\t\t<embed name=\"qtstream_";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 77);
                    echo "\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 77);
                    echo "\" pluginspage=\"http://www.apple.com/quicktime/download/\" enablejavascript=\"true\" controller=\"true\" width=\"320\" height=\"285\" type=\"video/quicktime\" autoplay=\"false\"></embed>
\t\t\t</object>
\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 79
$context["_file"], "S_RM_FILE", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t<object id=\"rmstream_";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 80);
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"200\" height=\"50\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 81);
                    echo "\" />
\t\t\t\t<param name=\"autostart\" value=\"false\" />
\t\t\t\t<param name=\"controls\" value=\"ImageWindow\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 84);
                    echo "\" />
\t\t\t\t<param name=\"prefetch\" value=\"false\" />
\t\t\t\t<embed name=\"rmstream_";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 86);
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 86);
                    echo "\" width=\"0\" height=\"0\" autostart=\"false\" controls=\"ImageWindow\" console=\"ctrls_";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 86);
                    echo "\" prefetch=\"false\"></embed>
\t\t\t</object>
\t\t\t<br />
\t\t\t<object id=\"ctrls_";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 89);
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"0\" height=\"36\">
\t\t\t\t<param name=\"controls\" value=\"ControlPanel\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 91);
                    echo "\" />
\t\t\t\t<embed name=\"ctrls_";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 92);
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" width=\"200\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 92);
                    echo "\"></embed>
\t\t\t</object>

\t\t\t<script type=\"text/javascript\">
\t\t\t// <![CDATA[
\t\t\t\tif (document.rmstream_";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 97);
                    echo ".GetClipWidth)
\t\t\t\t{
\t\t\t\t\twhile (!document.rmstream_";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 99);
                    echo ".GetClipWidth())
\t\t\t\t\t{
\t\t\t\t\t}

\t\t\t\t\tvar width = document.rmstream_";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 103);
                    echo ".GetClipWidth();
\t\t\t\t\tvar height = document.rmstream_";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 104);
                    echo ".GetClipHeight();

\t\t\t\t\tdocument.rmstream_";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 106);
                    echo ".width = width;
\t\t\t\t\tdocument.rmstream_";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 107);
                    echo ".height = height;
\t\t\t\t\tdocument.ctrls_";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 108);
                    echo ".width = width;
\t\t\t\t}
\t\t\t// ]]>
\t\t\t</script>
\t\t";
                }
                // line 113
                echo "
\t\t";
                // line 114
                if ((((twig_get_attribute($this->env, $this->source, $context["_file"], "S_WM_FILE", [], "any", false, false, false, 114) || twig_get_attribute($this->env, $this->source, $context["_file"], "S_RM_FILE", [], "any", false, false, false, 114)) || twig_get_attribute($this->env, $this->source, $context["_file"], "S_FLASH_FILE", [], "any", false, false, false, 114)) || twig_get_attribute($this->env, $this->source, $context["_file"], "S_QUICKTIME_FILE", [], "any", false, false, false, 114))) {
                    // line 115
                    echo "\t\t\t<p>
\t\t\t";
                    // line 116
                    if (twig_get_attribute($this->env, $this->source, $context["_file"], "S_QUICKTIME_FILE", [], "any", false, false, false, 116)) {
                        echo "<a href=\"#\" onclick=\"play_qt_file(document.qtstream_";
                        echo twig_get_attribute($this->env, $this->source, $context["_file"], "ATTACH_ID", [], "any", false, false, false, 116);
                        echo "); return false;\">[ ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PLAY_QUICKTIME_FILE");
                        echo " ]</a> ";
                    }
                    // line 117
                    echo "\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "U_DOWNLOAD_LINK", [], "any", false, false, false, 117);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "DOWNLOAD_NAME", [], "any", false, false, false, 117);
                    echo "</a> [ ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "FILESIZE", [], "any", false, false, false, 117);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "SIZE_LANG", [], "any", false, false, false, 117);
                    echo " | ";
                    echo twig_get_attribute($this->env, $this->source, $context["_file"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 117);
                    echo " ]</p>
\t\t";
                }
                // line 119
                echo "
\t\t";
                // line 120
                // line 121
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 123,  375 => 121,  374 => 120,  371 => 119,  357 => 117,  349 => 116,  346 => 115,  344 => 114,  341 => 113,  333 => 108,  329 => 107,  325 => 106,  320 => 104,  316 => 103,  309 => 99,  304 => 97,  294 => 92,  290 => 91,  285 => 89,  275 => 86,  270 => 84,  264 => 81,  259 => 80,  257 => 79,  250 => 77,  243 => 73,  238 => 72,  236 => 71,  227 => 69,  218 => 63,  211 => 62,  209 => 61,  192 => 47,  188 => 46,  183 => 44,  171 => 35,  167 => 34,  164 => 33,  162 => 32,  159 => 31,  148 => 28,  142 => 27,  131 => 26,  128 => 25,  126 => 24,  123 => 23,  110 => 20,  104 => 19,  98 => 18,  95 => 17,  93 => 16,  90 => 15,  86 => 13,  80 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  48 => 5,  45 => 4,  41 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "attachment.html", "");
    }
}
