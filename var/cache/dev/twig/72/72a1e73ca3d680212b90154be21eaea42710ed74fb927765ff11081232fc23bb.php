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
        $__internal_17ce5950901b0c5c69d84e7fe5f9e0c7bc9557d6639b451347139883ce194537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ce5950901b0c5c69d84e7fe5f9e0c7bc9557d6639b451347139883ce194537->enter($__internal_17ce5950901b0c5c69d84e7fe5f9e0c7bc9557d6639b451347139883ce194537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fe9c58cb45547e6cd2b69e738b30ee6b8cc742e1fef552dbc9843457376b80a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9c58cb45547e6cd2b69e738b30ee6b8cc742e1fef552dbc9843457376b80a3->enter($__internal_fe9c58cb45547e6cd2b69e738b30ee6b8cc742e1fef552dbc9843457376b80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ce5950901b0c5c69d84e7fe5f9e0c7bc9557d6639b451347139883ce194537->leave($__internal_17ce5950901b0c5c69d84e7fe5f9e0c7bc9557d6639b451347139883ce194537_prof);

        
        $__internal_fe9c58cb45547e6cd2b69e738b30ee6b8cc742e1fef552dbc9843457376b80a3->leave($__internal_fe9c58cb45547e6cd2b69e738b30ee6b8cc742e1fef552dbc9843457376b80a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1d14d2407864add4c257a3589045b425ce7a1376dbc6ba266c293026988ca14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d14d2407864add4c257a3589045b425ce7a1376dbc6ba266c293026988ca14->enter($__internal_d1d14d2407864add4c257a3589045b425ce7a1376dbc6ba266c293026988ca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_86efc2ac40ffa72d03c19efb03a94f3b35e5bea2a3087948c82ec971d105250a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86efc2ac40ffa72d03c19efb03a94f3b35e5bea2a3087948c82ec971d105250a->enter($__internal_86efc2ac40ffa72d03c19efb03a94f3b35e5bea2a3087948c82ec971d105250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86efc2ac40ffa72d03c19efb03a94f3b35e5bea2a3087948c82ec971d105250a->leave($__internal_86efc2ac40ffa72d03c19efb03a94f3b35e5bea2a3087948c82ec971d105250a_prof);

        
        $__internal_d1d14d2407864add4c257a3589045b425ce7a1376dbc6ba266c293026988ca14->leave($__internal_d1d14d2407864add4c257a3589045b425ce7a1376dbc6ba266c293026988ca14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32de44e692a584a477a6f34350c71555b224b8939e1e9ec34e5356ce501eed79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32de44e692a584a477a6f34350c71555b224b8939e1e9ec34e5356ce501eed79->enter($__internal_32de44e692a584a477a6f34350c71555b224b8939e1e9ec34e5356ce501eed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50e20329439265c95ade447dab9e868dc7226c4ac07a4d50fdb8dea868038cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e20329439265c95ade447dab9e868dc7226c4ac07a4d50fdb8dea868038cf5->enter($__internal_50e20329439265c95ade447dab9e868dc7226c4ac07a4d50fdb8dea868038cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50e20329439265c95ade447dab9e868dc7226c4ac07a4d50fdb8dea868038cf5->leave($__internal_50e20329439265c95ade447dab9e868dc7226c4ac07a4d50fdb8dea868038cf5_prof);

        
        $__internal_32de44e692a584a477a6f34350c71555b224b8939e1e9ec34e5356ce501eed79->leave($__internal_32de44e692a584a477a6f34350c71555b224b8939e1e9ec34e5356ce501eed79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90f7950c2dc7165f2d427a781cb02cc0f3f18716699bc2a7e3976dc8922644b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f7950c2dc7165f2d427a781cb02cc0f3f18716699bc2a7e3976dc8922644b2->enter($__internal_90f7950c2dc7165f2d427a781cb02cc0f3f18716699bc2a7e3976dc8922644b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b666667c574300ca7c921f5415ac6153a48b61f5bdc122eafd4d9c2702a72955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b666667c574300ca7c921f5415ac6153a48b61f5bdc122eafd4d9c2702a72955->enter($__internal_b666667c574300ca7c921f5415ac6153a48b61f5bdc122eafd4d9c2702a72955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b666667c574300ca7c921f5415ac6153a48b61f5bdc122eafd4d9c2702a72955->leave($__internal_b666667c574300ca7c921f5415ac6153a48b61f5bdc122eafd4d9c2702a72955_prof);

        
        $__internal_90f7950c2dc7165f2d427a781cb02cc0f3f18716699bc2a7e3976dc8922644b2->leave($__internal_90f7950c2dc7165f2d427a781cb02cc0f3f18716699bc2a7e3976dc8922644b2_prof);

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
