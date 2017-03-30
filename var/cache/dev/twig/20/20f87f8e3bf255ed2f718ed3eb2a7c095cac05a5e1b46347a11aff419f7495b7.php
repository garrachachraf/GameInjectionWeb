<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1fcb26837085d16de98825dfe586a8d14840982874c33f61f8b36eaace1a6553 extends Twig_Template
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
        $__internal_548a58e79817ed5e77a12c2e82cd1b45015868af825c24c97b4f8e5994ab197e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548a58e79817ed5e77a12c2e82cd1b45015868af825c24c97b4f8e5994ab197e->enter($__internal_548a58e79817ed5e77a12c2e82cd1b45015868af825c24c97b4f8e5994ab197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_27528e97f93e82b9a6d5fd0579e3281aec4a9e3fc3f0909e22d0d669efbe8465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27528e97f93e82b9a6d5fd0579e3281aec4a9e3fc3f0909e22d0d669efbe8465->enter($__internal_27528e97f93e82b9a6d5fd0579e3281aec4a9e3fc3f0909e22d0d669efbe8465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_548a58e79817ed5e77a12c2e82cd1b45015868af825c24c97b4f8e5994ab197e->leave($__internal_548a58e79817ed5e77a12c2e82cd1b45015868af825c24c97b4f8e5994ab197e_prof);

        
        $__internal_27528e97f93e82b9a6d5fd0579e3281aec4a9e3fc3f0909e22d0d669efbe8465->leave($__internal_27528e97f93e82b9a6d5fd0579e3281aec4a9e3fc3f0909e22d0d669efbe8465_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
