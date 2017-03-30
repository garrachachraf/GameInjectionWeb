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
        $__internal_326fc27cd9b9a8e319b8f6576a0be336b805170e2cfd1143dc52e61d45d21595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326fc27cd9b9a8e319b8f6576a0be336b805170e2cfd1143dc52e61d45d21595->enter($__internal_326fc27cd9b9a8e319b8f6576a0be336b805170e2cfd1143dc52e61d45d21595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_30090ef67d4fbdde71c343e61693d65457ca707fd6fb301c5426039d146d5644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30090ef67d4fbdde71c343e61693d65457ca707fd6fb301c5426039d146d5644->enter($__internal_30090ef67d4fbdde71c343e61693d65457ca707fd6fb301c5426039d146d5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326fc27cd9b9a8e319b8f6576a0be336b805170e2cfd1143dc52e61d45d21595->leave($__internal_326fc27cd9b9a8e319b8f6576a0be336b805170e2cfd1143dc52e61d45d21595_prof);

        
        $__internal_30090ef67d4fbdde71c343e61693d65457ca707fd6fb301c5426039d146d5644->leave($__internal_30090ef67d4fbdde71c343e61693d65457ca707fd6fb301c5426039d146d5644_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e87d08a124ae28a14446e20887c42a33279bf2c67e36e4dfdd2406590e37a2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87d08a124ae28a14446e20887c42a33279bf2c67e36e4dfdd2406590e37a2c5->enter($__internal_e87d08a124ae28a14446e20887c42a33279bf2c67e36e4dfdd2406590e37a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d4904fcb15217dd602304fbf8b769470a77e9bf1f015f0717f1c86949341938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4904fcb15217dd602304fbf8b769470a77e9bf1f015f0717f1c86949341938->enter($__internal_2d4904fcb15217dd602304fbf8b769470a77e9bf1f015f0717f1c86949341938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2d4904fcb15217dd602304fbf8b769470a77e9bf1f015f0717f1c86949341938->leave($__internal_2d4904fcb15217dd602304fbf8b769470a77e9bf1f015f0717f1c86949341938_prof);

        
        $__internal_e87d08a124ae28a14446e20887c42a33279bf2c67e36e4dfdd2406590e37a2c5->leave($__internal_e87d08a124ae28a14446e20887c42a33279bf2c67e36e4dfdd2406590e37a2c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3b1629cdb948c136b1573405addb443b932a91cf7b3404a17004a41c6e94e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b1629cdb948c136b1573405addb443b932a91cf7b3404a17004a41c6e94e4c->enter($__internal_b3b1629cdb948c136b1573405addb443b932a91cf7b3404a17004a41c6e94e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c9f63f7efeafd4d274ef456ba474b846c3a8241b41d38858011c2511e653f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9f63f7efeafd4d274ef456ba474b846c3a8241b41d38858011c2511e653f51->enter($__internal_4c9f63f7efeafd4d274ef456ba474b846c3a8241b41d38858011c2511e653f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c9f63f7efeafd4d274ef456ba474b846c3a8241b41d38858011c2511e653f51->leave($__internal_4c9f63f7efeafd4d274ef456ba474b846c3a8241b41d38858011c2511e653f51_prof);

        
        $__internal_b3b1629cdb948c136b1573405addb443b932a91cf7b3404a17004a41c6e94e4c->leave($__internal_b3b1629cdb948c136b1573405addb443b932a91cf7b3404a17004a41c6e94e4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_494b5b68e646430ca7f4823be58dfea56f3a78176c0719b7da5dda293a589258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494b5b68e646430ca7f4823be58dfea56f3a78176c0719b7da5dda293a589258->enter($__internal_494b5b68e646430ca7f4823be58dfea56f3a78176c0719b7da5dda293a589258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc85905ee4e0dc9cae5c672984f221805a5b14406e03123d82eb15997b241d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc85905ee4e0dc9cae5c672984f221805a5b14406e03123d82eb15997b241d40->enter($__internal_dc85905ee4e0dc9cae5c672984f221805a5b14406e03123d82eb15997b241d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dc85905ee4e0dc9cae5c672984f221805a5b14406e03123d82eb15997b241d40->leave($__internal_dc85905ee4e0dc9cae5c672984f221805a5b14406e03123d82eb15997b241d40_prof);

        
        $__internal_494b5b68e646430ca7f4823be58dfea56f3a78176c0719b7da5dda293a589258->leave($__internal_494b5b68e646430ca7f4823be58dfea56f3a78176c0719b7da5dda293a589258_prof);

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
