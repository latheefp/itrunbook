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

/* plupload.html */
class __TwigTemplate_009183ce8a38cbf6abecb042ee293176 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("BYTES_SHORT"), "js");
        echo "',
\t\t'kb': '";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("KB"), "js");
        echo "',
\t\t'mb': '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("MB"), "js");
        echo "',
\t\t'gb': '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("GB"), "js");
        echo "',
\t\t'tb': '";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("TB"), "js");
        echo "',
\t\t'Add Files': '";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES"), "js");
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"), "js");
        echo "',
\t\t'Close': '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_CLOSE"), "js");
        echo "',
\t\t'Drag files here.': '";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DRAG"), "js");
        echo "',
\t\t'Duplicate file error.': '";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DUPLICATE_ERROR"), "js");
        echo "',
\t\t'File: %s': '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILE"), "js");
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILE_DETAILS"), "js");
        echo "',
\t\t'File count error.': '";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ERR_FILE_COUNT"), "js");
        echo "',
\t\t'File extension error.': '";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_EXTENSION_ERROR"), "js");
        echo "',
\t\t'File size error.': '";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SIZE_ERROR"), "js");
        echo "',
\t\t'File too large:': '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"), "js");
        echo "',
\t\t'Filename': '";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILENAME"), "js");
        echo "',
\t\t'Generic error.': '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_GENERIC_ERROR"), "js");
        echo "',
\t\t'HTTP Error.': '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_HTTP_ERROR"), "js");
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_IMAGE_FORMAT"), "js");
        echo "',
\t\t'Init error.': '";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_INIT_ERROR"), "js");
        echo "',
\t\t'IO error.': '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_IO_ERROR"), "js");
        echo "',
\t\t'Invalid file extension:': '";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"), "js");
        echo "',
\t\t'N/A': '";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_NOT_APPLICABLE"), "js");
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"), "js");
        echo "',
\t\t'Security error.': '";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SECURITY_ERROR"), "js");
        echo "',
\t\t'Select files': '";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SELECT_FILES"), "js");
        echo "',
\t\t'Size': '";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SIZE"), "js");
        echo "',
\t\t'Start Upload': '";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_START_UPLOAD"), "js");
        echo "',
\t\t'Start uploading queue': '";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_START_CURRENT_UPLOAD"), "js");
        echo "',
\t\t'Status': '";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STATUS"), "js");
        echo "',
\t\t'Stop Upload': '";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STOP_UPLOAD"), "js");
        echo "',
\t\t'Stop current upload': '";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"), "js");
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ERR_UPLOAD_URL"), "js");
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_UPLOADED"), "js");
        echo "',
\t\t'%d files queued': '";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILES_QUEUED"), "js");
        echo "',
\t\t'%s already present in the queue.': '";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ALREADY_QUEUED"), "js");
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 45
        echo ($context["S_PLUPLOAD_URL"] ?? null);
        echo "',
\t\tmax_file_size: '";
        // line 46
        echo ($context["FILESIZE"] ?? null);
        echo "b',
\t\tchunk_size: '";
        // line 47
        echo ($context["CHUNK_SIZE"] ?? null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 49
        echo ($context["FILTERS"] ?? null);
        echo "],
\t\t";
        // line 50
        echo ($context["S_RESIZE"] ?? null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ADD_FILE"), "js");
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ERROR"), "js");
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("TOO_MANY_ATTACHMENTS"), "js");
        echo "',
\t},
\torder: '";
        // line 62
        echo ($context["ATTACH_ORDER"] ?? null);
        echo "',
\tmaxFiles: ";
        // line 63
        echo ($context["MAX_ATTACHMENTS"] ?? null);
        echo ",
\tdata: ";
        // line 64
        echo ($context["S_ATTACH_DATA"] ?? null);
        echo ",
}
//]]>
</script>
";
        // line 68
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/plupload/plupload.full.min.js");
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
        $this->env->get_assets_bag()->add_script($asset);        // line 69
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/javascript/plupload.js");
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
        $this->env->get_assets_bag()->add_script($asset);    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 69,  250 => 68,  243 => 64,  239 => 63,  235 => 62,  230 => 60,  226 => 59,  217 => 53,  211 => 50,  207 => 49,  202 => 47,  198 => 46,  194 => 45,  187 => 41,  183 => 40,  179 => 39,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plupload.html", "");
    }
}
