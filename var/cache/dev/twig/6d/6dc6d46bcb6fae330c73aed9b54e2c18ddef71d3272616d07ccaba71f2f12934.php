<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6a328d09b1747b8e2335fd177576d40e03c1b86ce217bb939d8d80e31263d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f1fe4960c49df9b61593d1111d424d6333b4cfef6b94f4889625f43703f47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f1fe4960c49df9b61593d1111d424d6333b4cfef6b94f4889625f43703f47b->enter($__internal_11f1fe4960c49df9b61593d1111d424d6333b4cfef6b94f4889625f43703f47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a9480153625c30a224540379993a2cfd6058fcb20f69aa55836d7f62946fd15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9480153625c30a224540379993a2cfd6058fcb20f69aa55836d7f62946fd15f->enter($__internal_a9480153625c30a224540379993a2cfd6058fcb20f69aa55836d7f62946fd15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f1fe4960c49df9b61593d1111d424d6333b4cfef6b94f4889625f43703f47b->leave($__internal_11f1fe4960c49df9b61593d1111d424d6333b4cfef6b94f4889625f43703f47b_prof);

        
        $__internal_a9480153625c30a224540379993a2cfd6058fcb20f69aa55836d7f62946fd15f->leave($__internal_a9480153625c30a224540379993a2cfd6058fcb20f69aa55836d7f62946fd15f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a7e0ebe56949a6730de8eee5cdbfe38b4908a86c6133093229965b505a8fa53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7e0ebe56949a6730de8eee5cdbfe38b4908a86c6133093229965b505a8fa53->enter($__internal_8a7e0ebe56949a6730de8eee5cdbfe38b4908a86c6133093229965b505a8fa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_407e7e1061571eaae0a8f7031170fdf9f08dd7ec80fab9dfb80a2b5ee2755af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e7e1061571eaae0a8f7031170fdf9f08dd7ec80fab9dfb80a2b5ee2755af3->enter($__internal_407e7e1061571eaae0a8f7031170fdf9f08dd7ec80fab9dfb80a2b5ee2755af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_407e7e1061571eaae0a8f7031170fdf9f08dd7ec80fab9dfb80a2b5ee2755af3->leave($__internal_407e7e1061571eaae0a8f7031170fdf9f08dd7ec80fab9dfb80a2b5ee2755af3_prof);

        
        $__internal_8a7e0ebe56949a6730de8eee5cdbfe38b4908a86c6133093229965b505a8fa53->leave($__internal_8a7e0ebe56949a6730de8eee5cdbfe38b4908a86c6133093229965b505a8fa53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
