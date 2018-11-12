<?php

/* C:\wamp64\www\demo/themes/official/pages/contact.htm */
class __TwigTemplate_ad964e49d1a032a7d9aebb87a24a7f8f6119061501f5cf228f3f2a44ddb92d5a extends Twig_Template
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
        echo "title = \"Contact me!\"
url = \"/
layout = \"default\"
hidden = \"0\"

[contactForm]
<h2>Contact Form</h2>
";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/themes/official/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("title = \"Contact me!\"
url = \"/
layout = \"default\"
hidden = \"0\"

[contactForm]
<h2>Contact Form</h2>
{% component 'contactform' %}", "C:\\wamp64\\www\\demo/themes/official/pages/contact.htm", "");
    }
}
