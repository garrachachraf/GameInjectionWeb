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
        $__internal_5edffc3812a381138ef5a8d75000bcd6e27446f356f3c8d646d580f94fcae2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edffc3812a381138ef5a8d75000bcd6e27446f356f3c8d646d580f94fcae2f6->enter($__internal_5edffc3812a381138ef5a8d75000bcd6e27446f356f3c8d646d580f94fcae2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eed2a1ef1aec5291938c0002e3a27e9c9f3d0214f9a30a00890cea7941e55b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed2a1ef1aec5291938c0002e3a27e9c9f3d0214f9a30a00890cea7941e55b78->enter($__internal_eed2a1ef1aec5291938c0002e3a27e9c9f3d0214f9a30a00890cea7941e55b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5edffc3812a381138ef5a8d75000bcd6e27446f356f3c8d646d580f94fcae2f6->leave($__internal_5edffc3812a381138ef5a8d75000bcd6e27446f356f3c8d646d580f94fcae2f6_prof);

        
        $__internal_eed2a1ef1aec5291938c0002e3a27e9c9f3d0214f9a30a00890cea7941e55b78->leave($__internal_eed2a1ef1aec5291938c0002e3a27e9c9f3d0214f9a30a00890cea7941e55b78_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b6677daf7ac1ea45ad0b9e5fb263a7739a8c018540339b56535970170faa9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6677daf7ac1ea45ad0b9e5fb263a7739a8c018540339b56535970170faa9c9->enter($__internal_5b6677daf7ac1ea45ad0b9e5fb263a7739a8c018540339b56535970170faa9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f19d0b06e3638b064c07490d9e6025b5d1a16b8143c86f32281398915789dfc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19d0b06e3638b064c07490d9e6025b5d1a16b8143c86f32281398915789dfc0->enter($__internal_f19d0b06e3638b064c07490d9e6025b5d1a16b8143c86f32281398915789dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f19d0b06e3638b064c07490d9e6025b5d1a16b8143c86f32281398915789dfc0->leave($__internal_f19d0b06e3638b064c07490d9e6025b5d1a16b8143c86f32281398915789dfc0_prof);

        
        $__internal_5b6677daf7ac1ea45ad0b9e5fb263a7739a8c018540339b56535970170faa9c9->leave($__internal_5b6677daf7ac1ea45ad0b9e5fb263a7739a8c018540339b56535970170faa9c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_306699e432fd3ea472a0c966b8abf0a0d5011b0f180e294ee9aa31d7b3938de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306699e432fd3ea472a0c966b8abf0a0d5011b0f180e294ee9aa31d7b3938de2->enter($__internal_306699e432fd3ea472a0c966b8abf0a0d5011b0f180e294ee9aa31d7b3938de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3796b01255a5945238c93de7a1b36235a33595fe29f3b994c195591a4d500c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3796b01255a5945238c93de7a1b36235a33595fe29f3b994c195591a4d500c23->enter($__internal_3796b01255a5945238c93de7a1b36235a33595fe29f3b994c195591a4d500c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3796b01255a5945238c93de7a1b36235a33595fe29f3b994c195591a4d500c23->leave($__internal_3796b01255a5945238c93de7a1b36235a33595fe29f3b994c195591a4d500c23_prof);

        
        $__internal_306699e432fd3ea472a0c966b8abf0a0d5011b0f180e294ee9aa31d7b3938de2->leave($__internal_306699e432fd3ea472a0c966b8abf0a0d5011b0f180e294ee9aa31d7b3938de2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40f44119d1de56c6321bbb6475831c60dcabcff06da720b02ca6dd6302fbe238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f44119d1de56c6321bbb6475831c60dcabcff06da720b02ca6dd6302fbe238->enter($__internal_40f44119d1de56c6321bbb6475831c60dcabcff06da720b02ca6dd6302fbe238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e44baf4e7977546de73c2d7efc29142159dfa2c02cce803fbe87ebc3e424311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e44baf4e7977546de73c2d7efc29142159dfa2c02cce803fbe87ebc3e424311->enter($__internal_1e44baf4e7977546de73c2d7efc29142159dfa2c02cce803fbe87ebc3e424311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e44baf4e7977546de73c2d7efc29142159dfa2c02cce803fbe87ebc3e424311->leave($__internal_1e44baf4e7977546de73c2d7efc29142159dfa2c02cce803fbe87ebc3e424311_prof);

        
        $__internal_40f44119d1de56c6321bbb6475831c60dcabcff06da720b02ca6dd6302fbe238->leave($__internal_40f44119d1de56c6321bbb6475831c60dcabcff06da720b02ca6dd6302fbe238_prof);

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
