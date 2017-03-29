<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_80ce0e11649bad8758fe2c33cfc520974d3da5e50e0f4679bd4dc8d7ecfc69ec extends Twig_Template
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
        $__internal_4ebbe8599332f5b382f276521b4eaa15a91b87e4571de2106e9e154f13fd5b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebbe8599332f5b382f276521b4eaa15a91b87e4571de2106e9e154f13fd5b46->enter($__internal_4ebbe8599332f5b382f276521b4eaa15a91b87e4571de2106e9e154f13fd5b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2daa0a95b0d8c631cf3a6ae7fddb5054dc43a7d81349e0c3e7f97365ae5152c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daa0a95b0d8c631cf3a6ae7fddb5054dc43a7d81349e0c3e7f97365ae5152c7->enter($__internal_2daa0a95b0d8c631cf3a6ae7fddb5054dc43a7d81349e0c3e7f97365ae5152c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebbe8599332f5b382f276521b4eaa15a91b87e4571de2106e9e154f13fd5b46->leave($__internal_4ebbe8599332f5b382f276521b4eaa15a91b87e4571de2106e9e154f13fd5b46_prof);

        
        $__internal_2daa0a95b0d8c631cf3a6ae7fddb5054dc43a7d81349e0c3e7f97365ae5152c7->leave($__internal_2daa0a95b0d8c631cf3a6ae7fddb5054dc43a7d81349e0c3e7f97365ae5152c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a77bf5157150c11c4e8ad402a2379970053cdc03c21b9bda6a4f99d9e7cd2146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77bf5157150c11c4e8ad402a2379970053cdc03c21b9bda6a4f99d9e7cd2146->enter($__internal_a77bf5157150c11c4e8ad402a2379970053cdc03c21b9bda6a4f99d9e7cd2146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f719a47ee111f9e3dfe34ee8129847e39debaa1cb05c16dd92e2378c7ad1049c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f719a47ee111f9e3dfe34ee8129847e39debaa1cb05c16dd92e2378c7ad1049c->enter($__internal_f719a47ee111f9e3dfe34ee8129847e39debaa1cb05c16dd92e2378c7ad1049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f719a47ee111f9e3dfe34ee8129847e39debaa1cb05c16dd92e2378c7ad1049c->leave($__internal_f719a47ee111f9e3dfe34ee8129847e39debaa1cb05c16dd92e2378c7ad1049c_prof);

        
        $__internal_a77bf5157150c11c4e8ad402a2379970053cdc03c21b9bda6a4f99d9e7cd2146->leave($__internal_a77bf5157150c11c4e8ad402a2379970053cdc03c21b9bda6a4f99d9e7cd2146_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bc6fbdc0e13eb882bffda3341b3345d1d3d1d6608fd0f8a5a5633303cb9aece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc6fbdc0e13eb882bffda3341b3345d1d3d1d6608fd0f8a5a5633303cb9aece->enter($__internal_8bc6fbdc0e13eb882bffda3341b3345d1d3d1d6608fd0f8a5a5633303cb9aece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f4fc0c9ef4082b2aeb09c992796d95181fb5a81b962b41e7a19aeabfd3e910c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4fc0c9ef4082b2aeb09c992796d95181fb5a81b962b41e7a19aeabfd3e910c->enter($__internal_1f4fc0c9ef4082b2aeb09c992796d95181fb5a81b962b41e7a19aeabfd3e910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f4fc0c9ef4082b2aeb09c992796d95181fb5a81b962b41e7a19aeabfd3e910c->leave($__internal_1f4fc0c9ef4082b2aeb09c992796d95181fb5a81b962b41e7a19aeabfd3e910c_prof);

        
        $__internal_8bc6fbdc0e13eb882bffda3341b3345d1d3d1d6608fd0f8a5a5633303cb9aece->leave($__internal_8bc6fbdc0e13eb882bffda3341b3345d1d3d1d6608fd0f8a5a5633303cb9aece_prof);

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
