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
        $__internal_5ee185cb4a57b01d74f938d5ec95915a1dd84e5f3c069c2ff739a76da7ce2886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee185cb4a57b01d74f938d5ec95915a1dd84e5f3c069c2ff739a76da7ce2886->enter($__internal_5ee185cb4a57b01d74f938d5ec95915a1dd84e5f3c069c2ff739a76da7ce2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7c28b02317e62810198894b5a57422f9cd1b4e4d7900d5f5eabd8a3014921631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c28b02317e62810198894b5a57422f9cd1b4e4d7900d5f5eabd8a3014921631->enter($__internal_7c28b02317e62810198894b5a57422f9cd1b4e4d7900d5f5eabd8a3014921631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee185cb4a57b01d74f938d5ec95915a1dd84e5f3c069c2ff739a76da7ce2886->leave($__internal_5ee185cb4a57b01d74f938d5ec95915a1dd84e5f3c069c2ff739a76da7ce2886_prof);

        
        $__internal_7c28b02317e62810198894b5a57422f9cd1b4e4d7900d5f5eabd8a3014921631->leave($__internal_7c28b02317e62810198894b5a57422f9cd1b4e4d7900d5f5eabd8a3014921631_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_983c5b281e7423e14d893f7381c3ee51b75aee7db1cd7dfd232b773550c53564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983c5b281e7423e14d893f7381c3ee51b75aee7db1cd7dfd232b773550c53564->enter($__internal_983c5b281e7423e14d893f7381c3ee51b75aee7db1cd7dfd232b773550c53564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6681a9c155a9b81acdcc994ea5253a1fb70589bb4b1646e0e0ae6e47d7feb618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6681a9c155a9b81acdcc994ea5253a1fb70589bb4b1646e0e0ae6e47d7feb618->enter($__internal_6681a9c155a9b81acdcc994ea5253a1fb70589bb4b1646e0e0ae6e47d7feb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6681a9c155a9b81acdcc994ea5253a1fb70589bb4b1646e0e0ae6e47d7feb618->leave($__internal_6681a9c155a9b81acdcc994ea5253a1fb70589bb4b1646e0e0ae6e47d7feb618_prof);

        
        $__internal_983c5b281e7423e14d893f7381c3ee51b75aee7db1cd7dfd232b773550c53564->leave($__internal_983c5b281e7423e14d893f7381c3ee51b75aee7db1cd7dfd232b773550c53564_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f85dfb24dcd482b6d54a3d2e1e7d7f2a752b34eb79e30acb414d2c8e9de84bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85dfb24dcd482b6d54a3d2e1e7d7f2a752b34eb79e30acb414d2c8e9de84bfc->enter($__internal_f85dfb24dcd482b6d54a3d2e1e7d7f2a752b34eb79e30acb414d2c8e9de84bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8783148a07c78ddf765d55b08e8476e2a61db1ec93a7a029c4aeba63aa7fc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8783148a07c78ddf765d55b08e8476e2a61db1ec93a7a029c4aeba63aa7fc34->enter($__internal_e8783148a07c78ddf765d55b08e8476e2a61db1ec93a7a029c4aeba63aa7fc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8783148a07c78ddf765d55b08e8476e2a61db1ec93a7a029c4aeba63aa7fc34->leave($__internal_e8783148a07c78ddf765d55b08e8476e2a61db1ec93a7a029c4aeba63aa7fc34_prof);

        
        $__internal_f85dfb24dcd482b6d54a3d2e1e7d7f2a752b34eb79e30acb414d2c8e9de84bfc->leave($__internal_f85dfb24dcd482b6d54a3d2e1e7d7f2a752b34eb79e30acb414d2c8e9de84bfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7fcbe232c909460ed3fa3e2f2bc140f12a783926a15465d9ffff316f87bef77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fcbe232c909460ed3fa3e2f2bc140f12a783926a15465d9ffff316f87bef77->enter($__internal_f7fcbe232c909460ed3fa3e2f2bc140f12a783926a15465d9ffff316f87bef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12c581bf05ff082ccfb73abdfacdf47e36bd7fe954ddb14909ea458adf230d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c581bf05ff082ccfb73abdfacdf47e36bd7fe954ddb14909ea458adf230d53->enter($__internal_12c581bf05ff082ccfb73abdfacdf47e36bd7fe954ddb14909ea458adf230d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12c581bf05ff082ccfb73abdfacdf47e36bd7fe954ddb14909ea458adf230d53->leave($__internal_12c581bf05ff082ccfb73abdfacdf47e36bd7fe954ddb14909ea458adf230d53_prof);

        
        $__internal_f7fcbe232c909460ed3fa3e2f2bc140f12a783926a15465d9ffff316f87bef77->leave($__internal_f7fcbe232c909460ed3fa3e2f2bc140f12a783926a15465d9ffff316f87bef77_prof);

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
