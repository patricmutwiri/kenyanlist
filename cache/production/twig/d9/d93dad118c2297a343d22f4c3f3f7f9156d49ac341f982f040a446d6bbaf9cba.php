<?php

/* tpotm_hall.html */
class __TwigTemplate_dd5c6254379e5111ae6d313ac09def9ef5c5e08c0ee349f95517d4b9116de768 extends Twig_Template
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
        if ((($context["S_TPOTM"] ?? null) && ($context["S_TPOTM_HALL"] ?? null))) {
            // line 2
            echo "
";
            // line 3
            $this->loadTemplate("overall_header.html", "tpotm_hall.html", 3)->display($context);
            // line 4
            echo "
<h2 class=\"tpotm-head-text\">";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HELLO");
            echo "</h2>

<div class=\"panel bg1\">
\t<div class=\"inner\">
\t\t<h3>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CAT");
            echo "</h3>
\t\t<div class=\"tpotm-div-1\">
\t\t\t<div class=\"tpotm-div-2\">
\t\t\t\t<a href=\"";
            // line 12
            echo ($context["U_TPOTM_AVATAR_URL"] ?? null);
            echo "\" class=\"hall-avatar-tpotm\">";
            echo ($context["TPOTM_AVATAR_HALL"] ?? null);
            echo "</a>
\t\t\t\t<span class=\"text2\">&nbsp;";
            // line 13
            echo ($context["TPOTM_NAME"] ?? null);
            echo "</span>
\t\t\t</div>
\t\t\t<span class=\"text1\">";
            // line 15
            echo ($context["TPOTM_POST"] ?? null);
            echo "</span>
\t\t\t<div class=\"tpotm-div-3\" style=\"background-image: linear-gradient(";
            // line 16
            echo ($context["DEGREE"] ?? null);
            echo "deg, transparent 50%, ";
            if ((($context["PERCENT"] ?? null) > 50)) {
                echo "#80BF00";
            } else {
                echo "#CCCCCC";
            }
            echo " 50%), linear-gradient(90deg, #CCCCCC 50%, transparent 50%)\">
\t\t\t\t<div class=\"tpotm-div-4\">
\t\t\t\t\t<span class=\"tpotm-span-1\">
\t\t\t\t\t\t";
            // line 19
            if ( !($context["S_TPOTM_AVAILABLE"] ?? null)) {
                // line 20
                echo "\t\t\t\t\t\t\t0&#37;
\t\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t\t";
                echo ($context["PERCENT"] ?? null);
                echo "&#37;
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br>
\t\t\t<div class=\"tpotm-div-5\">
\t\t\t\t";
            // line 29
            if (($context["S_TPOTM_AVAILABLE"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_POST");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_MONTH");
                echo "
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_CACHE");
            echo "
\t\t\t\t";
            // line 33
            if (($context["S_IS_RHEA"] ?? null)) {
                // line 34
                echo "\t\t\t\t\t&nbsp;<i class=\"icon fa-question-circle-o fa-fw\" aria-hidden=\"true\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_NO_EXPLAIN");
                    echo "\"";
                }
                echo " style=\"cursor: pointer;\"></i>
\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t&nbsp;<img src=\"";
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
                echo ">
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t</div>\t
</div>

";
            // line 44
            echo "<h3>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EVER_CAT");
            echo "
\t";
            // line 45
            if (($context["S_IS_RHEA"] ?? null)) {
                // line 46
                echo "\t\t&nbsp;<i class=\"icon fa-question-circle-o fa-fw\" aria-hidden=\"true\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN_HALL");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HALL_NO_EXPLAIN");
                    echo "\"";
                }
                echo " style=\"cursor: pointer;\"></i>
\t";
            } else {
                // line 48
                echo "\t\t&nbsp;<img src=\"";
                echo ($context["TPOTM_ICON_STATS"] ?? null);
                echo "\" class=\"icon icon-tpotm-stats\" ";
                if (($context["S_U_TOOLTIP_SEL"] ?? null)) {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EXPLAIN_HALL");
                    echo "\"";
                } else {
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HALL_NO_EXPLAIN");
                    echo "\"";
                }
                echo " >
\t";
            }
            // line 50
            echo "</h3>

