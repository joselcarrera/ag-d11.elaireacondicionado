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

/* navbar_header_metro.html */
class __TwigTemplate_b2df955e2c80d598ad5b8232287e90a372e4c40d74a0353809e92cb36afe84f1 extends \Twig\Template
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
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 2
            echo "<div class=\"navbar navbar-metro\" role=\"navigation\">
    <div class=\"inner\">    
        <ul id=\"nav-main-top\" class=\"linklist bulletin\" role=\"menubar\">
            ";
            // line 5
            // line 6
            echo "            <li role=\"menuitem\" aria-label=\"Menú de usuario\" id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
                ";
            // line 7
            // line 8
            echo "                <div class=\"header-profile dropdown-container\">
                    <a href=\"";
            // line 9
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
                    <div class=\"dropdown\">
                        <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
                        <ul class=\"dropdown-contents\" role=\"menu\">
                            ";
            // line 13
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 14
                echo "                                <li>
                                    <a href=\"";
                // line 15
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
                                        <i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 20
            echo "
                        ";
            // line 21
            // line 22
            echo "
                            <li>
                                <a href=\"";
            // line 24
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\" aria-label=\"Perfil de usuario\">
                                    <i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</span>
                                </a>
                            </li>
                            ";
            // line 28
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 29
                echo "                                <li>
                                    <a href=\"";
                // line 30
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "\" role=\"menuitem\" aria-label=\"Perfil de usuario\">
                                        <i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 31
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 35
            echo "
                            ";
            // line 36
            // line 37
            echo "
                            <li class=\"separator\"></li>
                            <li>
                                <a href=\"";
            // line 40
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\" aria-label=\"Logout\">
                                    <i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 41
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                ";
            // line 47
            // line 48
            echo "            </li>
            ";
            // line 49
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 50
                echo "                <li role=\"menuitem\" aria-label=\"Mensajes privados\" class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
                    <a href=\"";
                // line 51
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo "</span></a>&nbsp;<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" class=\"pm-count\"><strong>";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong></a>
                </li>
            ";
            }
            // line 54
            echo "            ";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 55
                echo "                <li role=\"menuitem\" aria-label=\"Notificaciones\" class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
                    <a href=\"";
                // line 56
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</span></a>&nbsp;<a href=\"";
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" class=\"notification-count\"><strong>";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong></a>
                    ";
                // line 57
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header_metro.html", 57)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 58
                echo "                </li>
            ";
            }
            // line 60
            echo "            ";
            // line 61
            echo "        </ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "navbar_header_metro.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  195 => 60,  191 => 58,  179 => 57,  169 => 56,  164 => 55,  161 => 54,  149 => 51,  146 => 50,  144 => 49,  141 => 48,  140 => 47,  131 => 41,  125 => 40,  120 => 37,  119 => 36,  116 => 35,  109 => 31,  103 => 30,  100 => 29,  98 => 28,  92 => 25,  86 => 24,  82 => 22,  81 => 21,  78 => 20,  71 => 16,  67 => 15,  64 => 14,  62 => 13,  49 => 9,  46 => 8,  45 => 7,  38 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header_metro.html", "");
    }
}
