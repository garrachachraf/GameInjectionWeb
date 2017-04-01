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
        $__internal_c6b132bb42b09bb4645e2bb1b339389a7b64726264cc2c84f1c20ad78e1807b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b132bb42b09bb4645e2bb1b339389a7b64726264cc2c84f1c20ad78e1807b3->enter($__internal_c6b132bb42b09bb4645e2bb1b339389a7b64726264cc2c84f1c20ad78e1807b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ce88a1ac69f7d59d016858b6b15a40cb67058401f2e0bea16a5b7e65fee163a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce88a1ac69f7d59d016858b6b15a40cb67058401f2e0bea16a5b7e65fee163a2->enter($__internal_ce88a1ac69f7d59d016858b6b15a40cb67058401f2e0bea16a5b7e65fee163a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b132bb42b09bb4645e2bb1b339389a7b64726264cc2c84f1c20ad78e1807b3->leave($__internal_c6b132bb42b09bb4645e2bb1b339389a7b64726264cc2c84f1c20ad78e1807b3_prof);

        
        $__internal_ce88a1ac69f7d59d016858b6b15a40cb67058401f2e0bea16a5b7e65fee163a2->leave($__internal_ce88a1ac69f7d59d016858b6b15a40cb67058401f2e0bea16a5b7e65fee163a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43fe10e2bcb641a32f4182b32b3b93e8050372e862e6716313aa36add0635840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fe10e2bcb641a32f4182b32b3b93e8050372e862e6716313aa36add0635840->enter($__internal_43fe10e2bcb641a32f4182b32b3b93e8050372e862e6716313aa36add0635840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_717e50d7d937bc8a6186b29c8e004b6bba3301b56d69169a3f8f4a50dbd1c266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717e50d7d937bc8a6186b29c8e004b6bba3301b56d69169a3f8f4a50dbd1c266->enter($__internal_717e50d7d937bc8a6186b29c8e004b6bba3301b56d69169a3f8f4a50dbd1c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_717e50d7d937bc8a6186b29c8e004b6bba3301b56d69169a3f8f4a50dbd1c266->leave($__internal_717e50d7d937bc8a6186b29c8e004b6bba3301b56d69169a3f8f4a50dbd1c266_prof);

        
        $__internal_43fe10e2bcb641a32f4182b32b3b93e8050372e862e6716313aa36add0635840->leave($__internal_43fe10e2bcb641a32f4182b32b3b93e8050372e862e6716313aa36add0635840_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_46c413d096777c0049b2a73a28622e9089d3cbcab83aaf7edd2d0f580eb13391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c413d096777c0049b2a73a28622e9089d3cbcab83aaf7edd2d0f580eb13391->enter($__internal_46c413d096777c0049b2a73a28622e9089d3cbcab83aaf7edd2d0f580eb13391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d5ee9316088128366f7705952bdc13d8ed885e551b295ba4e5c96ed3901fdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5ee9316088128366f7705952bdc13d8ed885e551b295ba4e5c96ed3901fdba->enter($__internal_6d5ee9316088128366f7705952bdc13d8ed885e551b295ba4e5c96ed3901fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d5ee9316088128366f7705952bdc13d8ed885e551b295ba4e5c96ed3901fdba->leave($__internal_6d5ee9316088128366f7705952bdc13d8ed885e551b295ba4e5c96ed3901fdba_prof);

        
        $__internal_46c413d096777c0049b2a73a28622e9089d3cbcab83aaf7edd2d0f580eb13391->leave($__internal_46c413d096777c0049b2a73a28622e9089d3cbcab83aaf7edd2d0f580eb13391_prof);

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
