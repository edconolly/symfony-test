<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a4adc2294a040d3b2f835fbd14a3d48c extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  116 => 22,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  67 => 9,  26 => 4,  34 => 6,  112 => 20,  102 => 19,  78 => 15,  63 => 14,  61 => 13,  56 => 12,  38 => 7,  32 => 5,  22 => 4,  92 => 39,  86 => 6,  77 => 39,  46 => 14,  37 => 7,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  44 => 9,  27 => 3,  30 => 4,  55 => 9,  48 => 7,  45 => 7,  36 => 5,  23 => 3,  25 => 3,  20 => 2,  17 => 1,  201 => 70,  195 => 66,  187 => 62,  181 => 58,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 36,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 12,  57 => 8,  54 => 10,  50 => 11,  47 => 10,  43 => 6,  39 => 8,  35 => 5,  31 => 9,  28 => 4,);
    }
}
