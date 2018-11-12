<?php

/* C:\wamp64\www\demo/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm */
class __TwigTemplate_00e918668be7cf5048a2b5b8b7f8a39a27d9d6ee37df9fd7055e620985c819fb extends Twig_Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "
  ";
                // line 3
                if ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null))) {
                    // line 4
                    echo "  \t<div class=\"alert alert-";
                    echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                    echo "\">
  \t\t";
                    // line 5
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), array(($context["message"] ?? null))));
                    echo "
  \t</div>
  ";
                }
                // line 8
                echo "
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  36 => 5,  31 => 4,  29 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% flash%}

  {% if flashSuccess==__SELF__ %}
  \t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
  \t\t{{ html_entity_decode(message)|nl2br }}
  \t</div>
  {% endif %}

{% endflash %}
", "C:\\wamp64\\www\\demo/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm", "");
    }
}
