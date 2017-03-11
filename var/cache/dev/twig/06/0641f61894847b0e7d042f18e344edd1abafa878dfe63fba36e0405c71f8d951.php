<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7b49acd8909d03f12df71416866188b1c7ff0b31b626969371cd6cffe8543737 extends Twig_Template
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
        $__internal_8719fce7345f1503ba8cb73ac1fddfb9c7d26de9a8d73288cb06b35da2aa08f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8719fce7345f1503ba8cb73ac1fddfb9c7d26de9a8d73288cb06b35da2aa08f3->enter($__internal_8719fce7345f1503ba8cb73ac1fddfb9c7d26de9a8d73288cb06b35da2aa08f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7d0f83f6a60e93195a12fbbc1e01fe8538772ff98cd6c6d1a9841f1872e06092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0f83f6a60e93195a12fbbc1e01fe8538772ff98cd6c6d1a9841f1872e06092->enter($__internal_7d0f83f6a60e93195a12fbbc1e01fe8538772ff98cd6c6d1a9841f1872e06092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8719fce7345f1503ba8cb73ac1fddfb9c7d26de9a8d73288cb06b35da2aa08f3->leave($__internal_8719fce7345f1503ba8cb73ac1fddfb9c7d26de9a8d73288cb06b35da2aa08f3_prof);

        
        $__internal_7d0f83f6a60e93195a12fbbc1e01fe8538772ff98cd6c6d1a9841f1872e06092->leave($__internal_7d0f83f6a60e93195a12fbbc1e01fe8538772ff98cd6c6d1a9841f1872e06092_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0edb4bbe491a22052d643b8277701e3d298b71d4651e58d9746667cce22b44d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edb4bbe491a22052d643b8277701e3d298b71d4651e58d9746667cce22b44d7->enter($__internal_0edb4bbe491a22052d643b8277701e3d298b71d4651e58d9746667cce22b44d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60b8a675f7a880613173b04a2e78170947dfb6c54409a531fc6c89856a178305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b8a675f7a880613173b04a2e78170947dfb6c54409a531fc6c89856a178305->enter($__internal_60b8a675f7a880613173b04a2e78170947dfb6c54409a531fc6c89856a178305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_60b8a675f7a880613173b04a2e78170947dfb6c54409a531fc6c89856a178305->leave($__internal_60b8a675f7a880613173b04a2e78170947dfb6c54409a531fc6c89856a178305_prof);

        
        $__internal_0edb4bbe491a22052d643b8277701e3d298b71d4651e58d9746667cce22b44d7->leave($__internal_0edb4bbe491a22052d643b8277701e3d298b71d4651e58d9746667cce22b44d7_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
