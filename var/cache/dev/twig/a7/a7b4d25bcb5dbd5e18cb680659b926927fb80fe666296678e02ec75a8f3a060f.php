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
        $__internal_c7c74b4cef801dea665556b5366a4fbc80f3aa596fc66a93fb95f985e716f57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c74b4cef801dea665556b5366a4fbc80f3aa596fc66a93fb95f985e716f57c->enter($__internal_c7c74b4cef801dea665556b5366a4fbc80f3aa596fc66a93fb95f985e716f57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_44a08126b75a0431bb0d724443a976f86149fb2f9a086ef80bd47a6d0132b190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a08126b75a0431bb0d724443a976f86149fb2f9a086ef80bd47a6d0132b190->enter($__internal_44a08126b75a0431bb0d724443a976f86149fb2f9a086ef80bd47a6d0132b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c74b4cef801dea665556b5366a4fbc80f3aa596fc66a93fb95f985e716f57c->leave($__internal_c7c74b4cef801dea665556b5366a4fbc80f3aa596fc66a93fb95f985e716f57c_prof);

        
        $__internal_44a08126b75a0431bb0d724443a976f86149fb2f9a086ef80bd47a6d0132b190->leave($__internal_44a08126b75a0431bb0d724443a976f86149fb2f9a086ef80bd47a6d0132b190_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3f9351bbe64ba46d87a7183643b324dd8cd287eb8d9e7d654ad6528da35432a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f9351bbe64ba46d87a7183643b324dd8cd287eb8d9e7d654ad6528da35432a->enter($__internal_a3f9351bbe64ba46d87a7183643b324dd8cd287eb8d9e7d654ad6528da35432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db0de97db3f46ff2218f0797ddc81fb77137dc24cd00860a64e07fc36a22891c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0de97db3f46ff2218f0797ddc81fb77137dc24cd00860a64e07fc36a22891c->enter($__internal_db0de97db3f46ff2218f0797ddc81fb77137dc24cd00860a64e07fc36a22891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_db0de97db3f46ff2218f0797ddc81fb77137dc24cd00860a64e07fc36a22891c->leave($__internal_db0de97db3f46ff2218f0797ddc81fb77137dc24cd00860a64e07fc36a22891c_prof);

        
        $__internal_a3f9351bbe64ba46d87a7183643b324dd8cd287eb8d9e7d654ad6528da35432a->leave($__internal_a3f9351bbe64ba46d87a7183643b324dd8cd287eb8d9e7d654ad6528da35432a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_41dd63bbd9cf4fac9e8db472fa28ea3bf5307f45be893a7ebbd005dd62dec554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dd63bbd9cf4fac9e8db472fa28ea3bf5307f45be893a7ebbd005dd62dec554->enter($__internal_41dd63bbd9cf4fac9e8db472fa28ea3bf5307f45be893a7ebbd005dd62dec554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65bc1d5d1dcd99027f3823420336c0efa78979a681c22329a54848fbd3ef10c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bc1d5d1dcd99027f3823420336c0efa78979a681c22329a54848fbd3ef10c8->enter($__internal_65bc1d5d1dcd99027f3823420336c0efa78979a681c22329a54848fbd3ef10c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65bc1d5d1dcd99027f3823420336c0efa78979a681c22329a54848fbd3ef10c8->leave($__internal_65bc1d5d1dcd99027f3823420336c0efa78979a681c22329a54848fbd3ef10c8_prof);

        
        $__internal_41dd63bbd9cf4fac9e8db472fa28ea3bf5307f45be893a7ebbd005dd62dec554->leave($__internal_41dd63bbd9cf4fac9e8db472fa28ea3bf5307f45be893a7ebbd005dd62dec554_prof);

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
