<?php

/* C:\wamp64\www\demo/themes/clonencsc/partials/hoatdong.htm */
class __TwigTemplate_d26b4e567e6c71ff55138059924dd6822175ad467e71d796f82b6921a6342bc9 extends Twig_Template
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
        echo "<hr/>
<section id=\"services\" class=\"section\">
    <div class=\"container-fluid\">
        <div class=\"row text-center mb-5\">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2\">
                    ";
        // line 8
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "chucnang1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
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
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-danhgia.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                   ";
        // line 22
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "chucnang-canhbaosomATT.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span>
                                         <span><img src=\"";
        // line 30
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-giamsat.png");
        echo "\"></span>
                                    </span>
                                </div>
                                <div class=\"icon-box-info\">                  
                                    ";
        // line 34
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "chucnang-giamsatATT.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-shield.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                
                                    ";
        // line 45
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "chucnang-danhgiaATT.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"";
        // line 52
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/icon-warning.png");
        echo "\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                
                                  ";
        // line 56
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "chucnang-xulytancongmang.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 57
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class=\"col-lg-6 col-xl-4  \" data-plugin-image-background data-plugin-options=><img class= \"w-100 h-100\"src=\"";
        // line 62
        echo $this->extensions['System\Twig\Extension']->mediaFilter("chucnang/cn-04.jpg");
        echo "\"></div></div>
        
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/clonencsc/partials/hoatdong.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 62,  121 => 57,  116 => 56,  109 => 52,  101 => 46,  96 => 45,  89 => 41,  81 => 35,  76 => 34,  69 => 30,  60 => 23,  55 => 22,  49 => 19,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr/>
<section id=\"services\" class=\"section\">
    <div class=\"container-fluid\">
        <div class=\"row text-center mb-5\">
            <div class=\"col\">

                <div class=\"overflow-hidden mb-2\">
                    {% component 'contenteditor' file=\"chucnang1.htm\" %}                  
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
                                   {% component 'contenteditor2' file=\"chucnang-canhbaosomATT.htm\" %}
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
                                    {% component 'contenteditor' file=\"chucnang-giamsatATT.htm\" %}
                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"{{ 'chucnang/icon-shield.png'|media }}\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                
                                    {% component 'contenteditor' file=\"chucnang-danhgiaATT.htm\" %}
                                </div>
                            </div>
                        </div>
                        <div class=\"content-grid-item col-md-6 col-lg-12 col-xl-6 p-5\">
                            <div class=\"icon-box icon-box-style-7\">
                                <div class=\"icon-box-icon border-0\">
                                    <span><img src=\"{{ 'chucnang/icon-warning.png'|media }}\"></span>
                                </div>
                                <div class=\"icon-box-info\">
                                
                                  {% component 'contenteditor' file=\"chucnang-xulytancongmang.htm\" %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class=\"col-lg-6 col-xl-4  \" data-plugin-image-background data-plugin-options=><img class= \"w-100 h-100\"src=\"{{ 'chucnang/cn-04.jpg'|media }}\"></div></div>
        
        </div>
    </div>
</section>", "C:\\wamp64\\www\\demo/themes/clonencsc/partials/hoatdong.htm", "");
    }
}
