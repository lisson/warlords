<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0cd08cb8fe416c4e495705136a25ae75 extends Twig_Template
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
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  78 => 15,  61 => 13,  56 => 12,  38 => 7,  22 => 4,  34 => 6,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  174 => 60,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  112 => 20,  107 => 31,  85 => 28,  82 => 27,  63 => 14,  32 => 5,  25 => 3,  92 => 39,  86 => 6,  77 => 26,  46 => 14,  37 => 7,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  44 => 9,  30 => 4,  27 => 3,  55 => 9,  48 => 7,  36 => 5,  123 => 24,  116 => 36,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  67 => 24,  45 => 6,  26 => 4,  23 => 3,  20 => 2,  17 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 40,  68 => 15,  64 => 13,  60 => 22,  57 => 22,  54 => 10,  50 => 11,  47 => 10,  43 => 6,  39 => 8,  35 => 4,  31 => 9,  28 => 4,);
    }
}
