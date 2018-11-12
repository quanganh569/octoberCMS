<?php

/* C:\wamp64\www\demo/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_64319c5c1a6a2272fd5f627b52b4e73cac52ad9644363727d4542c55d667f2d2 extends Twig_Template
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
        echo "<";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", array()), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", array())) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", array()), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", array()), "html", null, true);
        echo "\"
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", array())) {
            echo "class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
        echo "
</";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", array()), "html", null, true);
        } else {
            echo "div";
        }
        echo ">

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", array()) == 1)) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 12
            echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 16
                echo "            new ContentTools.Style('";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["style"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["style"], "name", array())) : (twig_get_attribute($this->env, $this->source, $context["style"], "class", array()))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "class", array()), "html", null, true);
                echo "', ";
                echo json_encode(twig_get_attribute($this->env, $this->source, $context["style"], "allowed_tags", array()));
                echo "),
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "                                    '";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "',
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    ";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 34
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 35
            echo "    <style title=\"contenteditor\" type=\"text/css\">
        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "additional_styles", array()), "html", null, true);
            echo "
    </style>
    ";
            // line 34
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  135 => 36,  132 => 35,  129 => 34,  127 => 11,  116 => 24,  107 => 22,  103 => 21,  98 => 18,  85 => 16,  81 => 15,  76 => 12,  73 => 11,  71 => 10,  62 => 8,  58 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 3,  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\"
    {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>

{% if __SELF__.renderCount == 1 %}
    {% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    {% endput %}
    {% put styles  %}
    <style title=\"contenteditor\" type=\"text/css\">
        {{ __SELF__.additional_styles }}
    </style>
    {% endput %}
{% endif %}
", "C:\\wamp64\\www\\demo/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
}
