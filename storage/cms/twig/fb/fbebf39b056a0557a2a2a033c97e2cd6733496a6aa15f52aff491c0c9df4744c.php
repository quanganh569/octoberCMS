<?php

/* C:\wamp64\www\demo/plugins/raviraj/rjgallery/components/gallery/default.htm */
class __TwigTemplate_1afbb25d9a4d5965f37e306e5cc6e1c76c9b2134fce6d25fad8a1154379885df extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "    <style>
        #";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo " div {
            display: block;
            float: left;
            margin: 3px;
        }
    </style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 10
        echo "
<div style=\"width:100%\" id=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "        <div data-src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
            echo "\" data-sub-html=\"<h4 style='color: white;'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "</h4><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
            echo "</p>\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", array(0 => ($context["width"] ?? null), 1 => ($context["height"] ?? null), 2 => ($context["resizer"] ?? null)), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "\" />
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script>
         \$(document).ready(function() {
            var ";
        // line 24
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo " = \$(\"#";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\").lightGallery({
                // Elements
                thumbnail   : ";
        // line 26
        echo twig_escape_filter($this->env, ($context["thumbnail"] ?? null), "html", null, true);
        echo ",
                caption     : ";
        // line 27
        echo twig_escape_filter($this->env, ($context["caption"] ?? null), "html", null, true);
        echo ",
                desc        : ";
        // line 28
        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
        echo ",
                counter     : ";
        // line 29
        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
        echo ",
                controls    : ";
        // line 30
        echo twig_escape_filter($this->env, ($context["controls"] ?? null), "html", null, true);
        echo ", 
                preload     : ";
        // line 31
        echo twig_escape_filter($this->env, ($context["preload"] ?? null), "html", null, true);
        echo ",

                // Transitions
                mode   : '";
        // line 34
        echo twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true);
        echo "',
                useCSS : true,
                easing : 'linear',
                speed  : ";
        // line 37
        echo twig_escape_filter($this->env, ($context["speed"] ?? null), "html", null, true);
        echo ",

                // Navigation
                hideControlOnEnd : false,
                loop             : ";
        // line 41
        echo twig_escape_filter($this->env, ($context["loop"] ?? null), "html", null, true);
        echo ",
                auto             : ";
        // line 42
        echo twig_escape_filter($this->env, ($context["auto"] ?? null), "html", null, true);
        echo ",
                pause            : ";
        // line 43
        echo twig_escape_filter($this->env, ($context["pause"] ?? null), "html", null, true);
        echo ",
                escKey           : ";
        // line 44
        echo twig_escape_filter($this->env, ($context["escKey"] ?? null), "html", null, true);
        echo ",
                swipeThreshold    : 50,

                lang : { allPhotos: '";
        // line 47
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "' },
            });
        });
    </script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/plugins/raviraj/rjgallery/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 21,  146 => 47,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  121 => 37,  115 => 34,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  82 => 24,  78 => 22,  76 => 21,  72 => 19,  60 => 15,  50 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 1,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
    <style>
        #{{ __SELF__ }} div {
            display: block;
            float: left;
            margin: 3px;
        }
    </style>
{% endput %}

<div style=\"width:100%\" id=\"{{ __SELF__ }}\">
    {% for image in gallery.images %}
        <div data-src=\"{{ image.path }}\" data-sub-html=\"<h4 style='color: white;'>{{ image.title }}</h4><p>{{ image.description }}</p>\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"{{ image.getThumb(width, height, resizer) }}\" alt=\"{{ image.title }}\" />
            </a>
        </div>
    {% endfor %}
</div>

{% put scripts %}
    <script>
         \$(document).ready(function() {
            var {{ __SELF__ }} = \$(\"#{{ __SELF__ }}\").lightGallery({
                // Elements
                thumbnail   : {{ thumbnail }},
                caption     : {{ caption }},
                desc        : {{ desc }},
                counter     : {{ counter }},
                controls    : {{ controls }}, 
                preload     : {{ preload }},

                // Transitions
                mode   : '{{ mode }}',
                useCSS : true,
                easing : 'linear',
                speed  : {{ speed }},

                // Navigation
                hideControlOnEnd : false,
                loop             : {{ loop }},
                auto             : {{ auto }},
                pause            : {{ pause }},
                escKey           : {{ escKey }},
                swipeThreshold    : 50,

                lang : { allPhotos: '{{ lang }}' },
            });
        });
    </script>
{% endput %}", "C:\\wamp64\\www\\demo/plugins/raviraj/rjgallery/components/gallery/default.htm", "");
    }
}