<div class=\"action-bar top\">
\t";
            // line 53
            if (($this->getAttribute(($context["loops"] ?? null), "pagination", array()) || ($context["TOTAL_USERS"] ?? null))) {
                // line 54
                echo "\t<div class=\"pagination\">
\t\t ";
                // line 55
                echo ($context["COUNT"] ?? null);
                echo "
\t\t";
                // line 56
                if ($this->getAttribute(($context["loops"] ?? null), "pagination", array())) {
                    // line 57
                    echo "\t\t\t";
                    $this->loadTemplate("pagination.html", "tpotm_hall.html", 57)->display($context);
                    // line 58
                    echo "\t\t";
                } else {
                    // line 59
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 61
                echo "\t</div>
\t";
            }
            // line 63
            echo "</div>

<div class=\"panel bg1\">
\t<div class=\"inner\">
\t\t<div id=\"tpotm-container\" class=\"tpotm-container\">
\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "tpotm_ever", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tpotm_ever"]) {
                // line 69
                echo "\t\t\t<div class=\"tpotm-flex-cell\">
\t\t\t\t<div class=\"tpotm-flex-item\">
\t\t\t\t\t<div class=\"tpotm-flex-avatar\">
\t\t\t\t\t\t";
                // line 72
                echo $this->getAttribute($context["tpotm_ever"], "USER_AVATAR", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t&nbsp;";
                // line 74
                echo $this->getAttribute($context["tpotm_ever"], "USERNAME", array());
                echo "
\t\t\t\t\t<div class=\"tpotm-flex-text\">
\t\t\t\t\t\t";
                // line 76
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TOT_POST");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["tpotm_ever"], "TOTAL_POSTS", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tpotm-flex-text\">
\t\t\t\t\t\t";
                // line 79
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_LAST_POST_IN_MONTH");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["tpotm_ever"], "POST_TIME", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpotm_ever'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t</div>
\t</div>
</div>

<div class=\"action-bar top\">
\t";
            // line 89
            if (($this->getAttribute(($context["loops"] ?? null), "pagination", array()) || ($context["TOTAL_USERS"] ?? null))) {
                // line 90
                echo "\t<div class=\"pagination\">
\t\t ";
                // line 91
                echo ($context["COUNT"] ?? null);
                echo "
\t\t";
                // line 92
                if ($this->getAttribute(($context["loops"] ?? null), "pagination", array())) {
                    // line 93
                    echo "\t\t\t";
                    $this->loadTemplate("pagination.html", "tpotm_hall.html", 93)->display($context);
                    // line 94
                    echo "\t\t";
                } else {
                    // line 95
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 97
                echo "\t</div>
\t";
            }
            // line 99
            echo "</div>
";
            // line 101
            echo "
";
            // line 102
            $this->loadTemplate("jumpbox.html", "tpotm_hall.html", 102)->display($context);
            // line 103
            echo "
";
            // line 104
            $this->loadTemplate("overall_footer.html", "tpotm_hall.html", 104)->display($context);
            // line 105
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "tpotm_hall.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 105,  304 => 104,  301 => 103,  299 => 102,  296 => 101,  293 => 99,  289 => 97,  283 => 95,  280 => 94,  277 => 93,  275 => 92,  271 => 91,  268 => 90,  266 => 89,  259 => 84,  245 => 79,  236 => 76,  231 => 74,  226 => 72,  221 => 69,  217 => 68,  210 => 63,  206 => 61,  200 => 59,  197 => 58,  194 => 57,  192 => 56,  188 => 55,  185 => 54,  183 => 53,  178 => 50,  162 => 48,  148 => 46,  146 => 45,  141 => 44,  134 => 38,  118 => 36,  104 => 34,  102 => 33,  97 => 32,  90 => 30,  88 => 29,  81 => 24,  75 => 22,  71 => 20,  69 => 19,  57 => 16,  53 => 15,  48 => 13,  42 => 12,  36 => 9,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tpotm_hall.html", "");
    }
}
