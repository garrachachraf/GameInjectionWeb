<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1e7c4110638e081181e4486bb94496e557a95d79f5196734fe97d4b873897b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_1c42388e48c7ed682c8010ecf485589db7ee979e275b5bd1d5ae6e28cf1f0c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c42388e48c7ed682c8010ecf485589db7ee979e275b5bd1d5ae6e28cf1f0c30->enter($__internal_1c42388e48c7ed682c8010ecf485589db7ee979e275b5bd1d5ae6e28cf1f0c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e8be3b0e642bd0aa405e3b0b26da4cf8a19579d5edb4eb922311d8d14758618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8be3b0e642bd0aa405e3b0b26da4cf8a19579d5edb4eb922311d8d14758618a->enter($__internal_e8be3b0e642bd0aa405e3b0b26da4cf8a19579d5edb4eb922311d8d14758618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c42388e48c7ed682c8010ecf485589db7ee979e275b5bd1d5ae6e28cf1f0c30->leave($__internal_1c42388e48c7ed682c8010ecf485589db7ee979e275b5bd1d5ae6e28cf1f0c30_prof);

        
        $__internal_e8be3b0e642bd0aa405e3b0b26da4cf8a19579d5edb4eb922311d8d14758618a->leave($__internal_e8be3b0e642bd0aa405e3b0b26da4cf8a19579d5edb4eb922311d8d14758618a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92959cce068fed38a1796ee9cc455ce1e3881097ed34433dfb1b4cdc1794d15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92959cce068fed38a1796ee9cc455ce1e3881097ed34433dfb1b4cdc1794d15b->enter($__internal_92959cce068fed38a1796ee9cc455ce1e3881097ed34433dfb1b4cdc1794d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7b2d7bba87ab71fd963b28de62a708babbce26d722d16ca17394a0d4573a2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b2d7bba87ab71fd963b28de62a708babbce26d722d16ca17394a0d4573a2eb->enter($__internal_c7b2d7bba87ab71fd963b28de62a708babbce26d722d16ca17394a0d4573a2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c7b2d7bba87ab71fd963b28de62a708babbce26d722d16ca17394a0d4573a2eb->leave($__internal_c7b2d7bba87ab71fd963b28de62a708babbce26d722d16ca17394a0d4573a2eb_prof);

        
        $__internal_92959cce068fed38a1796ee9cc455ce1e3881097ed34433dfb1b4cdc1794d15b->leave($__internal_92959cce068fed38a1796ee9cc455ce1e3881097ed34433dfb1b4cdc1794d15b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a79a486a97dcb1d1099ce062ff4d692e824fa7e007ca6277a3bbd130fe5e406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a79a486a97dcb1d1099ce062ff4d692e824fa7e007ca6277a3bbd130fe5e406->enter($__internal_7a79a486a97dcb1d1099ce062ff4d692e824fa7e007ca6277a3bbd130fe5e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88adf288930766a145e9d5bcbdad952cc35c9553d8ca7e5b459b3264d43ec18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88adf288930766a145e9d5bcbdad952cc35c9553d8ca7e5b459b3264d43ec18e->enter($__internal_88adf288930766a145e9d5bcbdad952cc35c9553d8ca7e5b459b3264d43ec18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_88adf288930766a145e9d5bcbdad952cc35c9553d8ca7e5b459b3264d43ec18e->leave($__internal_88adf288930766a145e9d5bcbdad952cc35c9553d8ca7e5b459b3264d43ec18e_prof);

        
        $__internal_7a79a486a97dcb1d1099ce062ff4d692e824fa7e007ca6277a3bbd130fe5e406->leave($__internal_7a79a486a97dcb1d1099ce062ff4d692e824fa7e007ca6277a3bbd130fe5e406_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adedaf272edaa7b4297be21fcd056bb4f9d62871299ca8e7df8fc008324772ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adedaf272edaa7b4297be21fcd056bb4f9d62871299ca8e7df8fc008324772ee->enter($__internal_adedaf272edaa7b4297be21fcd056bb4f9d62871299ca8e7df8fc008324772ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0571f676eb5b20a8655a3e98565df42624b08c36a1709eb29271dd6f6ce0978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0571f676eb5b20a8655a3e98565df42624b08c36a1709eb29271dd6f6ce0978->enter($__internal_e0571f676eb5b20a8655a3e98565df42624b08c36a1709eb29271dd6f6ce0978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e0571f676eb5b20a8655a3e98565df42624b08c36a1709eb29271dd6f6ce0978->leave($__internal_e0571f676eb5b20a8655a3e98565df42624b08c36a1709eb29271dd6f6ce0978_prof);

        
        $__internal_adedaf272edaa7b4297be21fcd056bb4f9d62871299ca8e7df8fc008324772ee->leave($__internal_adedaf272edaa7b4297be21fcd056bb4f9d62871299ca8e7df8fc008324772ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
