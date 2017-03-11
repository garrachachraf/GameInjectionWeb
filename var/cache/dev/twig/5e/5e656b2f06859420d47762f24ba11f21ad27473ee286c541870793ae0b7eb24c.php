<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
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
        $__internal_893ff0afab9b4293cb8b130ee90746af5e3ea3f0606245174d54c46db4500c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893ff0afab9b4293cb8b130ee90746af5e3ea3f0606245174d54c46db4500c3d->enter($__internal_893ff0afab9b4293cb8b130ee90746af5e3ea3f0606245174d54c46db4500c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_14512d29c16bbcb7180debc9c5867b74c509f6377529f018f652021273f5bd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14512d29c16bbcb7180debc9c5867b74c509f6377529f018f652021273f5bd54->enter($__internal_14512d29c16bbcb7180debc9c5867b74c509f6377529f018f652021273f5bd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893ff0afab9b4293cb8b130ee90746af5e3ea3f0606245174d54c46db4500c3d->leave($__internal_893ff0afab9b4293cb8b130ee90746af5e3ea3f0606245174d54c46db4500c3d_prof);

        
        $__internal_14512d29c16bbcb7180debc9c5867b74c509f6377529f018f652021273f5bd54->leave($__internal_14512d29c16bbcb7180debc9c5867b74c509f6377529f018f652021273f5bd54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8559621184cc2c6ae7771a9c5ea0e2e894327322f7b76af64f2ad40491e1d78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8559621184cc2c6ae7771a9c5ea0e2e894327322f7b76af64f2ad40491e1d78e->enter($__internal_8559621184cc2c6ae7771a9c5ea0e2e894327322f7b76af64f2ad40491e1d78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6d899024a6215ad030fb650364f61e5532be30dde35dd71df6ea90dee8af5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d899024a6215ad030fb650364f61e5532be30dde35dd71df6ea90dee8af5a0->enter($__internal_f6d899024a6215ad030fb650364f61e5532be30dde35dd71df6ea90dee8af5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f6d899024a6215ad030fb650364f61e5532be30dde35dd71df6ea90dee8af5a0->leave($__internal_f6d899024a6215ad030fb650364f61e5532be30dde35dd71df6ea90dee8af5a0_prof);

        
        $__internal_8559621184cc2c6ae7771a9c5ea0e2e894327322f7b76af64f2ad40491e1d78e->leave($__internal_8559621184cc2c6ae7771a9c5ea0e2e894327322f7b76af64f2ad40491e1d78e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf83e7514e677b3eb3c7f8b91220c441c8e0371015043ec993c03393609a05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf83e7514e677b3eb3c7f8b91220c441c8e0371015043ec993c03393609a05e->enter($__internal_cdf83e7514e677b3eb3c7f8b91220c441c8e0371015043ec993c03393609a05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f89d2c90071603327ec0847e3089aa7c3464427f436da3059e66fee4d8b98fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89d2c90071603327ec0847e3089aa7c3464427f436da3059e66fee4d8b98fea->enter($__internal_f89d2c90071603327ec0847e3089aa7c3464427f436da3059e66fee4d8b98fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f89d2c90071603327ec0847e3089aa7c3464427f436da3059e66fee4d8b98fea->leave($__internal_f89d2c90071603327ec0847e3089aa7c3464427f436da3059e66fee4d8b98fea_prof);

        
        $__internal_cdf83e7514e677b3eb3c7f8b91220c441c8e0371015043ec993c03393609a05e->leave($__internal_cdf83e7514e677b3eb3c7f8b91220c441c8e0371015043ec993c03393609a05e_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
