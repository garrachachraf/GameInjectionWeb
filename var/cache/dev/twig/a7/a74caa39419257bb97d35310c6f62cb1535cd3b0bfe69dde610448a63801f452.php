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
        $__internal_6a1fb5542f2e563a35aad06aa90ead198a63639bf7706c7b9c18ce067106d0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1fb5542f2e563a35aad06aa90ead198a63639bf7706c7b9c18ce067106d0b2->enter($__internal_6a1fb5542f2e563a35aad06aa90ead198a63639bf7706c7b9c18ce067106d0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3db8c135dccf8f6a35f4a967edca23d5d65809a53bc876b3766b5436c4e259af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db8c135dccf8f6a35f4a967edca23d5d65809a53bc876b3766b5436c4e259af->enter($__internal_3db8c135dccf8f6a35f4a967edca23d5d65809a53bc876b3766b5436c4e259af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1fb5542f2e563a35aad06aa90ead198a63639bf7706c7b9c18ce067106d0b2->leave($__internal_6a1fb5542f2e563a35aad06aa90ead198a63639bf7706c7b9c18ce067106d0b2_prof);

        
        $__internal_3db8c135dccf8f6a35f4a967edca23d5d65809a53bc876b3766b5436c4e259af->leave($__internal_3db8c135dccf8f6a35f4a967edca23d5d65809a53bc876b3766b5436c4e259af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0362a0499613284758e72af741345098e8b5dc28a373ce2aeb4ab7867f16bb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0362a0499613284758e72af741345098e8b5dc28a373ce2aeb4ab7867f16bb59->enter($__internal_0362a0499613284758e72af741345098e8b5dc28a373ce2aeb4ab7867f16bb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a27756c4b6b2951fc6434cf16e2b4cbcc59edb5cb11279e725a03b4874985f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27756c4b6b2951fc6434cf16e2b4cbcc59edb5cb11279e725a03b4874985f36->enter($__internal_a27756c4b6b2951fc6434cf16e2b4cbcc59edb5cb11279e725a03b4874985f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a27756c4b6b2951fc6434cf16e2b4cbcc59edb5cb11279e725a03b4874985f36->leave($__internal_a27756c4b6b2951fc6434cf16e2b4cbcc59edb5cb11279e725a03b4874985f36_prof);

        
        $__internal_0362a0499613284758e72af741345098e8b5dc28a373ce2aeb4ab7867f16bb59->leave($__internal_0362a0499613284758e72af741345098e8b5dc28a373ce2aeb4ab7867f16bb59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8599741b5955a4320a39033698353b3b149e13ca44cb903312a78deaed96670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8599741b5955a4320a39033698353b3b149e13ca44cb903312a78deaed96670->enter($__internal_a8599741b5955a4320a39033698353b3b149e13ca44cb903312a78deaed96670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a4d6e01239e0c37a78ff4b5f14ea795b2f2105942518a30a7e06a6583e3a703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d6e01239e0c37a78ff4b5f14ea795b2f2105942518a30a7e06a6583e3a703c->enter($__internal_a4d6e01239e0c37a78ff4b5f14ea795b2f2105942518a30a7e06a6583e3a703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4d6e01239e0c37a78ff4b5f14ea795b2f2105942518a30a7e06a6583e3a703c->leave($__internal_a4d6e01239e0c37a78ff4b5f14ea795b2f2105942518a30a7e06a6583e3a703c_prof);

        
        $__internal_a8599741b5955a4320a39033698353b3b149e13ca44cb903312a78deaed96670->leave($__internal_a8599741b5955a4320a39033698353b3b149e13ca44cb903312a78deaed96670_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0d3c4f2d537b7a40d203791108ff486f735691d3acc6d08e7be4dfe3e813c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d3c4f2d537b7a40d203791108ff486f735691d3acc6d08e7be4dfe3e813c8d->enter($__internal_f0d3c4f2d537b7a40d203791108ff486f735691d3acc6d08e7be4dfe3e813c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3437ef3021bca886b6f81b6ef8a48d0b60230f9b510705a2a5491ed9b69f60b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3437ef3021bca886b6f81b6ef8a48d0b60230f9b510705a2a5491ed9b69f60b9->enter($__internal_3437ef3021bca886b6f81b6ef8a48d0b60230f9b510705a2a5491ed9b69f60b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3437ef3021bca886b6f81b6ef8a48d0b60230f9b510705a2a5491ed9b69f60b9->leave($__internal_3437ef3021bca886b6f81b6ef8a48d0b60230f9b510705a2a5491ed9b69f60b9_prof);

        
        $__internal_f0d3c4f2d537b7a40d203791108ff486f735691d3acc6d08e7be4dfe3e813c8d->leave($__internal_f0d3c4f2d537b7a40d203791108ff486f735691d3acc6d08e7be4dfe3e813c8d_prof);

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
