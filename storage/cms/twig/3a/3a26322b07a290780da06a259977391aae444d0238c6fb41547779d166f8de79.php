<?php

/* C:\wamp64\www\demo/themes/clonencsc/partials/aboutus.htm */
class __TwigTemplate_944b51478203548196acd1bc16b3ef42984c7a77aa2fe0b2a82cd77de4c103f9 extends Twig_Template
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
                     ";
        // line 6
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "banner-aboutus.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "                </div>
            </div>
            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "gioithieu1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "                </div>
                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                        <img src=\"";
        // line 17
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/thongtincapnhat.png");
        echo "\" />
                        
                            ";
        // line 19
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "thongtincapnhat.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <img src=\"";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/dulieudadang.png");
        echo "\" />
                          
                           ";
        // line 25
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "dulieudadang.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                           <img src=\"";
        // line 29
        echo $this->extensions['System\Twig\Extension']->mediaFilter("aboutus/canhbaotucthi.png");
        echo "\" />
                           
                            ";
        // line 31
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "canhbaotucthi.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/clonencsc/partials/aboutus.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  88 => 31,  83 => 29,  78 => 26,  73 => 25,  68 => 23,  63 => 20,  58 => 19,  53 => 17,  46 => 12,  41 => 11,  35 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"aboutus\" class=\"section\">
    <div class=\"container\">
        <div class=\"row text-center mb-5 \">
            <div class=\"col\">
                <div class=\"overflow-hidden mb-2 \">
                     {% component 'contenteditor' file=\"banner-aboutus.htm\" %}
                </div>
            </div>
            <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                <div class=\"justify-content-center\">
                {% component 'contenteditor' file=\"gioithieu1.htm\" %}
                </div>
                <br />
                <div class=\"aboutus_content\">
                    <div class=\"row\">
                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                        <img src=\"{{ 'aboutus/thongtincapnhat.png'|media }}\" />
                        
                            {% component 'contenteditor' file=\"thongtincapnhat.htm\" %}
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                            <img src=\"{{ 'aboutus/dulieudadang.png'|media }}\" />
                          
                           {% component 'contenteditor' file=\"dulieudadang.htm\" %}
                        </div>

                        <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                           <img src=\"{{ 'aboutus/canhbaotucthi.png'|media }}\" />
                           
                            {% component 'contenteditor' file=\"canhbaotucthi.htm\" %}
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>", "C:\\wamp64\\www\\demo/themes/clonencsc/partials/aboutus.htm", "");
    }
}
