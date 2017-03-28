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
        $__internal_dcad94d999e0fdb2452e63e94de33b1cf42f3dcad1263b0c0a64380ac90e8b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcad94d999e0fdb2452e63e94de33b1cf42f3dcad1263b0c0a64380ac90e8b42->enter($__internal_dcad94d999e0fdb2452e63e94de33b1cf42f3dcad1263b0c0a64380ac90e8b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c06dcca97ecf755046a0273b2d0cc8f3ef3238d50da9ba66bc2c796a78bcfe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06dcca97ecf755046a0273b2d0cc8f3ef3238d50da9ba66bc2c796a78bcfe41->enter($__internal_c06dcca97ecf755046a0273b2d0cc8f3ef3238d50da9ba66bc2c796a78bcfe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcad94d999e0fdb2452e63e94de33b1cf42f3dcad1263b0c0a64380ac90e8b42->leave($__internal_dcad94d999e0fdb2452e63e94de33b1cf42f3dcad1263b0c0a64380ac90e8b42_prof);

        
        $__internal_c06dcca97ecf755046a0273b2d0cc8f3ef3238d50da9ba66bc2c796a78bcfe41->leave($__internal_c06dcca97ecf755046a0273b2d0cc8f3ef3238d50da9ba66bc2c796a78bcfe41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5ef39efb6f0f462a2380e433bb7af7bbf126e0aef96f15c65052585d975759d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ef39efb6f0f462a2380e433bb7af7bbf126e0aef96f15c65052585d975759d->enter($__internal_c5ef39efb6f0f462a2380e433bb7af7bbf126e0aef96f15c65052585d975759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ac23bc8a3936d6ad788a05e4df32d429aaaaf15ae72313131451411daded1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac23bc8a3936d6ad788a05e4df32d429aaaaf15ae72313131451411daded1f3->enter($__internal_4ac23bc8a3936d6ad788a05e4df32d429aaaaf15ae72313131451411daded1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4ac23bc8a3936d6ad788a05e4df32d429aaaaf15ae72313131451411daded1f3->leave($__internal_4ac23bc8a3936d6ad788a05e4df32d429aaaaf15ae72313131451411daded1f3_prof);

        
        $__internal_c5ef39efb6f0f462a2380e433bb7af7bbf126e0aef96f15c65052585d975759d->leave($__internal_c5ef39efb6f0f462a2380e433bb7af7bbf126e0aef96f15c65052585d975759d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fad851059e41575a989fbacefab8619d5c8beeb1191069cf041936f7be34a003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad851059e41575a989fbacefab8619d5c8beeb1191069cf041936f7be34a003->enter($__internal_fad851059e41575a989fbacefab8619d5c8beeb1191069cf041936f7be34a003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baba12eefc71295817edaacbc8a0c534551805b30b8c8fd239e10d7ecdea4fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baba12eefc71295817edaacbc8a0c534551805b30b8c8fd239e10d7ecdea4fba->enter($__internal_baba12eefc71295817edaacbc8a0c534551805b30b8c8fd239e10d7ecdea4fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_baba12eefc71295817edaacbc8a0c534551805b30b8c8fd239e10d7ecdea4fba->leave($__internal_baba12eefc71295817edaacbc8a0c534551805b30b8c8fd239e10d7ecdea4fba_prof);

        
        $__internal_fad851059e41575a989fbacefab8619d5c8beeb1191069cf041936f7be34a003->leave($__internal_fad851059e41575a989fbacefab8619d5c8beeb1191069cf041936f7be34a003_prof);

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
