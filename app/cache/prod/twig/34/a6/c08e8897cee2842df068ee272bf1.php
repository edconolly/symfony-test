<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_34a6c08e8897cee2842df068ee272bf1 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_jsonencode_filter($this->getAttribute($_exception_, "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  174 => 60,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  107 => 31,  85 => 28,  82 => 27,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  67 => 24,  26 => 4,  34 => 6,  112 => 34,  102 => 19,  78 => 15,  63 => 23,  61 => 13,  56 => 12,  38 => 7,  32 => 11,  22 => 4,  92 => 39,  86 => 6,  77 => 26,  46 => 14,  37 => 7,  33 => 7,  29 => 6,  24 => 6,  19 => 1,  44 => 9,  27 => 3,  30 => 4,  55 => 9,  48 => 7,  45 => 7,  36 => 5,  23 => 3,  25 => 3,  20 => 2,  17 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 22,  57 => 8,  54 => 10,  50 => 11,  47 => 19,  43 => 6,  39 => 15,  35 => 5,  31 => 9,  28 => 4,);
    }
}
