<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
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
        $__internal_af73fb5117ba287df111f79b4a8e77b51acaec83df2144708f8faea71bb2221c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af73fb5117ba287df111f79b4a8e77b51acaec83df2144708f8faea71bb2221c->enter($__internal_af73fb5117ba287df111f79b4a8e77b51acaec83df2144708f8faea71bb2221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_74724e357caa6c7b92ae5a4ca5d95a93e9ff3ec7f63dfda6ef73254bcabd4e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74724e357caa6c7b92ae5a4ca5d95a93e9ff3ec7f63dfda6ef73254bcabd4e22->enter($__internal_74724e357caa6c7b92ae5a4ca5d95a93e9ff3ec7f63dfda6ef73254bcabd4e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af73fb5117ba287df111f79b4a8e77b51acaec83df2144708f8faea71bb2221c->leave($__internal_af73fb5117ba287df111f79b4a8e77b51acaec83df2144708f8faea71bb2221c_prof);

        
        $__internal_74724e357caa6c7b92ae5a4ca5d95a93e9ff3ec7f63dfda6ef73254bcabd4e22->leave($__internal_74724e357caa6c7b92ae5a4ca5d95a93e9ff3ec7f63dfda6ef73254bcabd4e22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e943c4aed6e0ea387369169c8ff542963fe5afba996ab11df84f46ed0724b529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e943c4aed6e0ea387369169c8ff542963fe5afba996ab11df84f46ed0724b529->enter($__internal_e943c4aed6e0ea387369169c8ff542963fe5afba996ab11df84f46ed0724b529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f63c210f29961f0fcf17123386684472717d118c0faa3ea709a2532dcf889ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f63c210f29961f0fcf17123386684472717d118c0faa3ea709a2532dcf889ce->enter($__internal_9f63c210f29961f0fcf17123386684472717d118c0faa3ea709a2532dcf889ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9f63c210f29961f0fcf17123386684472717d118c0faa3ea709a2532dcf889ce->leave($__internal_9f63c210f29961f0fcf17123386684472717d118c0faa3ea709a2532dcf889ce_prof);

        
        $__internal_e943c4aed6e0ea387369169c8ff542963fe5afba996ab11df84f46ed0724b529->leave($__internal_e943c4aed6e0ea387369169c8ff542963fe5afba996ab11df84f46ed0724b529_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab671b2a7673f9b12392fd08cd9f8d24bafe409fd70e66bf7058b853869df03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab671b2a7673f9b12392fd08cd9f8d24bafe409fd70e66bf7058b853869df03e->enter($__internal_ab671b2a7673f9b12392fd08cd9f8d24bafe409fd70e66bf7058b853869df03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71722c8ea2110408096b5553c0101e6f5d9c16997fd8b801b9cab03c9013e456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71722c8ea2110408096b5553c0101e6f5d9c16997fd8b801b9cab03c9013e456->enter($__internal_71722c8ea2110408096b5553c0101e6f5d9c16997fd8b801b9cab03c9013e456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71722c8ea2110408096b5553c0101e6f5d9c16997fd8b801b9cab03c9013e456->leave($__internal_71722c8ea2110408096b5553c0101e6f5d9c16997fd8b801b9cab03c9013e456_prof);

        
        $__internal_ab671b2a7673f9b12392fd08cd9f8d24bafe409fd70e66bf7058b853869df03e->leave($__internal_ab671b2a7673f9b12392fd08cd9f8d24bafe409fd70e66bf7058b853869df03e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d5b2dab85dc234dee311607a40137d1f34fab6c3608aefb3a4f5245de23f01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5b2dab85dc234dee311607a40137d1f34fab6c3608aefb3a4f5245de23f01f->enter($__internal_5d5b2dab85dc234dee311607a40137d1f34fab6c3608aefb3a4f5245de23f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0eec7ae33a4b9522a557d4ea29de2d659385430b36bce374b59b18a0e8bfc1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eec7ae33a4b9522a557d4ea29de2d659385430b36bce374b59b18a0e8bfc1c0->enter($__internal_0eec7ae33a4b9522a557d4ea29de2d659385430b36bce374b59b18a0e8bfc1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0eec7ae33a4b9522a557d4ea29de2d659385430b36bce374b59b18a0e8bfc1c0->leave($__internal_0eec7ae33a4b9522a557d4ea29de2d659385430b36bce374b59b18a0e8bfc1c0_prof);

        
        $__internal_5d5b2dab85dc234dee311607a40137d1f34fab6c3608aefb3a4f5245de23f01f->leave($__internal_5d5b2dab85dc234dee311607a40137d1f34fab6c3608aefb3a4f5245de23f01f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
