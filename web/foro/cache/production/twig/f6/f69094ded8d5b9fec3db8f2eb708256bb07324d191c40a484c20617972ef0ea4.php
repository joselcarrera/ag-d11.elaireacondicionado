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

/* navbar_header.html */
class __TwigTemplate_ce57d9009093569afe66624a8df764bd61d82f508ebc4f25c832973105257f20 extends \Twig\Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
    <a id=\"logo\" class=\"logo\" href=\"https://www.elaireacondicionado.com/\" title=\"El Aire Acondicionado .com\"><img class=\"site_logo\" src=\"/sites/elaireacondicionado.com/themes/elaireacondicionado/images/elaireacondicionado_neg.svg\" alt=\"El Aire Acondicionado .com\"></a>
        ";
        // line 3
        if (($context["IS_MOBILE"] ?? null)) {
            // line 4
            echo "        <ul id=\"nav-main\" class=\"linklist bulletin nav-main-metro-tabs nav-main-mobile\" role=\"menubar\">
        ";
        } else {
            // line 6
            echo "        <ul id=\"nav-main\" class=\"linklist bulletin nav-main-metro-tabs\" role=\"menubar\">            
        ";
        }
        // line 8
        echo "
            <li role=\"menuitem\" aria-label=\"Menú\" id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 9
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
                <a href=\"#\" class=\"responsive-menu-link dropdown-trigger\"></a>
                <div class=\"dropdown hidden\">
                    <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
                    <ul class=\"dropdown-contents\" role=\"menu\">
                        ";
        // line 14
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 15
            echo "
                        ";
        } else {
            // line 17
            echo "                            <li><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\" class=\"login-responsive-link\"><i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
                            <li class=\"separator\"></li>
                            ";
            // line 19
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 20
                echo "                                <li><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-plus-circle  fa-fw\" aria-hidden=\"true\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
                            ";
            }
            // line 22
            echo "                            ";
            // line 23
            echo "                        ";
        }
        // line 24
        echo "
                        ";
        // line 25
        // line 26
        echo "
                        ";
        // line 27
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 28
            echo "                            <li class=\"separator\"></li>
                            ";
            // line 29
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 30
                echo "                                <li>
                                    <a href=\"";
                // line 31
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 32
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 36
            echo "                            ";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 37
                echo "                                <li>
                                    <a href=\"";
                // line 38
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 39
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 43
            echo "                            ";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 44
                echo "                                <li>
                                    <a href=\"";
                // line 45
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 46
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 50
            echo "                                <li>
                                    <a href=\"";
            // line 51
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 56
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
                                    </a>
                                </li>
                                <li class=\"separator\"></li>
                                <li>
                                    <a href=\"";
            // line 62
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
                                    </a>
                                </li>
                        ";
        }
        // line 67
        echo "
                        ";
        // line 68
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 69
            echo "                            <li class=\"separator\"></li>
                            ";
            // line 70
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 71
                echo "                                <li>
                                    <a href=\"";
                // line 72
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
                                        <i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 73
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 77
            echo "                        ";
        }
        // line 78
        echo "                        <li class=\"separator\"></li>

                        ";
        // line 80
        // line 81
        echo "                    </ul>
                </div>
            </li>
            
            ";
        // line 85
        // line 86
        echo "            ";
        // line 87
        echo "
            ";
        // line 88
        if (($context["IS_MOBILE"] ?? null)) {
            // line 89
            echo "                <script>
                    //console.log('Mobile - navbar_header.html');
                </script>
            ";
        } else {
            // line 93
            echo "                <script>
                    //console.log('Desktop  - navbar_header.html');
                </script>
                ";
            // line 96
            if (($context["U_ACP"] ?? null)) {
                echo "<li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "\" role=\"menuitem\" aria-label=\"ACP\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
                echo "</span></a></li>";
            }
            // line 97
            echo "                ";
            if (($context["U_MCP"] ?? null)) {
                echo "<li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
                echo "\" role=\"menuitem\" aria-label=\"MCP\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
                echo "</span></a></li>";
            }
            // line 98
            echo "                <!-- Add your nav link below -->
                <li role=\"menuitem\" aria-label=\"Foro\" class=\"small-icon icon-forum\" data-last-responsive=\"true\">
                    <a href=\"/foro/\" title=\"Foro El Aire Acondicionado .com\" role=\"menuitem\">
                    <span>Foro</span>
                    </a>
                </li>             
            ";
        }
        // line 105
        echo "        </ul>

        <ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
            ";
        // line 108
        $value = " itemscope itemtype=\"http://schema.org/ListItem\"";
        $context['definition']->set('MICRODATA', $value);
        // line 109
        echo "            <li role=\"menuitem\" aria-label=\"Breadcrumbs\" class=\"breadcrumbs\">
            <ol itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                ";
        // line 111
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 112
            echo "                <li class=\"crumb\" itemprop=\"itemListElement\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo ">
                <i class=\"icon fa-home fa-fw\"></i>
                <a itemprop=\"item\" href=\"";
            // line 114
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><span itemprop=\"name\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a>
                <meta itemprop=\"position\" content=\"1\" />
                </li>";
        }
        // line 117
        echo "                <li class=\"crumb\" itemprop=\"itemListElement\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
        echo ">
                <a itemprop=\"item\" href=\"";
        // line 118
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\"><span itemprop=\"name\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a>
                <meta itemprop=\"position\" content=\"2\" />
                </li>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('phpbb\template\twig\extension')->loop_subset($this->env, $this->getAttribute(($context["loops"] ?? null), "navlinks", []), 0, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 122
            echo "                <li class=\"crumb\" itemprop=\"itemListElement\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo ">
                <a itemprop=\"item\" href=\"";
            // line 123
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><span itemprop=\"name\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a>
                <meta itemprop=\"position\" content=\"3\" />
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('phpbb\template\twig\extension')->loop_subset($this->env, $this->getAttribute(($context["loops"] ?? null), "navlinks", []), 1, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 128
            echo "                <li class=\"crumb\" itemprop=\"itemListElement\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo ">
                <a itemprop=\"item\" href=\"";
            // line 129
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><span itemprop=\"name\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a>
                <meta itemprop=\"position\" content=\"4\" />
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </ol>
            </li>
        </ul>


</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 133,  351 => 129,  346 => 128,  341 => 127,  324 => 123,  319 => 122,  315 => 121,  307 => 118,  302 => 117,  294 => 114,  288 => 112,  286 => 111,  282 => 109,  279 => 108,  274 => 105,  265 => 98,  254 => 97,  244 => 96,  239 => 93,  233 => 89,  231 => 88,  228 => 87,  226 => 86,  225 => 85,  219 => 81,  218 => 80,  214 => 78,  211 => 77,  204 => 73,  200 => 72,  197 => 71,  195 => 70,  192 => 69,  190 => 68,  187 => 67,  180 => 63,  176 => 62,  168 => 57,  164 => 56,  157 => 52,  153 => 51,  150 => 50,  143 => 46,  139 => 45,  136 => 44,  133 => 43,  126 => 39,  122 => 38,  119 => 37,  116 => 36,  109 => 32,  105 => 31,  102 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  91 => 25,  88 => 24,  85 => 23,  83 => 22,  75 => 20,  73 => 19,  63 => 17,  59 => 15,  57 => 14,  47 => 9,  44 => 8,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
