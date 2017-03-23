<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3d39b66d3a381c2675182f0bc89f38e964de0a537953d3b52766430016baa399 extends Twig_Template
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
        $__internal_572a36588d0ba9981f8d322f9f5b918f749e3746d9a02562519da9b9b27f6663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572a36588d0ba9981f8d322f9f5b918f749e3746d9a02562519da9b9b27f6663->enter($__internal_572a36588d0ba9981f8d322f9f5b918f749e3746d9a02562519da9b9b27f6663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d870a10c6f26b07a4eb30a630403a795dd34d7d925bcf5c35fb8a40c504746fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d870a10c6f26b07a4eb30a630403a795dd34d7d925bcf5c35fb8a40c504746fc->enter($__internal_d870a10c6f26b07a4eb30a630403a795dd34d7d925bcf5c35fb8a40c504746fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572a36588d0ba9981f8d322f9f5b918f749e3746d9a02562519da9b9b27f6663->leave($__internal_572a36588d0ba9981f8d322f9f5b918f749e3746d9a02562519da9b9b27f6663_prof);

        
        $__internal_d870a10c6f26b07a4eb30a630403a795dd34d7d925bcf5c35fb8a40c504746fc->leave($__internal_d870a10c6f26b07a4eb30a630403a795dd34d7d925bcf5c35fb8a40c504746fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_187d5b17546d792c1678192cc33dbba10dfadb54e175d11a81cd4cc80a7728e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187d5b17546d792c1678192cc33dbba10dfadb54e175d11a81cd4cc80a7728e7->enter($__internal_187d5b17546d792c1678192cc33dbba10dfadb54e175d11a81cd4cc80a7728e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78c85b3b0ba61224d486f9d83873055615caf911412be529dcb37f440f9d9b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c85b3b0ba61224d486f9d83873055615caf911412be529dcb37f440f9d9b88->enter($__internal_78c85b3b0ba61224d486f9d83873055615caf911412be529dcb37f440f9d9b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_78c85b3b0ba61224d486f9d83873055615caf911412be529dcb37f440f9d9b88->leave($__internal_78c85b3b0ba61224d486f9d83873055615caf911412be529dcb37f440f9d9b88_prof);

        
        $__internal_187d5b17546d792c1678192cc33dbba10dfadb54e175d11a81cd4cc80a7728e7->leave($__internal_187d5b17546d792c1678192cc33dbba10dfadb54e175d11a81cd4cc80a7728e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9f0d599ae5e12d1e348dc90ef17db8d0c67d6ef0282a0424569eb3759dbf150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f0d599ae5e12d1e348dc90ef17db8d0c67d6ef0282a0424569eb3759dbf150->enter($__internal_e9f0d599ae5e12d1e348dc90ef17db8d0c67d6ef0282a0424569eb3759dbf150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a63a4b755452434298b61f3d13745ac021f21306186621053a05d17ac667bb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63a4b755452434298b61f3d13745ac021f21306186621053a05d17ac667bb06->enter($__internal_a63a4b755452434298b61f3d13745ac021f21306186621053a05d17ac667bb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a63a4b755452434298b61f3d13745ac021f21306186621053a05d17ac667bb06->leave($__internal_a63a4b755452434298b61f3d13745ac021f21306186621053a05d17ac667bb06_prof);

        
        $__internal_e9f0d599ae5e12d1e348dc90ef17db8d0c67d6ef0282a0424569eb3759dbf150->leave($__internal_e9f0d599ae5e12d1e348dc90ef17db8d0c67d6ef0282a0424569eb3759dbf150_prof);

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
