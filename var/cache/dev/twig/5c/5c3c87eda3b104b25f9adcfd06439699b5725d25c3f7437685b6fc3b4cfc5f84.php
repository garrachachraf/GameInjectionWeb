<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_06b425999446cc2321e694b0e8fd6d25cc61c84a3aa65ce4ca5759c357bfe51b extends Twig_Template
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
        $__internal_f06e43bc439894b929addabbfad0ea0af6092b28704d6c8cf608c6aa51921e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06e43bc439894b929addabbfad0ea0af6092b28704d6c8cf608c6aa51921e63->enter($__internal_f06e43bc439894b929addabbfad0ea0af6092b28704d6c8cf608c6aa51921e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_46f55034216229cf5960744bb2ec6afba7d639056cb75201d252f0c1ae07d3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f55034216229cf5960744bb2ec6afba7d639056cb75201d252f0c1ae07d3c6->enter($__internal_46f55034216229cf5960744bb2ec6afba7d639056cb75201d252f0c1ae07d3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06e43bc439894b929addabbfad0ea0af6092b28704d6c8cf608c6aa51921e63->leave($__internal_f06e43bc439894b929addabbfad0ea0af6092b28704d6c8cf608c6aa51921e63_prof);

        
        $__internal_46f55034216229cf5960744bb2ec6afba7d639056cb75201d252f0c1ae07d3c6->leave($__internal_46f55034216229cf5960744bb2ec6afba7d639056cb75201d252f0c1ae07d3c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ede58118808af3f02e9e996d5a32a8ac6f42bcd23d6e055b530dd3a5c37b9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ede58118808af3f02e9e996d5a32a8ac6f42bcd23d6e055b530dd3a5c37b9a0->enter($__internal_5ede58118808af3f02e9e996d5a32a8ac6f42bcd23d6e055b530dd3a5c37b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f50d43f2e83f9450d57381e354b35899919d04c2a955a6e764a1222a17f2d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f50d43f2e83f9450d57381e354b35899919d04c2a955a6e764a1222a17f2d40->enter($__internal_3f50d43f2e83f9450d57381e354b35899919d04c2a955a6e764a1222a17f2d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f50d43f2e83f9450d57381e354b35899919d04c2a955a6e764a1222a17f2d40->leave($__internal_3f50d43f2e83f9450d57381e354b35899919d04c2a955a6e764a1222a17f2d40_prof);

        
        $__internal_5ede58118808af3f02e9e996d5a32a8ac6f42bcd23d6e055b530dd3a5c37b9a0->leave($__internal_5ede58118808af3f02e9e996d5a32a8ac6f42bcd23d6e055b530dd3a5c37b9a0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0f29cf8ec93ad9f514969ae0b114c3215651681eb56159de3c6ff8e0e0e6700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f29cf8ec93ad9f514969ae0b114c3215651681eb56159de3c6ff8e0e0e6700->enter($__internal_a0f29cf8ec93ad9f514969ae0b114c3215651681eb56159de3c6ff8e0e0e6700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d91eaca9d5af41e867d622630eb752707616bd45ebc2262f24c7be1174bec84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d91eaca9d5af41e867d622630eb752707616bd45ebc2262f24c7be1174bec84->enter($__internal_4d91eaca9d5af41e867d622630eb752707616bd45ebc2262f24c7be1174bec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4d91eaca9d5af41e867d622630eb752707616bd45ebc2262f24c7be1174bec84->leave($__internal_4d91eaca9d5af41e867d622630eb752707616bd45ebc2262f24c7be1174bec84_prof);

        
        $__internal_a0f29cf8ec93ad9f514969ae0b114c3215651681eb56159de3c6ff8e0e0e6700->leave($__internal_a0f29cf8ec93ad9f514969ae0b114c3215651681eb56159de3c6ff8e0e0e6700_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_124c51cf17d7bfdb006275ea142d4b2cfdbdfdf951eaeb57f24566639629cbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124c51cf17d7bfdb006275ea142d4b2cfdbdfdf951eaeb57f24566639629cbb9->enter($__internal_124c51cf17d7bfdb006275ea142d4b2cfdbdfdf951eaeb57f24566639629cbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7fcf97790a0a452782435950ac3242735a2a206b79122c8493db11cc55e74d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fcf97790a0a452782435950ac3242735a2a206b79122c8493db11cc55e74d4->enter($__internal_c7fcf97790a0a452782435950ac3242735a2a206b79122c8493db11cc55e74d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c7fcf97790a0a452782435950ac3242735a2a206b79122c8493db11cc55e74d4->leave($__internal_c7fcf97790a0a452782435950ac3242735a2a206b79122c8493db11cc55e74d4_prof);

        
        $__internal_124c51cf17d7bfdb006275ea142d4b2cfdbdfdf951eaeb57f24566639629cbb9->leave($__internal_124c51cf17d7bfdb006275ea142d4b2cfdbdfdf951eaeb57f24566639629cbb9_prof);

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
