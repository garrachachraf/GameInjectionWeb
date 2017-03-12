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
        $__internal_9730494d63c84394777af1b787cf2e837f5feba7486e960dcf4309e919a483d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9730494d63c84394777af1b787cf2e837f5feba7486e960dcf4309e919a483d7->enter($__internal_9730494d63c84394777af1b787cf2e837f5feba7486e960dcf4309e919a483d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e44958aba2054092fe53667f61faea7a355d31977013603752a0ba8bdaa5d42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44958aba2054092fe53667f61faea7a355d31977013603752a0ba8bdaa5d42f->enter($__internal_e44958aba2054092fe53667f61faea7a355d31977013603752a0ba8bdaa5d42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9730494d63c84394777af1b787cf2e837f5feba7486e960dcf4309e919a483d7->leave($__internal_9730494d63c84394777af1b787cf2e837f5feba7486e960dcf4309e919a483d7_prof);

        
        $__internal_e44958aba2054092fe53667f61faea7a355d31977013603752a0ba8bdaa5d42f->leave($__internal_e44958aba2054092fe53667f61faea7a355d31977013603752a0ba8bdaa5d42f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c719e0ff2968f5a7cfaf427ecf6837474ad97dddf36c70f3bcd39adcc9aae84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c719e0ff2968f5a7cfaf427ecf6837474ad97dddf36c70f3bcd39adcc9aae84->enter($__internal_7c719e0ff2968f5a7cfaf427ecf6837474ad97dddf36c70f3bcd39adcc9aae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26c8ccde41743e3c89dd8477e517f754a4608d61651d79c17ee3ad160f370845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c8ccde41743e3c89dd8477e517f754a4608d61651d79c17ee3ad160f370845->enter($__internal_26c8ccde41743e3c89dd8477e517f754a4608d61651d79c17ee3ad160f370845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_26c8ccde41743e3c89dd8477e517f754a4608d61651d79c17ee3ad160f370845->leave($__internal_26c8ccde41743e3c89dd8477e517f754a4608d61651d79c17ee3ad160f370845_prof);

        
        $__internal_7c719e0ff2968f5a7cfaf427ecf6837474ad97dddf36c70f3bcd39adcc9aae84->leave($__internal_7c719e0ff2968f5a7cfaf427ecf6837474ad97dddf36c70f3bcd39adcc9aae84_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4d194256da2b0f0c740b90467f6a56debd29b9c1396bb6f488f95fd47d9e3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d194256da2b0f0c740b90467f6a56debd29b9c1396bb6f488f95fd47d9e3b3->enter($__internal_a4d194256da2b0f0c740b90467f6a56debd29b9c1396bb6f488f95fd47d9e3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_353280e2af2d097e8330007d1b8040be812285dd3743d508be6025dd314de09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353280e2af2d097e8330007d1b8040be812285dd3743d508be6025dd314de09c->enter($__internal_353280e2af2d097e8330007d1b8040be812285dd3743d508be6025dd314de09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_353280e2af2d097e8330007d1b8040be812285dd3743d508be6025dd314de09c->leave($__internal_353280e2af2d097e8330007d1b8040be812285dd3743d508be6025dd314de09c_prof);

        
        $__internal_a4d194256da2b0f0c740b90467f6a56debd29b9c1396bb6f488f95fd47d9e3b3->leave($__internal_a4d194256da2b0f0c740b90467f6a56debd29b9c1396bb6f488f95fd47d9e3b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c7cdd4bb763e822d2dfc35a25a9f11acf1e40cb0726ff2bbc02277c7f5ffe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c7cdd4bb763e822d2dfc35a25a9f11acf1e40cb0726ff2bbc02277c7f5ffe1->enter($__internal_84c7cdd4bb763e822d2dfc35a25a9f11acf1e40cb0726ff2bbc02277c7f5ffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2fd828bf353ef086380aacce997cadaa13928570fc784908430f9867c5a9f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fd828bf353ef086380aacce997cadaa13928570fc784908430f9867c5a9f1d->enter($__internal_f2fd828bf353ef086380aacce997cadaa13928570fc784908430f9867c5a9f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f2fd828bf353ef086380aacce997cadaa13928570fc784908430f9867c5a9f1d->leave($__internal_f2fd828bf353ef086380aacce997cadaa13928570fc784908430f9867c5a9f1d_prof);

        
        $__internal_84c7cdd4bb763e822d2dfc35a25a9f11acf1e40cb0726ff2bbc02277c7f5ffe1->leave($__internal_84c7cdd4bb763e822d2dfc35a25a9f11acf1e40cb0726ff2bbc02277c7f5ffe1_prof);

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
