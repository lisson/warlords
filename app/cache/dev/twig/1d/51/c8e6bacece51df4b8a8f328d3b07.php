<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_1d51c8e6bacece51df4b8a8f328d3b07 extends Twig_Template
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
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  47 => 17,  274 => 248,  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  54 => 15,  18 => 1,  111 => 40,  85 => 33,  75 => 18,  63 => 22,  51 => 38,  38 => 8,  156 => 57,  148 => 51,  138 => 42,  122 => 24,  97 => 6,  84 => 54,  67 => 42,  60 => 25,  405 => 145,  399 => 144,  394 => 141,  386 => 138,  382 => 136,  378 => 134,  369 => 132,  365 => 131,  362 => 130,  360 => 129,  355 => 127,  352 => 126,  348 => 125,  338 => 117,  334 => 115,  332 => 114,  327 => 113,  323 => 112,  318 => 109,  312 => 105,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 95,  290 => 94,  287 => 93,  285 => 92,  280 => 89,  266 => 88,  262 => 86,  247 => 84,  239 => 82,  237 => 81,  232 => 79,  228 => 78,  221 => 75,  215 => 72,  211 => 71,  202 => 70,  200 => 69,  177 => 66,  174 => 65,  168 => 61,  166 => 60,  144 => 58,  140 => 56,  126 => 50,  123 => 44,  105 => 36,  36 => 6,  142 => 53,  139 => 51,  133 => 47,  124 => 45,  107 => 41,  101 => 37,  65 => 21,  59 => 18,  45 => 15,  89 => 28,  82 => 23,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 67,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 55,  130 => 48,  125 => 46,  119 => 23,  116 => 44,  112 => 42,  102 => 37,  98 => 36,  76 => 26,  73 => 24,  69 => 23,  32 => 8,  92 => 39,  86 => 6,  57 => 21,  24 => 3,  19 => 2,  42 => 11,  29 => 6,  23 => 3,  103 => 10,  91 => 58,  77 => 39,  74 => 46,  70 => 14,  66 => 12,  56 => 22,  25 => 4,  22 => 3,  17 => 1,  68 => 13,  61 => 21,  44 => 12,  20 => 2,  161 => 59,  153 => 58,  150 => 49,  147 => 48,  143 => 46,  137 => 55,  129 => 51,  121 => 41,  118 => 40,  113 => 20,  104 => 36,  99 => 33,  94 => 35,  81 => 18,  78 => 24,  72 => 25,  64 => 15,  53 => 15,  50 => 18,  48 => 15,  41 => 13,  39 => 12,  35 => 6,  33 => 9,  30 => 4,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 52,  149 => 53,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 47,  120 => 43,  117 => 42,  114 => 35,  109 => 37,  106 => 11,  100 => 30,  96 => 31,  93 => 30,  90 => 33,  87 => 28,  83 => 25,  79 => 40,  71 => 23,  62 => 11,  58 => 20,  55 => 20,  52 => 19,  49 => 16,  46 => 13,  43 => 13,  40 => 11,  37 => 10,  34 => 9,  31 => 6,  28 => 7,);
    }
}
