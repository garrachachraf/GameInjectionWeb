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
        $__internal_4e3a7051c324323c387cff1e5187b8a2cbc53fa841415d1e9686093c7ecd8c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3a7051c324323c387cff1e5187b8a2cbc53fa841415d1e9686093c7ecd8c4f->enter($__internal_4e3a7051c324323c387cff1e5187b8a2cbc53fa841415d1e9686093c7ecd8c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b8af11a84a9128e72b0709c9727bf6c8126aa7209c08ddc21fbfa897281feff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8af11a84a9128e72b0709c9727bf6c8126aa7209c08ddc21fbfa897281feff2->enter($__internal_b8af11a84a9128e72b0709c9727bf6c8126aa7209c08ddc21fbfa897281feff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3a7051c324323c387cff1e5187b8a2cbc53fa841415d1e9686093c7ecd8c4f->leave($__internal_4e3a7051c324323c387cff1e5187b8a2cbc53fa841415d1e9686093c7ecd8c4f_prof);

        
        $__internal_b8af11a84a9128e72b0709c9727bf6c8126aa7209c08ddc21fbfa897281feff2->leave($__internal_b8af11a84a9128e72b0709c9727bf6c8126aa7209c08ddc21fbfa897281feff2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af45e39bbedb1404763564b6ec198e9a9fe795e00f80c0fb1c92fc0e2cdd83ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af45e39bbedb1404763564b6ec198e9a9fe795e00f80c0fb1c92fc0e2cdd83ba->enter($__internal_af45e39bbedb1404763564b6ec198e9a9fe795e00f80c0fb1c92fc0e2cdd83ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e4251115a1735ca2e50ded7ed46bc97dbbf637b92e9ffc9ae6b01f365780ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4251115a1735ca2e50ded7ed46bc97dbbf637b92e9ffc9ae6b01f365780ca7->enter($__internal_6e4251115a1735ca2e50ded7ed46bc97dbbf637b92e9ffc9ae6b01f365780ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e4251115a1735ca2e50ded7ed46bc97dbbf637b92e9ffc9ae6b01f365780ca7->leave($__internal_6e4251115a1735ca2e50ded7ed46bc97dbbf637b92e9ffc9ae6b01f365780ca7_prof);

        
        $__internal_af45e39bbedb1404763564b6ec198e9a9fe795e00f80c0fb1c92fc0e2cdd83ba->leave($__internal_af45e39bbedb1404763564b6ec198e9a9fe795e00f80c0fb1c92fc0e2cdd83ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00adeed6d4bf567441a541a27f99714afba9e79f5ad2874fbd4f1010274cf906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00adeed6d4bf567441a541a27f99714afba9e79f5ad2874fbd4f1010274cf906->enter($__internal_00adeed6d4bf567441a541a27f99714afba9e79f5ad2874fbd4f1010274cf906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc0b58e8091c01662f8ff3fa1a0b2ecbd3580cf0b8bb411f27d62d1d13c7c1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0b58e8091c01662f8ff3fa1a0b2ecbd3580cf0b8bb411f27d62d1d13c7c1a0->enter($__internal_fc0b58e8091c01662f8ff3fa1a0b2ecbd3580cf0b8bb411f27d62d1d13c7c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc0b58e8091c01662f8ff3fa1a0b2ecbd3580cf0b8bb411f27d62d1d13c7c1a0->leave($__internal_fc0b58e8091c01662f8ff3fa1a0b2ecbd3580cf0b8bb411f27d62d1d13c7c1a0_prof);

        
        $__internal_00adeed6d4bf567441a541a27f99714afba9e79f5ad2874fbd4f1010274cf906->leave($__internal_00adeed6d4bf567441a541a27f99714afba9e79f5ad2874fbd4f1010274cf906_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549beba5d086f7121cf32b52cde9a6f2a7d5bec80980839a3ec602485421ad41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549beba5d086f7121cf32b52cde9a6f2a7d5bec80980839a3ec602485421ad41->enter($__internal_549beba5d086f7121cf32b52cde9a6f2a7d5bec80980839a3ec602485421ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07715197a741691be7ab41a89bced70dc5cf3291b76c74f1c54b3e24f8846b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07715197a741691be7ab41a89bced70dc5cf3291b76c74f1c54b3e24f8846b4e->enter($__internal_07715197a741691be7ab41a89bced70dc5cf3291b76c74f1c54b3e24f8846b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07715197a741691be7ab41a89bced70dc5cf3291b76c74f1c54b3e24f8846b4e->leave($__internal_07715197a741691be7ab41a89bced70dc5cf3291b76c74f1c54b3e24f8846b4e_prof);

        
        $__internal_549beba5d086f7121cf32b52cde9a6f2a7d5bec80980839a3ec602485421ad41->leave($__internal_549beba5d086f7121cf32b52cde9a6f2a7d5bec80980839a3ec602485421ad41_prof);

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
