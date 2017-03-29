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
        $__internal_e27a7a5cfbf274e865a7c3efe030b12d55b4d432cf477c7da5f70ea98b69de72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27a7a5cfbf274e865a7c3efe030b12d55b4d432cf477c7da5f70ea98b69de72->enter($__internal_e27a7a5cfbf274e865a7c3efe030b12d55b4d432cf477c7da5f70ea98b69de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_847b9f9a2ef9b916f28fbf13f8e7543e22bf38972ac81734847b49e209d48476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847b9f9a2ef9b916f28fbf13f8e7543e22bf38972ac81734847b49e209d48476->enter($__internal_847b9f9a2ef9b916f28fbf13f8e7543e22bf38972ac81734847b49e209d48476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27a7a5cfbf274e865a7c3efe030b12d55b4d432cf477c7da5f70ea98b69de72->leave($__internal_e27a7a5cfbf274e865a7c3efe030b12d55b4d432cf477c7da5f70ea98b69de72_prof);

        
        $__internal_847b9f9a2ef9b916f28fbf13f8e7543e22bf38972ac81734847b49e209d48476->leave($__internal_847b9f9a2ef9b916f28fbf13f8e7543e22bf38972ac81734847b49e209d48476_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_370908c71482dfce5feddc32a12235221839586b8a90dfd3a1b00fdb51bead49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370908c71482dfce5feddc32a12235221839586b8a90dfd3a1b00fdb51bead49->enter($__internal_370908c71482dfce5feddc32a12235221839586b8a90dfd3a1b00fdb51bead49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_39a51ccfe37066709d36bfd7e3379c4d770330d1d8f324d22bf73a965a0af4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a51ccfe37066709d36bfd7e3379c4d770330d1d8f324d22bf73a965a0af4d0->enter($__internal_39a51ccfe37066709d36bfd7e3379c4d770330d1d8f324d22bf73a965a0af4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39a51ccfe37066709d36bfd7e3379c4d770330d1d8f324d22bf73a965a0af4d0->leave($__internal_39a51ccfe37066709d36bfd7e3379c4d770330d1d8f324d22bf73a965a0af4d0_prof);

        
        $__internal_370908c71482dfce5feddc32a12235221839586b8a90dfd3a1b00fdb51bead49->leave($__internal_370908c71482dfce5feddc32a12235221839586b8a90dfd3a1b00fdb51bead49_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b925a4b74192b7ae388f5fb8ee6f5883533dbb4d6b8f783c2b6009cdaeb57ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b925a4b74192b7ae388f5fb8ee6f5883533dbb4d6b8f783c2b6009cdaeb57ef->enter($__internal_7b925a4b74192b7ae388f5fb8ee6f5883533dbb4d6b8f783c2b6009cdaeb57ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8311844ee1802cfff83b0067984ce5f25f4240b2e8b0d638cc900a1e94d756b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8311844ee1802cfff83b0067984ce5f25f4240b2e8b0d638cc900a1e94d756b->enter($__internal_d8311844ee1802cfff83b0067984ce5f25f4240b2e8b0d638cc900a1e94d756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8311844ee1802cfff83b0067984ce5f25f4240b2e8b0d638cc900a1e94d756b->leave($__internal_d8311844ee1802cfff83b0067984ce5f25f4240b2e8b0d638cc900a1e94d756b_prof);

        
        $__internal_7b925a4b74192b7ae388f5fb8ee6f5883533dbb4d6b8f783c2b6009cdaeb57ef->leave($__internal_7b925a4b74192b7ae388f5fb8ee6f5883533dbb4d6b8f783c2b6009cdaeb57ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65cf6f81adfe955d6033d6b560bfb4c24b5bb719ef33014446ba7b65e656fd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cf6f81adfe955d6033d6b560bfb4c24b5bb719ef33014446ba7b65e656fd33->enter($__internal_65cf6f81adfe955d6033d6b560bfb4c24b5bb719ef33014446ba7b65e656fd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02e4c5ff044cc745560063724feb26a1dc95b796643c7957e658eabf85ce540b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e4c5ff044cc745560063724feb26a1dc95b796643c7957e658eabf85ce540b->enter($__internal_02e4c5ff044cc745560063724feb26a1dc95b796643c7957e658eabf85ce540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02e4c5ff044cc745560063724feb26a1dc95b796643c7957e658eabf85ce540b->leave($__internal_02e4c5ff044cc745560063724feb26a1dc95b796643c7957e658eabf85ce540b_prof);

        
        $__internal_65cf6f81adfe955d6033d6b560bfb4c24b5bb719ef33014446ba7b65e656fd33->leave($__internal_65cf6f81adfe955d6033d6b560bfb4c24b5bb719ef33014446ba7b65e656fd33_prof);

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
