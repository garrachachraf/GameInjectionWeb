<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_dae4a0760c08187bc27c9010dd83f1e65cb4b2ebf8d9417a2e183540085b69fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae4a0760c08187bc27c9010dd83f1e65cb4b2ebf8d9417a2e183540085b69fb->enter($__internal_dae4a0760c08187bc27c9010dd83f1e65cb4b2ebf8d9417a2e183540085b69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6f43a06b5d7980e6dc5a66561c10420eb1bedcdea40dc769af5ca4b294b5f6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f43a06b5d7980e6dc5a66561c10420eb1bedcdea40dc769af5ca4b294b5f6c8->enter($__internal_6f43a06b5d7980e6dc5a66561c10420eb1bedcdea40dc769af5ca4b294b5f6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae4a0760c08187bc27c9010dd83f1e65cb4b2ebf8d9417a2e183540085b69fb->leave($__internal_dae4a0760c08187bc27c9010dd83f1e65cb4b2ebf8d9417a2e183540085b69fb_prof);

        
        $__internal_6f43a06b5d7980e6dc5a66561c10420eb1bedcdea40dc769af5ca4b294b5f6c8->leave($__internal_6f43a06b5d7980e6dc5a66561c10420eb1bedcdea40dc769af5ca4b294b5f6c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e45c4105a6164d72c677175922c95032711b59355f839b4210b80e508987a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e45c4105a6164d72c677175922c95032711b59355f839b4210b80e508987a6d->enter($__internal_6e45c4105a6164d72c677175922c95032711b59355f839b4210b80e508987a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3922b8b4c1b86a36728ad8e030f71bb3ed695932f30c018d6891ee5485f47f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922b8b4c1b86a36728ad8e030f71bb3ed695932f30c018d6891ee5485f47f92->enter($__internal_3922b8b4c1b86a36728ad8e030f71bb3ed695932f30c018d6891ee5485f47f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3922b8b4c1b86a36728ad8e030f71bb3ed695932f30c018d6891ee5485f47f92->leave($__internal_3922b8b4c1b86a36728ad8e030f71bb3ed695932f30c018d6891ee5485f47f92_prof);

        
        $__internal_6e45c4105a6164d72c677175922c95032711b59355f839b4210b80e508987a6d->leave($__internal_6e45c4105a6164d72c677175922c95032711b59355f839b4210b80e508987a6d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce174102d9ec1c636e1ae46f5b8aa34c5b5e9f9b7e6e57881cd34ff6cd3b2b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce174102d9ec1c636e1ae46f5b8aa34c5b5e9f9b7e6e57881cd34ff6cd3b2b1d->enter($__internal_ce174102d9ec1c636e1ae46f5b8aa34c5b5e9f9b7e6e57881cd34ff6cd3b2b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22fb96a0b09d4785bb680537b59c557489463ea306c9e6dc18ee91947f3ce949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fb96a0b09d4785bb680537b59c557489463ea306c9e6dc18ee91947f3ce949->enter($__internal_22fb96a0b09d4785bb680537b59c557489463ea306c9e6dc18ee91947f3ce949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22fb96a0b09d4785bb680537b59c557489463ea306c9e6dc18ee91947f3ce949->leave($__internal_22fb96a0b09d4785bb680537b59c557489463ea306c9e6dc18ee91947f3ce949_prof);

        
        $__internal_ce174102d9ec1c636e1ae46f5b8aa34c5b5e9f9b7e6e57881cd34ff6cd3b2b1d->leave($__internal_ce174102d9ec1c636e1ae46f5b8aa34c5b5e9f9b7e6e57881cd34ff6cd3b2b1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a9b92ae52eea0ffe4cc6677cb79c1aa2750ddf32d3ab700b800d063cfb501aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9b92ae52eea0ffe4cc6677cb79c1aa2750ddf32d3ab700b800d063cfb501aa->enter($__internal_2a9b92ae52eea0ffe4cc6677cb79c1aa2750ddf32d3ab700b800d063cfb501aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f11ceb5902de8b0bb556a19485442fe40f856a9a8838701b2d657a6c215e938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f11ceb5902de8b0bb556a19485442fe40f856a9a8838701b2d657a6c215e938->enter($__internal_0f11ceb5902de8b0bb556a19485442fe40f856a9a8838701b2d657a6c215e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f11ceb5902de8b0bb556a19485442fe40f856a9a8838701b2d657a6c215e938->leave($__internal_0f11ceb5902de8b0bb556a19485442fe40f856a9a8838701b2d657a6c215e938_prof);

        
        $__internal_2a9b92ae52eea0ffe4cc6677cb79c1aa2750ddf32d3ab700b800d063cfb501aa->leave($__internal_2a9b92ae52eea0ffe4cc6677cb79c1aa2750ddf32d3ab700b800d063cfb501aa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
