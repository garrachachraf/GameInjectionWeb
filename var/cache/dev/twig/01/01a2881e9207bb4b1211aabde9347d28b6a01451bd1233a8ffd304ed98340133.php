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
        $__internal_20c85fe427f256145790398c9803278de663a06e3869a29eb4eafdc45f05fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c85fe427f256145790398c9803278de663a06e3869a29eb4eafdc45f05fb6c->enter($__internal_20c85fe427f256145790398c9803278de663a06e3869a29eb4eafdc45f05fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d816df44d1d9fab4b80647d0689c3b587806d0e3f01492cd204484fad695de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d816df44d1d9fab4b80647d0689c3b587806d0e3f01492cd204484fad695de3->enter($__internal_3d816df44d1d9fab4b80647d0689c3b587806d0e3f01492cd204484fad695de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c85fe427f256145790398c9803278de663a06e3869a29eb4eafdc45f05fb6c->leave($__internal_20c85fe427f256145790398c9803278de663a06e3869a29eb4eafdc45f05fb6c_prof);

        
        $__internal_3d816df44d1d9fab4b80647d0689c3b587806d0e3f01492cd204484fad695de3->leave($__internal_3d816df44d1d9fab4b80647d0689c3b587806d0e3f01492cd204484fad695de3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_638f4e901383b2e956844d4acbab95b0ae98cbafa9762dbf1d5d2ddc2537d544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638f4e901383b2e956844d4acbab95b0ae98cbafa9762dbf1d5d2ddc2537d544->enter($__internal_638f4e901383b2e956844d4acbab95b0ae98cbafa9762dbf1d5d2ddc2537d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4b5d5664b1dfe7c902950dbf685cbc4450f46a10782e24960b7418e20beb016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b5d5664b1dfe7c902950dbf685cbc4450f46a10782e24960b7418e20beb016->enter($__internal_b4b5d5664b1dfe7c902950dbf685cbc4450f46a10782e24960b7418e20beb016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4b5d5664b1dfe7c902950dbf685cbc4450f46a10782e24960b7418e20beb016->leave($__internal_b4b5d5664b1dfe7c902950dbf685cbc4450f46a10782e24960b7418e20beb016_prof);

        
        $__internal_638f4e901383b2e956844d4acbab95b0ae98cbafa9762dbf1d5d2ddc2537d544->leave($__internal_638f4e901383b2e956844d4acbab95b0ae98cbafa9762dbf1d5d2ddc2537d544_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7be4d7fe8091eca4b17f2e0b1e2d999495167a6fe5ed952fd43addcaaec845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7be4d7fe8091eca4b17f2e0b1e2d999495167a6fe5ed952fd43addcaaec845c->enter($__internal_c7be4d7fe8091eca4b17f2e0b1e2d999495167a6fe5ed952fd43addcaaec845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7df0c5a38ef6185adc3f40ea91a7e83d9ac9fc90e447507c7b5b8e2a79422f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7df0c5a38ef6185adc3f40ea91a7e83d9ac9fc90e447507c7b5b8e2a79422f1->enter($__internal_b7df0c5a38ef6185adc3f40ea91a7e83d9ac9fc90e447507c7b5b8e2a79422f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7df0c5a38ef6185adc3f40ea91a7e83d9ac9fc90e447507c7b5b8e2a79422f1->leave($__internal_b7df0c5a38ef6185adc3f40ea91a7e83d9ac9fc90e447507c7b5b8e2a79422f1_prof);

        
        $__internal_c7be4d7fe8091eca4b17f2e0b1e2d999495167a6fe5ed952fd43addcaaec845c->leave($__internal_c7be4d7fe8091eca4b17f2e0b1e2d999495167a6fe5ed952fd43addcaaec845c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0fcd0b60deba9cde6771e3429a4f55a59b9225547b6122edf689dc9b0a681e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fcd0b60deba9cde6771e3429a4f55a59b9225547b6122edf689dc9b0a681e4->enter($__internal_b0fcd0b60deba9cde6771e3429a4f55a59b9225547b6122edf689dc9b0a681e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c075c21d1bea26d08bb9f70768585807704ccde70535ba56d2d1a923f7e15440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c075c21d1bea26d08bb9f70768585807704ccde70535ba56d2d1a923f7e15440->enter($__internal_c075c21d1bea26d08bb9f70768585807704ccde70535ba56d2d1a923f7e15440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c075c21d1bea26d08bb9f70768585807704ccde70535ba56d2d1a923f7e15440->leave($__internal_c075c21d1bea26d08bb9f70768585807704ccde70535ba56d2d1a923f7e15440_prof);

        
        $__internal_b0fcd0b60deba9cde6771e3429a4f55a59b9225547b6122edf689dc9b0a681e4->leave($__internal_b0fcd0b60deba9cde6771e3429a4f55a59b9225547b6122edf689dc9b0a681e4_prof);

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
