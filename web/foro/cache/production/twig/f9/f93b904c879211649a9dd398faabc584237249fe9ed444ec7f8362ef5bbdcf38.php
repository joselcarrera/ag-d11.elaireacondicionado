<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* metro_login_popup.html */
class __TwigTemplate_c60711e932b6de5cd6cd15cd504885bdb8b193e59ceaaa2f522a55af269eb080 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "\t\t\t<div id=\"login-box\" class=\"login-popup\">
\t\t\t    <a href=\"#\" class=\"close\"><img src=\"";
        // line 2
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/close_popup.png\" class=\"close-button\" title=\"Close\" alt=\"Close\" /></a>
\t\t\t    <div id=\"login-text\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
        echo "</div>

\t\t\t\t<form method=\"post\" action=\"";
        // line 5
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" class=\"quick-login\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"navbar_username_outer\">
\t\t\t\t\t\t\t<label for=\"username\">";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo ":</label>&nbsp;<br /><input type=\"text\" name=\"username\" id=\"navbar_username\" size=\"10\" class=\"inputbox\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"navbar_password_outer\">
\t\t\t\t\t\t\t<label for=\"password\">";
        // line 12
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo ":</label>&nbsp;<br /><input type=\"password\" name=\"password\" id=\"navbar_password\" size=\"10\" class=\"inputbox\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" />
\t\t\t\t\t\t</div>




\t\t\t\t\t\t<div class=\"login-buttons\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"login\" value=\"";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"button2\" />
\t\t\t\t\t\t\t";
        // line 20
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 21
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<label id=\"autologin_label\" for=\"autologin\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
            echo " <input type=\"checkbox\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t\t\t<div class=\"login-footer\">\t\t\t        
\t\t\t\t\t\t";
        // line 28
        if (($context["S_REGISTER_ENABLED"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t\t<a class=\"register-link\" href=\"";
            echo ($context["U_REGISTER"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t";
        if (($context["U_SEND_PASSWORD"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t\t\t<a class=\"restore-password rightside\" href=\"";
            echo ($context["U_SEND_PASSWORD"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t        </div>

\t\t\t</div>
\t\t\t<div id=\"mask\"></div>";
    }

    public function getTemplateName()
    {
        return "metro_login_popup.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  104 => 32,  101 => 31,  93 => 29,  91 => 28,  85 => 24,  79 => 22,  77 => 21,  73 => 20,  69 => 19,  57 => 12,  48 => 8,  42 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "metro_login_popup.html", "");
    }
}
