<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d411f8cbec23d00ba49e580858812bd182a9a0662c817b472c05499695fd76b3 extends Twig_Template
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
        $__internal_e2a171788e3f3fa5a4c43e80e951c17b0e5d872fa1508550e5f7033c01370375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a171788e3f3fa5a4c43e80e951c17b0e5d872fa1508550e5f7033c01370375->enter($__internal_e2a171788e3f3fa5a4c43e80e951c17b0e5d872fa1508550e5f7033c01370375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_03cd7d41eefed723dfcf848c30e9cc91cfb9f08f6cea2342270f429730c09320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cd7d41eefed723dfcf848c30e9cc91cfb9f08f6cea2342270f429730c09320->enter($__internal_03cd7d41eefed723dfcf848c30e9cc91cfb9f08f6cea2342270f429730c09320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a171788e3f3fa5a4c43e80e951c17b0e5d872fa1508550e5f7033c01370375->leave($__internal_e2a171788e3f3fa5a4c43e80e951c17b0e5d872fa1508550e5f7033c01370375_prof);

        
        $__internal_03cd7d41eefed723dfcf848c30e9cc91cfb9f08f6cea2342270f429730c09320->leave($__internal_03cd7d41eefed723dfcf848c30e9cc91cfb9f08f6cea2342270f429730c09320_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d8bbd52a8f4fefac7343c714768a027821cc31261e41f6fafd46b03d27d4271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8bbd52a8f4fefac7343c714768a027821cc31261e41f6fafd46b03d27d4271->enter($__internal_7d8bbd52a8f4fefac7343c714768a027821cc31261e41f6fafd46b03d27d4271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4841b18b5ee73d32993fcd2777db963c17a45400074d7ec816d9cd6cd44f304b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4841b18b5ee73d32993fcd2777db963c17a45400074d7ec816d9cd6cd44f304b->enter($__internal_4841b18b5ee73d32993fcd2777db963c17a45400074d7ec816d9cd6cd44f304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4841b18b5ee73d32993fcd2777db963c17a45400074d7ec816d9cd6cd44f304b->leave($__internal_4841b18b5ee73d32993fcd2777db963c17a45400074d7ec816d9cd6cd44f304b_prof);

        
        $__internal_7d8bbd52a8f4fefac7343c714768a027821cc31261e41f6fafd46b03d27d4271->leave($__internal_7d8bbd52a8f4fefac7343c714768a027821cc31261e41f6fafd46b03d27d4271_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5b8828ae08d1f2eea8b4c6fbe86dd7d23bd36e573770156076aaf37d1dec1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b8828ae08d1f2eea8b4c6fbe86dd7d23bd36e573770156076aaf37d1dec1c4->enter($__internal_b5b8828ae08d1f2eea8b4c6fbe86dd7d23bd36e573770156076aaf37d1dec1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3afb3ddfcd96ecb57d622d4ebfbfa7d70b9b40c32a9224daf3c06efa535bb9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afb3ddfcd96ecb57d622d4ebfbfa7d70b9b40c32a9224daf3c06efa535bb9c4->enter($__internal_3afb3ddfcd96ecb57d622d4ebfbfa7d70b9b40c32a9224daf3c06efa535bb9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3afb3ddfcd96ecb57d622d4ebfbfa7d70b9b40c32a9224daf3c06efa535bb9c4->leave($__internal_3afb3ddfcd96ecb57d622d4ebfbfa7d70b9b40c32a9224daf3c06efa535bb9c4_prof);

        
        $__internal_b5b8828ae08d1f2eea8b4c6fbe86dd7d23bd36e573770156076aaf37d1dec1c4->leave($__internal_b5b8828ae08d1f2eea8b4c6fbe86dd7d23bd36e573770156076aaf37d1dec1c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_615a3b3e9a0dc0523a68b6d401e9f907aa7ce3a1c4e9850a453fcd54dd017723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615a3b3e9a0dc0523a68b6d401e9f907aa7ce3a1c4e9850a453fcd54dd017723->enter($__internal_615a3b3e9a0dc0523a68b6d401e9f907aa7ce3a1c4e9850a453fcd54dd017723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_daa65b5c45ecff4cdb8e0b6f834e66f9dc7cd56f2718c9157d3355a0d296e411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa65b5c45ecff4cdb8e0b6f834e66f9dc7cd56f2718c9157d3355a0d296e411->enter($__internal_daa65b5c45ecff4cdb8e0b6f834e66f9dc7cd56f2718c9157d3355a0d296e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_daa65b5c45ecff4cdb8e0b6f834e66f9dc7cd56f2718c9157d3355a0d296e411->leave($__internal_daa65b5c45ecff4cdb8e0b6f834e66f9dc7cd56f2718c9157d3355a0d296e411_prof);

        
        $__internal_615a3b3e9a0dc0523a68b6d401e9f907aa7ce3a1c4e9850a453fcd54dd017723->leave($__internal_615a3b3e9a0dc0523a68b6d401e9f907aa7ce3a1c4e9850a453fcd54dd017723_prof);

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
