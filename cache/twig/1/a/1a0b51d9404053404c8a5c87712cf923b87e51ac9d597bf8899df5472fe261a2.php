<?php

/* profile_send_email.txt */
class __TwigTemplate_1a0b51d9404053404c8a5c87712cf923b87e51ac9d597bf8899df5472fe261a2 extends Twig_Template
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
        echo "
Hello ";
        // line 2
        echo (isset($context["TO_USERNAME"]) ? $context["TO_USERNAME"] : null);
        echo ",

The following is an email sent to you by ";
        // line 4
        echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
        echo " via your account on \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". If this message is spam, contains abusive or other comments you find offensive please contact the webmaster of the board at the following address:

";
        // line 6
        echo (isset($context["BOARD_CONTACT"]) ? $context["BOARD_CONTACT"] : null);
        echo "

Include this full email (particularly the headers). Please note that the reply address to this email has been set to that of ";
        // line 8
        echo (isset($context["FROM_USERNAME"]) ? $context["FROM_USERNAME"] : null);
        echo ".

Message sent to you follows
~~~~~~~~~~~~~~~~~~~~~~~~~~~

";
        // line 13
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "profile_send_email.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  39 => 8,  34 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
