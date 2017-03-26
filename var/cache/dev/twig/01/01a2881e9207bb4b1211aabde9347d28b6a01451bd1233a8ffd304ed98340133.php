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
        $__internal_9f7ef5a34fb1d6ef837910b2959a35b76137c4662c23b39d53abc1479681d827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7ef5a34fb1d6ef837910b2959a35b76137c4662c23b39d53abc1479681d827->enter($__internal_9f7ef5a34fb1d6ef837910b2959a35b76137c4662c23b39d53abc1479681d827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c0fd4c573ada2f64a0569e6b392446511b7698dc4bab4c4535bd58fd0458df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0fd4c573ada2f64a0569e6b392446511b7698dc4bab4c4535bd58fd0458df7->enter($__internal_8c0fd4c573ada2f64a0569e6b392446511b7698dc4bab4c4535bd58fd0458df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7ef5a34fb1d6ef837910b2959a35b76137c4662c23b39d53abc1479681d827->leave($__internal_9f7ef5a34fb1d6ef837910b2959a35b76137c4662c23b39d53abc1479681d827_prof);

        
        $__internal_8c0fd4c573ada2f64a0569e6b392446511b7698dc4bab4c4535bd58fd0458df7->leave($__internal_8c0fd4c573ada2f64a0569e6b392446511b7698dc4bab4c4535bd58fd0458df7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f4d8d0d0added043a18b29b8f431067c602964ba58fa717ffd0e0358eed2366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4d8d0d0added043a18b29b8f431067c602964ba58fa717ffd0e0358eed2366->enter($__internal_5f4d8d0d0added043a18b29b8f431067c602964ba58fa717ffd0e0358eed2366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d608866ad3c8ac1be04ee81a5b34c93b48290c287f65210315b623d741c88c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d608866ad3c8ac1be04ee81a5b34c93b48290c287f65210315b623d741c88c3b->enter($__internal_d608866ad3c8ac1be04ee81a5b34c93b48290c287f65210315b623d741c88c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d608866ad3c8ac1be04ee81a5b34c93b48290c287f65210315b623d741c88c3b->leave($__internal_d608866ad3c8ac1be04ee81a5b34c93b48290c287f65210315b623d741c88c3b_prof);

        
        $__internal_5f4d8d0d0added043a18b29b8f431067c602964ba58fa717ffd0e0358eed2366->leave($__internal_5f4d8d0d0added043a18b29b8f431067c602964ba58fa717ffd0e0358eed2366_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48482e41782013576ecd62bf28a1cf53ba26ef22c3b755bba7744b283f0970a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48482e41782013576ecd62bf28a1cf53ba26ef22c3b755bba7744b283f0970a2->enter($__internal_48482e41782013576ecd62bf28a1cf53ba26ef22c3b755bba7744b283f0970a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78673b07da5bb4a3498fc9d6555b6aa7b9ad47a368cedf544883e8d2b036adaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78673b07da5bb4a3498fc9d6555b6aa7b9ad47a368cedf544883e8d2b036adaf->enter($__internal_78673b07da5bb4a3498fc9d6555b6aa7b9ad47a368cedf544883e8d2b036adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78673b07da5bb4a3498fc9d6555b6aa7b9ad47a368cedf544883e8d2b036adaf->leave($__internal_78673b07da5bb4a3498fc9d6555b6aa7b9ad47a368cedf544883e8d2b036adaf_prof);

        
        $__internal_48482e41782013576ecd62bf28a1cf53ba26ef22c3b755bba7744b283f0970a2->leave($__internal_48482e41782013576ecd62bf28a1cf53ba26ef22c3b755bba7744b283f0970a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_575ae7022cad08a0533e490d352aab6a84e163e9f14f8358bf8c435d90c11e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575ae7022cad08a0533e490d352aab6a84e163e9f14f8358bf8c435d90c11e3a->enter($__internal_575ae7022cad08a0533e490d352aab6a84e163e9f14f8358bf8c435d90c11e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b5f062459895e75ac1e1700b1b708f1e5707a60a2fd11470c5aabd8138358d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f062459895e75ac1e1700b1b708f1e5707a60a2fd11470c5aabd8138358d9->enter($__internal_0b5f062459895e75ac1e1700b1b708f1e5707a60a2fd11470c5aabd8138358d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b5f062459895e75ac1e1700b1b708f1e5707a60a2fd11470c5aabd8138358d9->leave($__internal_0b5f062459895e75ac1e1700b1b708f1e5707a60a2fd11470c5aabd8138358d9_prof);

        
        $__internal_575ae7022cad08a0533e490d352aab6a84e163e9f14f8358bf8c435d90c11e3a->leave($__internal_575ae7022cad08a0533e490d352aab6a84e163e9f14f8358bf8c435d90c11e3a_prof);

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
