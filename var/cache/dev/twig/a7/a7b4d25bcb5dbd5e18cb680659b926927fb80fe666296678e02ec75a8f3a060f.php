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
        $__internal_237aa2189e7463cdd66807e08d75519b75b08f43839725e5b5628b67e8927f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237aa2189e7463cdd66807e08d75519b75b08f43839725e5b5628b67e8927f42->enter($__internal_237aa2189e7463cdd66807e08d75519b75b08f43839725e5b5628b67e8927f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3cf1ea6dd38d7e737215612f328970aa140f15bac697092853db8f1dc9a9badb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf1ea6dd38d7e737215612f328970aa140f15bac697092853db8f1dc9a9badb->enter($__internal_3cf1ea6dd38d7e737215612f328970aa140f15bac697092853db8f1dc9a9badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237aa2189e7463cdd66807e08d75519b75b08f43839725e5b5628b67e8927f42->leave($__internal_237aa2189e7463cdd66807e08d75519b75b08f43839725e5b5628b67e8927f42_prof);

        
        $__internal_3cf1ea6dd38d7e737215612f328970aa140f15bac697092853db8f1dc9a9badb->leave($__internal_3cf1ea6dd38d7e737215612f328970aa140f15bac697092853db8f1dc9a9badb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_621317c22787624347b09301e58fb9713dfa3a402705909983ed099b3fe600cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621317c22787624347b09301e58fb9713dfa3a402705909983ed099b3fe600cc->enter($__internal_621317c22787624347b09301e58fb9713dfa3a402705909983ed099b3fe600cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_021cff3c9e1c8ffb4b87a85844ef256ae6afda7e8eb280924e693537e42b46d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021cff3c9e1c8ffb4b87a85844ef256ae6afda7e8eb280924e693537e42b46d8->enter($__internal_021cff3c9e1c8ffb4b87a85844ef256ae6afda7e8eb280924e693537e42b46d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_021cff3c9e1c8ffb4b87a85844ef256ae6afda7e8eb280924e693537e42b46d8->leave($__internal_021cff3c9e1c8ffb4b87a85844ef256ae6afda7e8eb280924e693537e42b46d8_prof);

        
        $__internal_621317c22787624347b09301e58fb9713dfa3a402705909983ed099b3fe600cc->leave($__internal_621317c22787624347b09301e58fb9713dfa3a402705909983ed099b3fe600cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6cd6b402acb3f52c02df40ab25af52c9907dc0ab7979babdfd9be75f6f33597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cd6b402acb3f52c02df40ab25af52c9907dc0ab7979babdfd9be75f6f33597->enter($__internal_c6cd6b402acb3f52c02df40ab25af52c9907dc0ab7979babdfd9be75f6f33597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9f13272d39c29ded22df1a58462f88646b34bd2b1310f8ed4706d5264f64218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f13272d39c29ded22df1a58462f88646b34bd2b1310f8ed4706d5264f64218->enter($__internal_c9f13272d39c29ded22df1a58462f88646b34bd2b1310f8ed4706d5264f64218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9f13272d39c29ded22df1a58462f88646b34bd2b1310f8ed4706d5264f64218->leave($__internal_c9f13272d39c29ded22df1a58462f88646b34bd2b1310f8ed4706d5264f64218_prof);

        
        $__internal_c6cd6b402acb3f52c02df40ab25af52c9907dc0ab7979babdfd9be75f6f33597->leave($__internal_c6cd6b402acb3f52c02df40ab25af52c9907dc0ab7979babdfd9be75f6f33597_prof);

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
