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
        $__internal_c10ad8dd03358dd79003c56a9474424ad139b3d31764d659d6461f02dd4adf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10ad8dd03358dd79003c56a9474424ad139b3d31764d659d6461f02dd4adf70->enter($__internal_c10ad8dd03358dd79003c56a9474424ad139b3d31764d659d6461f02dd4adf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_33a8de14e912ea682493a085754aa050730ece893d2de1e062efad98c988901f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a8de14e912ea682493a085754aa050730ece893d2de1e062efad98c988901f->enter($__internal_33a8de14e912ea682493a085754aa050730ece893d2de1e062efad98c988901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10ad8dd03358dd79003c56a9474424ad139b3d31764d659d6461f02dd4adf70->leave($__internal_c10ad8dd03358dd79003c56a9474424ad139b3d31764d659d6461f02dd4adf70_prof);

        
        $__internal_33a8de14e912ea682493a085754aa050730ece893d2de1e062efad98c988901f->leave($__internal_33a8de14e912ea682493a085754aa050730ece893d2de1e062efad98c988901f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b26eda685f30ebfb054dfd6f4b1f827227ec7eb594b5f690880817ac4624b095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26eda685f30ebfb054dfd6f4b1f827227ec7eb594b5f690880817ac4624b095->enter($__internal_b26eda685f30ebfb054dfd6f4b1f827227ec7eb594b5f690880817ac4624b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8974ce05c166204640c007d9b2d2741192ddc32d0e89b771cd28b35e005cc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8974ce05c166204640c007d9b2d2741192ddc32d0e89b771cd28b35e005cc96->enter($__internal_b8974ce05c166204640c007d9b2d2741192ddc32d0e89b771cd28b35e005cc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8974ce05c166204640c007d9b2d2741192ddc32d0e89b771cd28b35e005cc96->leave($__internal_b8974ce05c166204640c007d9b2d2741192ddc32d0e89b771cd28b35e005cc96_prof);

        
        $__internal_b26eda685f30ebfb054dfd6f4b1f827227ec7eb594b5f690880817ac4624b095->leave($__internal_b26eda685f30ebfb054dfd6f4b1f827227ec7eb594b5f690880817ac4624b095_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c579d16eece3793fd77a27df48d986dc46b7ed10257119adb3ebbbf97e2f87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c579d16eece3793fd77a27df48d986dc46b7ed10257119adb3ebbbf97e2f87c->enter($__internal_3c579d16eece3793fd77a27df48d986dc46b7ed10257119adb3ebbbf97e2f87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b2ba96b6a1f9d43eac862526eb6d19568405825c898cf77ad4cd8e33de2b657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2ba96b6a1f9d43eac862526eb6d19568405825c898cf77ad4cd8e33de2b657->enter($__internal_5b2ba96b6a1f9d43eac862526eb6d19568405825c898cf77ad4cd8e33de2b657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5b2ba96b6a1f9d43eac862526eb6d19568405825c898cf77ad4cd8e33de2b657->leave($__internal_5b2ba96b6a1f9d43eac862526eb6d19568405825c898cf77ad4cd8e33de2b657_prof);

        
        $__internal_3c579d16eece3793fd77a27df48d986dc46b7ed10257119adb3ebbbf97e2f87c->leave($__internal_3c579d16eece3793fd77a27df48d986dc46b7ed10257119adb3ebbbf97e2f87c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47b4aeecea4db85eefc77489277bd78368b8dadf9b2a289c1558ec952941ab0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b4aeecea4db85eefc77489277bd78368b8dadf9b2a289c1558ec952941ab0e->enter($__internal_47b4aeecea4db85eefc77489277bd78368b8dadf9b2a289c1558ec952941ab0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83386e98cf355996b4f2e690a9bd0a3a996e031433d6364f32a8814d73ac60b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83386e98cf355996b4f2e690a9bd0a3a996e031433d6364f32a8814d73ac60b4->enter($__internal_83386e98cf355996b4f2e690a9bd0a3a996e031433d6364f32a8814d73ac60b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_83386e98cf355996b4f2e690a9bd0a3a996e031433d6364f32a8814d73ac60b4->leave($__internal_83386e98cf355996b4f2e690a9bd0a3a996e031433d6364f32a8814d73ac60b4_prof);

        
        $__internal_47b4aeecea4db85eefc77489277bd78368b8dadf9b2a289c1558ec952941ab0e->leave($__internal_47b4aeecea4db85eefc77489277bd78368b8dadf9b2a289c1558ec952941ab0e_prof);

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
