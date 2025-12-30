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

/* overall_header.html */
class __TwigTemplate_b097a6e1abd8230da700a9d9fcbb1481344007d68e88ac49cda92e2177e5fbae extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGM535J');</script>
<!-- End Google Tag Manager -->
    
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    ";
        // line 15
        echo ($context["META"] ?? null);
        echo "
    <title>";
        // line 16
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

    ";
        // line 18
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 19
            echo "        ";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 20
            echo "        ";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 21
            echo "        ";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 22
            echo "        ";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 23
            echo "        ";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 24
            echo "        ";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 25
            echo "        ";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 26
            echo "        ";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if (($context["U_CANONICAL"] ?? null)) {
            // line 29
            echo "        <link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
    ";
        }
        // line 31
        echo "
    <!-- dns-prefetch -->
    <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\" />

    <!-- preload -->
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVsf6lvg.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZWMf6.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKjk0m.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCNWgzZmW5O7w.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">
    <link rel=\"preload\" href=\"https://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCNWgzaGW5.woff2\" as=\"font\" crossorigin=\"crossorigin\" type=\"font/woff2\">

    <style>
        /* latin-ext */
        @font-face {
        font-family: 'Merriweather';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZVsf6lvg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Merriweather';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRZWMf6.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKjk0m.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCNWgzZmW5O7w.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCNWgzaGW5.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }    
    </style>


    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/base.min.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/base.min.css\">

    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/common.min.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/common.min.css\">

    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/content.min.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/content.min.css\">

    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/responsive.min.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/responsive.min.css\">

    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/metro.min.css\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/metro.min.css\">

    <link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/elaire.min.css?v=02\" as=\"style\">
    <link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/elaire.min.css?v=02\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/normalize.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/normalize.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/utilities.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/utilities.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/links.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/links.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/buttons.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/buttons.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/cp.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/cp.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/forms.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/forms.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/icons.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/icons.min.css\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/colours.min.css?v01\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/colours.min.css?v01\">

<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/imageset.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/imageset.min.css\">


<link rel=\"preload\" href=\"/foro/styles/metro_blue/theme/editor-icons.min.css\" as=\"style\">
<link rel=\"stylesheet\" href=\"/foro/styles/metro_blue/theme/editor-icons.min.css\">    


    ";
        // line 151
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbseo_meta', '__main__'));
        $this->env->loadTemplate('@phpbbseo_meta/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('primehalo_primelinks', '__main__'));
        $this->env->loadTemplate('@primehalo_primelinks/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 152
        echo "
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" href=\"/foro/assets/fonts/fontawesome-webfont.woff2?v=4.7.0\" crossorigin=\"anonymous\">

    ";
        // line 155
        // line 156
        echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png?v=bOLqmwYje7\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-elaire-32x32.png?v=bOLqmwYje7\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-elaire-16x16.png?v=bOLqmwYje7\">
    <link rel=\"manifest\" href=\"/manifest.json?v=bOLqmwYje7\">
    <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg?v=bOLqmwYje7\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"/favicon-elaire.ico?v=bOLqmwYje7\">

    <script data-ad-client=\"ca-pub-8930748827740312\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 165
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-PGM535J\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    ";
        // line 170
        // line 171
        echo "
    <div id=\"wrap\" class=\"wrap\">
        <a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
        ";
        // line 174
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 175
            echo "        <div id=\"page-header\" class=\"page-header-metro page-header-registered\">
        ";
        } else {
            // line 177
            echo "        <div id=\"page-header\" class=\"page-header-metro\">
        ";
        }
        // line 178
        echo "    

            ";
        // line 180
        $location = "navbar_header_metro.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header_metro.html", "overall_header.html", 180)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 181
        echo "

            ";
        // line 183
        // line 184
        echo "            ";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 184)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 185
        echo "        </div>

        ";
        // line 187
        // line 188
        echo "
        <a id=\"start_here\" class=\"anchor\"></a>
        <div id=\"page-body\" class=\"page-body\" role=\"main\">
            ";
        // line 191
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 192
            echo "            <div id=\"information\" class=\"rules\">
                <div class=\"inner\">
                    <strong>";
            // line 194
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
                </div>
            </div>
            ";
        }
        // line 198
        echo "
            ";
        // line 199
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 199,  413 => 198,  403 => 194,  399 => 192,  397 => 191,  392 => 188,  391 => 187,  387 => 185,  374 => 184,  373 => 183,  369 => 181,  357 => 180,  353 => 178,  349 => 177,  345 => 175,  343 => 174,  338 => 171,  337 => 170,  325 => 165,  314 => 156,  313 => 155,  308 => 152,  299 => 151,  177 => 31,  171 => 29,  168 => 28,  165 => 27,  163 => 26,  150 => 25,  137 => 24,  126 => 23,  115 => 22,  104 => 21,  93 => 20,  82 => 19,  80 => 18,  55 => 16,  51 => 15,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
