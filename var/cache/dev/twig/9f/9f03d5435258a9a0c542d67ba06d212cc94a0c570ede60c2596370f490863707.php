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
        $__internal_eee44864a45e1694975944f657d3d5f7fe29b907189d5357173f72b0daad0b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee44864a45e1694975944f657d3d5f7fe29b907189d5357173f72b0daad0b25->enter($__internal_eee44864a45e1694975944f657d3d5f7fe29b907189d5357173f72b0daad0b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ad2a9ccbe1ca195aa0f63f9774c76c50b514054e4bb5f77b3ece1ea007ac6454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2a9ccbe1ca195aa0f63f9774c76c50b514054e4bb5f77b3ece1ea007ac6454->enter($__internal_ad2a9ccbe1ca195aa0f63f9774c76c50b514054e4bb5f77b3ece1ea007ac6454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee44864a45e1694975944f657d3d5f7fe29b907189d5357173f72b0daad0b25->leave($__internal_eee44864a45e1694975944f657d3d5f7fe29b907189d5357173f72b0daad0b25_prof);

        
        $__internal_ad2a9ccbe1ca195aa0f63f9774c76c50b514054e4bb5f77b3ece1ea007ac6454->leave($__internal_ad2a9ccbe1ca195aa0f63f9774c76c50b514054e4bb5f77b3ece1ea007ac6454_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0e0574ccf748f388a4c4861c217810dcd23e2cbeda48ac7080bf9e266f42026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e0574ccf748f388a4c4861c217810dcd23e2cbeda48ac7080bf9e266f42026->enter($__internal_d0e0574ccf748f388a4c4861c217810dcd23e2cbeda48ac7080bf9e266f42026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4306c7203af6bab6002045aa2a00c12bbec8539b46ac26e6fb944fec37bc7ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4306c7203af6bab6002045aa2a00c12bbec8539b46ac26e6fb944fec37bc7ea5->enter($__internal_4306c7203af6bab6002045aa2a00c12bbec8539b46ac26e6fb944fec37bc7ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4306c7203af6bab6002045aa2a00c12bbec8539b46ac26e6fb944fec37bc7ea5->leave($__internal_4306c7203af6bab6002045aa2a00c12bbec8539b46ac26e6fb944fec37bc7ea5_prof);

        
        $__internal_d0e0574ccf748f388a4c4861c217810dcd23e2cbeda48ac7080bf9e266f42026->leave($__internal_d0e0574ccf748f388a4c4861c217810dcd23e2cbeda48ac7080bf9e266f42026_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a056ce8adcb8026810eb3ac5b41e091f93fb630cd340125b48fc9dda3b607afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a056ce8adcb8026810eb3ac5b41e091f93fb630cd340125b48fc9dda3b607afc->enter($__internal_a056ce8adcb8026810eb3ac5b41e091f93fb630cd340125b48fc9dda3b607afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81e330a9b871f63663e436facb4ff3a195930ed9d1bd3c4a6adc4af4a541b374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e330a9b871f63663e436facb4ff3a195930ed9d1bd3c4a6adc4af4a541b374->enter($__internal_81e330a9b871f63663e436facb4ff3a195930ed9d1bd3c4a6adc4af4a541b374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_81e330a9b871f63663e436facb4ff3a195930ed9d1bd3c4a6adc4af4a541b374->leave($__internal_81e330a9b871f63663e436facb4ff3a195930ed9d1bd3c4a6adc4af4a541b374_prof);

        
        $__internal_a056ce8adcb8026810eb3ac5b41e091f93fb630cd340125b48fc9dda3b607afc->leave($__internal_a056ce8adcb8026810eb3ac5b41e091f93fb630cd340125b48fc9dda3b607afc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba25d9e84c2edc3fed6310b88562fe24aee8be3ea6fc7a5bc9efe11475f8dac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba25d9e84c2edc3fed6310b88562fe24aee8be3ea6fc7a5bc9efe11475f8dac6->enter($__internal_ba25d9e84c2edc3fed6310b88562fe24aee8be3ea6fc7a5bc9efe11475f8dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_886435754543fec507ea3a8c6ad8474956f01cf258499ad657f554ec29c24b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886435754543fec507ea3a8c6ad8474956f01cf258499ad657f554ec29c24b86->enter($__internal_886435754543fec507ea3a8c6ad8474956f01cf258499ad657f554ec29c24b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_886435754543fec507ea3a8c6ad8474956f01cf258499ad657f554ec29c24b86->leave($__internal_886435754543fec507ea3a8c6ad8474956f01cf258499ad657f554ec29c24b86_prof);

        
        $__internal_ba25d9e84c2edc3fed6310b88562fe24aee8be3ea6fc7a5bc9efe11475f8dac6->leave($__internal_ba25d9e84c2edc3fed6310b88562fe24aee8be3ea6fc7a5bc9efe11475f8dac6_prof);

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
