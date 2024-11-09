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

/* posting_attach_body.html */
class __TwigTemplate_f673c8bf8ebce39344b2962da6335398 extends \Twig\Template
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
        echo "<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t<div class=\"inner\">

\t<p>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>
\t
\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t<dl>
\t\t<dt><label for=\"fileupload\">";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" maxlength=\"";
        // line 10
        echo ($context["FILESIZE"] ?? null);
        echo "\" value=\"\" class=\"inputbox autowidth\" /> 
\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FILE");
        echo "\" class=\"button2\" onclick=\"upload = true;\" />
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"filecomment\">";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox autowidth\">";
        // line 16
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<div id=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"button2\" value=\"";
        // line 21
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t<div class=\"panel";
        // line 24
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 24))) {
            echo " hidden";
        }
        echo "\" id=\"file-list-container\">
\t\t<div class=\"inner\">
\t\t\t<table class=\"table1 zebra-list fixed-width-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 32
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row\" id=\"attach-row-tpl\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
        echo "\" class=\"button2 hidden file-inline-bbcode\" />&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 41
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
        echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"inputbox\"></textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 59
            echo "\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ATTACH_ID", [], "any", false, false, false, 59);
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "U_VIEW_ATTACHMENT", [], "any", false, false, false, 61);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILENAME", [], "any", false, false, false, 61);
            echo "</a></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
            // line 63
            if (($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null)) {
                echo "<input type=\"button\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
                echo "\" class=\"button2 file-inline-bbcode\" />&nbsp; ";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 64);
            echo "]\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
            echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 69);
            echo "]\" rows=\"1\" cols=\"30\" class=\"inputbox\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILE_COMMENT", [], "any", false, false, false, 69);
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "S_HIDDEN", [], "any", false, false, false, 70);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILESIZE", [], "any", false, false, false, 73);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  190 => 73,  184 => 70,  178 => 69,  167 => 64,  161 => 63,  154 => 61,  148 => 59,  144 => 58,  124 => 41,  120 => 40,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  87 => 24,  81 => 21,  73 => 16,  68 => 15,  61 => 11,  57 => 10,  51 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_attach_body.html", "");
    }
}
