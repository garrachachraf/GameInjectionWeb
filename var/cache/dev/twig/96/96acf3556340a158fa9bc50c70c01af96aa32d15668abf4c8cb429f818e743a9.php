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
        $__internal_e2f8a4e396d9bfa6d1d29900dea55fdc9a8c767159fd2a7c74e8cb740d7b0f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f8a4e396d9bfa6d1d29900dea55fdc9a8c767159fd2a7c74e8cb740d7b0f7d->enter($__internal_e2f8a4e396d9bfa6d1d29900dea55fdc9a8c767159fd2a7c74e8cb740d7b0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_af6a7e8f7812ab9105ef67f04f58bafcd7a5588598442e95fc7d407e7369bab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6a7e8f7812ab9105ef67f04f58bafcd7a5588598442e95fc7d407e7369bab8->enter($__internal_af6a7e8f7812ab9105ef67f04f58bafcd7a5588598442e95fc7d407e7369bab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f8a4e396d9bfa6d1d29900dea55fdc9a8c767159fd2a7c74e8cb740d7b0f7d->leave($__internal_e2f8a4e396d9bfa6d1d29900dea55fdc9a8c767159fd2a7c74e8cb740d7b0f7d_prof);

        
        $__internal_af6a7e8f7812ab9105ef67f04f58bafcd7a5588598442e95fc7d407e7369bab8->leave($__internal_af6a7e8f7812ab9105ef67f04f58bafcd7a5588598442e95fc7d407e7369bab8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0ab54f5f8692af487910d79667bcabfd0e65691708d9d362985ba01e1dd3095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ab54f5f8692af487910d79667bcabfd0e65691708d9d362985ba01e1dd3095->enter($__internal_c0ab54f5f8692af487910d79667bcabfd0e65691708d9d362985ba01e1dd3095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b69745ff5f2ece1621d9df0263035589019f4afab7b743490c5d1c98dab6eb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69745ff5f2ece1621d9df0263035589019f4afab7b743490c5d1c98dab6eb4c->enter($__internal_b69745ff5f2ece1621d9df0263035589019f4afab7b743490c5d1c98dab6eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b69745ff5f2ece1621d9df0263035589019f4afab7b743490c5d1c98dab6eb4c->leave($__internal_b69745ff5f2ece1621d9df0263035589019f4afab7b743490c5d1c98dab6eb4c_prof);

        
        $__internal_c0ab54f5f8692af487910d79667bcabfd0e65691708d9d362985ba01e1dd3095->leave($__internal_c0ab54f5f8692af487910d79667bcabfd0e65691708d9d362985ba01e1dd3095_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c42b1709b53a61603eda8161c41287fe77636f47637e6c94f5ebde1e287b51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c42b1709b53a61603eda8161c41287fe77636f47637e6c94f5ebde1e287b51e->enter($__internal_6c42b1709b53a61603eda8161c41287fe77636f47637e6c94f5ebde1e287b51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae8970c30091be0f7aac483b5e60e5d7cfb3858c01d3e01e46acc2995ae4ec90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8970c30091be0f7aac483b5e60e5d7cfb3858c01d3e01e46acc2995ae4ec90->enter($__internal_ae8970c30091be0f7aac483b5e60e5d7cfb3858c01d3e01e46acc2995ae4ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ae8970c30091be0f7aac483b5e60e5d7cfb3858c01d3e01e46acc2995ae4ec90->leave($__internal_ae8970c30091be0f7aac483b5e60e5d7cfb3858c01d3e01e46acc2995ae4ec90_prof);

        
        $__internal_6c42b1709b53a61603eda8161c41287fe77636f47637e6c94f5ebde1e287b51e->leave($__internal_6c42b1709b53a61603eda8161c41287fe77636f47637e6c94f5ebde1e287b51e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e49b778a1b02f0db31660c8a0cc9739177caf9fc340b361e5986566d311e00d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49b778a1b02f0db31660c8a0cc9739177caf9fc340b361e5986566d311e00d7->enter($__internal_e49b778a1b02f0db31660c8a0cc9739177caf9fc340b361e5986566d311e00d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e6c895e9d27a0d02a21da1c7bfdd85b6e2f37e6d52adde110183e1512289fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6c895e9d27a0d02a21da1c7bfdd85b6e2f37e6d52adde110183e1512289fff->enter($__internal_9e6c895e9d27a0d02a21da1c7bfdd85b6e2f37e6d52adde110183e1512289fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e6c895e9d27a0d02a21da1c7bfdd85b6e2f37e6d52adde110183e1512289fff->leave($__internal_9e6c895e9d27a0d02a21da1c7bfdd85b6e2f37e6d52adde110183e1512289fff_prof);

        
        $__internal_e49b778a1b02f0db31660c8a0cc9739177caf9fc340b361e5986566d311e00d7->leave($__internal_e49b778a1b02f0db31660c8a0cc9739177caf9fc340b361e5986566d311e00d7_prof);

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
