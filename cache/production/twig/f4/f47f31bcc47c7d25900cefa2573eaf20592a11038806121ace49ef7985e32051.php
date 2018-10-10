<?php

/* settings.html */
class __TwigTemplate_c382592dad554eddf3db4f02aa47488ff09a225b87c8f83d903974d1dbc39ddb extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "settings.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</h1>

";
        // line 7
        if (($context["S_ERROR"] ?? null)) {
            // line 8
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 10
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 13
        echo "
<form id=\"flair_settings\" method=\"post\" action=\"";
        // line 14
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t";
        // line 15
        $this->loadTemplate("@stevotvr_flair/display_options.html", "settings.html", 15)->display($context);
        // line 16
        echo "\t<fieldset>
\t\t<legend>";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t</p>
\t\t";
        // line 22
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 26
        $this->loadTemplate("overall_footer.html", "settings.html", 26)->display($context);
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  72 => 22,  67 => 20,  63 => 19,  58 => 17,  55 => 16,  53 => 15,  49 => 14,  46 => 13,  40 => 10,  36 => 9,  33 => 8,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "");
    }
}
