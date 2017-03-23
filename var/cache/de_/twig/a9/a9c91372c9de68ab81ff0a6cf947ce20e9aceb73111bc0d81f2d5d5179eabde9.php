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
        $__internal_f1635d3715305ea3707001bb1d9f85da123ea0a46be89f56e8cf9cc6a5c5d007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1635d3715305ea3707001bb1d9f85da123ea0a46be89f56e8cf9cc6a5c5d007->enter($__internal_f1635d3715305ea3707001bb1d9f85da123ea0a46be89f56e8cf9cc6a5c5d007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_efa568cb6b3388b337acb4eb7fd76de171747c7f3598b549911cde0549cdc30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa568cb6b3388b337acb4eb7fd76de171747c7f3598b549911cde0549cdc30c->enter($__internal_efa568cb6b3388b337acb4eb7fd76de171747c7f3598b549911cde0549cdc30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f1635d3715305ea3707001bb1d9f85da123ea0a46be89f56e8cf9cc6a5c5d007->leave($__internal_f1635d3715305ea3707001bb1d9f85da123ea0a46be89f56e8cf9cc6a5c5d007_prof);

        
        $__internal_efa568cb6b3388b337acb4eb7fd76de171747c7f3598b549911cde0549cdc30c->leave($__internal_efa568cb6b3388b337acb4eb7fd76de171747c7f3598b549911cde0549cdc30c_prof);

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
