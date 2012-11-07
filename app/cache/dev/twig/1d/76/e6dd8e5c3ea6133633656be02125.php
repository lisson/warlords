<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_1d76e6dd8e5c3ea6133633656be02125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configure.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/logo-small.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
            </div>
            <div id=\"symfony-content\">
                ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"version\">Symfony Standard Edition v.";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  358 => 152,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  278 => 114,  273 => 111,  271 => 110,  256 => 103,  252 => 101,  245 => 97,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  191 => 68,  181 => 63,  175 => 59,  167 => 56,  95 => 23,  80 => 19,  788 => 469,  785 => 468,  774 => 466,  770 => 465,  766 => 463,  753 => 462,  727 => 457,  724 => 456,  705 => 454,  688 => 453,  684 => 451,  680 => 450,  676 => 449,  672 => 448,  668 => 447,  664 => 446,  661 => 445,  659 => 444,  642 => 443,  631 => 442,  616 => 437,  611 => 435,  607 => 434,  604 => 433,  602 => 432,  588 => 431,  556 => 401,  538 => 398,  521 => 397,  518 => 396,  516 => 395,  511 => 393,  506 => 391,  205 => 76,  188 => 67,  179 => 87,  171 => 85,  164 => 82,  159 => 80,  154 => 77,  110 => 52,  183 => 68,  172 => 58,  165 => 64,  162 => 63,  132 => 54,  207 => 77,  186 => 66,  158 => 59,  88 => 41,  354 => 163,  345 => 160,  341 => 159,  333 => 157,  331 => 141,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 96,  226 => 87,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  180 => 64,  146 => 46,  108 => 42,  21 => 3,  47 => 15,  274 => 248,  260 => 236,  258 => 235,  255 => 234,  238 => 93,  236 => 97,  54 => 13,  18 => 1,  111 => 40,  85 => 40,  75 => 24,  63 => 22,  51 => 38,  38 => 8,  156 => 56,  148 => 75,  138 => 42,  122 => 24,  97 => 6,  84 => 29,  67 => 15,  60 => 27,  405 => 145,  399 => 144,  394 => 141,  386 => 160,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 153,  355 => 151,  352 => 150,  348 => 125,  338 => 158,  334 => 115,  332 => 114,  327 => 113,  323 => 138,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  266 => 107,  262 => 105,  247 => 84,  239 => 82,  237 => 81,  232 => 89,  228 => 78,  221 => 75,  215 => 83,  211 => 71,  202 => 94,  200 => 73,  177 => 66,  174 => 61,  168 => 60,  166 => 60,  144 => 58,  140 => 56,  126 => 45,  123 => 44,  105 => 27,  36 => 6,  142 => 73,  139 => 51,  133 => 47,  124 => 61,  107 => 51,  101 => 25,  65 => 14,  59 => 12,  45 => 8,  89 => 35,  82 => 33,  26 => 3,  223 => 88,  214 => 90,  210 => 78,  203 => 71,  199 => 83,  194 => 69,  192 => 79,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 61,  152 => 48,  145 => 58,  130 => 47,  125 => 52,  119 => 23,  116 => 44,  112 => 42,  102 => 39,  98 => 24,  76 => 25,  73 => 23,  69 => 20,  32 => 5,  92 => 39,  86 => 20,  57 => 15,  24 => 3,  19 => 1,  42 => 8,  29 => 6,  23 => 3,  103 => 10,  91 => 42,  77 => 18,  74 => 17,  70 => 22,  66 => 30,  56 => 25,  25 => 5,  22 => 3,  17 => 1,  68 => 20,  61 => 6,  44 => 12,  20 => 2,  161 => 81,  153 => 58,  150 => 49,  147 => 48,  143 => 57,  137 => 71,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 36,  99 => 45,  94 => 35,  81 => 28,  78 => 32,  72 => 21,  64 => 19,  53 => 9,  50 => 14,  48 => 12,  41 => 12,  39 => 7,  35 => 6,  33 => 7,  30 => 6,  27 => 3,  182 => 88,  176 => 86,  169 => 57,  163 => 54,  160 => 53,  155 => 60,  151 => 62,  149 => 47,  141 => 43,  136 => 55,  134 => 50,  131 => 43,  128 => 39,  120 => 51,  117 => 57,  114 => 31,  109 => 37,  106 => 41,  100 => 34,  96 => 32,  93 => 43,  90 => 21,  87 => 29,  83 => 25,  79 => 24,  71 => 16,  62 => 17,  58 => 15,  55 => 16,  52 => 17,  49 => 16,  46 => 11,  43 => 13,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
