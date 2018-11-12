<?php

/* C:\wamp64\www\demo/themes/clonencsc/partials/header.htm */
class __TwigTemplate_9d316b054793e3d5d0ae1666e584ba1bc5d687131d8a769d55470088339fad50 extends Twig_Template
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
        echo "<div class=\"body\">
    <div role=\"main\" class=\"main\">
        <div id=\"home\" class=\"slider-container slider-container-full-height rev_slider_wrapper\">
            <div id=\"revolutionSlider\" class=\"slider rev_slider\" data-version=\"5.4.7\" data-plugin-revolution-slider
             data-plugin-options=\"{'delay': 9000, 'sliderLayout': 'fullscreen', 'gridwidth': [1140,960,720,540], 'gridheight': [900,900,900,900], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 190, 'h_offset': 0}}}\">
                <ul>
                    <li data-transition=\"fade\">
                        <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slides/one-page/background-header.png");
        echo "\"  
                                 alt=\"\"
                                data-bgposition=\"center center\" 
                                data-bgfit=\"cover\" 
                                data-bgrepeat=\"no-repeat\"
                                class=\"rev-slidebg\">
                    <li data-transition=\"fade\">
                        <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slides/one-page/slide-1-2.jpg");
        echo "\" 
                                alt=\"\"
                                data-bgposition=\"center center\" 
                                data-bgfit=\"cover\" 
                                data-bgrepeat=\"no-repeat\"
                                class=\"rev-slidebg\">



                        <div class=\"tp-caption text-color-light font-primary font-weight-bold rs-parallaxlevel-1\" data-x=\"center\" data-y=\"center\"
                         data-voffset=\"['-70','-70','-50','-40']\" data-start=\"1000\" data-fontsize=\"['65','65','45','30']\"
                         data-lineheight=\"['65','65','50','35']\" data-transform_in=\"y:[100%];s:500;\" data-transform_out=\"y:[100%];s:500;\"
                         data-mask_in=\"x:0px;y:0px;\">TRUNG TÂM GIÁM SÁT AN TOÀN</div>

                        <div class=\"tp-caption text-color-light font-primary font-weight-bold rs-parallaxlevel-2\" data-x=\"center\" data-y=\"center\"
                         data-start=\"1400\" data-fontsize=\"['65','65','45','30']\" data-lineheight=\"['65','65','50','35']\"
                         data-transform_in=\"y:[100%];s:500;\" data-transform_out=\"y:[100%];s:500;\" data-mask_in=\"x:0px;y:0px;\">KHÔNG GIAN
                            MẠNG QUỐC GIA</div>

                        <div class=\"tp-caption rs-parallaxlevel-1 border border-left-0 border-right-0 border-bottom-0 border-light\"
                         data-x=\"center\" data-y=\"center\" data-voffset=\"['70','70','70','55']\" data-start=\"1800\" data-width=\"['850','850','600','400']\"
                         data-transform_in=\"opacity:0;s:300;\" data-transform_idle=\"opacity:0.4;s:300;\" data-transform_out=\"opacity:0;s:300;\"></div>
                    </li>
                </ul>
            </div>
        </div>
        <header id=\"header\" class=\"header-with-borders header-with-borders-sticky\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header'}\">
            <div class=\"header-body\">
                <div class=\"header-container\">
                    <div class=\"header-row\">
                        <div class=\"header-column justify-content-start text-center\">
                            <div class=\"header-logo border-left-0 px-4\">
                                <a href=\"#home\">
                                    <img alt=\"NCSC\" width=\"100px\" height=\"100px\" data-change-src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" src=\"
                                    ";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\"
                                    >
                                </a>
                            </div>
                            <div class=\"header-nav justify-content-lg-start ml-3\">
                                <div class=\"header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1\">
                                    <nav class=\"collapse\">
                                        <ul class=\"nav flex-column flex-lg-row\" id=\"mainNav\">
                                            <li> <a href=\"#home\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Trang Chủ</a></li>
                                            <li><a href=\"#aboutus\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Giới thiệu</a></li>
                                            <li><a href=\"#services\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Hoạt động</a></li>
                                            <li><a href=\"#blog\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Tuyển dụng</a></li>
                                            <li><a href=\"#footer\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Liên hệ</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class=\"header-column justify-content-end\">
                            <button class=\"header-btn-collapse-nav mx-3\" data-toggle=\"collapse\" data-target=\".header-nav-main nav\">
                                <span class=\"hamburguer\">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class=\"close\">
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/clonencsc/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 49,  78 => 48,  42 => 15,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"body\">
    <div role=\"main\" class=\"main\">
        <div id=\"home\" class=\"slider-container slider-container-full-height rev_slider_wrapper\">
            <div id=\"revolutionSlider\" class=\"slider rev_slider\" data-version=\"5.4.7\" data-plugin-revolution-slider
             data-plugin-options=\"{'delay': 9000, 'sliderLayout': 'fullscreen', 'gridwidth': [1140,960,720,540], 'gridheight': [900,900,900,900], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 190, 'h_offset': 0}}}\">
                <ul>
                    <li data-transition=\"fade\">
                        <img src=\"{{ 'assets/img/slides/one-page/background-header.png'|theme }}\"  
                                 alt=\"\"
                                data-bgposition=\"center center\" 
                                data-bgfit=\"cover\" 
                                data-bgrepeat=\"no-repeat\"
                                class=\"rev-slidebg\">
                    <li data-transition=\"fade\">
                        <img src=\"{{ 'assets/img/slides/one-page/slide-1-2.jpg'|theme }}\" 
                                alt=\"\"
                                data-bgposition=\"center center\" 
                                data-bgfit=\"cover\" 
                                data-bgrepeat=\"no-repeat\"
                                class=\"rev-slidebg\">



                        <div class=\"tp-caption text-color-light font-primary font-weight-bold rs-parallaxlevel-1\" data-x=\"center\" data-y=\"center\"
                         data-voffset=\"['-70','-70','-50','-40']\" data-start=\"1000\" data-fontsize=\"['65','65','45','30']\"
                         data-lineheight=\"['65','65','50','35']\" data-transform_in=\"y:[100%];s:500;\" data-transform_out=\"y:[100%];s:500;\"
                         data-mask_in=\"x:0px;y:0px;\">TRUNG TÂM GIÁM SÁT AN TOÀN</div>

                        <div class=\"tp-caption text-color-light font-primary font-weight-bold rs-parallaxlevel-2\" data-x=\"center\" data-y=\"center\"
                         data-start=\"1400\" data-fontsize=\"['65','65','45','30']\" data-lineheight=\"['65','65','50','35']\"
                         data-transform_in=\"y:[100%];s:500;\" data-transform_out=\"y:[100%];s:500;\" data-mask_in=\"x:0px;y:0px;\">KHÔNG GIAN
                            MẠNG QUỐC GIA</div>

                        <div class=\"tp-caption rs-parallaxlevel-1 border border-left-0 border-right-0 border-bottom-0 border-light\"
                         data-x=\"center\" data-y=\"center\" data-voffset=\"['70','70','70','55']\" data-start=\"1800\" data-width=\"['850','850','600','400']\"
                         data-transform_in=\"opacity:0;s:300;\" data-transform_idle=\"opacity:0.4;s:300;\" data-transform_out=\"opacity:0;s:300;\"></div>
                    </li>
                </ul>
            </div>
        </div>
        <header id=\"header\" class=\"header-with-borders header-with-borders-sticky\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header'}\">
            <div class=\"header-body\">
                <div class=\"header-container\">
                    <div class=\"header-row\">
                        <div class=\"header-column justify-content-start text-center\">
                            <div class=\"header-logo border-left-0 px-4\">
                                <a href=\"#home\">
                                    <img alt=\"NCSC\" width=\"100px\" height=\"100px\" data-change-src=\"{{ 'assets/img/logo.png'|theme }}\" src=\"
                                    {{ 'assets/img/logo.png'|theme }}\"
                                    >
                                </a>
                            </div>
                            <div class=\"header-nav justify-content-lg-start ml-3\">
                                <div class=\"header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1\">
                                    <nav class=\"collapse\">
                                        <ul class=\"nav flex-column flex-lg-row\" id=\"mainNav\">
                                            <li> <a href=\"#home\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Trang Chủ</a></li>
                                            <li><a href=\"#aboutus\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Giới thiệu</a></li>
                                            <li><a href=\"#services\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Hoạt động</a></li>
                                            <li><a href=\"#blog\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Tuyển dụng</a></li>
                                            <li><a href=\"#footer\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Liên hệ</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class=\"header-column justify-content-end\">
                            <button class=\"header-btn-collapse-nav mx-3\" data-toggle=\"collapse\" data-target=\".header-nav-main nav\">
                                <span class=\"hamburguer\">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class=\"close\">
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>", "C:\\wamp64\\www\\demo/themes/clonencsc/partials/header.htm", "");
    }
}
