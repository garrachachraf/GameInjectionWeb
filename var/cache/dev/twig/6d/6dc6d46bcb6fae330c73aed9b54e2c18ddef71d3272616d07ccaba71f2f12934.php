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
        $__internal_4bb00ee3b94369f073f0803f0aa4b0aec429d4653df79ac605af02a255821498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb00ee3b94369f073f0803f0aa4b0aec429d4653df79ac605af02a255821498->enter($__internal_4bb00ee3b94369f073f0803f0aa4b0aec429d4653df79ac605af02a255821498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b942ca385e5717d1be79a4303b9a60ca06cd6637444ba2c0f29dd9cb63b8d8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b942ca385e5717d1be79a4303b9a60ca06cd6637444ba2c0f29dd9cb63b8d8bb->enter($__internal_b942ca385e5717d1be79a4303b9a60ca06cd6637444ba2c0f29dd9cb63b8d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb00ee3b94369f073f0803f0aa4b0aec429d4653df79ac605af02a255821498->leave($__internal_4bb00ee3b94369f073f0803f0aa4b0aec429d4653df79ac605af02a255821498_prof);

        
        $__internal_b942ca385e5717d1be79a4303b9a60ca06cd6637444ba2c0f29dd9cb63b8d8bb->leave($__internal_b942ca385e5717d1be79a4303b9a60ca06cd6637444ba2c0f29dd9cb63b8d8bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40d23e638624302642d2ac67b80492a9caed928f4cd4af518e659f3027d4e1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d23e638624302642d2ac67b80492a9caed928f4cd4af518e659f3027d4e1a4->enter($__internal_40d23e638624302642d2ac67b80492a9caed928f4cd4af518e659f3027d4e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b80b69f9de4063536a345377d4ecca83069a9ab79b739206f2e6874193b8e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80b69f9de4063536a345377d4ecca83069a9ab79b739206f2e6874193b8e8f2->enter($__internal_b80b69f9de4063536a345377d4ecca83069a9ab79b739206f2e6874193b8e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b80b69f9de4063536a345377d4ecca83069a9ab79b739206f2e6874193b8e8f2->leave($__internal_b80b69f9de4063536a345377d4ecca83069a9ab79b739206f2e6874193b8e8f2_prof);

        
        $__internal_40d23e638624302642d2ac67b80492a9caed928f4cd4af518e659f3027d4e1a4->leave($__internal_40d23e638624302642d2ac67b80492a9caed928f4cd4af518e659f3027d4e1a4_prof);

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
