<?php

/* tpotm_body.html */
class __TwigTemplate_f68255de9554779a3626635255a3a6f351fa2612ffdab6042d3a804940b8d20d extends Twig_Template
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
        if ( !($context["INCLUDED_TPOTM_ACP_CSS"] ?? null)) {
            // line 2
            echo "\t";
            $asset_file = "@threedi_tpotm/tpotm_acp.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('5');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 3
            echo "\t";
            $context["INCLUDED_TPOTM_ACP_CSS"] = true;
        }
        // line 5
        echo "
";
        // line 6
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "tpotm_body.html", 6)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 7
        echo "
<h1>";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_TITLE");
        echo "</h1>

<fieldset class=\"tpotm-acp-outer\">
\t<fieldset class=\"tpotm-acp-middle\">
\t\t<fieldset class=\"tpotm-acp-inner\">
\t\t\t<div style=\"text-align:center;margin-bottom:.5em;\">
\t\t\t\t<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\" style=\"margin-top:.5em;\">
\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
\t\t\t\t<input type=\"hidden\" name=\"hosted_button_id\" value=\"ZLN6KTV2WQSRN\">
\t\t\t\t<input type=\"image\" src=\"https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif\" name=\"submit\">
\t\t\t\t<img src=\"https://www.paypalobjects.com/en_GB/i/scr/pixel.gif\" width=\"1\" height=\"1\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</fieldset>
\t</fieldset>
</fieldset>

";
        // line 25
        if (($context["S_ERRORS"] ?? null)) {
            // line 27
            echo "<fieldset>
\t<legend>";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_ERRORS");
            echo "</legend>
\t<p class=\"error\">
\t\t";
            // line 30
            echo ($context["ERRORS_MSG"] ?? null);
            echo "
\t</p>
</fieldset>
";
        }
        // line 34
        echo "
