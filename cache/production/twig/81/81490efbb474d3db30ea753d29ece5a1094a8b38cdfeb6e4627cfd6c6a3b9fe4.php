<?php

/* @threedi_tpotm/event/ucp_prefs_personal_append.html */
class __TwigTemplate_87b76287ae882a95b0bdbdec4b6816db76c59f496912d75d7d0917dcc0c80c2c extends Twig_Template
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
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CAT");
            echo "
\t";
            // line 5
            if (($context["S_IS_RHEA"] ?? null)) {
                // line 6
                echo "\t\t<i class=\"icon fa-trophy fa-fw icon-lg\" aria-hidden=\"true\" ";
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
\t";
            } elseif ( !            // line 7
($context["S_IS_RHEA"] ?? null)) {
                // line 8
                echo "\t\t<img src=\"";
                echo ($context["TPOTM_UCP_BADGE"] ?? null);
                echo "\" class=\"tpotm-ucp-badge\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_NO_EXPLAIN");
                    echo "\"";
                }
                echo " />
\t";
            } else {
                // line 10
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_BADGE");
                echo "
\t";
            }
            // line 12
            echo "\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLTIP_HOVER");
            echo "
\t</h3>

\t<dl>
\t\t<dt><label for=\"user_tt_tpotm1\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLTIP");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLTIP_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"user_tt_tpotm1\"><input type=\"radio\" name=\"user_tt_tpotm\" id=\"user_tt_tpotm1\" value=\"1\" ";
            // line 18
            if (($context["S_USER_TOOLTIP"] ?? null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t
\t\t\t<label for=\"user_tt_tpotm0\"><input type=\"radio\" name=\"user_tt_tpotm\" id=\"user_tt_tpotm0\" value=\"0\" ";
            // line 20
            if ( !($context["S_USER_TOOLTIP"] ?? null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>

\t<dl>
\t\t<dt><label for=\"user_tt_sel_tpotm1\">";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLTIP_SEL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLTIP_SEL_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"user_tt_sel_tpotm1\"><input type=\"radio\" name=\"user_tt_sel_tpotm\" id=\"user_tt_sel_tpotm1\" value=\"1\" ";
            // line 27
            if (($context["S_USER_TOOLTIP_SEL"] ?? null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t
\t\t\t<label for=\"user_tt_sel_tpotm0\"><input type=\"radio\" name=\"user_tt_sel_tpotm\" id=\"user_tt_sel_tpotm0\" value=\"0\" ";
            // line 29
            if ( !($context["S_USER_TOOLTIP_SEL"] ?? null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "@threedi_tpotm/event/ucp_prefs_personal_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  113 => 27,  105 => 25,  93 => 20,  84 => 18,  76 => 16,  68 => 12,  62 => 10,  46 => 8,  44 => 7,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@threedi_tpotm/event/ucp_prefs_personal_append.html", "");
    }
}
