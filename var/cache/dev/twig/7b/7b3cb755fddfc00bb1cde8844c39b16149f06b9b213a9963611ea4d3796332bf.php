<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a5d1fa91de26f158bf12159b60b76b8999f33216f492360d0af9b1cb607a573e extends Twig_Template
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
        $__internal_cc988fa9084a0438cec04f8d720e356a6711f832896b8d515ce52cd717a31c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc988fa9084a0438cec04f8d720e356a6711f832896b8d515ce52cd717a31c99->enter($__internal_cc988fa9084a0438cec04f8d720e356a6711f832896b8d515ce52cd717a31c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d3d185220ab1590218ca1a9f2d0187be9444780fc9eee89834827f7f21ec2542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d185220ab1590218ca1a9f2d0187be9444780fc9eee89834827f7f21ec2542->enter($__internal_d3d185220ab1590218ca1a9f2d0187be9444780fc9eee89834827f7f21ec2542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc988fa9084a0438cec04f8d720e356a6711f832896b8d515ce52cd717a31c99->leave($__internal_cc988fa9084a0438cec04f8d720e356a6711f832896b8d515ce52cd717a31c99_prof);

        
        $__internal_d3d185220ab1590218ca1a9f2d0187be9444780fc9eee89834827f7f21ec2542->leave($__internal_d3d185220ab1590218ca1a9f2d0187be9444780fc9eee89834827f7f21ec2542_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de1faf4484ea7eeb3cf31f65fa23ea2014e94c2e6e88a8e8c6d667553b159d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1faf4484ea7eeb3cf31f65fa23ea2014e94c2e6e88a8e8c6d667553b159d18->enter($__internal_de1faf4484ea7eeb3cf31f65fa23ea2014e94c2e6e88a8e8c6d667553b159d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cdae2b32db06bf0e7416ab6150b80452d34e4981a62dba2d9bf3fa19ef38814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdae2b32db06bf0e7416ab6150b80452d34e4981a62dba2d9bf3fa19ef38814->enter($__internal_9cdae2b32db06bf0e7416ab6150b80452d34e4981a62dba2d9bf3fa19ef38814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9cdae2b32db06bf0e7416ab6150b80452d34e4981a62dba2d9bf3fa19ef38814->leave($__internal_9cdae2b32db06bf0e7416ab6150b80452d34e4981a62dba2d9bf3fa19ef38814_prof);

        
        $__internal_de1faf4484ea7eeb3cf31f65fa23ea2014e94c2e6e88a8e8c6d667553b159d18->leave($__internal_de1faf4484ea7eeb3cf31f65fa23ea2014e94c2e6e88a8e8c6d667553b159d18_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0587fea40d4f02e37532fe7d64e1b99e26e67f13b6fe2ce4dcb888e9b87da11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0587fea40d4f02e37532fe7d64e1b99e26e67f13b6fe2ce4dcb888e9b87da11->enter($__internal_a0587fea40d4f02e37532fe7d64e1b99e26e67f13b6fe2ce4dcb888e9b87da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10e6013211e0539ccd0646dd9ce0d71f513fc3e51a0e29cd0e5aa385111b7518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e6013211e0539ccd0646dd9ce0d71f513fc3e51a0e29cd0e5aa385111b7518->enter($__internal_10e6013211e0539ccd0646dd9ce0d71f513fc3e51a0e29cd0e5aa385111b7518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_10e6013211e0539ccd0646dd9ce0d71f513fc3e51a0e29cd0e5aa385111b7518->leave($__internal_10e6013211e0539ccd0646dd9ce0d71f513fc3e51a0e29cd0e5aa385111b7518_prof);

        
        $__internal_a0587fea40d4f02e37532fe7d64e1b99e26e67f13b6fe2ce4dcb888e9b87da11->leave($__internal_a0587fea40d4f02e37532fe7d64e1b99e26e67f13b6fe2ce4dcb888e9b87da11_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6558fbf78c51353429d799a2590e574d7eea4b7c105b4a75de6283b5d77cf6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6558fbf78c51353429d799a2590e574d7eea4b7c105b4a75de6283b5d77cf6e2->enter($__internal_6558fbf78c51353429d799a2590e574d7eea4b7c105b4a75de6283b5d77cf6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d70d54776dc87246f5ca9ca11c13eddb1a923d45bcaa5b7f39f7abb0764a262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d70d54776dc87246f5ca9ca11c13eddb1a923d45bcaa5b7f39f7abb0764a262->enter($__internal_8d70d54776dc87246f5ca9ca11c13eddb1a923d45bcaa5b7f39f7abb0764a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8d70d54776dc87246f5ca9ca11c13eddb1a923d45bcaa5b7f39f7abb0764a262->leave($__internal_8d70d54776dc87246f5ca9ca11c13eddb1a923d45bcaa5b7f39f7abb0764a262_prof);

        
        $__internal_6558fbf78c51353429d799a2590e574d7eea4b7c105b4a75de6283b5d77cf6e2->leave($__internal_6558fbf78c51353429d799a2590e574d7eea4b7c105b4a75de6283b5d77cf6e2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