<form id=\"threedi_tpotm\" method=\"post\" action=\"";
        // line 35
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset class=\"tpotm-acp-outer\">
\t\t<fieldset class=\"tpotm-acp-middle\">
\t\t\t<fieldset class=\"tpotm-acp-inner\">
\t\t\t\t<legend>";
        // line 39
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_HALL");
        echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_hall\">";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HALL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HALL_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_hall\" value=\"1\"";
        // line 45
        if (($context["TPOTM_HALL"] ?? null)) {
            echo " id=\"threedi_tpotm_hall\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_hall\" value=\"0\"";
        // line 46
        if ( !($context["TPOTM_HALL"] ?? null)) {
            echo " id=\"threedi_tpotm_hall\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_users_page\">";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_USERS_PAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_USERS_PAGE_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"number\" min=\"1\" max=\"300\" name=\"threedi_tpotm_users_page\" id=\"threedi_tpotm_users_page\" size=\"6\" value=\"";
        // line 55
        echo ($context["TPOTM_USERS_PAGE"] ?? null);
        echo "\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<div class=\"tpotm-acp-rules\">";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_TTL_MODE");
        echo "</div>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_ttl_mode\">";
        // line 62
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TTL_MODE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_ttl_mode\" value=\"1\"";
        // line 65
        if (($context["TPOTM_TTL_MODE"] ?? null)) {
            echo " id=\"threedi_tpotm_ttl_mode\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "&nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_ttl_mode\" value=\"0\"";
        // line 66
        if ( !($context["TPOTM_TTL_MODE"] ?? null)) {
            echo " id=\"threedi_tpotm_ttl_mode\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_ttl_tpe\">";
        // line 71
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TTL_TPE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<div class=\"tpotm-select\">
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<input type=\"text\" name=\"threedi_tpotm_ttl_tpe\" size=\"10\" id=\"threedi_tpotm_ttl_tpe\" value=\"";
        // line 75
        echo ($context["TPOTM_TTL_TPE"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<select name=\"threedi_tpotm_ttl_tpe\" id=\"threedi_tpotm_ttl_tpe\" title=\"";
        // line 76
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TTL_TPE");
        echo "\">";
        echo ($context["S_TPOTM_TTL_TPE"] ?? null);
        echo "</select>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</div>
\t\t\t\t</dl>

\t\t\t\t<div class=\"tpotm-acp-rules\">";
        // line 81
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_HALL_EPOCH_EXPLAIN");
        echo "</div>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_since_epoch\">";
        // line 84
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_HALL_EPOCH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_since_epoch\" value=\"1\"";
        // line 87
        if (($context["TPOTM_HALL_EPOCH"] ?? null)) {
            echo " id=\"threedi_tpotm_since_epoch\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_EPOCH");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_since_epoch\" value=\"0\"";
        // line 88
        if ( !($context["TPOTM_HALL_EPOCH"] ?? null)) {
            echo " id=\"threedi_tpotm_since_epoch\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_BOARD_S_DATE");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t\t<hr>
\t\t\t<fieldset class=\"tpotm-acp-inner\">
\t\t\t\t<legend>";
        // line 94
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_MANAGEMENT");
        echo "</legend>
\t\t\t\t<div class=\"tpotm-acp-rules\">";
        // line 95
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_MANAGEMENT_EXPLAIN");
        echo "</div>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_adm_mods\">";
        // line 98
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_ADM_MODS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_ADM_MODS_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_adm_mods\" value=\"1\"";
        // line 101
        if (($context["TPOTM_ADM_MODS"] ?? null)) {
            echo " id=\"threedi_tpotm_adm_mods\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_adm_mods\" value=\"0\"";
        // line 102
        if ( !($context["TPOTM_ADM_MODS"] ?? null)) {
            echo " id=\"threedi_tpotm_adm_mods\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_founders\">";
        // line 108
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_FOUNDERS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_FOUNDERS_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_founders\" value=\"1\"";
        // line 111
        if (($context["TPOTM_FOUNDERS"] ?? null)) {
            echo " id=\"threedi_tpotm_founders\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_founders\" value=\"0\"";
        // line 112
        if ( !($context["TPOTM_FOUNDERS"] ?? null)) {
            echo " id=\"threedi_tpotm_founders\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_banneds\">";
        // line 118
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_BANNEDS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_BANNEDS_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_banneds\" value=\"1\"";
        // line 121
        if (($context["TPOTM_BANNEDS"] ?? null)) {
            echo " id=\"threedi_tpotm_banneds\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_banneds\" value=\"0\"";
        // line 122
        if ( !($context["TPOTM_BANNEDS"] ?? null)) {
            echo " id=\"threedi_tpotm_banneds\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t\t<hr>
\t\t\t<fieldset class=\"tpotm-acp-inner\">
\t\t\t\t<legend>";
        // line 128
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_TEMPLATE_LOCATIONS");
        echo "</legend>
\t\t\t\t<div class=\"tpotm-acp-rules\">";
        // line 129
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_TEMPLATE_LOCATIONS_EXPLAIN");
        echo "</div>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_index\">";
        // line 132
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_INDEX");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_index\" value=\"1\"";
        // line 135
        if (($context["TPOTM_INDEX"] ?? null)) {
            echo " id=\"threedi_tpotm_index\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_BOTTOM");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_index\" value=\"0\"";
        // line 136
        if ( !($context["TPOTM_INDEX"] ?? null)) {
            echo " id=\"threedi_tpotm_index\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TOP");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_forums\">";
        // line 142
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_FORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_forums\" value=\"1\"";
        // line 145
        if (($context["TPOTM_FORUMS"] ?? null)) {
            echo " id=\"threedi_tpotm_forums\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_forums\" value=\"0\"";
        // line 146
        if ( !($context["TPOTM_FORUMS"] ?? null)) {
            echo " id=\"threedi_tpotm_forums\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"tpotm-acp-inner\">
\t\t\t\t<legend>";
        // line 152
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_TPOTM_VARIOUSES");
        echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_ttl\">";
        // line 155
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TTL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_TTL_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"number\" min=\"0\" name=\"threedi_tpotm_ttl\" id=\"threedi_tpotm_ttl\" size=\"6\" value=\"";
        // line 158
        echo ($context["TPOTM_TTL"] ?? null);
        echo "\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_miniavatar\">";
        // line 164
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_AVATAR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_AVATAR_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_miniavatar\" value=\"1\"";
        // line 167
        if (($context["TPOTM_MINIAVATAR"] ?? null)) {
            echo " id=\"threedi_tpotm_miniavatar\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_miniavatar\" value=\"0\"";
        // line 168
        if ( !($context["TPOTM_MINIAVATAR"] ?? null)) {
            echo " id=\"threedi_tpotm_miniavatar\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"threedi_tpotm_miniprofile\">";
        // line 174
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_MINIPROFILE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TPOTM_MINIPROFILE_EXPLAIN");
        echo "
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_miniprofile\" value=\"1\"";
        // line 177
        if (($context["TPOTM_MINIPROFILE"] ?? null)) {
            echo " id=\"threedi_tpotm_miniprofile\" checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"threedi_tpotm_miniprofile\" value=\"0\"";
        // line 178
        if ( !($context["TPOTM_MINIPROFILE"] ?? null)) {
            echo " id=\"threedi_tpotm_miniprofile\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</fieldset>
\t</fieldset>

\t<fieldset class=\"tpotm-acp-submit\">
\t\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 187
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 188
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
        echo "\" />
\t\t</fieldset>
\t\t";
        // line 190
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 194
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "tpotm_body.html", 194)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "tpotm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 194,  505 => 190,  500 => 188,  496 => 187,  480 => 178,  472 => 177,  463 => 174,  450 => 168,  442 => 167,  433 => 164,  424 => 158,  415 => 155,  409 => 152,  396 => 146,  388 => 145,  381 => 142,  368 => 136,  360 => 135,  353 => 132,  347 => 129,  343 => 128,  330 => 122,  322 => 121,  313 => 118,  300 => 112,  292 => 111,  283 => 108,  270 => 102,  262 => 101,  253 => 98,  247 => 95,  243 => 94,  230 => 88,  222 => 87,  215 => 84,  209 => 81,  199 => 76,  195 => 75,  187 => 71,  175 => 66,  167 => 65,  160 => 62,  154 => 59,  147 => 55,  138 => 52,  125 => 46,  117 => 45,  108 => 42,  102 => 39,  95 => 35,  92 => 34,  85 => 30,  80 => 28,  77 => 27,  75 => 25,  55 => 8,  52 => 7,  40 => 6,  37 => 5,  33 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tpotm_body.html", "");
    }
}
