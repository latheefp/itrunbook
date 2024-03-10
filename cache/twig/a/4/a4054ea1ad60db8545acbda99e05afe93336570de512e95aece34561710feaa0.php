<?php

/* acp_loginrequired.html */
class __TwigTemplate_a4054ea1ad60db8545acbda99e05afe93336570de512e95aece34561710feaa0 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_loginrequired.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_TITLE");
        echo "</h1>

<form id=\"acp_board\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"loginrequired_enabled\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_ENABLED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_ENABLED_EXP");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"loginrequired_enabled\" value=\"1\" id=\"loginrequired_enabled\"";
        // line 10
        if ((isset($context["LOGINREQUIRED_ENABLED"]) ? $context["LOGINREQUIRED_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"loginrequired_enabled\" value=\"0\"";
        // line 11
        if ( !(isset($context["LOGINREQUIRED_ENABLED"]) ? $context["LOGINREQUIRED_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"loginrequired_regex\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_REGEX");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"loginrequired_regex\" value=\"1\" id=\"loginrequired_regex\"";
        // line 17
        if ((isset($context["LOGINREQUIRED_REGEX"]) ? $context["LOGINREQUIRED_REGEX"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"loginrequired_regex\" value=\"0\"";
        // line 18
        if ( !(isset($context["LOGINREQUIRED_REGEX"]) ? $context["LOGINREQUIRED_REGEX"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"loginrequired_exceptions\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_EXCEPTIONS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LOGINREQUIRED_EXCEPTIONS_EXP");
        echo "</span></dt>
\t\t\t<dd><textarea id=\"loginrequired_exceptions\" name=\"loginrequired_exceptions\" rows=\"20\" cols=\"20\" />";
        // line 23
        echo (isset($context["LOGINREQUIRED_EXCEPTIONS"]) ? $context["LOGINREQUIRED_EXCEPTIONS"] : null);
        echo "</textarea></dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t</p>
\t\t";
        // line 32
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>

";
        // line 36
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_loginrequired.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_loginrequired.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  125 => 32,  120 => 30,  116 => 29,  111 => 27,  104 => 23,  97 => 22,  86 => 18,  78 => 17,  72 => 15,  61 => 11,  53 => 10,  45 => 8,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
