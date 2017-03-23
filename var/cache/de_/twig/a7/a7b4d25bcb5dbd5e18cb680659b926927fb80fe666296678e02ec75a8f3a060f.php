<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_300efe34b20494022d57177d9ef0fef2545b0c25d19e716810470044c16fe6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_fd0847dbf88f807e3e73cb53d11e8db545a3ac5c5eb2b0a23f3999aa413d269e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0847dbf88f807e3e73cb53d11e8db545a3ac5c5eb2b0a23f3999aa413d269e->enter($__internal_fd0847dbf88f807e3e73cb53d11e8db545a3ac5c5eb2b0a23f3999aa413d269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_35ae174585e032abb3dd232083e30be4815883ad40991a000f11b2f6fdd6df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ae174585e032abb3dd232083e30be4815883ad40991a000f11b2f6fdd6df4f->enter($__internal_35ae174585e032abb3dd232083e30be4815883ad40991a000f11b2f6fdd6df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0847dbf88f807e3e73cb53d11e8db545a3ac5c5eb2b0a23f3999aa413d269e->leave($__internal_fd0847dbf88f807e3e73cb53d11e8db545a3ac5c5eb2b0a23f3999aa413d269e_prof);

        
        $__internal_35ae174585e032abb3dd232083e30be4815883ad40991a000f11b2f6fdd6df4f->leave($__internal_35ae174585e032abb3dd232083e30be4815883ad40991a000f11b2f6fdd6df4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e0bea2a5483724da58257b972a4b836a43da1dc72b5c7dbaaea60cefa478dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0bea2a5483724da58257b972a4b836a43da1dc72b5c7dbaaea60cefa478dfb->enter($__internal_5e0bea2a5483724da58257b972a4b836a43da1dc72b5c7dbaaea60cefa478dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9654ca2cf256d7c3c661df9d9a7c304cfbfb714a869d02d3dcb987dadde60b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9654ca2cf256d7c3c661df9d9a7c304cfbfb714a869d02d3dcb987dadde60b01->enter($__internal_9654ca2cf256d7c3c661df9d9a7c304cfbfb714a869d02d3dcb987dadde60b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9654ca2cf256d7c3c661df9d9a7c304cfbfb714a869d02d3dcb987dadde60b01->leave($__internal_9654ca2cf256d7c3c661df9d9a7c304cfbfb714a869d02d3dcb987dadde60b01_prof);

        
        $__internal_5e0bea2a5483724da58257b972a4b836a43da1dc72b5c7dbaaea60cefa478dfb->leave($__internal_5e0bea2a5483724da58257b972a4b836a43da1dc72b5c7dbaaea60cefa478dfb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11d0c9f4a6d4faeb89fdf6e0c0c976508193f916849007b5cbbe95313635fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11d0c9f4a6d4faeb89fdf6e0c0c976508193f916849007b5cbbe95313635fee->enter($__internal_b11d0c9f4a6d4faeb89fdf6e0c0c976508193f916849007b5cbbe95313635fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0904d6a5d4dde62e214fdc492fb797775a3153bc1dd3195e8e642f2aaf2755b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0904d6a5d4dde62e214fdc492fb797775a3153bc1dd3195e8e642f2aaf2755b->enter($__internal_d0904d6a5d4dde62e214fdc492fb797775a3153bc1dd3195e8e642f2aaf2755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0904d6a5d4dde62e214fdc492fb797775a3153bc1dd3195e8e642f2aaf2755b->leave($__internal_d0904d6a5d4dde62e214fdc492fb797775a3153bc1dd3195e8e642f2aaf2755b_prof);

        
        $__internal_b11d0c9f4a6d4faeb89fdf6e0c0c976508193f916849007b5cbbe95313635fee->leave($__internal_b11d0c9f4a6d4faeb89fdf6e0c0c976508193f916849007b5cbbe95313635fee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
