<?php

/* ::base.html.twig */
class __TwigTemplate_819a78539511a2978f53f630913ad4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  42 => 11,  40 => 10,  21 => 1,  52 => 14,  453 => 145,  447 => 144,  442 => 141,  434 => 138,  430 => 136,  426 => 134,  416 => 132,  409 => 131,  406 => 130,  401 => 129,  395 => 127,  392 => 126,  387 => 125,  377 => 117,  373 => 115,  370 => 114,  364 => 113,  359 => 112,  354 => 109,  348 => 105,  345 => 104,  341 => 103,  338 => 102,  333 => 99,  327 => 95,  324 => 94,  320 => 93,  317 => 92,  312 => 89,  298 => 88,  294 => 86,  279 => 84,  269 => 82,  266 => 81,  260 => 79,  255 => 78,  247 => 75,  241 => 72,  237 => 71,  220 => 69,  186 => 61,  183 => 60,  159 => 58,  152 => 55,  144 => 51,  141 => 50,  132 => 43,  129 => 42,  120 => 37,  74 => 19,  70 => 15,  49 => 13,  169 => 58,  161 => 55,  157 => 53,  150 => 50,  136 => 44,  121 => 42,  115 => 36,  109 => 32,  99 => 34,  96 => 33,  81 => 24,  73 => 20,  69 => 19,  62 => 10,  41 => 7,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 70,  218 => 80,  216 => 79,  213 => 67,  210 => 77,  207 => 76,  198 => 71,  192 => 65,  177 => 59,  174 => 60,  171 => 59,  164 => 55,  160 => 54,  155 => 56,  153 => 51,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  107 => 31,  85 => 28,  82 => 21,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 25,  87 => 28,  83 => 14,  67 => 11,  26 => 4,  34 => 6,  112 => 34,  102 => 19,  78 => 23,  63 => 23,  61 => 13,  56 => 10,  38 => 6,  32 => 11,  22 => 4,  92 => 39,  86 => 6,  77 => 26,  46 => 7,  37 => 7,  33 => 7,  29 => 7,  24 => 6,  19 => 1,  44 => 12,  27 => 5,  30 => 4,  55 => 9,  48 => 7,  45 => 12,  36 => 6,  23 => 3,  25 => 3,  20 => 2,  17 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 31,  103 => 19,  100 => 28,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 11,  57 => 6,  54 => 12,  50 => 10,  47 => 9,  43 => 6,  39 => 9,  35 => 5,  31 => 6,  28 => 3,);
    }
}
