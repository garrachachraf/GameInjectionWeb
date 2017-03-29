<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_345e5968c98773c71cda1449dfa30a87bed26411ba262e28dded41a9e65eddee extends Twig_Template
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
        $__internal_97e73f4a46175485e42f389e95b36db8db1117d33840e0eee2d5da3ef068d325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e73f4a46175485e42f389e95b36db8db1117d33840e0eee2d5da3ef068d325->enter($__internal_97e73f4a46175485e42f389e95b36db8db1117d33840e0eee2d5da3ef068d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b3014217e14d1f431c08efef38971025c08871557aae573d08cc55251e2bba07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3014217e14d1f431c08efef38971025c08871557aae573d08cc55251e2bba07->enter($__internal_b3014217e14d1f431c08efef38971025c08871557aae573d08cc55251e2bba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e73f4a46175485e42f389e95b36db8db1117d33840e0eee2d5da3ef068d325->leave($__internal_97e73f4a46175485e42f389e95b36db8db1117d33840e0eee2d5da3ef068d325_prof);

        
        $__internal_b3014217e14d1f431c08efef38971025c08871557aae573d08cc55251e2bba07->leave($__internal_b3014217e14d1f431c08efef38971025c08871557aae573d08cc55251e2bba07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_388116dc76ef17e357af7d98e6e369bf53f17edbcae8c1aeb12fe7d2288ff864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388116dc76ef17e357af7d98e6e369bf53f17edbcae8c1aeb12fe7d2288ff864->enter($__internal_388116dc76ef17e357af7d98e6e369bf53f17edbcae8c1aeb12fe7d2288ff864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_375c6c27e2d17aa02b794c117ad2131196d97a17208cb3ea44cf71ba6ec5ac55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375c6c27e2d17aa02b794c117ad2131196d97a17208cb3ea44cf71ba6ec5ac55->enter($__internal_375c6c27e2d17aa02b794c117ad2131196d97a17208cb3ea44cf71ba6ec5ac55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_375c6c27e2d17aa02b794c117ad2131196d97a17208cb3ea44cf71ba6ec5ac55->leave($__internal_375c6c27e2d17aa02b794c117ad2131196d97a17208cb3ea44cf71ba6ec5ac55_prof);

        
        $__internal_388116dc76ef17e357af7d98e6e369bf53f17edbcae8c1aeb12fe7d2288ff864->leave($__internal_388116dc76ef17e357af7d98e6e369bf53f17edbcae8c1aeb12fe7d2288ff864_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be37278b658ddb0a43a9b12b82d620fbe3cef8cfdd1890f56f56a808cd2dfba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be37278b658ddb0a43a9b12b82d620fbe3cef8cfdd1890f56f56a808cd2dfba8->enter($__internal_be37278b658ddb0a43a9b12b82d620fbe3cef8cfdd1890f56f56a808cd2dfba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a185e760f80e96733c5103fc715ee3b64eee2b948aea8e9b65236a14c0d0b736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a185e760f80e96733c5103fc715ee3b64eee2b948aea8e9b65236a14c0d0b736->enter($__internal_a185e760f80e96733c5103fc715ee3b64eee2b948aea8e9b65236a14c0d0b736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a185e760f80e96733c5103fc715ee3b64eee2b948aea8e9b65236a14c0d0b736->leave($__internal_a185e760f80e96733c5103fc715ee3b64eee2b948aea8e9b65236a14c0d0b736_prof);

        
        $__internal_be37278b658ddb0a43a9b12b82d620fbe3cef8cfdd1890f56f56a808cd2dfba8->leave($__internal_be37278b658ddb0a43a9b12b82d620fbe3cef8cfdd1890f56f56a808cd2dfba8_prof);

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
