<?php

/* @threedi_tpotm/event/index_body_markforums_before.html */
class __TwigTemplate_2ef1c5600ad9d5fdea5960c52b37234eecca895457b58ed813cf6057db244497 extends Twig_Template
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
        if ((($context["S_TPOTM"] ?? null) && ($context["S_TPOTM_INDEX_TOP"] ?? null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("tpotm.html", "@threedi_tpotm/event/index_body_markforums_before.html", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@threedi_tpotm/event/index_body_markforums_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@threedi_tpotm/event/index_body_markforums_before.html", "");
    }
}
