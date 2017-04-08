<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e405a60c4a102f82a48a15bc33bb425e2c7c8f9d79abaa01578e9a36a4e1ef87 extends Twig_Template
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
        $__internal_f80ee3927b5300f012069facc2fe69c07e2215a75a2ca741163b92281290feac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80ee3927b5300f012069facc2fe69c07e2215a75a2ca741163b92281290feac->enter($__internal_f80ee3927b5300f012069facc2fe69c07e2215a75a2ca741163b92281290feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9f132ec0fafa7446c57ff1a25ca72dcc3604224ff8d67233c88b2cf0de71cd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f132ec0fafa7446c57ff1a25ca72dcc3604224ff8d67233c88b2cf0de71cd06->enter($__internal_9f132ec0fafa7446c57ff1a25ca72dcc3604224ff8d67233c88b2cf0de71cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80ee3927b5300f012069facc2fe69c07e2215a75a2ca741163b92281290feac->leave($__internal_f80ee3927b5300f012069facc2fe69c07e2215a75a2ca741163b92281290feac_prof);

        
        $__internal_9f132ec0fafa7446c57ff1a25ca72dcc3604224ff8d67233c88b2cf0de71cd06->leave($__internal_9f132ec0fafa7446c57ff1a25ca72dcc3604224ff8d67233c88b2cf0de71cd06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_315ce22b6ff1bfb93bc75b1af0b6c63f14f56f66d8b268ad316703c0a423bfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315ce22b6ff1bfb93bc75b1af0b6c63f14f56f66d8b268ad316703c0a423bfd4->enter($__internal_315ce22b6ff1bfb93bc75b1af0b6c63f14f56f66d8b268ad316703c0a423bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_737f93db965dbfef43b7eb9126f9ae7377668b12a3b68076ea1616a30cc11618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737f93db965dbfef43b7eb9126f9ae7377668b12a3b68076ea1616a30cc11618->enter($__internal_737f93db965dbfef43b7eb9126f9ae7377668b12a3b68076ea1616a30cc11618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_737f93db965dbfef43b7eb9126f9ae7377668b12a3b68076ea1616a30cc11618->leave($__internal_737f93db965dbfef43b7eb9126f9ae7377668b12a3b68076ea1616a30cc11618_prof);

        
        $__internal_315ce22b6ff1bfb93bc75b1af0b6c63f14f56f66d8b268ad316703c0a423bfd4->leave($__internal_315ce22b6ff1bfb93bc75b1af0b6c63f14f56f66d8b268ad316703c0a423bfd4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_349c3efd4a7ae7bed19a1dd9b0a1095b30555838832939ff3eb12f6d818d4369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349c3efd4a7ae7bed19a1dd9b0a1095b30555838832939ff3eb12f6d818d4369->enter($__internal_349c3efd4a7ae7bed19a1dd9b0a1095b30555838832939ff3eb12f6d818d4369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0809cea2ed75e59cd33f3c0ff7de9da6475a3fd2921b5907581547ef804c44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0809cea2ed75e59cd33f3c0ff7de9da6475a3fd2921b5907581547ef804c44a->enter($__internal_c0809cea2ed75e59cd33f3c0ff7de9da6475a3fd2921b5907581547ef804c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0809cea2ed75e59cd33f3c0ff7de9da6475a3fd2921b5907581547ef804c44a->leave($__internal_c0809cea2ed75e59cd33f3c0ff7de9da6475a3fd2921b5907581547ef804c44a_prof);

        
        $__internal_349c3efd4a7ae7bed19a1dd9b0a1095b30555838832939ff3eb12f6d818d4369->leave($__internal_349c3efd4a7ae7bed19a1dd9b0a1095b30555838832939ff3eb12f6d818d4369_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
