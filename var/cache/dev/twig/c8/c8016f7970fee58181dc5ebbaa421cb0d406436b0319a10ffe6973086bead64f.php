<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1e7c4110638e081181e4486bb94496e557a95d79f5196734fe97d4b873897b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_d9763fdae129f92a652ccbda4a1d7ff603786bee92ce1497eda64f62afb63417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9763fdae129f92a652ccbda4a1d7ff603786bee92ce1497eda64f62afb63417->enter($__internal_d9763fdae129f92a652ccbda4a1d7ff603786bee92ce1497eda64f62afb63417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e693faf407297265385b50ef75b279a59bbce542aea8f0e98f01653a650f348c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e693faf407297265385b50ef75b279a59bbce542aea8f0e98f01653a650f348c->enter($__internal_e693faf407297265385b50ef75b279a59bbce542aea8f0e98f01653a650f348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9763fdae129f92a652ccbda4a1d7ff603786bee92ce1497eda64f62afb63417->leave($__internal_d9763fdae129f92a652ccbda4a1d7ff603786bee92ce1497eda64f62afb63417_prof);

        
        $__internal_e693faf407297265385b50ef75b279a59bbce542aea8f0e98f01653a650f348c->leave($__internal_e693faf407297265385b50ef75b279a59bbce542aea8f0e98f01653a650f348c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d77fb38d0741ca79ab0acdbd1ff76232b1ad1d1637b0f7e92cc5c406b4961c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d77fb38d0741ca79ab0acdbd1ff76232b1ad1d1637b0f7e92cc5c406b4961c1->enter($__internal_7d77fb38d0741ca79ab0acdbd1ff76232b1ad1d1637b0f7e92cc5c406b4961c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af35c4d310a9c80855dcae8d4e728c01f140590cf139f331e666a58246193d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af35c4d310a9c80855dcae8d4e728c01f140590cf139f331e666a58246193d34->enter($__internal_af35c4d310a9c80855dcae8d4e728c01f140590cf139f331e666a58246193d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_af35c4d310a9c80855dcae8d4e728c01f140590cf139f331e666a58246193d34->leave($__internal_af35c4d310a9c80855dcae8d4e728c01f140590cf139f331e666a58246193d34_prof);

        
        $__internal_7d77fb38d0741ca79ab0acdbd1ff76232b1ad1d1637b0f7e92cc5c406b4961c1->leave($__internal_7d77fb38d0741ca79ab0acdbd1ff76232b1ad1d1637b0f7e92cc5c406b4961c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b68462c2bce79b8db7471432efd06367149d83a7474187731b6c62422bac136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b68462c2bce79b8db7471432efd06367149d83a7474187731b6c62422bac136->enter($__internal_6b68462c2bce79b8db7471432efd06367149d83a7474187731b6c62422bac136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9e54627174c8face0a1d5ac1a2278706013d11327a02b1199369f09d37a6175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e54627174c8face0a1d5ac1a2278706013d11327a02b1199369f09d37a6175->enter($__internal_e9e54627174c8face0a1d5ac1a2278706013d11327a02b1199369f09d37a6175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e9e54627174c8face0a1d5ac1a2278706013d11327a02b1199369f09d37a6175->leave($__internal_e9e54627174c8face0a1d5ac1a2278706013d11327a02b1199369f09d37a6175_prof);

        
        $__internal_6b68462c2bce79b8db7471432efd06367149d83a7474187731b6c62422bac136->leave($__internal_6b68462c2bce79b8db7471432efd06367149d83a7474187731b6c62422bac136_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20872d7787be48819795f45e2cdf9baf0324ef7e8035c2119b5c05fd107c1a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20872d7787be48819795f45e2cdf9baf0324ef7e8035c2119b5c05fd107c1a7d->enter($__internal_20872d7787be48819795f45e2cdf9baf0324ef7e8035c2119b5c05fd107c1a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ddb372124bf707a01a7463e088e5bce95f382bf2c8a676052890ef9752ac11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddb372124bf707a01a7463e088e5bce95f382bf2c8a676052890ef9752ac11a->enter($__internal_6ddb372124bf707a01a7463e088e5bce95f382bf2c8a676052890ef9752ac11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ddb372124bf707a01a7463e088e5bce95f382bf2c8a676052890ef9752ac11a->leave($__internal_6ddb372124bf707a01a7463e088e5bce95f382bf2c8a676052890ef9752ac11a_prof);

        
        $__internal_20872d7787be48819795f45e2cdf9baf0324ef7e8035c2119b5c05fd107c1a7d->leave($__internal_20872d7787be48819795f45e2cdf9baf0324ef7e8035c2119b5c05fd107c1a7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
