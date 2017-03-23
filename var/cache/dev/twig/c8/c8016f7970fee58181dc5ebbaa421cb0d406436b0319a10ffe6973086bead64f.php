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
        $__internal_6286c484e2014249734eb2717634721e6745fb66bfcc18f3f93a28156a062e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6286c484e2014249734eb2717634721e6745fb66bfcc18f3f93a28156a062e10->enter($__internal_6286c484e2014249734eb2717634721e6745fb66bfcc18f3f93a28156a062e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_50433d5ecdc7b06cb3763f07342d764cb4e341fbdb79d80c4741ab103024184a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50433d5ecdc7b06cb3763f07342d764cb4e341fbdb79d80c4741ab103024184a->enter($__internal_50433d5ecdc7b06cb3763f07342d764cb4e341fbdb79d80c4741ab103024184a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6286c484e2014249734eb2717634721e6745fb66bfcc18f3f93a28156a062e10->leave($__internal_6286c484e2014249734eb2717634721e6745fb66bfcc18f3f93a28156a062e10_prof);

        
        $__internal_50433d5ecdc7b06cb3763f07342d764cb4e341fbdb79d80c4741ab103024184a->leave($__internal_50433d5ecdc7b06cb3763f07342d764cb4e341fbdb79d80c4741ab103024184a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd251fcf4eca3a95911d5f5edeb493a8c22a23c59649e91a69f423c2ee4fdce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd251fcf4eca3a95911d5f5edeb493a8c22a23c59649e91a69f423c2ee4fdce3->enter($__internal_bd251fcf4eca3a95911d5f5edeb493a8c22a23c59649e91a69f423c2ee4fdce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18a4a52db06b5eadc693ee1039a8e6ec98a0b90f3c88ffb342eb8142bef946de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a4a52db06b5eadc693ee1039a8e6ec98a0b90f3c88ffb342eb8142bef946de->enter($__internal_18a4a52db06b5eadc693ee1039a8e6ec98a0b90f3c88ffb342eb8142bef946de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_18a4a52db06b5eadc693ee1039a8e6ec98a0b90f3c88ffb342eb8142bef946de->leave($__internal_18a4a52db06b5eadc693ee1039a8e6ec98a0b90f3c88ffb342eb8142bef946de_prof);

        
        $__internal_bd251fcf4eca3a95911d5f5edeb493a8c22a23c59649e91a69f423c2ee4fdce3->leave($__internal_bd251fcf4eca3a95911d5f5edeb493a8c22a23c59649e91a69f423c2ee4fdce3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd3bd707affef4ce212dce058f1acdc902e4e0d175cd769bb03a00648091bc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3bd707affef4ce212dce058f1acdc902e4e0d175cd769bb03a00648091bc88->enter($__internal_cd3bd707affef4ce212dce058f1acdc902e4e0d175cd769bb03a00648091bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c84ad8fbb9e708ee1b6b0f5c188fb2c602b00d8df28d9ade670331687366aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c84ad8fbb9e708ee1b6b0f5c188fb2c602b00d8df28d9ade670331687366aac->enter($__internal_7c84ad8fbb9e708ee1b6b0f5c188fb2c602b00d8df28d9ade670331687366aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7c84ad8fbb9e708ee1b6b0f5c188fb2c602b00d8df28d9ade670331687366aac->leave($__internal_7c84ad8fbb9e708ee1b6b0f5c188fb2c602b00d8df28d9ade670331687366aac_prof);

        
        $__internal_cd3bd707affef4ce212dce058f1acdc902e4e0d175cd769bb03a00648091bc88->leave($__internal_cd3bd707affef4ce212dce058f1acdc902e4e0d175cd769bb03a00648091bc88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f054609162321e5575fef1923884456ed95cd544701a2aa8057235ce5cfa8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f054609162321e5575fef1923884456ed95cd544701a2aa8057235ce5cfa8e9->enter($__internal_2f054609162321e5575fef1923884456ed95cd544701a2aa8057235ce5cfa8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86471cef76cadbf584f5b5bb3dc7a6dca95914a70fd9e5bec2ddab4b3b5c3b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86471cef76cadbf584f5b5bb3dc7a6dca95914a70fd9e5bec2ddab4b3b5c3b7c->enter($__internal_86471cef76cadbf584f5b5bb3dc7a6dca95914a70fd9e5bec2ddab4b3b5c3b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_86471cef76cadbf584f5b5bb3dc7a6dca95914a70fd9e5bec2ddab4b3b5c3b7c->leave($__internal_86471cef76cadbf584f5b5bb3dc7a6dca95914a70fd9e5bec2ddab4b3b5c3b7c_prof);

        
        $__internal_2f054609162321e5575fef1923884456ed95cd544701a2aa8057235ce5cfa8e9->leave($__internal_2f054609162321e5575fef1923884456ed95cd544701a2aa8057235ce5cfa8e9_prof);

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
