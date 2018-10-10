<?php

/* @stevotvr_flair/display_options.html */
class __TwigTemplate_3127021e53f3cf1febfc5bf4d711054f79d74682757e55d53c7a871e874e840c extends Twig_Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DISPLAY_OPTIONS");
        echo "</legend>
\t<dl>
\t\t<dt><label for=\"flair_show_on_profile\">";
        // line 4
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_SHOW_ON_PROFILE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"flair_show_on_profile\" name=\"flair_show_on_profile\" value=\"1\"";
        // line 5
        if (($context["FLAIR_SHOW_ON_PROFILE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label><label><input type=\"radio\" name=\"flair_show_on_profile\" value=\"0\"";
        if ( !($context["FLAIR_SHOW_ON_PROFILE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"flair_show_on_posts\">";
        // line 8
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_SHOW_ON_POSTS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"flair_show_on_posts\" name=\"flair_show_on_posts\" value=\"1\"";
        // line 9
        if (($context["FLAIR_SHOW_ON_POSTS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label><label><input type=\"radio\" name=\"flair_show_on_posts\" value=\"0\"";
        if ( !($context["FLAIR_SHOW_ON_POSTS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t</dl>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  33 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@stevotvr_flair/display_options.html", "");
    }
}
