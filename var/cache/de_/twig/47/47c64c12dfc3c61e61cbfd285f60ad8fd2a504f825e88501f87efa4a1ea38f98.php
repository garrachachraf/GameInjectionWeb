<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_85d867aeb0e546769dc39d264b0f9a45f02daf04bfb599be1b31fa58d2922915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9f2b667355e73e395b07651b4d8af0f5c22e3104f1410bbc75c2be6e586a7bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2b667355e73e395b07651b4d8af0f5c22e3104f1410bbc75c2be6e586a7bee->enter($__internal_9f2b667355e73e395b07651b4d8af0f5c22e3104f1410bbc75c2be6e586a7bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_97597f2f32c7b7b7adc95313bc2207fce9fb6d198cc63fa618166b5b25562f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97597f2f32c7b7b7adc95313bc2207fce9fb6d198cc63fa618166b5b25562f76->enter($__internal_97597f2f32c7b7b7adc95313bc2207fce9fb6d198cc63fa618166b5b25562f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2b667355e73e395b07651b4d8af0f5c22e3104f1410bbc75c2be6e586a7bee->leave($__internal_9f2b667355e73e395b07651b4d8af0f5c22e3104f1410bbc75c2be6e586a7bee_prof);

        
        $__internal_97597f2f32c7b7b7adc95313bc2207fce9fb6d198cc63fa618166b5b25562f76->leave($__internal_97597f2f32c7b7b7adc95313bc2207fce9fb6d198cc63fa618166b5b25562f76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf125d02bcc6a08fb408286cf7b960e9f66b7b6b0e4ee994792c469c7b129e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf125d02bcc6a08fb408286cf7b960e9f66b7b6b0e4ee994792c469c7b129e5c->enter($__internal_cf125d02bcc6a08fb408286cf7b960e9f66b7b6b0e4ee994792c469c7b129e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd7662e461f78bd91c1b9d707b6002f4979865bc1fb197ae39d931cce4a26ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7662e461f78bd91c1b9d707b6002f4979865bc1fb197ae39d931cce4a26ce0->enter($__internal_bd7662e461f78bd91c1b9d707b6002f4979865bc1fb197ae39d931cce4a26ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd7662e461f78bd91c1b9d707b6002f4979865bc1fb197ae39d931cce4a26ce0->leave($__internal_bd7662e461f78bd91c1b9d707b6002f4979865bc1fb197ae39d931cce4a26ce0_prof);

        
        $__internal_cf125d02bcc6a08fb408286cf7b960e9f66b7b6b0e4ee994792c469c7b129e5c->leave($__internal_cf125d02bcc6a08fb408286cf7b960e9f66b7b6b0e4ee994792c469c7b129e5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27b14ce395ff3c7d500c0575112f56b7997c463234afe2728a868a3a30a3074c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b14ce395ff3c7d500c0575112f56b7997c463234afe2728a868a3a30a3074c->enter($__internal_27b14ce395ff3c7d500c0575112f56b7997c463234afe2728a868a3a30a3074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf0da4d14ebee40b1b6f3e9be4d8c8ba32db2fffd0d68bf00f82218c2dab559b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0da4d14ebee40b1b6f3e9be4d8c8ba32db2fffd0d68bf00f82218c2dab559b->enter($__internal_cf0da4d14ebee40b1b6f3e9be4d8c8ba32db2fffd0d68bf00f82218c2dab559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf0da4d14ebee40b1b6f3e9be4d8c8ba32db2fffd0d68bf00f82218c2dab559b->leave($__internal_cf0da4d14ebee40b1b6f3e9be4d8c8ba32db2fffd0d68bf00f82218c2dab559b_prof);

        
        $__internal_27b14ce395ff3c7d500c0575112f56b7997c463234afe2728a868a3a30a3074c->leave($__internal_27b14ce395ff3c7d500c0575112f56b7997c463234afe2728a868a3a30a3074c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8cef3cbb04d7878e320cbdd9bce5ad787cc6189420f7d5dd3b645176f131636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cef3cbb04d7878e320cbdd9bce5ad787cc6189420f7d5dd3b645176f131636->enter($__internal_b8cef3cbb04d7878e320cbdd9bce5ad787cc6189420f7d5dd3b645176f131636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5583c487b0d94d54bf8d6f16f2cc21ed752b7e1f0653d42577d4412751224e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5583c487b0d94d54bf8d6f16f2cc21ed752b7e1f0653d42577d4412751224e5e->enter($__internal_5583c487b0d94d54bf8d6f16f2cc21ed752b7e1f0653d42577d4412751224e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5583c487b0d94d54bf8d6f16f2cc21ed752b7e1f0653d42577d4412751224e5e->leave($__internal_5583c487b0d94d54bf8d6f16f2cc21ed752b7e1f0653d42577d4412751224e5e_prof);

        
        $__internal_b8cef3cbb04d7878e320cbdd9bce5ad787cc6189420f7d5dd3b645176f131636->leave($__internal_b8cef3cbb04d7878e320cbdd9bce5ad787cc6189420f7d5dd3b645176f131636_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
