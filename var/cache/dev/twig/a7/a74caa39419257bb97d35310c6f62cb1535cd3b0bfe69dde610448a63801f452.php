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
        $__internal_39373ebe0e0e81ab463a1c37d963dfb79efda34427b796cee0dbc50da67c0035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39373ebe0e0e81ab463a1c37d963dfb79efda34427b796cee0dbc50da67c0035->enter($__internal_39373ebe0e0e81ab463a1c37d963dfb79efda34427b796cee0dbc50da67c0035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f36ba7f92b43339270bc349c309603753b401b99b39ee1cd19a03e637cd2dc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36ba7f92b43339270bc349c309603753b401b99b39ee1cd19a03e637cd2dc41->enter($__internal_f36ba7f92b43339270bc349c309603753b401b99b39ee1cd19a03e637cd2dc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39373ebe0e0e81ab463a1c37d963dfb79efda34427b796cee0dbc50da67c0035->leave($__internal_39373ebe0e0e81ab463a1c37d963dfb79efda34427b796cee0dbc50da67c0035_prof);

        
        $__internal_f36ba7f92b43339270bc349c309603753b401b99b39ee1cd19a03e637cd2dc41->leave($__internal_f36ba7f92b43339270bc349c309603753b401b99b39ee1cd19a03e637cd2dc41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc2bf4a0acbfd022959458437487c2ad105593e308a4d977899ac52d9f5c34ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2bf4a0acbfd022959458437487c2ad105593e308a4d977899ac52d9f5c34ce->enter($__internal_dc2bf4a0acbfd022959458437487c2ad105593e308a4d977899ac52d9f5c34ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06bd14056c4bfeff418c90265cfcbc0015354525f5ed651023b0468901e349a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bd14056c4bfeff418c90265cfcbc0015354525f5ed651023b0468901e349a9->enter($__internal_06bd14056c4bfeff418c90265cfcbc0015354525f5ed651023b0468901e349a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06bd14056c4bfeff418c90265cfcbc0015354525f5ed651023b0468901e349a9->leave($__internal_06bd14056c4bfeff418c90265cfcbc0015354525f5ed651023b0468901e349a9_prof);

        
        $__internal_dc2bf4a0acbfd022959458437487c2ad105593e308a4d977899ac52d9f5c34ce->leave($__internal_dc2bf4a0acbfd022959458437487c2ad105593e308a4d977899ac52d9f5c34ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3419175e569b2ed9f1d93169a2b5a019ab697bb436bfdfe756732398ccf65ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3419175e569b2ed9f1d93169a2b5a019ab697bb436bfdfe756732398ccf65ee3->enter($__internal_3419175e569b2ed9f1d93169a2b5a019ab697bb436bfdfe756732398ccf65ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9155ecbd9223e7fcae7e1341801da8ff0c8e1099c26383c989a5fc5ffd1fa1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9155ecbd9223e7fcae7e1341801da8ff0c8e1099c26383c989a5fc5ffd1fa1df->enter($__internal_9155ecbd9223e7fcae7e1341801da8ff0c8e1099c26383c989a5fc5ffd1fa1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9155ecbd9223e7fcae7e1341801da8ff0c8e1099c26383c989a5fc5ffd1fa1df->leave($__internal_9155ecbd9223e7fcae7e1341801da8ff0c8e1099c26383c989a5fc5ffd1fa1df_prof);

        
        $__internal_3419175e569b2ed9f1d93169a2b5a019ab697bb436bfdfe756732398ccf65ee3->leave($__internal_3419175e569b2ed9f1d93169a2b5a019ab697bb436bfdfe756732398ccf65ee3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4216ac863b93d61909f449de7136002adc27d59508614b8180059bdacdd680c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4216ac863b93d61909f449de7136002adc27d59508614b8180059bdacdd680c->enter($__internal_d4216ac863b93d61909f449de7136002adc27d59508614b8180059bdacdd680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ea3d3e22072ef6f88483681eb9df2150920b3c4b141fe0acf517c02868ba0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea3d3e22072ef6f88483681eb9df2150920b3c4b141fe0acf517c02868ba0b3->enter($__internal_1ea3d3e22072ef6f88483681eb9df2150920b3c4b141fe0acf517c02868ba0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ea3d3e22072ef6f88483681eb9df2150920b3c4b141fe0acf517c02868ba0b3->leave($__internal_1ea3d3e22072ef6f88483681eb9df2150920b3c4b141fe0acf517c02868ba0b3_prof);

        
        $__internal_d4216ac863b93d61909f449de7136002adc27d59508614b8180059bdacdd680c->leave($__internal_d4216ac863b93d61909f449de7136002adc27d59508614b8180059bdacdd680c_prof);

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
