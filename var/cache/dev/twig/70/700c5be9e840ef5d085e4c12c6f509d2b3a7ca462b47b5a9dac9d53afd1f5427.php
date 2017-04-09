<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_144bbf63574627b77a95c59d1480dfe1b6f4d814e248a532f14286986e724aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5ab4721a7536a678d7651f6d404a58f4fe1ead656f926a44a0462c8844a18c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab4721a7536a678d7651f6d404a58f4fe1ead656f926a44a0462c8844a18c4d->enter($__internal_5ab4721a7536a678d7651f6d404a58f4fe1ead656f926a44a0462c8844a18c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fda0256da26a0207926ded802dcb5e7984a43199739345d7b95e51b2f44b0851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda0256da26a0207926ded802dcb5e7984a43199739345d7b95e51b2f44b0851->enter($__internal_fda0256da26a0207926ded802dcb5e7984a43199739345d7b95e51b2f44b0851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab4721a7536a678d7651f6d404a58f4fe1ead656f926a44a0462c8844a18c4d->leave($__internal_5ab4721a7536a678d7651f6d404a58f4fe1ead656f926a44a0462c8844a18c4d_prof);

        
        $__internal_fda0256da26a0207926ded802dcb5e7984a43199739345d7b95e51b2f44b0851->leave($__internal_fda0256da26a0207926ded802dcb5e7984a43199739345d7b95e51b2f44b0851_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e04987a3b51b30de42600072d7dc9a1f24ac76c073357bf2a877c496a2635f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e04987a3b51b30de42600072d7dc9a1f24ac76c073357bf2a877c496a2635f1->enter($__internal_4e04987a3b51b30de42600072d7dc9a1f24ac76c073357bf2a877c496a2635f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfdf039f95f394781e8e93f607388d535b62b7c356976c38e0d3ac45a7434632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdf039f95f394781e8e93f607388d535b62b7c356976c38e0d3ac45a7434632->enter($__internal_bfdf039f95f394781e8e93f607388d535b62b7c356976c38e0d3ac45a7434632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfdf039f95f394781e8e93f607388d535b62b7c356976c38e0d3ac45a7434632->leave($__internal_bfdf039f95f394781e8e93f607388d535b62b7c356976c38e0d3ac45a7434632_prof);

        
        $__internal_4e04987a3b51b30de42600072d7dc9a1f24ac76c073357bf2a877c496a2635f1->leave($__internal_4e04987a3b51b30de42600072d7dc9a1f24ac76c073357bf2a877c496a2635f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8058e7a2dd422f70326d7a853daf6ed6e78f6459082948ba7562149d3d764aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8058e7a2dd422f70326d7a853daf6ed6e78f6459082948ba7562149d3d764aec->enter($__internal_8058e7a2dd422f70326d7a853daf6ed6e78f6459082948ba7562149d3d764aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25c42631858028cbf081d09ff74bbd81139e296b25a1ce62c1b878ca96af4e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c42631858028cbf081d09ff74bbd81139e296b25a1ce62c1b878ca96af4e87->enter($__internal_25c42631858028cbf081d09ff74bbd81139e296b25a1ce62c1b878ca96af4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_25c42631858028cbf081d09ff74bbd81139e296b25a1ce62c1b878ca96af4e87->leave($__internal_25c42631858028cbf081d09ff74bbd81139e296b25a1ce62c1b878ca96af4e87_prof);

        
        $__internal_8058e7a2dd422f70326d7a853daf6ed6e78f6459082948ba7562149d3d764aec->leave($__internal_8058e7a2dd422f70326d7a853daf6ed6e78f6459082948ba7562149d3d764aec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b7603d00caee23e8df208d6b73a4d1b0a19f2ad488ede0cc380f9c900eb1377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7603d00caee23e8df208d6b73a4d1b0a19f2ad488ede0cc380f9c900eb1377->enter($__internal_6b7603d00caee23e8df208d6b73a4d1b0a19f2ad488ede0cc380f9c900eb1377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3f053f49edbdebdc3ba030984a917a2c81f09ba027544ca20d44772376ff28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f053f49edbdebdc3ba030984a917a2c81f09ba027544ca20d44772376ff28a->enter($__internal_c3f053f49edbdebdc3ba030984a917a2c81f09ba027544ca20d44772376ff28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3f053f49edbdebdc3ba030984a917a2c81f09ba027544ca20d44772376ff28a->leave($__internal_c3f053f49edbdebdc3ba030984a917a2c81f09ba027544ca20d44772376ff28a_prof);

        
        $__internal_6b7603d00caee23e8df208d6b73a4d1b0a19f2ad488ede0cc380f9c900eb1377->leave($__internal_6b7603d00caee23e8df208d6b73a4d1b0a19f2ad488ede0cc380f9c900eb1377_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
