<?php

/* C:\wamp64\www\demo/themes/official/layouts/default.htm */
class __TwigTemplate_949732cb74df1861e8d4d2fd9204a33c81af621ae4cda803273264696912d42e extends Twig_Template
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
        
      <!-- ==================================================================================GIOI THIEU===================================================================================== -->
      <section id=\"aboutus\" class=\"section\">
    <div class=\"container\">
        <div class=\"row text-center mb-5 \">
            <div class=\"col\">
                <div class=\"overflow-hidden mb-2 \">
                     
                     ";
        // line 59
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "                </div>
            </div>
            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                      ";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
        echo "                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                        <img src=\"";
        // line 69
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/thongtincapnhat.png");
        echo "\" />
                        
                            
                            ";
        // line 72
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor3"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 73
        echo "                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <img src=\"";
        // line 76
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/dulieudadang.png");
        echo "\" />
                          
                           
                           ";
        // line 79
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor4"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 80
        echo "                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                           <img src=\"";
        // line 83
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/canhbaotucthi.png");
        echo "\" />
                           
                            ";
        // line 85
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor5"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 86
        echo "                        </div>
                    </div>
                </div>
</div>
            </div>
        </div>
</section>



<!--==========================================================HOAT DONG ========================================================================-->
        <hr/>
        <section id=\"services\" class=\"section\">
    <div class=\"container-fluid\">
        <div class=\"row text-center mb-5\">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2\">
                    ";
        // line 104
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor6"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "                  
                </div>
            </div>
        </div>
        <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
            <div class=\"col-lg-6 col-xl-8 p-0\">
                <div class=\"content-grid\">
                    <div class=\"row content-grid-row border border-left-0 border-right-0\">
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"";
        // line 115
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-danhgia.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                   ";
        // line 118
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor7"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 119
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span>
                                         <span><img src=\"";
        // line 126
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-giamsat.png");
        echo "\"></span>
                                    </span>
                                </div>
                                <div class=\"icon-box-info\">                  
                                    ";
        // line 130
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor8"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 131
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"";
        // line 137
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-shield.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                ";
        // line 140
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor9"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 141
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"";
        // line 147
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-warning.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                ";
        // line 150
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor10"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 151
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class=\"col-lg-6 col-xl-4  \" data-plugin-image-background data-plugin-options=><img class= \"w-100 h-100\"src=\"";
        // line 156
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/cn-04.jpg");
        echo "\"></div></div>
        
        </div>
    </div>
