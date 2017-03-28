<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_464d15d90536297ce15e9611368bbcf30883e92ea86c9c17cccd9167a386a253 extends Twig_Template
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
        $__internal_ccd83481b29c6c2ed8b17c3d77ed5abef1911ae97d5dd5a1b7d9c73078f81cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd83481b29c6c2ed8b17c3d77ed5abef1911ae97d5dd5a1b7d9c73078f81cd4->enter($__internal_ccd83481b29c6c2ed8b17c3d77ed5abef1911ae97d5dd5a1b7d9c73078f81cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_82d5008600df827647afc3adfa8cc2a81f856a518a5604e1b98ad5cef45de18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d5008600df827647afc3adfa8cc2a81f856a518a5604e1b98ad5cef45de18c->enter($__internal_82d5008600df827647afc3adfa8cc2a81f856a518a5604e1b98ad5cef45de18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ccd83481b29c6c2ed8b17c3d77ed5abef1911ae97d5dd5a1b7d9c73078f81cd4->leave($__internal_ccd83481b29c6c2ed8b17c3d77ed5abef1911ae97d5dd5a1b7d9c73078f81cd4_prof);

        
        $__internal_82d5008600df827647afc3adfa8cc2a81f856a518a5604e1b98ad5cef45de18c->leave($__internal_82d5008600df827647afc3adfa8cc2a81f856a518a5604e1b98ad5cef45de18c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
