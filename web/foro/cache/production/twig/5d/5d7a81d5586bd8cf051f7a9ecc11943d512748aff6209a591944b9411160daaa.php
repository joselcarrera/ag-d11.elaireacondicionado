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

/* @primehalo_primelinks/event/overall_footer_content_after.html */
class __TwigTemplate_71c5f5ecb70120fca1ca45cb3bbd7d0f8957fa9ba371beeda314e9f56fabc358 extends \Twig\Template
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
        if (($context["PRIME_LINK_PAGE"] ?? null)) {
            // line 2
            echo "<script>
(function() {
\t";
            // line 4
            if ((($context["PRIME_LINK_PAGE"] ?? null) == "memberlist")) {
                // line 5
                echo "\tvar links = document.querySelectorAll('table#memberlist td.info a[href]');
\t";
            } elseif ((            // line 6
($context["PRIME_LINK_PAGE"] ?? null) == "member_profile")) {
                // line 7
                echo "\tvar links = document.querySelectorAll('dl.details dd a[href]');
\t";
            } elseif ((            // line 8
($context["PRIME_LINK_PAGE"] ?? null) == "member_post")) {
                // line 9
                echo "\tvar links = document.querySelectorAll('dl.postprofile dd.profile-contact a[href]');
\t";
            } elseif ((            // line 10
($context["PRIME_LINK_PAGE"] ?? null) == "forumlist")) {
                // line 11
                echo "\tvar links = document.querySelectorAll('dl.forum_link dt a.forumtitle[href]');
\t";
            } else {
                // line 13
                echo "\tvar links = [];
\t";
            }
            // line 15
            echo "\tfor (var i = 0; i < links.length; i++) {
\t\tvar href = links[i].getAttribute('href');
\t\tif (/^https?:\\/\\/.+/.test(href)) {
\t\t\t";
            // line 18
            if (($context["PRIME_LINK_TARGET"] ?? null)) {
                echo "links[i].target = '";
                echo ($context["PRIME_LINK_TARGET"] ?? null);
                echo "';";
            }
            // line 19
            echo "\t\t\t";
            if (($context["PRIME_LINK_REL"] ?? null)) {
                echo "links[i].rel = '";
                echo ($context["PRIME_LINK_REL"] ?? null);
                echo "';";
            }
            // line 20
            echo "\t\t\t";
            if ((($context["PRIME_LINK_CLASS"] ?? null) && (($context["PRIME_LINK_PAGE"] ?? null) != "member_post"))) {
                echo "links[i].className = '";
                echo ($context["PRIME_LINK_CLASS"] ?? null);
                echo "';";
            }
            // line 21
            echo "\t\t\t";
            if (($context["PRIME_LINK_PREFIX"] ?? null)) {
                echo "links[i].href = '";
                echo ($context["PRIME_LINK_PREFIX"] ?? null);
                echo "' + href;";
            }
            // line 22
            echo "\t\t}
\t}
})();
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@primehalo_primelinks/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  86 => 21,  79 => 20,  72 => 19,  66 => 18,  61 => 15,  57 => 13,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@primehalo_primelinks/event/overall_footer_content_after.html", "");
    }
}
