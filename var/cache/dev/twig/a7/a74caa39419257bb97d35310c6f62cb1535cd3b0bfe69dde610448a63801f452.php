<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_778ca3f24c84fcc07206ac9a58e4e4c24f8a3a996b90bef5dcf5980956c2d9eb extends Twig_Template
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
        $__internal_5d087cff43a6a86a88d1bba21423687a0a7c449c31656d5c942afb03fb72c4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d087cff43a6a86a88d1bba21423687a0a7c449c31656d5c942afb03fb72c4b6->enter($__internal_5d087cff43a6a86a88d1bba21423687a0a7c449c31656d5c942afb03fb72c4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_666f356be708c8f8816c9c0ba9f6591fa4fc041cd98101a7b352c4ee3aad39ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666f356be708c8f8816c9c0ba9f6591fa4fc041cd98101a7b352c4ee3aad39ad->enter($__internal_666f356be708c8f8816c9c0ba9f6591fa4fc041cd98101a7b352c4ee3aad39ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d087cff43a6a86a88d1bba21423687a0a7c449c31656d5c942afb03fb72c4b6->leave($__internal_5d087cff43a6a86a88d1bba21423687a0a7c449c31656d5c942afb03fb72c4b6_prof);

        
        $__internal_666f356be708c8f8816c9c0ba9f6591fa4fc041cd98101a7b352c4ee3aad39ad->leave($__internal_666f356be708c8f8816c9c0ba9f6591fa4fc041cd98101a7b352c4ee3aad39ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4492571a2c0b2a8fcff9598adabdb9e3ee059b5866bb7cf1d048462d8c29563c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4492571a2c0b2a8fcff9598adabdb9e3ee059b5866bb7cf1d048462d8c29563c->enter($__internal_4492571a2c0b2a8fcff9598adabdb9e3ee059b5866bb7cf1d048462d8c29563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c22fcc51143b96e90b55a0b6e354a6d210b538a8eb493f0e3544995fa7b76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c22fcc51143b96e90b55a0b6e354a6d210b538a8eb493f0e3544995fa7b76dc->enter($__internal_9c22fcc51143b96e90b55a0b6e354a6d210b538a8eb493f0e3544995fa7b76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c22fcc51143b96e90b55a0b6e354a6d210b538a8eb493f0e3544995fa7b76dc->leave($__internal_9c22fcc51143b96e90b55a0b6e354a6d210b538a8eb493f0e3544995fa7b76dc_prof);

        
        $__internal_4492571a2c0b2a8fcff9598adabdb9e3ee059b5866bb7cf1d048462d8c29563c->leave($__internal_4492571a2c0b2a8fcff9598adabdb9e3ee059b5866bb7cf1d048462d8c29563c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8975ee3ced50d9e770d497bb59f2239eb5e9dead0b634ab87ab3f04e5f187a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8975ee3ced50d9e770d497bb59f2239eb5e9dead0b634ab87ab3f04e5f187a0b->enter($__internal_8975ee3ced50d9e770d497bb59f2239eb5e9dead0b634ab87ab3f04e5f187a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e64772b95a395b29124b553189f0d5e495c194a5afa7293f185cc9aedbf9f889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64772b95a395b29124b553189f0d5e495c194a5afa7293f185cc9aedbf9f889->enter($__internal_e64772b95a395b29124b553189f0d5e495c194a5afa7293f185cc9aedbf9f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e64772b95a395b29124b553189f0d5e495c194a5afa7293f185cc9aedbf9f889->leave($__internal_e64772b95a395b29124b553189f0d5e495c194a5afa7293f185cc9aedbf9f889_prof);

        
        $__internal_8975ee3ced50d9e770d497bb59f2239eb5e9dead0b634ab87ab3f04e5f187a0b->leave($__internal_8975ee3ced50d9e770d497bb59f2239eb5e9dead0b634ab87ab3f04e5f187a0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41392607b5074c8a87f8f2ab6e839bcb5e1a0dcb815a59081868431652170795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41392607b5074c8a87f8f2ab6e839bcb5e1a0dcb815a59081868431652170795->enter($__internal_41392607b5074c8a87f8f2ab6e839bcb5e1a0dcb815a59081868431652170795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ff9f4791477ccd63f338893ef48feafb54d991156a0cd4471fe3aa73c21cf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff9f4791477ccd63f338893ef48feafb54d991156a0cd4471fe3aa73c21cf36->enter($__internal_6ff9f4791477ccd63f338893ef48feafb54d991156a0cd4471fe3aa73c21cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ff9f4791477ccd63f338893ef48feafb54d991156a0cd4471fe3aa73c21cf36->leave($__internal_6ff9f4791477ccd63f338893ef48feafb54d991156a0cd4471fe3aa73c21cf36_prof);

        
        $__internal_41392607b5074c8a87f8f2ab6e839bcb5e1a0dcb815a59081868431652170795->leave($__internal_41392607b5074c8a87f8f2ab6e839bcb5e1a0dcb815a59081868431652170795_prof);

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
