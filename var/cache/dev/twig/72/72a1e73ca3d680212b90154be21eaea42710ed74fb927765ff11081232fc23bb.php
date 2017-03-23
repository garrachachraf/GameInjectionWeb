<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d82e33d6e5a1fe2efe9c2789d0db59a9f5fb302d585d5f10bf211a0d2f99b14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_fb7b87e8f7c329f5fba9034eb2a3591596cb4eecee0b6353be8d5846d5b51bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7b87e8f7c329f5fba9034eb2a3591596cb4eecee0b6353be8d5846d5b51bc4->enter($__internal_fb7b87e8f7c329f5fba9034eb2a3591596cb4eecee0b6353be8d5846d5b51bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f8a94954e5fa2b73e520d8261f69771b01859b789f8b1fc96637daba2456a0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a94954e5fa2b73e520d8261f69771b01859b789f8b1fc96637daba2456a0f6->enter($__internal_f8a94954e5fa2b73e520d8261f69771b01859b789f8b1fc96637daba2456a0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7b87e8f7c329f5fba9034eb2a3591596cb4eecee0b6353be8d5846d5b51bc4->leave($__internal_fb7b87e8f7c329f5fba9034eb2a3591596cb4eecee0b6353be8d5846d5b51bc4_prof);

        
        $__internal_f8a94954e5fa2b73e520d8261f69771b01859b789f8b1fc96637daba2456a0f6->leave($__internal_f8a94954e5fa2b73e520d8261f69771b01859b789f8b1fc96637daba2456a0f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53e800a8d0a9fef77ffa7dddcc02cdc9c154c6bd651fb3d6450626a8367941b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e800a8d0a9fef77ffa7dddcc02cdc9c154c6bd651fb3d6450626a8367941b5->enter($__internal_53e800a8d0a9fef77ffa7dddcc02cdc9c154c6bd651fb3d6450626a8367941b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b43ae0350e5ca5c88ea7174b19f040cb99db2c579afc0238a30e5e395a82ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43ae0350e5ca5c88ea7174b19f040cb99db2c579afc0238a30e5e395a82ee7a->enter($__internal_b43ae0350e5ca5c88ea7174b19f040cb99db2c579afc0238a30e5e395a82ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b43ae0350e5ca5c88ea7174b19f040cb99db2c579afc0238a30e5e395a82ee7a->leave($__internal_b43ae0350e5ca5c88ea7174b19f040cb99db2c579afc0238a30e5e395a82ee7a_prof);

        
        $__internal_53e800a8d0a9fef77ffa7dddcc02cdc9c154c6bd651fb3d6450626a8367941b5->leave($__internal_53e800a8d0a9fef77ffa7dddcc02cdc9c154c6bd651fb3d6450626a8367941b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c65bdb44e444a75276cded6767caf9a418b606aa59bd1451cd8aa857add5c88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65bdb44e444a75276cded6767caf9a418b606aa59bd1451cd8aa857add5c88a->enter($__internal_c65bdb44e444a75276cded6767caf9a418b606aa59bd1451cd8aa857add5c88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8ffa43aeb94ed0ac57612f25acbcc1c32b00b68219c069349aef91b4f938c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ffa43aeb94ed0ac57612f25acbcc1c32b00b68219c069349aef91b4f938c1c->enter($__internal_c8ffa43aeb94ed0ac57612f25acbcc1c32b00b68219c069349aef91b4f938c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8ffa43aeb94ed0ac57612f25acbcc1c32b00b68219c069349aef91b4f938c1c->leave($__internal_c8ffa43aeb94ed0ac57612f25acbcc1c32b00b68219c069349aef91b4f938c1c_prof);

        
        $__internal_c65bdb44e444a75276cded6767caf9a418b606aa59bd1451cd8aa857add5c88a->leave($__internal_c65bdb44e444a75276cded6767caf9a418b606aa59bd1451cd8aa857add5c88a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6e8b4083ee74a7e5e2d9fd8899105acd91978f3b26becc0c021d053ab9c115c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e8b4083ee74a7e5e2d9fd8899105acd91978f3b26becc0c021d053ab9c115c->enter($__internal_c6e8b4083ee74a7e5e2d9fd8899105acd91978f3b26becc0c021d053ab9c115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d75d33144ef5f9a6c94358d27047cac00cb77531cacadb36728c66ea2a8c309d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75d33144ef5f9a6c94358d27047cac00cb77531cacadb36728c66ea2a8c309d->enter($__internal_d75d33144ef5f9a6c94358d27047cac00cb77531cacadb36728c66ea2a8c309d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d75d33144ef5f9a6c94358d27047cac00cb77531cacadb36728c66ea2a8c309d->leave($__internal_d75d33144ef5f9a6c94358d27047cac00cb77531cacadb36728c66ea2a8c309d_prof);

        
        $__internal_c6e8b4083ee74a7e5e2d9fd8899105acd91978f3b26becc0c021d053ab9c115c->leave($__internal_c6e8b4083ee74a7e5e2d9fd8899105acd91978f3b26becc0c021d053ab9c115c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
