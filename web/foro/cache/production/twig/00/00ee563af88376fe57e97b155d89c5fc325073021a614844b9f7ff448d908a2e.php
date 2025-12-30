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

/* overall_footer.html */
class __TwigTemplate_f3bddaada24ca555def3c40d23eceb4959c33b3d4d378da556b48f9ba08e8b68 extends \Twig\Template
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
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('primehalo_primelinks', '__main__'));
        $this->env->loadTemplate('@primehalo_primelinks/event/overall_footer_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<!-- Prefooter blocks go below -->


<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">

\t<div class=\"copyright\">
\t\t<p class=\"footer-row\">

\t\t</p>
\t\t";
        // line 15
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 16
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 17
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 21
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 22
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 25
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
  </div>
  
  <div class=\"footer_credit-footer\">
    <!-- Social Links -->
      <div class=\"social-icons-footer\">
       <ul>
        <li><a class=\"rss\" href=\"/rss.xml\"><img src=\"/images/rss-fa.png\" style=\"width:16px; height:16px;\" alt=\"RSS\"></a></li>
        <li><a class=\"fb\" href=\"https://www.facebook.com/elaireacondicionadocom/\" target=\"_blank\" rel=\"me noreferrer noopener\"><img src=\"/images/facebook-fa.png\" style=\"width:16px; height:16px;\" alt=\"Facebook\"></a></li>
        <li><a class=\"twitter\" href=\"https://twitter.com/el_aire\" target=\"_blank\" rel=\"me noreferrer noopener\"><img src=\"/images/twitter-fa.png\" style=\"width:16px; height:16px;\" alt=\"Twitter\"></a></li>
        <li><span class=\"camuflaEnlace\" atributo=\"";
        // line 47
        echo ($context["CONTACTO_OF_LINK"] ?? null);
        echo "\"><img src=\"/images/note-fa.png\" style=\"width:16px; height:16px;\" alt=\"Formulario de contacto\"></li>
       </ul>
      </div>

    <div id=\"copyright-footer\">
      <p class=\"copyright-footer\">
        El Aire Acondicionado .com<br><span style=\"font-size:0.8em;\">Aire acondicionado y climatización</span>
      </p>
      
      <p class=\"credits\">
        <span class=\"camuflaEnlace\" atributo=\"";
        // line 57
        echo ($context["PRENSA_OF_LINK"] ?? null);
        echo "\">Prensa</span><br>
        <span class=\"camuflaEnlace\" atributo=\"";
        // line 58
        echo ($context["MAPA_WEB_OF_LINK"] ?? null);
        echo "\">Mapa web</span><br>
        <span class=\"camuflaEnlace\" atributo=\"";
        // line 59
        echo ($context["POLITICA_COOKIES_OF_LINK"] ?? null);
        echo "\">Pirivacidad y cookies</span>      
    </p>
      <div class=\"clear\"></div>
    </div>
  </div> 
</div>

</div>

<script src=\"";
        // line 68
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 69
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 70
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 71
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('316');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 72
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('316');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 73
        echo "
";
        // line 74
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 75
            $asset_file = "metro_login_popup.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('316');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
        // line 77
        echo "
";
        // line 78
        if ((($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 79
            $asset_file = "metro_common.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('316');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
        // line 81
        echo "
";
        // line 82
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbseo_usu', '__main__'));
        $this->env->loadTemplate('@phpbbseo_usu/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 83
        echo "
";
        // line 84
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 84)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 85
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", []);
        echo "

";
        // line 87
        // line 88
        echo "

";
        // line 90
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
            // line 91
            $location = "metro_login_popup.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("metro_login_popup.html", "overall_footer.html", 91)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 93
        echo "
<script async src=\"/sites/elaireacondicionado.com/js/custom-foro.js\"></script>

";
        // line 96
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 97
            echo "    <link rel=\"preload\" href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"";
            // line 98
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css\">
";
        }
        // line 100
        echo "
";
        // line 101
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 102
            echo "    <link rel=\"preload\" href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"";
            // line 103
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css\">
";
        }
        // line 105
        echo "
<link rel=\"preload\" href=\"";
        // line 106
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" as=\"style\">
<link rel=\"stylesheet\" href=\"";
        // line 107
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\">
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 107,  323 => 106,  320 => 105,  315 => 103,  310 => 102,  308 => 101,  305 => 100,  300 => 98,  295 => 97,  293 => 96,  288 => 93,  275 => 91,  273 => 90,  269 => 88,  268 => 87,  263 => 85,  249 => 84,  246 => 83,  241 => 82,  238 => 81,  223 => 79,  221 => 78,  218 => 77,  203 => 75,  201 => 74,  198 => 73,  184 => 72,  170 => 71,  163 => 70,  155 => 69,  151 => 68,  139 => 59,  135 => 58,  131 => 57,  118 => 47,  97 => 31,  82 => 27,  78 => 25,  70 => 22,  67 => 21,  64 => 20,  58 => 17,  55 => 16,  53 => 15,  41 => 5,  40 => 4,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