</section>
          <!--==========================================================================================================================================================================================-->

        
       <!-- ======================= TUYEN DUNG ====================================================--->
        ";
        // line 165
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tuyendung"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
        <!--=========================END TUYEN DUNG =================================================================================================================================================================-->
        <!-- Footer -->
        <footer id=\"layout-footer\"> 
                ";
        // line 169
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
        </footer>
    
    <script src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.appear/jquery.appear.min.js");
        echo "\"></script>
    <script src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 175
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-cookie/jquery-cookie.min.js");
        echo "\"></script>
    <script src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/common/common.min.js");
        echo "\"></script>
    <script src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.validation/jquery.validation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap/jquery.gmap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.lazyload/jquery.lazyload.min.js");
        echo "\"></script>
    <script src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vide/vide.min.js");
        echo "\"></script>
    <script src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vivus/vivus.min.js");
        echo "\"></script>
    <script src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>
    <script src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
    <script src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/views/view.contact.js");
        echo "\"></script>
    <script src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.init.js");
        echo "\"></script>
    <script src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/examples/examples.portfolio.js");
        echo "\"></script>
    
  ";
        // line 195
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 196
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 197
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
        // line 198
        echo "           
     
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/official/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 198,  449 => 197,  444 => 196,  441 => 195,  436 => 193,  432 => 192,  428 => 191,  424 => 190,  420 => 189,  416 => 188,  412 => 187,  408 => 186,  404 => 185,  400 => 184,  396 => 183,  392 => 182,  388 => 181,  384 => 180,  380 => 179,  376 => 178,  372 => 177,  368 => 176,  364 => 175,  360 => 174,  356 => 173,  352 => 172,  344 => 169,  335 => 165,  323 => 156,  316 => 151,  312 => 150,  306 => 147,  298 => 141,  294 => 140,  288 => 137,  280 => 131,  276 => 130,  269 => 126,  260 => 119,  256 => 118,  250 => 115,  234 => 104,  214 => 86,  210 => 85,  205 => 83,  200 => 80,  196 => 79,  190 => 76,  185 => 73,  181 => 72,  175 => 69,  169 => 65,  165 => 64,  159 => 60,  155 => 59,  141 => 47,  137 => 46,  130 => 41,  127 => 40,  123 => 39,  117 => 36,  111 => 33,  107 => 32,  103 => 31,  97 => 28,  93 => 27,  89 => 26,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  48 => 9,  44 => 8,  40 => 7,  37 => 6,  33 => 5,  28 => 4,  23 => 1,);
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
        
      <!-- ==================================================================================GIOI THIEU===================================================================================== -->
      <section id=\"aboutus\" class=\"section\">
    <div class=\"container\">
        <div class=\"row text-center mb-5 \">
            <div class=\"col\">
                <div class=\"overflow-hidden mb-2 \">
                     
                     {% component 'contenteditor' %}
                </div>
            </div>
            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                      {% component 'contenteditor2' %}
                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                        <img src=\"{{ 'aboutus/thongtincapnhat.png'|media }}\" />
                        
                            
                            {% component 'contenteditor3' %}
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <img src=\"{{ 'aboutus/dulieudadang.png'|media }}\" />
                          
                           
                           {% component 'contenteditor4' %}
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                           <img src=\"{{ 'aboutus/canhbaotucthi.png'|media }}\" />
                           
                            {% component 'contenteditor5'  %}
                        </div>
                    </div>
                </div>
</div>
            </div>
        </div>
</section>



<!--==========================================================HOAT DONG ========================================================================-->
        <hr/>
        <section id=\"services\" class=\"section\">
    <div class=\"container-fluid\">
        <div class=\"row text-center mb-5\">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2\">
                    {% component 'contenteditor6' %}                  
                </div>
            </div>
        </div>
        <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
            <div class=\"col-lg-6 col-xl-8 p-0\">
                <div class=\"content-grid\">
                    <div class=\"row content-grid-row border border-left-0 border-right-0\">
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"{{ 'chucnang/icon-danhgia.png'|media }}\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                   {% component 'contenteditor7'%}
                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span>
                                         <span><img src=\"{{ 'chucnang/icon-giamsat.png'|media }}\"></span>
                                    </span>
                                </div>
                                <div class=\"icon-box-info\">                  
                                    {% component 'contenteditor8' %}
                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"{{ 'chucnang/icon-shield.png'|media }}\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                {% component 'contenteditor9' %}
                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"{{ 'chucnang/icon-warning.png'|media }}\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                {% component 'contenteditor10' %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class=\"col-lg-6 col-xl-4  \" data-plugin-image-background data-plugin-options=><img class= \"w-100 h-100\"src=\"{{ 'chucnang/cn-04.jpg'|media }}\"></div></div>
        
        </div>
    </div>
</section>
          <!--==========================================================================================================================================================================================-->

        
       <!-- ======================= TUYEN DUNG ====================================================--->
        {% partial 'tuyendung' %} 
        <!--=========================END TUYEN DUNG =================================================================================================================================================================-->
        <!-- Footer -->
        <footer id=\"layout-footer\"> 
                {% partial 'footer' %}           
        </footer>
    
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
    
  {% scripts %}
{% framework %}
{% framework extras %}
           
     
    </body>
</html>", "C:\\wamp64\\www\\demo/themes/official/layouts/default.htm", "");
    }
}
