<?php

/* @threedi_tpotm/event/overall_header_navigation_prepend.html */
class __TwigTemplate_88cdab9a64a85f0571f5e2d48de371bf6d7eaa465985c84425102b4c2cf8a6b5 extends Twig_Template
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
        if ((($context["S_TPOTM_HALL"] ?? null) && ($context["S_TPOTM"] ?? null))) {
            // line 2
            echo "\t";
            if (($context["S_IS_RHEA"] ?? null)) {
                // line 3
                echo "\t\t<li data-last-responsive=\"true\">
\t\t\t<a href=\"";
                // line 4
                echo ($context["U_TPOTM_HALL"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_PAGE");
                echo "\" role=\"menuitem\">
\t\t\t<i class=\"icon fa-trophy fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 5
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_PAGE");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            } else {
                // line 9
                echo "\t\t<li class=\"small-icon icon-tpotm-hall no-bulletin\">
\t\t\t<a href=\"";
                // line 10
                echo ($context["U_TPOTM_HALL"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_PAGE");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_PAGE");
                echo "</a>
\t\t</li>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@threedi_tpotm/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  33 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@threedi_tpotm/event/overall_header_navigation_prepend.html", "");
    }
}
