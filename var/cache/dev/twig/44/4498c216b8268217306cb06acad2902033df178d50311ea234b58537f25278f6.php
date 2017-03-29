<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_345e5968c98773c71cda1449dfa30a87bed26411ba262e28dded41a9e65eddee extends Twig_Template
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
        $__internal_11c37b7ad58a209e6da83ac1b74cea67586766d95e7ae1e4304c6a3b7ccfbae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c37b7ad58a209e6da83ac1b74cea67586766d95e7ae1e4304c6a3b7ccfbae2->enter($__internal_11c37b7ad58a209e6da83ac1b74cea67586766d95e7ae1e4304c6a3b7ccfbae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f99c4bbf21396defb01618c99894a0b077b19f1af17c8f62c97536b97ddfba87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99c4bbf21396defb01618c99894a0b077b19f1af17c8f62c97536b97ddfba87->enter($__internal_f99c4bbf21396defb01618c99894a0b077b19f1af17c8f62c97536b97ddfba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c37b7ad58a209e6da83ac1b74cea67586766d95e7ae1e4304c6a3b7ccfbae2->leave($__internal_11c37b7ad58a209e6da83ac1b74cea67586766d95e7ae1e4304c6a3b7ccfbae2_prof);

        
        $__internal_f99c4bbf21396defb01618c99894a0b077b19f1af17c8f62c97536b97ddfba87->leave($__internal_f99c4bbf21396defb01618c99894a0b077b19f1af17c8f62c97536b97ddfba87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e30a9effa6e7f9990fb0d463474e3fe84c4976ead1cb43584a5e280ccce102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e30a9effa6e7f9990fb0d463474e3fe84c4976ead1cb43584a5e280ccce102e->enter($__internal_0e30a9effa6e7f9990fb0d463474e3fe84c4976ead1cb43584a5e280ccce102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b201aa46133a9ad9431f6747f79974f4d18f74b73733cca6e99cfa818e3f4b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b201aa46133a9ad9431f6747f79974f4d18f74b73733cca6e99cfa818e3f4b65->enter($__internal_b201aa46133a9ad9431f6747f79974f4d18f74b73733cca6e99cfa818e3f4b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b201aa46133a9ad9431f6747f79974f4d18f74b73733cca6e99cfa818e3f4b65->leave($__internal_b201aa46133a9ad9431f6747f79974f4d18f74b73733cca6e99cfa818e3f4b65_prof);

        
        $__internal_0e30a9effa6e7f9990fb0d463474e3fe84c4976ead1cb43584a5e280ccce102e->leave($__internal_0e30a9effa6e7f9990fb0d463474e3fe84c4976ead1cb43584a5e280ccce102e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b189d3689e50e0c216b8e939f8d5674be70c904cffec1eb44822de6d873e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b189d3689e50e0c216b8e939f8d5674be70c904cffec1eb44822de6d873e1b->enter($__internal_41b189d3689e50e0c216b8e939f8d5674be70c904cffec1eb44822de6d873e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6af2416243492740cfbbaca97a8178d96e90758e6b2b649340f572e51cca0f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af2416243492740cfbbaca97a8178d96e90758e6b2b649340f572e51cca0f98->enter($__internal_6af2416243492740cfbbaca97a8178d96e90758e6b2b649340f572e51cca0f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6af2416243492740cfbbaca97a8178d96e90758e6b2b649340f572e51cca0f98->leave($__internal_6af2416243492740cfbbaca97a8178d96e90758e6b2b649340f572e51cca0f98_prof);

        
        $__internal_41b189d3689e50e0c216b8e939f8d5674be70c904cffec1eb44822de6d873e1b->leave($__internal_41b189d3689e50e0c216b8e939f8d5674be70c904cffec1eb44822de6d873e1b_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
