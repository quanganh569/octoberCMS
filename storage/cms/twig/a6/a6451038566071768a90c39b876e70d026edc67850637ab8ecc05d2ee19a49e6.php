<?php

/* C:\wamp64\www\demo/themes/clonencsc/layouts/default.htm */
class __TwigTemplate_8161d82f8eee3c37637a3972789afbfb5abc58622ac36b82a1e303cb6203391c extends Twig_Template
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
    ";
        // line 4
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 5
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 6
        echo "        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
      <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "~/modules/system/assets/css/framework.extras.css"));
        echo ".css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css' \">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/fontawesome-all.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animate/animate.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/linear-icons/css/linear-icons.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.carousel.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.theme.default.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.min.css");
        echo "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-elements.css");
        echo "\">

\t<!-- Current Page CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/settings.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/layers.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/navigation.css");
        echo "\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/skins/default.css");
        echo "\">

\t<!-- Theme Custom CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">
        ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 41
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "        </header>
        

        <!-- Content -->
        ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hoatdong"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "
        ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tuyendung"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "        <!-- Footer -->
        <footer id=\"layout-footer\">
                ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
        </footer>
        ";
        // line 60
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 61
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 62
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.appear/jquery.appear.min.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-cookie/jquery-cookie.min.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/common/common.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.validation/jquery.validation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap/jquery.gmap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.lazyload/jquery.lazyload.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vide/vide.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vivus/vivus.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/views/view.contact.js");
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.init.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/examples/examples.portfolio.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras"));
        // line 87
        echo ".js\">
    </script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/clonencsc/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 87,  277 => 84,  273 => 83,  269 => 82,  265 => 81,  261 => 80,  257 => 79,  253 => 78,  249 => 77,  245 => 76,  241 => 75,  237 => 74,  233 => 73,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  205 => 66,  201 => 65,  197 => 64,  193 => 63,  188 => 62,  184 => 61,  179 => 60,  172 => 58,  168 => 56,  164 => 55,  161 => 54,  157 => 53,  154 => 52,  150 => 51,  144 => 47,  140 => 46,  133 => 41,  130 => 40,  126 => 39,  120 => 36,  114 => 33,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  92 => 26,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  56 => 14,  48 => 9,  44 => 8,  40 => 7,  37 => 6,  33 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    {% framework %}
    {% scripts %}
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
     <!-- Vendor CSS -->
      <link href=\"{{['~/modules/system/assets/css/framework.extras.css']|theme }}.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css' \">
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
        {% framework %}
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
    <script type=\"text/javascript\" src=\"{{ [
        '@jquery',
        '@framework',
        '@framework.extras']|theme}}.js\">
    </script>

    </body>
</html>", "C:\\wamp64\\www\\demo/themes/clonencsc/layouts/default.htm", "");
    }
}
