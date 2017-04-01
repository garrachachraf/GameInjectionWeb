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
        $__internal_8777b4def3ef5f68492728dcd6a3c0906097ad6b03b3c83aead8a117542f9680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8777b4def3ef5f68492728dcd6a3c0906097ad6b03b3c83aead8a117542f9680->enter($__internal_8777b4def3ef5f68492728dcd6a3c0906097ad6b03b3c83aead8a117542f9680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c5177a44c62df6f71d361cfba763f4144fb3d2c882c54b483faaa5c4551e4f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5177a44c62df6f71d361cfba763f4144fb3d2c882c54b483faaa5c4551e4f5f->enter($__internal_c5177a44c62df6f71d361cfba763f4144fb3d2c882c54b483faaa5c4551e4f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8777b4def3ef5f68492728dcd6a3c0906097ad6b03b3c83aead8a117542f9680->leave($__internal_8777b4def3ef5f68492728dcd6a3c0906097ad6b03b3c83aead8a117542f9680_prof);

        
        $__internal_c5177a44c62df6f71d361cfba763f4144fb3d2c882c54b483faaa5c4551e4f5f->leave($__internal_c5177a44c62df6f71d361cfba763f4144fb3d2c882c54b483faaa5c4551e4f5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f7bc6683a4f596bb6384a0bb8a32a33b255608ba8f7efe19e74cf483f1e6c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7bc6683a4f596bb6384a0bb8a32a33b255608ba8f7efe19e74cf483f1e6c0d->enter($__internal_6f7bc6683a4f596bb6384a0bb8a32a33b255608ba8f7efe19e74cf483f1e6c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_786047d493b3089396affb5ebacf5cb2e0feeaf8a217b6536835d27993f4529b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786047d493b3089396affb5ebacf5cb2e0feeaf8a217b6536835d27993f4529b->enter($__internal_786047d493b3089396affb5ebacf5cb2e0feeaf8a217b6536835d27993f4529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_786047d493b3089396affb5ebacf5cb2e0feeaf8a217b6536835d27993f4529b->leave($__internal_786047d493b3089396affb5ebacf5cb2e0feeaf8a217b6536835d27993f4529b_prof);

        
        $__internal_6f7bc6683a4f596bb6384a0bb8a32a33b255608ba8f7efe19e74cf483f1e6c0d->leave($__internal_6f7bc6683a4f596bb6384a0bb8a32a33b255608ba8f7efe19e74cf483f1e6c0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9beeccf20b984976c2669a8909266f129839b32a1f2540b0f68220784015fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9beeccf20b984976c2669a8909266f129839b32a1f2540b0f68220784015fab->enter($__internal_e9beeccf20b984976c2669a8909266f129839b32a1f2540b0f68220784015fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60f951e4dac2b5d785104331653e8b8537cfacd12b357b95f756d20da4c4248a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f951e4dac2b5d785104331653e8b8537cfacd12b357b95f756d20da4c4248a->enter($__internal_60f951e4dac2b5d785104331653e8b8537cfacd12b357b95f756d20da4c4248a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60f951e4dac2b5d785104331653e8b8537cfacd12b357b95f756d20da4c4248a->leave($__internal_60f951e4dac2b5d785104331653e8b8537cfacd12b357b95f756d20da4c4248a_prof);

        
        $__internal_e9beeccf20b984976c2669a8909266f129839b32a1f2540b0f68220784015fab->leave($__internal_e9beeccf20b984976c2669a8909266f129839b32a1f2540b0f68220784015fab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35bfbfe07c3c1d9f0a61bfcdae05683f5a42f7ddf83785250101a575501c2546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bfbfe07c3c1d9f0a61bfcdae05683f5a42f7ddf83785250101a575501c2546->enter($__internal_35bfbfe07c3c1d9f0a61bfcdae05683f5a42f7ddf83785250101a575501c2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_998512c1e5defdab727136d915e76a06a34030dbfa0c13e4516a2bfaad91f718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998512c1e5defdab727136d915e76a06a34030dbfa0c13e4516a2bfaad91f718->enter($__internal_998512c1e5defdab727136d915e76a06a34030dbfa0c13e4516a2bfaad91f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_998512c1e5defdab727136d915e76a06a34030dbfa0c13e4516a2bfaad91f718->leave($__internal_998512c1e5defdab727136d915e76a06a34030dbfa0c13e4516a2bfaad91f718_prof);

        
        $__internal_35bfbfe07c3c1d9f0a61bfcdae05683f5a42f7ddf83785250101a575501c2546->leave($__internal_35bfbfe07c3c1d9f0a61bfcdae05683f5a42f7ddf83785250101a575501c2546_prof);

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
