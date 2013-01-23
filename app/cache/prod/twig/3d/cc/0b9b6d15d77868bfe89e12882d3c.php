<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3dcc0b9b6d15d77868bfe89e12882d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <traces>
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $_trace_));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  20 => 2,  17 => 1,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 36,  128 => 35,  122 => 32,  119 => 31,  111 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 19,  68 => 15,  64 => 13,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  47 => 8,  43 => 7,  39 => 8,  35 => 5,  31 => 5,  28 => 4,);
    }
}
