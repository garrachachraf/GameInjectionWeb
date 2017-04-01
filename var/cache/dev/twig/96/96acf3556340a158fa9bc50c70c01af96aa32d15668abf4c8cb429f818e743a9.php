<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_351d60e91eb13c69aa51a93567ddc0f93598c64b2e9c535e98f29d5782367886 extends Twig_Template
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
        $__internal_38e489c5dd78deb6ea8e6b6859dd6bb5b45236dd8372b953b7cbcb8f72f62ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e489c5dd78deb6ea8e6b6859dd6bb5b45236dd8372b953b7cbcb8f72f62ff9->enter($__internal_38e489c5dd78deb6ea8e6b6859dd6bb5b45236dd8372b953b7cbcb8f72f62ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_52bd0a590357f336b5a1944c2dc0a07f4231f2baee2db69eb54c5ea75e8aebe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bd0a590357f336b5a1944c2dc0a07f4231f2baee2db69eb54c5ea75e8aebe0->enter($__internal_52bd0a590357f336b5a1944c2dc0a07f4231f2baee2db69eb54c5ea75e8aebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e489c5dd78deb6ea8e6b6859dd6bb5b45236dd8372b953b7cbcb8f72f62ff9->leave($__internal_38e489c5dd78deb6ea8e6b6859dd6bb5b45236dd8372b953b7cbcb8f72f62ff9_prof);

        
        $__internal_52bd0a590357f336b5a1944c2dc0a07f4231f2baee2db69eb54c5ea75e8aebe0->leave($__internal_52bd0a590357f336b5a1944c2dc0a07f4231f2baee2db69eb54c5ea75e8aebe0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b34334c1caf804a881cc715da85756384c5182edde1e2f4fd435f38ebdabfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b34334c1caf804a881cc715da85756384c5182edde1e2f4fd435f38ebdabfc1->enter($__internal_7b34334c1caf804a881cc715da85756384c5182edde1e2f4fd435f38ebdabfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9997b3817ef743f0720c8a9867bb60eeb4ddd910e5f30409933edb146e5f211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9997b3817ef743f0720c8a9867bb60eeb4ddd910e5f30409933edb146e5f211f->enter($__internal_9997b3817ef743f0720c8a9867bb60eeb4ddd910e5f30409933edb146e5f211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9997b3817ef743f0720c8a9867bb60eeb4ddd910e5f30409933edb146e5f211f->leave($__internal_9997b3817ef743f0720c8a9867bb60eeb4ddd910e5f30409933edb146e5f211f_prof);

        
        $__internal_7b34334c1caf804a881cc715da85756384c5182edde1e2f4fd435f38ebdabfc1->leave($__internal_7b34334c1caf804a881cc715da85756384c5182edde1e2f4fd435f38ebdabfc1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55adca558a87a108c1f39449212193639abafac0a39daa6382838dc919635ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55adca558a87a108c1f39449212193639abafac0a39daa6382838dc919635ac2->enter($__internal_55adca558a87a108c1f39449212193639abafac0a39daa6382838dc919635ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2961fc092748084b5e5f1b3c2b2e1670423b45fa95ef78ee2b0f5cb1985d717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2961fc092748084b5e5f1b3c2b2e1670423b45fa95ef78ee2b0f5cb1985d717f->enter($__internal_2961fc092748084b5e5f1b3c2b2e1670423b45fa95ef78ee2b0f5cb1985d717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2961fc092748084b5e5f1b3c2b2e1670423b45fa95ef78ee2b0f5cb1985d717f->leave($__internal_2961fc092748084b5e5f1b3c2b2e1670423b45fa95ef78ee2b0f5cb1985d717f_prof);

        
        $__internal_55adca558a87a108c1f39449212193639abafac0a39daa6382838dc919635ac2->leave($__internal_55adca558a87a108c1f39449212193639abafac0a39daa6382838dc919635ac2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_580a930b3652a72c16836ab7ae1b1e33d6a224470ba126a6d792431c2b8ff919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580a930b3652a72c16836ab7ae1b1e33d6a224470ba126a6d792431c2b8ff919->enter($__internal_580a930b3652a72c16836ab7ae1b1e33d6a224470ba126a6d792431c2b8ff919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aad9c7e174d92782e206e74889e936d346eccfc76a55a463f7299c502b4ab5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad9c7e174d92782e206e74889e936d346eccfc76a55a463f7299c502b4ab5a5->enter($__internal_aad9c7e174d92782e206e74889e936d346eccfc76a55a463f7299c502b4ab5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aad9c7e174d92782e206e74889e936d346eccfc76a55a463f7299c502b4ab5a5->leave($__internal_aad9c7e174d92782e206e74889e936d346eccfc76a55a463f7299c502b4ab5a5_prof);

        
        $__internal_580a930b3652a72c16836ab7ae1b1e33d6a224470ba126a6d792431c2b8ff919->leave($__internal_580a930b3652a72c16836ab7ae1b1e33d6a224470ba126a6d792431c2b8ff919_prof);

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
