<?php

/* C:\wamp64\www\demo/themes/demo/partials/tuyendung.htm */
class __TwigTemplate_2e183754324c98a9bd5d0af77037a2d9cffe80ffe01bfdae26eebab54b99da19 extends Twig_Template
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
        echo "<section id=\"blog\" class=\"section\">
        <div class=\"container \">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <div class=\"overflow-hidden mb-5 \">
                    

                         ";
        // line 8
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "banner-tuyendung.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "                    </div>
                </div>
            </div>
          ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("advanced"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "                  
        
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/demo/partials/tuyendung.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  42 => 12,  37 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"section\">
        <div class=\"container \">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <div class=\"overflow-hidden mb-5 \">
                    

                         {% component 'contenteditor' file=\"banner-tuyendung.htm\" %}
                    </div>
                </div>
            </div>
          {% component 'advanced' %}
                  
        
    </section>", "C:\\wamp64\\www\\demo/themes/demo/partials/tuyendung.htm", "");
    }
}
