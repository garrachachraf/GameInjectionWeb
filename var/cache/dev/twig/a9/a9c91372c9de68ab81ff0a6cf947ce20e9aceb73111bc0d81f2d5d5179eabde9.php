<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b34536ce551b99b09c2a76962dedca61cb5ac7df8dd3a89b2f1b99da485b2e1e extends Twig_Template
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
        $__internal_0dcb011f036362459b2fbd12869fa4b0bd2b87202cb26dc80e4ea76a9c52ea38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcb011f036362459b2fbd12869fa4b0bd2b87202cb26dc80e4ea76a9c52ea38->enter($__internal_0dcb011f036362459b2fbd12869fa4b0bd2b87202cb26dc80e4ea76a9c52ea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_454ca09ea4100fd77926371beb85e977166672b41cb7ebeba34be470a3e90b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454ca09ea4100fd77926371beb85e977166672b41cb7ebeba34be470a3e90b05->enter($__internal_454ca09ea4100fd77926371beb85e977166672b41cb7ebeba34be470a3e90b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_0dcb011f036362459b2fbd12869fa4b0bd2b87202cb26dc80e4ea76a9c52ea38->leave($__internal_0dcb011f036362459b2fbd12869fa4b0bd2b87202cb26dc80e4ea76a9c52ea38_prof);

        
        $__internal_454ca09ea4100fd77926371beb85e977166672b41cb7ebeba34be470a3e90b05->leave($__internal_454ca09ea4100fd77926371beb85e977166672b41cb7ebeba34be470a3e90b05_prof);

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
