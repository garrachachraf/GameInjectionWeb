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
        $__internal_8851910263b15f2cc71a6464ca14f4256bd1e84e1db52028357b37d26de572dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8851910263b15f2cc71a6464ca14f4256bd1e84e1db52028357b37d26de572dc->enter($__internal_8851910263b15f2cc71a6464ca14f4256bd1e84e1db52028357b37d26de572dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cd8e04d8a6ec9b5e0b36ae3e88e7482f59847470476d82d59bcbf31a0129c9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8e04d8a6ec9b5e0b36ae3e88e7482f59847470476d82d59bcbf31a0129c9c3->enter($__internal_cd8e04d8a6ec9b5e0b36ae3e88e7482f59847470476d82d59bcbf31a0129c9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8851910263b15f2cc71a6464ca14f4256bd1e84e1db52028357b37d26de572dc->leave($__internal_8851910263b15f2cc71a6464ca14f4256bd1e84e1db52028357b37d26de572dc_prof);

        
        $__internal_cd8e04d8a6ec9b5e0b36ae3e88e7482f59847470476d82d59bcbf31a0129c9c3->leave($__internal_cd8e04d8a6ec9b5e0b36ae3e88e7482f59847470476d82d59bcbf31a0129c9c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f27a55e562cbd92e1ab6c4ef22a180e8bd08b6e44ddce3cd4b11736466a66bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f27a55e562cbd92e1ab6c4ef22a180e8bd08b6e44ddce3cd4b11736466a66bc->enter($__internal_0f27a55e562cbd92e1ab6c4ef22a180e8bd08b6e44ddce3cd4b11736466a66bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4641ab93136cf2f6882cadc476cd4ca8bd30b0b11afb7279d54b24c6c7dea45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4641ab93136cf2f6882cadc476cd4ca8bd30b0b11afb7279d54b24c6c7dea45->enter($__internal_f4641ab93136cf2f6882cadc476cd4ca8bd30b0b11afb7279d54b24c6c7dea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f4641ab93136cf2f6882cadc476cd4ca8bd30b0b11afb7279d54b24c6c7dea45->leave($__internal_f4641ab93136cf2f6882cadc476cd4ca8bd30b0b11afb7279d54b24c6c7dea45_prof);

        
        $__internal_0f27a55e562cbd92e1ab6c4ef22a180e8bd08b6e44ddce3cd4b11736466a66bc->leave($__internal_0f27a55e562cbd92e1ab6c4ef22a180e8bd08b6e44ddce3cd4b11736466a66bc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d473a38a51b645e491c4cd10050a90b9da33b7329e959e8252500418406ae96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d473a38a51b645e491c4cd10050a90b9da33b7329e959e8252500418406ae96->enter($__internal_6d473a38a51b645e491c4cd10050a90b9da33b7329e959e8252500418406ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34a560d16377bf33a6d1c8dd013fceb90c77c8d54b5b22e1946eb124e870bf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a560d16377bf33a6d1c8dd013fceb90c77c8d54b5b22e1946eb124e870bf23->enter($__internal_34a560d16377bf33a6d1c8dd013fceb90c77c8d54b5b22e1946eb124e870bf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34a560d16377bf33a6d1c8dd013fceb90c77c8d54b5b22e1946eb124e870bf23->leave($__internal_34a560d16377bf33a6d1c8dd013fceb90c77c8d54b5b22e1946eb124e870bf23_prof);

        
        $__internal_6d473a38a51b645e491c4cd10050a90b9da33b7329e959e8252500418406ae96->leave($__internal_6d473a38a51b645e491c4cd10050a90b9da33b7329e959e8252500418406ae96_prof);

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
