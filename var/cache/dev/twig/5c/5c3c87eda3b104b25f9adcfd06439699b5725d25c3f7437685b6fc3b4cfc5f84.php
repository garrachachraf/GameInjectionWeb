<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_06b425999446cc2321e694b0e8fd6d25cc61c84a3aa65ce4ca5759c357bfe51b extends Twig_Template
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
        $__internal_a7b2f52b57df1861905c1f827c13e932391e4b348362127e5a131080ab82a6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b2f52b57df1861905c1f827c13e932391e4b348362127e5a131080ab82a6ba->enter($__internal_a7b2f52b57df1861905c1f827c13e932391e4b348362127e5a131080ab82a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a40435cfa62aa2d72c66f3b23b247912d18b19c67ec83a9eb053b28560317f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a40435cfa62aa2d72c66f3b23b247912d18b19c67ec83a9eb053b28560317f6->enter($__internal_3a40435cfa62aa2d72c66f3b23b247912d18b19c67ec83a9eb053b28560317f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b2f52b57df1861905c1f827c13e932391e4b348362127e5a131080ab82a6ba->leave($__internal_a7b2f52b57df1861905c1f827c13e932391e4b348362127e5a131080ab82a6ba_prof);

        
        $__internal_3a40435cfa62aa2d72c66f3b23b247912d18b19c67ec83a9eb053b28560317f6->leave($__internal_3a40435cfa62aa2d72c66f3b23b247912d18b19c67ec83a9eb053b28560317f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8b403dab8b913b4d75a3990b52baa051b91721323927b0c6a7ce1ea04871fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b403dab8b913b4d75a3990b52baa051b91721323927b0c6a7ce1ea04871fe9->enter($__internal_c8b403dab8b913b4d75a3990b52baa051b91721323927b0c6a7ce1ea04871fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_660cb1e417314d681f0e2cf97114a912df360716d83ef8085ae2d71c34596880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660cb1e417314d681f0e2cf97114a912df360716d83ef8085ae2d71c34596880->enter($__internal_660cb1e417314d681f0e2cf97114a912df360716d83ef8085ae2d71c34596880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_660cb1e417314d681f0e2cf97114a912df360716d83ef8085ae2d71c34596880->leave($__internal_660cb1e417314d681f0e2cf97114a912df360716d83ef8085ae2d71c34596880_prof);

        
        $__internal_c8b403dab8b913b4d75a3990b52baa051b91721323927b0c6a7ce1ea04871fe9->leave($__internal_c8b403dab8b913b4d75a3990b52baa051b91721323927b0c6a7ce1ea04871fe9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad7d45f4409a5413d8699632ba38e03d81aa733d3919912839ca3a7074770bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7d45f4409a5413d8699632ba38e03d81aa733d3919912839ca3a7074770bd6->enter($__internal_ad7d45f4409a5413d8699632ba38e03d81aa733d3919912839ca3a7074770bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9f95416b7118c4ce03eccca134d51f8de7c53c469b1b88715bbbec26106e47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f95416b7118c4ce03eccca134d51f8de7c53c469b1b88715bbbec26106e47a->enter($__internal_c9f95416b7118c4ce03eccca134d51f8de7c53c469b1b88715bbbec26106e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c9f95416b7118c4ce03eccca134d51f8de7c53c469b1b88715bbbec26106e47a->leave($__internal_c9f95416b7118c4ce03eccca134d51f8de7c53c469b1b88715bbbec26106e47a_prof);

        
        $__internal_ad7d45f4409a5413d8699632ba38e03d81aa733d3919912839ca3a7074770bd6->leave($__internal_ad7d45f4409a5413d8699632ba38e03d81aa733d3919912839ca3a7074770bd6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95a7a86d734402e44e499ffdd7fddf6aa656bbca745cd0a194386fbffcca1b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a7a86d734402e44e499ffdd7fddf6aa656bbca745cd0a194386fbffcca1b0b->enter($__internal_95a7a86d734402e44e499ffdd7fddf6aa656bbca745cd0a194386fbffcca1b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7b266b81a21d864dae1755e3f14171cd42a140567ceb2bf49191d4ee61382b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b266b81a21d864dae1755e3f14171cd42a140567ceb2bf49191d4ee61382b7->enter($__internal_f7b266b81a21d864dae1755e3f14171cd42a140567ceb2bf49191d4ee61382b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f7b266b81a21d864dae1755e3f14171cd42a140567ceb2bf49191d4ee61382b7->leave($__internal_f7b266b81a21d864dae1755e3f14171cd42a140567ceb2bf49191d4ee61382b7_prof);

        
        $__internal_95a7a86d734402e44e499ffdd7fddf6aa656bbca745cd0a194386fbffcca1b0b->leave($__internal_95a7a86d734402e44e499ffdd7fddf6aa656bbca745cd0a194386fbffcca1b0b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
