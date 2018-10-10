<?php

/* @threedi_tpotm/tpotm.html */
class __TwigTemplate_5c15dd9b9abf6a597a3c4c50feb3302b1438c4f74f36fc4549e6d0946bd899b5 extends Twig_Template
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
        if (($context["S_TPOTM"] ?? null)) {
            // line 2
            echo "
\t<h3>
\t";
            // line 4
            if (($context["S_TPOTM_HALL"] ?? null)) {
                // line 5
                echo "\t\t<a href=\"";
                echo ($context["U_TPOTM_HALL"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CAT");
                echo "</a>
\t";
            } else {
                // line 7
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CAT");
                echo "
\t";
            }
            // line 9
            echo "\t</h3>

\t<p>
\t";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_NOW");
            echo "
\t\t";
            // line 13
            if (($context["S_TPOTM_AVATAR"] ?? null)) {
                // line 14
                echo "\t\t\t<a href=\"";
                echo ($context["U_TPOTM_AVATAR_URL"] ?? null);
                echo "\" class=\"header-avatar\">";
                echo ($context["TPOTM_AVATAR"] ?? null);
                echo "</a>
\t\t";
            }
            // line 16
            echo "
\t\t<b>";
            // line 17
            echo ($context["TPOTM_NAME"] ?? null);
            echo "</b>

\t\t";
            // line 19
            if (($context["S_TPOTM_AVAILABLE"] ?? null)) {
                // line 20
                echo "\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_POST");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_MONTH");
                echo "
\t\t";
            }
            // line 22
            echo "
\t\t";
            // line 23
            if (($context["S_IS_RHEA"] ?? null)) {
                // line 24
                echo "\t\t\t&nbsp;<i class=\"icon fa-question-circle-o fa-fw\" aria-hidden=\"true\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_NO_EXPLAIN");
                    echo "\"";
                }
                echo " ></i>
\t\t";
            } else {
                // line 26
                echo "\t\t\t&nbsp;<img src=\"";
                echo ($context["TPOTM_ICON_STATS"] ?? null);
                echo "\" class=\"icon icon-tpotm-stats\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_NO_EXPLAIN");
                    echo "\"";
                }
                echo " >
\t\t";
            }
            // line 28
            echo "\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CACHE");
            echo "
\t</p>

";
        }
    }

    public function getTemplateName()
    {
        return "@threedi_tpotm/tpotm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  96 => 26,  82 => 24,  80 => 23,  77 => 22,  70 => 20,  68 => 19,  63 => 17,  60 => 16,  52 => 14,  50 => 13,  46 => 12,  41 => 9,  35 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@threedi_tpotm/tpotm.html", "");
    }
}
