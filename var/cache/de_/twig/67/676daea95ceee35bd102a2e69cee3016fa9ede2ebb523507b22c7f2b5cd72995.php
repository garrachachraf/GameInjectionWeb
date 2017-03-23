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
        $__internal_739b5167d3a30135dfbfa7a3910d76d5835606f1d058134e30030d2522443c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739b5167d3a30135dfbfa7a3910d76d5835606f1d058134e30030d2522443c5a->enter($__internal_739b5167d3a30135dfbfa7a3910d76d5835606f1d058134e30030d2522443c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f05c41ba705a7b7dcb2a51d4e74e384aca932c461e9b837f3fd5aacbe9a672c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05c41ba705a7b7dcb2a51d4e74e384aca932c461e9b837f3fd5aacbe9a672c6->enter($__internal_f05c41ba705a7b7dcb2a51d4e74e384aca932c461e9b837f3fd5aacbe9a672c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739b5167d3a30135dfbfa7a3910d76d5835606f1d058134e30030d2522443c5a->leave($__internal_739b5167d3a30135dfbfa7a3910d76d5835606f1d058134e30030d2522443c5a_prof);

        
        $__internal_f05c41ba705a7b7dcb2a51d4e74e384aca932c461e9b837f3fd5aacbe9a672c6->leave($__internal_f05c41ba705a7b7dcb2a51d4e74e384aca932c461e9b837f3fd5aacbe9a672c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4857583292de0483d787cd9ee551ac287ed4bdd7fc776bfee49996715c86fa5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4857583292de0483d787cd9ee551ac287ed4bdd7fc776bfee49996715c86fa5a->enter($__internal_4857583292de0483d787cd9ee551ac287ed4bdd7fc776bfee49996715c86fa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fae470a251327c6f65c9e4b30af95ff860e3652fa711d3ed3dc1fd0c0a5ffdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae470a251327c6f65c9e4b30af95ff860e3652fa711d3ed3dc1fd0c0a5ffdb2->enter($__internal_fae470a251327c6f65c9e4b30af95ff860e3652fa711d3ed3dc1fd0c0a5ffdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fae470a251327c6f65c9e4b30af95ff860e3652fa711d3ed3dc1fd0c0a5ffdb2->leave($__internal_fae470a251327c6f65c9e4b30af95ff860e3652fa711d3ed3dc1fd0c0a5ffdb2_prof);

        
        $__internal_4857583292de0483d787cd9ee551ac287ed4bdd7fc776bfee49996715c86fa5a->leave($__internal_4857583292de0483d787cd9ee551ac287ed4bdd7fc776bfee49996715c86fa5a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0d786b83177945d262c61363a34dd0fd4c2de9122f6a4cf6f9c077c164002b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d786b83177945d262c61363a34dd0fd4c2de9122f6a4cf6f9c077c164002b9->enter($__internal_d0d786b83177945d262c61363a34dd0fd4c2de9122f6a4cf6f9c077c164002b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f92fd4732adc52315f211032d6697644ad338b06a6b6f5b8ce5084e6dedb6fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92fd4732adc52315f211032d6697644ad338b06a6b6f5b8ce5084e6dedb6fa7->enter($__internal_f92fd4732adc52315f211032d6697644ad338b06a6b6f5b8ce5084e6dedb6fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f92fd4732adc52315f211032d6697644ad338b06a6b6f5b8ce5084e6dedb6fa7->leave($__internal_f92fd4732adc52315f211032d6697644ad338b06a6b6f5b8ce5084e6dedb6fa7_prof);

        
        $__internal_d0d786b83177945d262c61363a34dd0fd4c2de9122f6a4cf6f9c077c164002b9->leave($__internal_d0d786b83177945d262c61363a34dd0fd4c2de9122f6a4cf6f9c077c164002b9_prof);

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
