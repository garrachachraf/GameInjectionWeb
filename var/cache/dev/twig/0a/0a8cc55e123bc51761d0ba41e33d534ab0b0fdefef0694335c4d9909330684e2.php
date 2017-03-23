<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_23ae26ff49a637e85d0d6906a06c8039d2acd150c07998592ba48f93093b94a0 extends Twig_Template
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
        $__internal_778f9d17eab1c3aadd04b8982c6e459ff68ea3b4586c1c21f0ccd8e6136f1d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f9d17eab1c3aadd04b8982c6e459ff68ea3b4586c1c21f0ccd8e6136f1d46->enter($__internal_778f9d17eab1c3aadd04b8982c6e459ff68ea3b4586c1c21f0ccd8e6136f1d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_62cc7e04f4052abeb940b893a2edaddc5dbef53f4a1b8c3642dfb58f7b322949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cc7e04f4052abeb940b893a2edaddc5dbef53f4a1b8c3642dfb58f7b322949->enter($__internal_62cc7e04f4052abeb940b893a2edaddc5dbef53f4a1b8c3642dfb58f7b322949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778f9d17eab1c3aadd04b8982c6e459ff68ea3b4586c1c21f0ccd8e6136f1d46->leave($__internal_778f9d17eab1c3aadd04b8982c6e459ff68ea3b4586c1c21f0ccd8e6136f1d46_prof);

        
        $__internal_62cc7e04f4052abeb940b893a2edaddc5dbef53f4a1b8c3642dfb58f7b322949->leave($__internal_62cc7e04f4052abeb940b893a2edaddc5dbef53f4a1b8c3642dfb58f7b322949_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c7d67c7db989a6b8ae134bc618dff90201e3ddd09bbf5847f2320efdd1faf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7d67c7db989a6b8ae134bc618dff90201e3ddd09bbf5847f2320efdd1faf1b->enter($__internal_3c7d67c7db989a6b8ae134bc618dff90201e3ddd09bbf5847f2320efdd1faf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_693eccc4c2dd8ec7fb317f8182a547043f14128e4c87b21c07c7bc5490b8c502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693eccc4c2dd8ec7fb317f8182a547043f14128e4c87b21c07c7bc5490b8c502->enter($__internal_693eccc4c2dd8ec7fb317f8182a547043f14128e4c87b21c07c7bc5490b8c502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_693eccc4c2dd8ec7fb317f8182a547043f14128e4c87b21c07c7bc5490b8c502->leave($__internal_693eccc4c2dd8ec7fb317f8182a547043f14128e4c87b21c07c7bc5490b8c502_prof);

        
        $__internal_3c7d67c7db989a6b8ae134bc618dff90201e3ddd09bbf5847f2320efdd1faf1b->leave($__internal_3c7d67c7db989a6b8ae134bc618dff90201e3ddd09bbf5847f2320efdd1faf1b_prof);

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
