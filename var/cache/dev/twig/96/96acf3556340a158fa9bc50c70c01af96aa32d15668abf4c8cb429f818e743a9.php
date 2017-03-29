<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_351d60e91eb13c69aa51a93567ddc0f93598c64b2e9c535e98f29d5782367886 extends Twig_Template
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
        $__internal_d3aa44836d1a58ddf93552db6f8b627540818e32ad1511d1e40fbb2bf88b9ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3aa44836d1a58ddf93552db6f8b627540818e32ad1511d1e40fbb2bf88b9ab1->enter($__internal_d3aa44836d1a58ddf93552db6f8b627540818e32ad1511d1e40fbb2bf88b9ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_95a187ae1e937b4e097f9b046c1ef8762073acd87aca61959e42b073562d0872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a187ae1e937b4e097f9b046c1ef8762073acd87aca61959e42b073562d0872->enter($__internal_95a187ae1e937b4e097f9b046c1ef8762073acd87aca61959e42b073562d0872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3aa44836d1a58ddf93552db6f8b627540818e32ad1511d1e40fbb2bf88b9ab1->leave($__internal_d3aa44836d1a58ddf93552db6f8b627540818e32ad1511d1e40fbb2bf88b9ab1_prof);

        
        $__internal_95a187ae1e937b4e097f9b046c1ef8762073acd87aca61959e42b073562d0872->leave($__internal_95a187ae1e937b4e097f9b046c1ef8762073acd87aca61959e42b073562d0872_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb8173db3fabca2cedd5f66bce1b4b73bffddde7150955dceed673bd25a416ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8173db3fabca2cedd5f66bce1b4b73bffddde7150955dceed673bd25a416ef->enter($__internal_cb8173db3fabca2cedd5f66bce1b4b73bffddde7150955dceed673bd25a416ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15d2e53c02273625d269af74c9bd5c7bfbd3c7a379b2bf026cfc55054595e1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d2e53c02273625d269af74c9bd5c7bfbd3c7a379b2bf026cfc55054595e1e4->enter($__internal_15d2e53c02273625d269af74c9bd5c7bfbd3c7a379b2bf026cfc55054595e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_15d2e53c02273625d269af74c9bd5c7bfbd3c7a379b2bf026cfc55054595e1e4->leave($__internal_15d2e53c02273625d269af74c9bd5c7bfbd3c7a379b2bf026cfc55054595e1e4_prof);

        
        $__internal_cb8173db3fabca2cedd5f66bce1b4b73bffddde7150955dceed673bd25a416ef->leave($__internal_cb8173db3fabca2cedd5f66bce1b4b73bffddde7150955dceed673bd25a416ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf107bf753ca89787899f1d4b35b7d368ebeb443960d117f4ec9642f469b124f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf107bf753ca89787899f1d4b35b7d368ebeb443960d117f4ec9642f469b124f->enter($__internal_bf107bf753ca89787899f1d4b35b7d368ebeb443960d117f4ec9642f469b124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a79ce626ee6ee44b89757685bddf871d77a7f60df20e8c808c3fd953b2e3352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a79ce626ee6ee44b89757685bddf871d77a7f60df20e8c808c3fd953b2e3352->enter($__internal_1a79ce626ee6ee44b89757685bddf871d77a7f60df20e8c808c3fd953b2e3352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a79ce626ee6ee44b89757685bddf871d77a7f60df20e8c808c3fd953b2e3352->leave($__internal_1a79ce626ee6ee44b89757685bddf871d77a7f60df20e8c808c3fd953b2e3352_prof);

        
        $__internal_bf107bf753ca89787899f1d4b35b7d368ebeb443960d117f4ec9642f469b124f->leave($__internal_bf107bf753ca89787899f1d4b35b7d368ebeb443960d117f4ec9642f469b124f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36d541bcf21bc75631286b98d6f792b51fd43f130ac4f3a140bca3499861a6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d541bcf21bc75631286b98d6f792b51fd43f130ac4f3a140bca3499861a6f5->enter($__internal_36d541bcf21bc75631286b98d6f792b51fd43f130ac4f3a140bca3499861a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d540d8a842d1430d1390dc7676378f961324ae8742133f2b1e522f1102c68f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d540d8a842d1430d1390dc7676378f961324ae8742133f2b1e522f1102c68f6f->enter($__internal_d540d8a842d1430d1390dc7676378f961324ae8742133f2b1e522f1102c68f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d540d8a842d1430d1390dc7676378f961324ae8742133f2b1e522f1102c68f6f->leave($__internal_d540d8a842d1430d1390dc7676378f961324ae8742133f2b1e522f1102c68f6f_prof);

        
        $__internal_36d541bcf21bc75631286b98d6f792b51fd43f130ac4f3a140bca3499861a6f5->leave($__internal_36d541bcf21bc75631286b98d6f792b51fd43f130ac4f3a140bca3499861a6f5_prof);

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
