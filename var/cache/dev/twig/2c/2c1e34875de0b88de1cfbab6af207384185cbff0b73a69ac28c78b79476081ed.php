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
        $__internal_b00cf4e39edbd5ca1b6a66b6ea9cfdd972a3e2c4b147991b06bb37d158555943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00cf4e39edbd5ca1b6a66b6ea9cfdd972a3e2c4b147991b06bb37d158555943->enter($__internal_b00cf4e39edbd5ca1b6a66b6ea9cfdd972a3e2c4b147991b06bb37d158555943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7a45eab5fec7671c31e99f33e88f72c92ec83eb5c4667a56702605489c59c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a45eab5fec7671c31e99f33e88f72c92ec83eb5c4667a56702605489c59c3bf->enter($__internal_7a45eab5fec7671c31e99f33e88f72c92ec83eb5c4667a56702605489c59c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00cf4e39edbd5ca1b6a66b6ea9cfdd972a3e2c4b147991b06bb37d158555943->leave($__internal_b00cf4e39edbd5ca1b6a66b6ea9cfdd972a3e2c4b147991b06bb37d158555943_prof);

        
        $__internal_7a45eab5fec7671c31e99f33e88f72c92ec83eb5c4667a56702605489c59c3bf->leave($__internal_7a45eab5fec7671c31e99f33e88f72c92ec83eb5c4667a56702605489c59c3bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73559bfa7993fb8bf7c3c52172a9853fe67eac3ab88edeb7573eee59259d137f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73559bfa7993fb8bf7c3c52172a9853fe67eac3ab88edeb7573eee59259d137f->enter($__internal_73559bfa7993fb8bf7c3c52172a9853fe67eac3ab88edeb7573eee59259d137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21c3b8d796fb70c4c41615230713d6f8c40a0c0d62ea4dee3622c06ac1ac7a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c3b8d796fb70c4c41615230713d6f8c40a0c0d62ea4dee3622c06ac1ac7a23->enter($__internal_21c3b8d796fb70c4c41615230713d6f8c40a0c0d62ea4dee3622c06ac1ac7a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_21c3b8d796fb70c4c41615230713d6f8c40a0c0d62ea4dee3622c06ac1ac7a23->leave($__internal_21c3b8d796fb70c4c41615230713d6f8c40a0c0d62ea4dee3622c06ac1ac7a23_prof);

        
        $__internal_73559bfa7993fb8bf7c3c52172a9853fe67eac3ab88edeb7573eee59259d137f->leave($__internal_73559bfa7993fb8bf7c3c52172a9853fe67eac3ab88edeb7573eee59259d137f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e99e70f84e7e3b30a7bab260e667ab14374402f75ab149332cc4dc76ba34b8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99e70f84e7e3b30a7bab260e667ab14374402f75ab149332cc4dc76ba34b8f1->enter($__internal_e99e70f84e7e3b30a7bab260e667ab14374402f75ab149332cc4dc76ba34b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0afa76297ac91720c31d7bf644aa8a5d8410f8fbdb7247ae8962567460dfa78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afa76297ac91720c31d7bf644aa8a5d8410f8fbdb7247ae8962567460dfa78f->enter($__internal_0afa76297ac91720c31d7bf644aa8a5d8410f8fbdb7247ae8962567460dfa78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0afa76297ac91720c31d7bf644aa8a5d8410f8fbdb7247ae8962567460dfa78f->leave($__internal_0afa76297ac91720c31d7bf644aa8a5d8410f8fbdb7247ae8962567460dfa78f_prof);

        
        $__internal_e99e70f84e7e3b30a7bab260e667ab14374402f75ab149332cc4dc76ba34b8f1->leave($__internal_e99e70f84e7e3b30a7bab260e667ab14374402f75ab149332cc4dc76ba34b8f1_prof);

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
