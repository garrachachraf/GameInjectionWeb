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
        $__internal_057ff994251d9cbce515feb096e1a3bf1ea8029fcea7d831091ae9af94d820b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057ff994251d9cbce515feb096e1a3bf1ea8029fcea7d831091ae9af94d820b7->enter($__internal_057ff994251d9cbce515feb096e1a3bf1ea8029fcea7d831091ae9af94d820b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a2ff066669c8178506ef9175d874b4b270b277ff91038b7ae847be103787a1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ff066669c8178506ef9175d874b4b270b277ff91038b7ae847be103787a1ce->enter($__internal_a2ff066669c8178506ef9175d874b4b270b277ff91038b7ae847be103787a1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057ff994251d9cbce515feb096e1a3bf1ea8029fcea7d831091ae9af94d820b7->leave($__internal_057ff994251d9cbce515feb096e1a3bf1ea8029fcea7d831091ae9af94d820b7_prof);

        
        $__internal_a2ff066669c8178506ef9175d874b4b270b277ff91038b7ae847be103787a1ce->leave($__internal_a2ff066669c8178506ef9175d874b4b270b277ff91038b7ae847be103787a1ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7e2b20da2fdd909ed79839bd629926ff4bca89072c7dd15c71696e28d0969d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e2b20da2fdd909ed79839bd629926ff4bca89072c7dd15c71696e28d0969d4->enter($__internal_f7e2b20da2fdd909ed79839bd629926ff4bca89072c7dd15c71696e28d0969d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2673de59cbd1f549675c3013a90d4beba7c6e2b30c0cb54a9aedad8eaf905276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2673de59cbd1f549675c3013a90d4beba7c6e2b30c0cb54a9aedad8eaf905276->enter($__internal_2673de59cbd1f549675c3013a90d4beba7c6e2b30c0cb54a9aedad8eaf905276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2673de59cbd1f549675c3013a90d4beba7c6e2b30c0cb54a9aedad8eaf905276->leave($__internal_2673de59cbd1f549675c3013a90d4beba7c6e2b30c0cb54a9aedad8eaf905276_prof);

        
        $__internal_f7e2b20da2fdd909ed79839bd629926ff4bca89072c7dd15c71696e28d0969d4->leave($__internal_f7e2b20da2fdd909ed79839bd629926ff4bca89072c7dd15c71696e28d0969d4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b387593fbdab0cf159e3db5cd711d19965e5f2b79addf59203db3413fc65eede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b387593fbdab0cf159e3db5cd711d19965e5f2b79addf59203db3413fc65eede->enter($__internal_b387593fbdab0cf159e3db5cd711d19965e5f2b79addf59203db3413fc65eede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acf541ca33aa63e47a5660bfdd6db30eea7d14d578371a4e6ec8a421415a83d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf541ca33aa63e47a5660bfdd6db30eea7d14d578371a4e6ec8a421415a83d5->enter($__internal_acf541ca33aa63e47a5660bfdd6db30eea7d14d578371a4e6ec8a421415a83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acf541ca33aa63e47a5660bfdd6db30eea7d14d578371a4e6ec8a421415a83d5->leave($__internal_acf541ca33aa63e47a5660bfdd6db30eea7d14d578371a4e6ec8a421415a83d5_prof);

        
        $__internal_b387593fbdab0cf159e3db5cd711d19965e5f2b79addf59203db3413fc65eede->leave($__internal_b387593fbdab0cf159e3db5cd711d19965e5f2b79addf59203db3413fc65eede_prof);

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
