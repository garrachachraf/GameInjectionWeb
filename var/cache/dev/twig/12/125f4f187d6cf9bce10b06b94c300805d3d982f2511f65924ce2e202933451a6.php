<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fe4d74b619d81828a9cda548af58f29ee8387ceffbaab67e4019b5350f0f6513 extends Twig_Template
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
        $__internal_ac8e2a05aaf7136fec08a67eb3d30acc14c7e8e9b08cfd97fac43793d6d18aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8e2a05aaf7136fec08a67eb3d30acc14c7e8e9b08cfd97fac43793d6d18aac->enter($__internal_ac8e2a05aaf7136fec08a67eb3d30acc14c7e8e9b08cfd97fac43793d6d18aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e80146abe2cadd726255cd68f3332ef41dabff1fff76bf8f90b346302e37cfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80146abe2cadd726255cd68f3332ef41dabff1fff76bf8f90b346302e37cfb8->enter($__internal_e80146abe2cadd726255cd68f3332ef41dabff1fff76bf8f90b346302e37cfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8e2a05aaf7136fec08a67eb3d30acc14c7e8e9b08cfd97fac43793d6d18aac->leave($__internal_ac8e2a05aaf7136fec08a67eb3d30acc14c7e8e9b08cfd97fac43793d6d18aac_prof);

        
        $__internal_e80146abe2cadd726255cd68f3332ef41dabff1fff76bf8f90b346302e37cfb8->leave($__internal_e80146abe2cadd726255cd68f3332ef41dabff1fff76bf8f90b346302e37cfb8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f26a716941ccefba1ea6cf29000ab9780e5f3df5b6f318e8ebe94a6df6c2c44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26a716941ccefba1ea6cf29000ab9780e5f3df5b6f318e8ebe94a6df6c2c44a->enter($__internal_f26a716941ccefba1ea6cf29000ab9780e5f3df5b6f318e8ebe94a6df6c2c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21c2c4dea1e838501b161dec37c29513f8e8783817b3532112ac5f5a2ca66119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c2c4dea1e838501b161dec37c29513f8e8783817b3532112ac5f5a2ca66119->enter($__internal_21c2c4dea1e838501b161dec37c29513f8e8783817b3532112ac5f5a2ca66119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_21c2c4dea1e838501b161dec37c29513f8e8783817b3532112ac5f5a2ca66119->leave($__internal_21c2c4dea1e838501b161dec37c29513f8e8783817b3532112ac5f5a2ca66119_prof);

        
        $__internal_f26a716941ccefba1ea6cf29000ab9780e5f3df5b6f318e8ebe94a6df6c2c44a->leave($__internal_f26a716941ccefba1ea6cf29000ab9780e5f3df5b6f318e8ebe94a6df6c2c44a_prof);

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
