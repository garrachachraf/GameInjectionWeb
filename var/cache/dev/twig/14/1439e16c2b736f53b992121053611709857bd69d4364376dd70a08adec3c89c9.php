<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3e7d094e9e837ccaad6c700db4b6f011b1c9e78b54ea2f9fd92032ee78a4b5e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4451f3ee77e15a7acf510c353c9b7763b0438e72b4a52c5fef7712781ac7cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4451f3ee77e15a7acf510c353c9b7763b0438e72b4a52c5fef7712781ac7cd6->enter($__internal_a4451f3ee77e15a7acf510c353c9b7763b0438e72b4a52c5fef7712781ac7cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ca71778bed7bdad30a29167839c64ad5f434db3a7848722167a408e822507832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca71778bed7bdad30a29167839c64ad5f434db3a7848722167a408e822507832->enter($__internal_ca71778bed7bdad30a29167839c64ad5f434db3a7848722167a408e822507832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4451f3ee77e15a7acf510c353c9b7763b0438e72b4a52c5fef7712781ac7cd6->leave($__internal_a4451f3ee77e15a7acf510c353c9b7763b0438e72b4a52c5fef7712781ac7cd6_prof);

        
        $__internal_ca71778bed7bdad30a29167839c64ad5f434db3a7848722167a408e822507832->leave($__internal_ca71778bed7bdad30a29167839c64ad5f434db3a7848722167a408e822507832_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9123cd1afc5577ef22c1ad00d7e8a819c0af2db193aeaeb772e53b9cf217e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9123cd1afc5577ef22c1ad00d7e8a819c0af2db193aeaeb772e53b9cf217e64->enter($__internal_f9123cd1afc5577ef22c1ad00d7e8a819c0af2db193aeaeb772e53b9cf217e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3a024647e9670572c7cf620b8248dd6a63de068a4b19c758d82bc9989142e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a024647e9670572c7cf620b8248dd6a63de068a4b19c758d82bc9989142e60->enter($__internal_a3a024647e9670572c7cf620b8248dd6a63de068a4b19c758d82bc9989142e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a3a024647e9670572c7cf620b8248dd6a63de068a4b19c758d82bc9989142e60->leave($__internal_a3a024647e9670572c7cf620b8248dd6a63de068a4b19c758d82bc9989142e60_prof);

        
        $__internal_f9123cd1afc5577ef22c1ad00d7e8a819c0af2db193aeaeb772e53b9cf217e64->leave($__internal_f9123cd1afc5577ef22c1ad00d7e8a819c0af2db193aeaeb772e53b9cf217e64_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcd6cfbefb901e87cc90438b3c5957407dbdd626be4576350330304596ff208c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd6cfbefb901e87cc90438b3c5957407dbdd626be4576350330304596ff208c->enter($__internal_fcd6cfbefb901e87cc90438b3c5957407dbdd626be4576350330304596ff208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa8b735e6e45fe6c98b8d698bd7908ed3bb9f6d67f580dbcca5a22370d647ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8b735e6e45fe6c98b8d698bd7908ed3bb9f6d67f580dbcca5a22370d647ea8->enter($__internal_aa8b735e6e45fe6c98b8d698bd7908ed3bb9f6d67f580dbcca5a22370d647ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_aa8b735e6e45fe6c98b8d698bd7908ed3bb9f6d67f580dbcca5a22370d647ea8->leave($__internal_aa8b735e6e45fe6c98b8d698bd7908ed3bb9f6d67f580dbcca5a22370d647ea8_prof);

        
        $__internal_fcd6cfbefb901e87cc90438b3c5957407dbdd626be4576350330304596ff208c->leave($__internal_fcd6cfbefb901e87cc90438b3c5957407dbdd626be4576350330304596ff208c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
