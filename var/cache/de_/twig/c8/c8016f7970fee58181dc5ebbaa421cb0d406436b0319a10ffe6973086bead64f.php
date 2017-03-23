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
        $__internal_5864acd78bc54f04562c6276718807b2c8263c6f739266ad974fef310900934e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5864acd78bc54f04562c6276718807b2c8263c6f739266ad974fef310900934e->enter($__internal_5864acd78bc54f04562c6276718807b2c8263c6f739266ad974fef310900934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_48d023a97d6cb4c4408c4d33a4b6b81c00041d2d6c7a3ce2ea866dab790ae588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d023a97d6cb4c4408c4d33a4b6b81c00041d2d6c7a3ce2ea866dab790ae588->enter($__internal_48d023a97d6cb4c4408c4d33a4b6b81c00041d2d6c7a3ce2ea866dab790ae588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5864acd78bc54f04562c6276718807b2c8263c6f739266ad974fef310900934e->leave($__internal_5864acd78bc54f04562c6276718807b2c8263c6f739266ad974fef310900934e_prof);

        
        $__internal_48d023a97d6cb4c4408c4d33a4b6b81c00041d2d6c7a3ce2ea866dab790ae588->leave($__internal_48d023a97d6cb4c4408c4d33a4b6b81c00041d2d6c7a3ce2ea866dab790ae588_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8731ef303ae30257018e63524b0d5fa4aeb38775367ec184641548a7ac8f6375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8731ef303ae30257018e63524b0d5fa4aeb38775367ec184641548a7ac8f6375->enter($__internal_8731ef303ae30257018e63524b0d5fa4aeb38775367ec184641548a7ac8f6375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46257226ee1baa4d5e496d13fde14daf6de21344d66302ba44aa2ec0c33cd6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46257226ee1baa4d5e496d13fde14daf6de21344d66302ba44aa2ec0c33cd6a3->enter($__internal_46257226ee1baa4d5e496d13fde14daf6de21344d66302ba44aa2ec0c33cd6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_46257226ee1baa4d5e496d13fde14daf6de21344d66302ba44aa2ec0c33cd6a3->leave($__internal_46257226ee1baa4d5e496d13fde14daf6de21344d66302ba44aa2ec0c33cd6a3_prof);

        
        $__internal_8731ef303ae30257018e63524b0d5fa4aeb38775367ec184641548a7ac8f6375->leave($__internal_8731ef303ae30257018e63524b0d5fa4aeb38775367ec184641548a7ac8f6375_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ebb910867a743d361eebb2e600d2e7ef6bc686980a5b8f1468b1539b74e67f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebb910867a743d361eebb2e600d2e7ef6bc686980a5b8f1468b1539b74e67f8->enter($__internal_6ebb910867a743d361eebb2e600d2e7ef6bc686980a5b8f1468b1539b74e67f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e753e9d34dfdaf0371428b91017c4996f2cd987f046f950453bebce38eda4c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e753e9d34dfdaf0371428b91017c4996f2cd987f046f950453bebce38eda4c67->enter($__internal_e753e9d34dfdaf0371428b91017c4996f2cd987f046f950453bebce38eda4c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e753e9d34dfdaf0371428b91017c4996f2cd987f046f950453bebce38eda4c67->leave($__internal_e753e9d34dfdaf0371428b91017c4996f2cd987f046f950453bebce38eda4c67_prof);

        
        $__internal_6ebb910867a743d361eebb2e600d2e7ef6bc686980a5b8f1468b1539b74e67f8->leave($__internal_6ebb910867a743d361eebb2e600d2e7ef6bc686980a5b8f1468b1539b74e67f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64fea6cd7a5fc837b4a831497224d80d8e203a1f3a33471d857732445ec18a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fea6cd7a5fc837b4a831497224d80d8e203a1f3a33471d857732445ec18a0b->enter($__internal_64fea6cd7a5fc837b4a831497224d80d8e203a1f3a33471d857732445ec18a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae96723ae65a1d400ba80a179be6e89ca305d9951bf270d0aeb89cb6f0edc2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae96723ae65a1d400ba80a179be6e89ca305d9951bf270d0aeb89cb6f0edc2bc->enter($__internal_ae96723ae65a1d400ba80a179be6e89ca305d9951bf270d0aeb89cb6f0edc2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ae96723ae65a1d400ba80a179be6e89ca305d9951bf270d0aeb89cb6f0edc2bc->leave($__internal_ae96723ae65a1d400ba80a179be6e89ca305d9951bf270d0aeb89cb6f0edc2bc_prof);

        
        $__internal_64fea6cd7a5fc837b4a831497224d80d8e203a1f3a33471d857732445ec18a0b->leave($__internal_64fea6cd7a5fc837b4a831497224d80d8e203a1f3a33471d857732445ec18a0b_prof);

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
