<?php

/* C:\wamp64\www\demo/plugins/janvince/smallcontactform/components/smallcontactform/default.htm */
class __TwigTemplate_5370b59d3cf21723cc639678c5a641c45d30375df76c7b477311ede12681ebea extends Twig_Template
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
        echo "<div id=\"scf-message-";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-message")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>

<div id=\"scf-form-";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-form")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/plugins/janvince/smallcontactform/components/smallcontactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 6,  36 => 5,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"scf-message-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-message' %}
</div>

<div id=\"scf-form-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-form' %}
</div>
", "C:\\wamp64\\www\\demo/plugins/janvince/smallcontactform/components/smallcontactform/default.htm", "");
    }
}
