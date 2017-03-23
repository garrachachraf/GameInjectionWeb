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
        $__internal_f4b267cf95cb9561585b5eee9dec5c359859d3fb70c6f4317cb4ba0b0928242c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b267cf95cb9561585b5eee9dec5c359859d3fb70c6f4317cb4ba0b0928242c->enter($__internal_f4b267cf95cb9561585b5eee9dec5c359859d3fb70c6f4317cb4ba0b0928242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d27043e9c6276dabe2f2f7b22eb8017b76d1be54ded7cdf03403e7991e09d236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27043e9c6276dabe2f2f7b22eb8017b76d1be54ded7cdf03403e7991e09d236->enter($__internal_d27043e9c6276dabe2f2f7b22eb8017b76d1be54ded7cdf03403e7991e09d236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b267cf95cb9561585b5eee9dec5c359859d3fb70c6f4317cb4ba0b0928242c->leave($__internal_f4b267cf95cb9561585b5eee9dec5c359859d3fb70c6f4317cb4ba0b0928242c_prof);

        
        $__internal_d27043e9c6276dabe2f2f7b22eb8017b76d1be54ded7cdf03403e7991e09d236->leave($__internal_d27043e9c6276dabe2f2f7b22eb8017b76d1be54ded7cdf03403e7991e09d236_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d412b67e26f0d732985237be2820ebc67ca191c0fff231e2f74e3e70e555d67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d412b67e26f0d732985237be2820ebc67ca191c0fff231e2f74e3e70e555d67d->enter($__internal_d412b67e26f0d732985237be2820ebc67ca191c0fff231e2f74e3e70e555d67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96ec80748f378c27cdc01b78a26a7001727235de2912d8dfdc7e43743cd737f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ec80748f378c27cdc01b78a26a7001727235de2912d8dfdc7e43743cd737f6->enter($__internal_96ec80748f378c27cdc01b78a26a7001727235de2912d8dfdc7e43743cd737f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_96ec80748f378c27cdc01b78a26a7001727235de2912d8dfdc7e43743cd737f6->leave($__internal_96ec80748f378c27cdc01b78a26a7001727235de2912d8dfdc7e43743cd737f6_prof);

        
        $__internal_d412b67e26f0d732985237be2820ebc67ca191c0fff231e2f74e3e70e555d67d->leave($__internal_d412b67e26f0d732985237be2820ebc67ca191c0fff231e2f74e3e70e555d67d_prof);

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
