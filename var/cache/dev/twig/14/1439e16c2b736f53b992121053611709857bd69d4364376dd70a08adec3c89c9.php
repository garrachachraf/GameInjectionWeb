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
        $__internal_0a2617f69a5e87c1e389629150c7f73bf45532e58e3a8b9449794975640cb07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2617f69a5e87c1e389629150c7f73bf45532e58e3a8b9449794975640cb07e->enter($__internal_0a2617f69a5e87c1e389629150c7f73bf45532e58e3a8b9449794975640cb07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_002b28b2fe2a119bb0e01270f66de412eceeb847ac2b28c1d2fdc85f6f997942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002b28b2fe2a119bb0e01270f66de412eceeb847ac2b28c1d2fdc85f6f997942->enter($__internal_002b28b2fe2a119bb0e01270f66de412eceeb847ac2b28c1d2fdc85f6f997942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2617f69a5e87c1e389629150c7f73bf45532e58e3a8b9449794975640cb07e->leave($__internal_0a2617f69a5e87c1e389629150c7f73bf45532e58e3a8b9449794975640cb07e_prof);

        
        $__internal_002b28b2fe2a119bb0e01270f66de412eceeb847ac2b28c1d2fdc85f6f997942->leave($__internal_002b28b2fe2a119bb0e01270f66de412eceeb847ac2b28c1d2fdc85f6f997942_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0028d4215cb13cb6c13686a749086ea0119fb6d6b33b89f7211a2195d973db6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0028d4215cb13cb6c13686a749086ea0119fb6d6b33b89f7211a2195d973db6f->enter($__internal_0028d4215cb13cb6c13686a749086ea0119fb6d6b33b89f7211a2195d973db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d2103c56246a2460f1ea1ed75012fd2a80edbc3418d2defcb08227094b7d4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2103c56246a2460f1ea1ed75012fd2a80edbc3418d2defcb08227094b7d4e3->enter($__internal_0d2103c56246a2460f1ea1ed75012fd2a80edbc3418d2defcb08227094b7d4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0d2103c56246a2460f1ea1ed75012fd2a80edbc3418d2defcb08227094b7d4e3->leave($__internal_0d2103c56246a2460f1ea1ed75012fd2a80edbc3418d2defcb08227094b7d4e3_prof);

        
        $__internal_0028d4215cb13cb6c13686a749086ea0119fb6d6b33b89f7211a2195d973db6f->leave($__internal_0028d4215cb13cb6c13686a749086ea0119fb6d6b33b89f7211a2195d973db6f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9da8877651d3d8d9a138bea97c58ffa6cd5ca64320622bde7fe3abfc7a95e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9da8877651d3d8d9a138bea97c58ffa6cd5ca64320622bde7fe3abfc7a95e9e->enter($__internal_a9da8877651d3d8d9a138bea97c58ffa6cd5ca64320622bde7fe3abfc7a95e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b2676a63a4fc198acd8066ea7efd3a93bbed52fa4f5558e0f109f11dbd6c82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2676a63a4fc198acd8066ea7efd3a93bbed52fa4f5558e0f109f11dbd6c82d->enter($__internal_1b2676a63a4fc198acd8066ea7efd3a93bbed52fa4f5558e0f109f11dbd6c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b2676a63a4fc198acd8066ea7efd3a93bbed52fa4f5558e0f109f11dbd6c82d->leave($__internal_1b2676a63a4fc198acd8066ea7efd3a93bbed52fa4f5558e0f109f11dbd6c82d_prof);

        
        $__internal_a9da8877651d3d8d9a138bea97c58ffa6cd5ca64320622bde7fe3abfc7a95e9e->leave($__internal_a9da8877651d3d8d9a138bea97c58ffa6cd5ca64320622bde7fe3abfc7a95e9e_prof);

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
