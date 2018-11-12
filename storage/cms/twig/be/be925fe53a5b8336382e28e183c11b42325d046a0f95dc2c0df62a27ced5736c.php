<?php

/* C:\wamp64\www\demo/themes/ncsc/partials/aboutus.htm */
class __TwigTemplate_6edb3b80a3f4daeed68a0a48bdb56d3154c5f60b019626b1711643214b0ddbc2 extends Twig_Template
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
        echo "<section id=\"aboutus\" class=\"section\">
    <div class=\"container\">
        <div class=\"row text-center mb-5 \">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2 \">
                    <h2 class=\"font-weight-bold mb-0  appear-animation text-uppercase\" data-appear-animation=\"maskUp\"
                     data-appear-animation-delay=\"200\">Giới thiệu</h2>
                </div>
            </div>

            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                    <p>Hệ thống phân tích và chia sẻ nguy cơ tấn công mạng Việt Nam là hệ thống cho phép thu thập, phân tích và
                        chia sẻ thông tin trực tiếp về dấu hiệu, nguy cơ và cuộc tấn công mạng đang xảy ra trên hệ thống của các cơ
                        quan, đơn vị. Mục tiêu của hệ thống nhằm tăng cường việc kết nối chia sẻ thông tin giữa các cơ quan, đơn vị,
                        tổ chức khác nhau về các mối nguy cơ tấn công mạng đang diễn ra liên tục...</p>
                </div>
                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-03.png");
        echo "\"></span>
                            <h2 class=\"text-content\">Thông tin cập nhật</h2>
                            <p>Hệ thống liên tục cập nhật và chia sẻ các thông tin về nguy cơ tấn công mạng đối với Việt Nam.</p>
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-02.png");
        echo "\"></span>
                            <h2 class=\"text-content\">Dữ liệu đa dạng</h2>
                            <p>Dữ liệu được tổng hợp từ các tổ chức Quốc tế, Việt Nam, từ các sensor, honeypot,...</p>
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-01.png");
        echo "\"></span>
                            <h2 class=\"text-content\">Cảnh báo tức thì</h2>
                            <p>Hệ thống cảnh báo sớm các tấn công và cảnh báo các kết nối bất thường từ hệ thống mạng tổ chức.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/ncsc/partials/aboutus.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 35,  56 => 29,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"aboutus\" class=\"section\">
    <div class=\"container\">
        <div class=\"row text-center mb-5 \">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2 \">
                    <h2 class=\"font-weight-bold mb-0  appear-animation text-uppercase\" data-appear-animation=\"maskUp\"
                     data-appear-animation-delay=\"200\">Giới thiệu</h2>
                </div>
            </div>

            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                    <p>Hệ thống phân tích và chia sẻ nguy cơ tấn công mạng Việt Nam là hệ thống cho phép thu thập, phân tích và
                        chia sẻ thông tin trực tiếp về dấu hiệu, nguy cơ và cuộc tấn công mạng đang xảy ra trên hệ thống của các cơ
                        quan, đơn vị. Mục tiêu của hệ thống nhằm tăng cường việc kết nối chia sẻ thông tin giữa các cơ quan, đơn vị,
                        tổ chức khác nhau về các mối nguy cơ tấn công mạng đang diễn ra liên tục...</p>
                </div>
                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"{{ 'assets/img/tuyendung/icon-03.png'|theme }}\"></span>
                            <h2 class=\"text-content\">Thông tin cập nhật</h2>
                            <p>Hệ thống liên tục cập nhật và chia sẻ các thông tin về nguy cơ tấn công mạng đối với Việt Nam.</p>
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"{{ 'assets/img/tuyendung/icon-02.png'|theme }}\"></span>
                            <h2 class=\"text-content\">Dữ liệu đa dạng</h2>
                            <p>Dữ liệu được tổng hợp từ các tổ chức Quốc tế, Việt Nam, từ các sensor, honeypot,...</p>
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <span><img src=\"{{ 'assets/img/tuyendung/icon-01.png'|theme }}\"></span>
                            <h2 class=\"text-content\">Cảnh báo tức thì</h2>
                            <p>Hệ thống cảnh báo sớm các tấn công và cảnh báo các kết nối bất thường từ hệ thống mạng tổ chức.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>", "C:\\wamp64\\www\\demo/themes/ncsc/partials/aboutus.htm", "");
    }
}
