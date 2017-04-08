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
        $__internal_c9f3cdb4c704939e4b8709cfa059f5d6977363d67a86e4e8e39f5d54ce421178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f3cdb4c704939e4b8709cfa059f5d6977363d67a86e4e8e39f5d54ce421178->enter($__internal_c9f3cdb4c704939e4b8709cfa059f5d6977363d67a86e4e8e39f5d54ce421178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56ba23619c78c448e0d37b56e9fdad2bcbcac21b87b8c32d622f9b44618d3b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ba23619c78c448e0d37b56e9fdad2bcbcac21b87b8c32d622f9b44618d3b41->enter($__internal_56ba23619c78c448e0d37b56e9fdad2bcbcac21b87b8c32d622f9b44618d3b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f3cdb4c704939e4b8709cfa059f5d6977363d67a86e4e8e39f5d54ce421178->leave($__internal_c9f3cdb4c704939e4b8709cfa059f5d6977363d67a86e4e8e39f5d54ce421178_prof);

        
        $__internal_56ba23619c78c448e0d37b56e9fdad2bcbcac21b87b8c32d622f9b44618d3b41->leave($__internal_56ba23619c78c448e0d37b56e9fdad2bcbcac21b87b8c32d622f9b44618d3b41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d329b56bfad1fd061a10a32af6e93dbd35c63cb26a3a23574efcbc909cf0ed5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d329b56bfad1fd061a10a32af6e93dbd35c63cb26a3a23574efcbc909cf0ed5e->enter($__internal_d329b56bfad1fd061a10a32af6e93dbd35c63cb26a3a23574efcbc909cf0ed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd9946873bdc86d218891523f12c4da0ce39cbe5cc54824799cd4ed821a4ce31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9946873bdc86d218891523f12c4da0ce39cbe5cc54824799cd4ed821a4ce31->enter($__internal_cd9946873bdc86d218891523f12c4da0ce39cbe5cc54824799cd4ed821a4ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd9946873bdc86d218891523f12c4da0ce39cbe5cc54824799cd4ed821a4ce31->leave($__internal_cd9946873bdc86d218891523f12c4da0ce39cbe5cc54824799cd4ed821a4ce31_prof);

        
        $__internal_d329b56bfad1fd061a10a32af6e93dbd35c63cb26a3a23574efcbc909cf0ed5e->leave($__internal_d329b56bfad1fd061a10a32af6e93dbd35c63cb26a3a23574efcbc909cf0ed5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24e7b3cadc19532aa00a9629cf7eabe2ef89dd9f65a47213a93b86efe4c54b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e7b3cadc19532aa00a9629cf7eabe2ef89dd9f65a47213a93b86efe4c54b1c->enter($__internal_24e7b3cadc19532aa00a9629cf7eabe2ef89dd9f65a47213a93b86efe4c54b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5f677b3592ac4bdce11fc524f8b628a61628e2e250bfb6bb82be2c26809073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f677b3592ac4bdce11fc524f8b628a61628e2e250bfb6bb82be2c26809073d->enter($__internal_d5f677b3592ac4bdce11fc524f8b628a61628e2e250bfb6bb82be2c26809073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d5f677b3592ac4bdce11fc524f8b628a61628e2e250bfb6bb82be2c26809073d->leave($__internal_d5f677b3592ac4bdce11fc524f8b628a61628e2e250bfb6bb82be2c26809073d_prof);

        
        $__internal_24e7b3cadc19532aa00a9629cf7eabe2ef89dd9f65a47213a93b86efe4c54b1c->leave($__internal_24e7b3cadc19532aa00a9629cf7eabe2ef89dd9f65a47213a93b86efe4c54b1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5977d2428a4b3bbca6348b5875221ed98dd29fadb4156661ef35eeeab806cd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5977d2428a4b3bbca6348b5875221ed98dd29fadb4156661ef35eeeab806cd94->enter($__internal_5977d2428a4b3bbca6348b5875221ed98dd29fadb4156661ef35eeeab806cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b411b5fc439e866a68d8801fb108d168837ae91b045e03bee7d3f5b8db4f502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b411b5fc439e866a68d8801fb108d168837ae91b045e03bee7d3f5b8db4f502e->enter($__internal_b411b5fc439e866a68d8801fb108d168837ae91b045e03bee7d3f5b8db4f502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b411b5fc439e866a68d8801fb108d168837ae91b045e03bee7d3f5b8db4f502e->leave($__internal_b411b5fc439e866a68d8801fb108d168837ae91b045e03bee7d3f5b8db4f502e_prof);

        
        $__internal_5977d2428a4b3bbca6348b5875221ed98dd29fadb4156661ef35eeeab806cd94->leave($__internal_5977d2428a4b3bbca6348b5875221ed98dd29fadb4156661ef35eeeab806cd94_prof);

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
