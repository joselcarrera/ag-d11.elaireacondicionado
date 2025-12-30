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

/* @phpbbseo_usu/event/overall_footer_after.html */
class __TwigTemplate_4fdc839a6efd0d961e34ff7a1cd782fbed460def49a0a4e761916c4120be00c9 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[
var phpbb_seo = {
\tdelim_start:'";
        // line 4
        echo ($context["SEO_START_DELIM"] ?? null);
        echo "',
\tstatic_pagination:'";
        // line 5
        echo ($context["SEO_SATIC_PAGE"] ?? null);
        echo "',
\text_pagination:'";
        // line 6
        echo ($context["SEO_EXT_PAGE"] ?? null);
        echo "',
\texternal:'";
        // line 7
        echo ($context["SEO_EXTERNAL"] ?? null);
        echo "',
\texternal_sub:'";
        // line 8
        echo ($context["SEO_EXTERNAL_SUB"] ?? null);
        echo "',
\text_classes:'";
        // line 9
        echo ($context["SEO_EXT_CLASSES"] ?? null);
        echo "',
\thashfix:'";
        // line 10
        echo ($context["SEO_HASHFIX"] ?? null);
        echo "',
\tphpEx:'";
        // line 11
        echo ($context["SEO_PHPEX"] ?? null);
        echo "'
};
// ]]>
</script>
";
        // line 15
        $asset_file = "phpbb_seo.js";
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
        $this->getEnvironment()->get_assets_bag()->add_script($asset);    }

    public function getTemplateName()
    {
        return "@phpbbseo_usu/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbbseo_usu/event/overall_footer_after.html", "");
    }
}
