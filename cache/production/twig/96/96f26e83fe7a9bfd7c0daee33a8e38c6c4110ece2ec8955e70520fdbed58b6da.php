<?php

/* @stevotvr_flair/event/memberlist_view_content_append.html */
class __TwigTemplate_49b26c6a835b4742cd130a985e39c8869eb2391a12e69f953aa7f3f1e3e74d56 extends Twig_Template
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
        if (($context["flair"] ?? null)) {
            // line 2
            echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t\t<h3>";
            // line 4
            echo ($context["FLAIR_TITLE"] ?? null);
            echo "</h3>
\t\t\t";
            // line 5
            $this->loadTemplate("@stevotvr_flair/flair_items.html", "@stevotvr_flair/event/memberlist_view_content_append.html", 5)->display($context);
            // line 6
            echo "\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/event/memberlist_view_content_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@stevotvr_flair/event/memberlist_view_content_append.html", "");
    }
}
