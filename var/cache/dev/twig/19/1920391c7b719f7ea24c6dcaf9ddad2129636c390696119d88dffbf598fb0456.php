<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_34bd073976bb6a092d496e9f0493069ef5193b5946be608722ff0328c3b7b44e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_523878f43ec421bdcf16733a0d4e079cdb2a195d15ca90454f56801f69a2a774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523878f43ec421bdcf16733a0d4e079cdb2a195d15ca90454f56801f69a2a774->enter($__internal_523878f43ec421bdcf16733a0d4e079cdb2a195d15ca90454f56801f69a2a774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_25dd2f81d86f1b0d66107bb269f62df0a21da7d0450f066b0dac85e10040f655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dd2f81d86f1b0d66107bb269f62df0a21da7d0450f066b0dac85e10040f655->enter($__internal_25dd2f81d86f1b0d66107bb269f62df0a21da7d0450f066b0dac85e10040f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523878f43ec421bdcf16733a0d4e079cdb2a195d15ca90454f56801f69a2a774->leave($__internal_523878f43ec421bdcf16733a0d4e079cdb2a195d15ca90454f56801f69a2a774_prof);

        
        $__internal_25dd2f81d86f1b0d66107bb269f62df0a21da7d0450f066b0dac85e10040f655->leave($__internal_25dd2f81d86f1b0d66107bb269f62df0a21da7d0450f066b0dac85e10040f655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a48511e6138e915a29b07e810bb24d891f835aaabb05129f7688de2f98e4d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a48511e6138e915a29b07e810bb24d891f835aaabb05129f7688de2f98e4d15->enter($__internal_8a48511e6138e915a29b07e810bb24d891f835aaabb05129f7688de2f98e4d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a992af76ab5dd0fc5e9c73334ec77feab17f7d3e53b53eaea504ddd066f116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a992af76ab5dd0fc5e9c73334ec77feab17f7d3e53b53eaea504ddd066f116->enter($__internal_71a992af76ab5dd0fc5e9c73334ec77feab17f7d3e53b53eaea504ddd066f116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71a992af76ab5dd0fc5e9c73334ec77feab17f7d3e53b53eaea504ddd066f116->leave($__internal_71a992af76ab5dd0fc5e9c73334ec77feab17f7d3e53b53eaea504ddd066f116_prof);

        
        $__internal_8a48511e6138e915a29b07e810bb24d891f835aaabb05129f7688de2f98e4d15->leave($__internal_8a48511e6138e915a29b07e810bb24d891f835aaabb05129f7688de2f98e4d15_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_722449e620f74dfd74755516ff3c11717428fc0f33b36ebc1d05469a4e1a2c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722449e620f74dfd74755516ff3c11717428fc0f33b36ebc1d05469a4e1a2c14->enter($__internal_722449e620f74dfd74755516ff3c11717428fc0f33b36ebc1d05469a4e1a2c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b014244c2b7b8f11fe039b8c92ffcab93bbce98190f81bc15ca07d4f397e2acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b014244c2b7b8f11fe039b8c92ffcab93bbce98190f81bc15ca07d4f397e2acc->enter($__internal_b014244c2b7b8f11fe039b8c92ffcab93bbce98190f81bc15ca07d4f397e2acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b014244c2b7b8f11fe039b8c92ffcab93bbce98190f81bc15ca07d4f397e2acc->leave($__internal_b014244c2b7b8f11fe039b8c92ffcab93bbce98190f81bc15ca07d4f397e2acc_prof);

        
        $__internal_722449e620f74dfd74755516ff3c11717428fc0f33b36ebc1d05469a4e1a2c14->leave($__internal_722449e620f74dfd74755516ff3c11717428fc0f33b36ebc1d05469a4e1a2c14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
