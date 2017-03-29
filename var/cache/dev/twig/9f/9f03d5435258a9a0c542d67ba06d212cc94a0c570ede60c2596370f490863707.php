<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c9230728ead9648fdac9e2f1f903ad36461aa0ce6667411d8f9009c70b65b7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ce17818d803d923ed11d24f91e29972f6bc17f01e7e6356cdaf477c3215ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ce17818d803d923ed11d24f91e29972f6bc17f01e7e6356cdaf477c3215ec3->enter($__internal_04ce17818d803d923ed11d24f91e29972f6bc17f01e7e6356cdaf477c3215ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6b209e24c755705de929dc9e15c9f75a586035fe9ecd07ee055712c79745c962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b209e24c755705de929dc9e15c9f75a586035fe9ecd07ee055712c79745c962->enter($__internal_6b209e24c755705de929dc9e15c9f75a586035fe9ecd07ee055712c79745c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ce17818d803d923ed11d24f91e29972f6bc17f01e7e6356cdaf477c3215ec3->leave($__internal_04ce17818d803d923ed11d24f91e29972f6bc17f01e7e6356cdaf477c3215ec3_prof);

        
        $__internal_6b209e24c755705de929dc9e15c9f75a586035fe9ecd07ee055712c79745c962->leave($__internal_6b209e24c755705de929dc9e15c9f75a586035fe9ecd07ee055712c79745c962_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_055f681324de3784cdf64febf40d0dfd1985f59aac3575027d09d2db2fad74b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055f681324de3784cdf64febf40d0dfd1985f59aac3575027d09d2db2fad74b6->enter($__internal_055f681324de3784cdf64febf40d0dfd1985f59aac3575027d09d2db2fad74b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_856c98068117167c74fa6bc3188c81657fa85352668499503febc3a5fa41a28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856c98068117167c74fa6bc3188c81657fa85352668499503febc3a5fa41a28d->enter($__internal_856c98068117167c74fa6bc3188c81657fa85352668499503febc3a5fa41a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_856c98068117167c74fa6bc3188c81657fa85352668499503febc3a5fa41a28d->leave($__internal_856c98068117167c74fa6bc3188c81657fa85352668499503febc3a5fa41a28d_prof);

        
        $__internal_055f681324de3784cdf64febf40d0dfd1985f59aac3575027d09d2db2fad74b6->leave($__internal_055f681324de3784cdf64febf40d0dfd1985f59aac3575027d09d2db2fad74b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_674a4ff18bebbfe1a302f9622ce7f4eecd3fde0df05ac313a10bf7ce260cd0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674a4ff18bebbfe1a302f9622ce7f4eecd3fde0df05ac313a10bf7ce260cd0dd->enter($__internal_674a4ff18bebbfe1a302f9622ce7f4eecd3fde0df05ac313a10bf7ce260cd0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a92858bede124806642b30c0c17c3fd189a7002abeefc471fc93537ba1e3735e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92858bede124806642b30c0c17c3fd189a7002abeefc471fc93537ba1e3735e->enter($__internal_a92858bede124806642b30c0c17c3fd189a7002abeefc471fc93537ba1e3735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a92858bede124806642b30c0c17c3fd189a7002abeefc471fc93537ba1e3735e->leave($__internal_a92858bede124806642b30c0c17c3fd189a7002abeefc471fc93537ba1e3735e_prof);

        
        $__internal_674a4ff18bebbfe1a302f9622ce7f4eecd3fde0df05ac313a10bf7ce260cd0dd->leave($__internal_674a4ff18bebbfe1a302f9622ce7f4eecd3fde0df05ac313a10bf7ce260cd0dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6b55a42f077b9fb608caa279404ddbd5bf4460c8249c677bc50319e47b12f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b55a42f077b9fb608caa279404ddbd5bf4460c8249c677bc50319e47b12f94->enter($__internal_a6b55a42f077b9fb608caa279404ddbd5bf4460c8249c677bc50319e47b12f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d56b95e51fecb54c6f8d3bc1271a2782a0000f0594a62e8ff731967ba4d1cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d56b95e51fecb54c6f8d3bc1271a2782a0000f0594a62e8ff731967ba4d1cf9->enter($__internal_6d56b95e51fecb54c6f8d3bc1271a2782a0000f0594a62e8ff731967ba4d1cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6d56b95e51fecb54c6f8d3bc1271a2782a0000f0594a62e8ff731967ba4d1cf9->leave($__internal_6d56b95e51fecb54c6f8d3bc1271a2782a0000f0594a62e8ff731967ba4d1cf9_prof);

        
        $__internal_a6b55a42f077b9fb608caa279404ddbd5bf4460c8249c677bc50319e47b12f94->leave($__internal_a6b55a42f077b9fb608caa279404ddbd5bf4460c8249c677bc50319e47b12f94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
