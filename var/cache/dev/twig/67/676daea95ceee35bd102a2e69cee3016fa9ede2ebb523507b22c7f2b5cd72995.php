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
        $__internal_263d4586ee7ba325a2689b0fddf22000803660ef5d19225cafcba657c181ac18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263d4586ee7ba325a2689b0fddf22000803660ef5d19225cafcba657c181ac18->enter($__internal_263d4586ee7ba325a2689b0fddf22000803660ef5d19225cafcba657c181ac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_02279043497e2b7dad7cc70194b8b2d8d7cd14f8cd43b59dc591af7701594ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02279043497e2b7dad7cc70194b8b2d8d7cd14f8cd43b59dc591af7701594ea4->enter($__internal_02279043497e2b7dad7cc70194b8b2d8d7cd14f8cd43b59dc591af7701594ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263d4586ee7ba325a2689b0fddf22000803660ef5d19225cafcba657c181ac18->leave($__internal_263d4586ee7ba325a2689b0fddf22000803660ef5d19225cafcba657c181ac18_prof);

        
        $__internal_02279043497e2b7dad7cc70194b8b2d8d7cd14f8cd43b59dc591af7701594ea4->leave($__internal_02279043497e2b7dad7cc70194b8b2d8d7cd14f8cd43b59dc591af7701594ea4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50eae930396ac17a3bd082485e1e099b5a45f66f59d5f33610be47cba8766dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eae930396ac17a3bd082485e1e099b5a45f66f59d5f33610be47cba8766dba->enter($__internal_50eae930396ac17a3bd082485e1e099b5a45f66f59d5f33610be47cba8766dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34141489c5f14541524395f67b112acabd8dd2fc6f62cc96c64fa8ee95156116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34141489c5f14541524395f67b112acabd8dd2fc6f62cc96c64fa8ee95156116->enter($__internal_34141489c5f14541524395f67b112acabd8dd2fc6f62cc96c64fa8ee95156116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_34141489c5f14541524395f67b112acabd8dd2fc6f62cc96c64fa8ee95156116->leave($__internal_34141489c5f14541524395f67b112acabd8dd2fc6f62cc96c64fa8ee95156116_prof);

        
        $__internal_50eae930396ac17a3bd082485e1e099b5a45f66f59d5f33610be47cba8766dba->leave($__internal_50eae930396ac17a3bd082485e1e099b5a45f66f59d5f33610be47cba8766dba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fae8cd5af1f2d790129a5bd32f0f7d0be450ef21765727beb3dd696c34b9a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fae8cd5af1f2d790129a5bd32f0f7d0be450ef21765727beb3dd696c34b9a3f->enter($__internal_1fae8cd5af1f2d790129a5bd32f0f7d0be450ef21765727beb3dd696c34b9a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f03a159c90d47e4b83758ed337f211956eaad1385194cfe361bf708f3e04cd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03a159c90d47e4b83758ed337f211956eaad1385194cfe361bf708f3e04cd31->enter($__internal_f03a159c90d47e4b83758ed337f211956eaad1385194cfe361bf708f3e04cd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f03a159c90d47e4b83758ed337f211956eaad1385194cfe361bf708f3e04cd31->leave($__internal_f03a159c90d47e4b83758ed337f211956eaad1385194cfe361bf708f3e04cd31_prof);

        
        $__internal_1fae8cd5af1f2d790129a5bd32f0f7d0be450ef21765727beb3dd696c34b9a3f->leave($__internal_1fae8cd5af1f2d790129a5bd32f0f7d0be450ef21765727beb3dd696c34b9a3f_prof);

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
