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
        $__internal_5b5a5b3a99e29fbdb6f0687372494ae4ab4aae7face3f541d32f03a6a4ea4c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5a5b3a99e29fbdb6f0687372494ae4ab4aae7face3f541d32f03a6a4ea4c34->enter($__internal_5b5a5b3a99e29fbdb6f0687372494ae4ab4aae7face3f541d32f03a6a4ea4c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_08696ab88beffefcb877b6f5c86e2ee97758ddaf8842d8bea00d49b48f113929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08696ab88beffefcb877b6f5c86e2ee97758ddaf8842d8bea00d49b48f113929->enter($__internal_08696ab88beffefcb877b6f5c86e2ee97758ddaf8842d8bea00d49b48f113929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5a5b3a99e29fbdb6f0687372494ae4ab4aae7face3f541d32f03a6a4ea4c34->leave($__internal_5b5a5b3a99e29fbdb6f0687372494ae4ab4aae7face3f541d32f03a6a4ea4c34_prof);

        
        $__internal_08696ab88beffefcb877b6f5c86e2ee97758ddaf8842d8bea00d49b48f113929->leave($__internal_08696ab88beffefcb877b6f5c86e2ee97758ddaf8842d8bea00d49b48f113929_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0f46b92bdcae1a4aaa6c36790663b06781ba0a86b6209dbe887d740f2ba432d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f46b92bdcae1a4aaa6c36790663b06781ba0a86b6209dbe887d740f2ba432d->enter($__internal_d0f46b92bdcae1a4aaa6c36790663b06781ba0a86b6209dbe887d740f2ba432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8394a0f345065e7aefeccd1074746f786e980cef34a3122a21632d7321b54ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8394a0f345065e7aefeccd1074746f786e980cef34a3122a21632d7321b54ca5->enter($__internal_8394a0f345065e7aefeccd1074746f786e980cef34a3122a21632d7321b54ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8394a0f345065e7aefeccd1074746f786e980cef34a3122a21632d7321b54ca5->leave($__internal_8394a0f345065e7aefeccd1074746f786e980cef34a3122a21632d7321b54ca5_prof);

        
        $__internal_d0f46b92bdcae1a4aaa6c36790663b06781ba0a86b6209dbe887d740f2ba432d->leave($__internal_d0f46b92bdcae1a4aaa6c36790663b06781ba0a86b6209dbe887d740f2ba432d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24a98bf5142d12468a94daba5d7e7dff5549fb49ada713c1d692d73e0f5696d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24a98bf5142d12468a94daba5d7e7dff5549fb49ada713c1d692d73e0f5696d->enter($__internal_d24a98bf5142d12468a94daba5d7e7dff5549fb49ada713c1d692d73e0f5696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1512aa9c13a7e67d4d9fd6c9a8503e970e81e7abea8469f793e227b623f3ad0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1512aa9c13a7e67d4d9fd6c9a8503e970e81e7abea8469f793e227b623f3ad0e->enter($__internal_1512aa9c13a7e67d4d9fd6c9a8503e970e81e7abea8469f793e227b623f3ad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1512aa9c13a7e67d4d9fd6c9a8503e970e81e7abea8469f793e227b623f3ad0e->leave($__internal_1512aa9c13a7e67d4d9fd6c9a8503e970e81e7abea8469f793e227b623f3ad0e_prof);

        
        $__internal_d24a98bf5142d12468a94daba5d7e7dff5549fb49ada713c1d692d73e0f5696d->leave($__internal_d24a98bf5142d12468a94daba5d7e7dff5549fb49ada713c1d692d73e0f5696d_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
