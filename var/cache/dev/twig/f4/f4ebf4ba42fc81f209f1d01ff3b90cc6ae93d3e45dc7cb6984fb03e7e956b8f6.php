<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3034fab307d6206fe81fa3648b5c8fdc4b196e43f9e72ec1fe3a9bda652980dd extends Twig_Template
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
        $__internal_c92edcd1887e6a134a10f2dd37d4aaded534c4a75d42c0e0bd7370005dd93f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92edcd1887e6a134a10f2dd37d4aaded534c4a75d42c0e0bd7370005dd93f02->enter($__internal_c92edcd1887e6a134a10f2dd37d4aaded534c4a75d42c0e0bd7370005dd93f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4a0b587dd951c8923ce294d03ea3ec959c547a4e80ae98951a137236e71b931c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0b587dd951c8923ce294d03ea3ec959c547a4e80ae98951a137236e71b931c->enter($__internal_4a0b587dd951c8923ce294d03ea3ec959c547a4e80ae98951a137236e71b931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c92edcd1887e6a134a10f2dd37d4aaded534c4a75d42c0e0bd7370005dd93f02->leave($__internal_c92edcd1887e6a134a10f2dd37d4aaded534c4a75d42c0e0bd7370005dd93f02_prof);

        
        $__internal_4a0b587dd951c8923ce294d03ea3ec959c547a4e80ae98951a137236e71b931c->leave($__internal_4a0b587dd951c8923ce294d03ea3ec959c547a4e80ae98951a137236e71b931c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
