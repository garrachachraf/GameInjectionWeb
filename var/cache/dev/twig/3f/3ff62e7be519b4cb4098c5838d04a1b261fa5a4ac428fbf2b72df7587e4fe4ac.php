<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_729f688324f9e88e8071609fc72b19ce9204f8a15d19648ad855be11d253fc01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_b91b7e48d008d595ac3de366569af821c128ac8211197cd6a819d4608454ec3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91b7e48d008d595ac3de366569af821c128ac8211197cd6a819d4608454ec3a->enter($__internal_b91b7e48d008d595ac3de366569af821c128ac8211197cd6a819d4608454ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_aaffac38d84536dbcdb7a1ed4f3c840c80c83d5570afab9e709af4b430aa43d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaffac38d84536dbcdb7a1ed4f3c840c80c83d5570afab9e709af4b430aa43d2->enter($__internal_aaffac38d84536dbcdb7a1ed4f3c840c80c83d5570afab9e709af4b430aa43d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91b7e48d008d595ac3de366569af821c128ac8211197cd6a819d4608454ec3a->leave($__internal_b91b7e48d008d595ac3de366569af821c128ac8211197cd6a819d4608454ec3a_prof);

        
        $__internal_aaffac38d84536dbcdb7a1ed4f3c840c80c83d5570afab9e709af4b430aa43d2->leave($__internal_aaffac38d84536dbcdb7a1ed4f3c840c80c83d5570afab9e709af4b430aa43d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_477af25d43c82cae57cb6260d33f97fd9417e18fea159023ac15c71ebca2c1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477af25d43c82cae57cb6260d33f97fd9417e18fea159023ac15c71ebca2c1bc->enter($__internal_477af25d43c82cae57cb6260d33f97fd9417e18fea159023ac15c71ebca2c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad1d546ec8293556ad4cac0d20ae8cb234c3e8f0fcc937a0ac9fd8bf2f9292f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d546ec8293556ad4cac0d20ae8cb234c3e8f0fcc937a0ac9fd8bf2f9292f8->enter($__internal_ad1d546ec8293556ad4cac0d20ae8cb234c3e8f0fcc937a0ac9fd8bf2f9292f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ad1d546ec8293556ad4cac0d20ae8cb234c3e8f0fcc937a0ac9fd8bf2f9292f8->leave($__internal_ad1d546ec8293556ad4cac0d20ae8cb234c3e8f0fcc937a0ac9fd8bf2f9292f8_prof);

        
        $__internal_477af25d43c82cae57cb6260d33f97fd9417e18fea159023ac15c71ebca2c1bc->leave($__internal_477af25d43c82cae57cb6260d33f97fd9417e18fea159023ac15c71ebca2c1bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
