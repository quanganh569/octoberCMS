<?php

/* C:\wamp64\www\demo/themes/ncsc/layouts/default.htm */
class __TwigTemplate_bf70ee99cb5e3e75c3a5472833c37c235f193f885f3b947a8fea9b19baa21246 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
     
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css");
        // line 14
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/fontawesome-all.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animate/animate.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/linear-icons/css/linear-icons.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.carousel.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.theme.default.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.min.css");
        echo "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-elements.css");
        echo "\">

\t<!-- Current Page CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/settings.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/layers.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/navigation.css");
        echo "\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/skins/default.css");
        echo "\">

\t<!-- Theme Custom CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">
        ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 39
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </header>

        <!-- Content -->
        ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "
        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hoatdong"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "
        ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tuyendung"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "        <!-- Footer -->
        <footer id=\"layout-footer\">
                ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "        </footer>

   

      
        ";
        // line 61
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 62
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 63
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.appear/jquery.appear.min.js");
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-cookie/jquery-cookie.min.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/common/common.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.validation/jquery.validation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap/jquery.gmap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.lazyload/jquery.lazyload.min.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vide/vide.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vivus/vivus.min.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/views/view.contact.js");
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.init.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/examples/examples.portfolio.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/ncsc/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 84,  272 => 83,  268 => 82,  264 => 81,  260 => 80,  256 => 79,  252 => 78,  248 => 77,  244 => 76,  240 => 75,  236 => 74,  232 => 73,  228 => 72,  224 => 71,  220 => 70,  216 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  196 => 64,  191 => 63,  187 => 62,  172 => 61,  165 => 56,  161 => 55,  157 => 53,  153 => 52,  150 => 51,  146 => 50,  143 => 49,  139 => 48,  134 => 45,  130 => 44,  123 => 39,  120 => 38,  116 => 37,  110 => 34,  104 => 31,  100 => 30,  96 => 29,  90 => 26,  86 => 25,  82 => 24,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  49 => 14,  46 => 13,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
     
    <link href=\"{{ 'assets/https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css' |theme}}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/font-awesome/css/fontawesome-all.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/animate/animate.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/linear-icons/css/linear-icons.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/owl.carousel/assets/owl.carousel.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/owl.carousel/assets/owl.theme.default.min.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.min.css'|theme }}\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/theme-elements.css'|theme }}\">

\t<!-- Current Page CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/settings.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/layers.css'|theme }}\">
\t<link rel=\"stylesheet\" href=\"{{ 'assets/vendor/rs-plugin/css/navigation.css'|theme }}\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/skins/default.css'|theme }}\">

\t<!-- Theme Custom CSS -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'header' %}
        </header>

        <!-- Content -->
        {% partial 'aboutus' %}

        {% partial 'hoatdong' %}

        {% partial 'tuyendung' %}
        <!-- Footer -->
        <footer id=\"layout-footer\">
                {% partial 'footer' %}
        </footer>

   

      
        {% framework extras %}
        {% scripts %}
        <script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.appear/jquery.appear.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.easing/jquery.easing.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery-cookie/jquery-cookie.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/common/common.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.validation/jquery.validation.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.gmap/jquery.gmap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery.lazyload/jquery.lazyload.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/isotope/jquery.isotope.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/owl.carousel/owl.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/magnific-popup/jquery.magnific-popup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/vide/vide.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/vivus/vivus.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/theme.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/views/view.contact.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/theme.init.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/examples/examples.portfolio.js'|theme }}\"></script>
    </body>
</html>", "C:\\wamp64\\www\\demo/themes/ncsc/layouts/default.htm", "");
    }
}
