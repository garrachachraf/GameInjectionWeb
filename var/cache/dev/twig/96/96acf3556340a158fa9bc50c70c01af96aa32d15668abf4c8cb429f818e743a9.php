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
        $__internal_c4ef493256e5c40a4ae35f647d794fb1966088fd5789de76aa52b491bafc4d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ef493256e5c40a4ae35f647d794fb1966088fd5789de76aa52b491bafc4d99->enter($__internal_c4ef493256e5c40a4ae35f647d794fb1966088fd5789de76aa52b491bafc4d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_39ee9ef18a537124518f46ee1ec57f6fa965076ae61fb597ee77710cf7e6736e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ee9ef18a537124518f46ee1ec57f6fa965076ae61fb597ee77710cf7e6736e->enter($__internal_39ee9ef18a537124518f46ee1ec57f6fa965076ae61fb597ee77710cf7e6736e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ef493256e5c40a4ae35f647d794fb1966088fd5789de76aa52b491bafc4d99->leave($__internal_c4ef493256e5c40a4ae35f647d794fb1966088fd5789de76aa52b491bafc4d99_prof);

        
        $__internal_39ee9ef18a537124518f46ee1ec57f6fa965076ae61fb597ee77710cf7e6736e->leave($__internal_39ee9ef18a537124518f46ee1ec57f6fa965076ae61fb597ee77710cf7e6736e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af4ee97437fe8b972d3398fbdc7a9d16a1a1175fed553c19b03f7d82aa010050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4ee97437fe8b972d3398fbdc7a9d16a1a1175fed553c19b03f7d82aa010050->enter($__internal_af4ee97437fe8b972d3398fbdc7a9d16a1a1175fed553c19b03f7d82aa010050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d7818e49f96831a65d6b8637ed0199b6bb577c59767c25972383353076e20f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7818e49f96831a65d6b8637ed0199b6bb577c59767c25972383353076e20f6->enter($__internal_8d7818e49f96831a65d6b8637ed0199b6bb577c59767c25972383353076e20f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d7818e49f96831a65d6b8637ed0199b6bb577c59767c25972383353076e20f6->leave($__internal_8d7818e49f96831a65d6b8637ed0199b6bb577c59767c25972383353076e20f6_prof);

        
        $__internal_af4ee97437fe8b972d3398fbdc7a9d16a1a1175fed553c19b03f7d82aa010050->leave($__internal_af4ee97437fe8b972d3398fbdc7a9d16a1a1175fed553c19b03f7d82aa010050_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_938c8aaeb4927653dbb7d8c99e86edc63971f44c39bef378e993f1e54d57d9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938c8aaeb4927653dbb7d8c99e86edc63971f44c39bef378e993f1e54d57d9c8->enter($__internal_938c8aaeb4927653dbb7d8c99e86edc63971f44c39bef378e993f1e54d57d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9be214fe13f676767102db7a8c39512163a90414e3d6c94eb81bf278590b95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9be214fe13f676767102db7a8c39512163a90414e3d6c94eb81bf278590b95b->enter($__internal_f9be214fe13f676767102db7a8c39512163a90414e3d6c94eb81bf278590b95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f9be214fe13f676767102db7a8c39512163a90414e3d6c94eb81bf278590b95b->leave($__internal_f9be214fe13f676767102db7a8c39512163a90414e3d6c94eb81bf278590b95b_prof);

        
        $__internal_938c8aaeb4927653dbb7d8c99e86edc63971f44c39bef378e993f1e54d57d9c8->leave($__internal_938c8aaeb4927653dbb7d8c99e86edc63971f44c39bef378e993f1e54d57d9c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07fb93b043e28b2f0027b73de30e5f2fcace6ef52668a0f5160864d2546d7142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fb93b043e28b2f0027b73de30e5f2fcace6ef52668a0f5160864d2546d7142->enter($__internal_07fb93b043e28b2f0027b73de30e5f2fcace6ef52668a0f5160864d2546d7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d45411f4257d257b3c420721c5cb511d787459b2f5bed9a7c87f4d7a6b42e9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45411f4257d257b3c420721c5cb511d787459b2f5bed9a7c87f4d7a6b42e9e8->enter($__internal_d45411f4257d257b3c420721c5cb511d787459b2f5bed9a7c87f4d7a6b42e9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d45411f4257d257b3c420721c5cb511d787459b2f5bed9a7c87f4d7a6b42e9e8->leave($__internal_d45411f4257d257b3c420721c5cb511d787459b2f5bed9a7c87f4d7a6b42e9e8_prof);

        
        $__internal_07fb93b043e28b2f0027b73de30e5f2fcace6ef52668a0f5160864d2546d7142->leave($__internal_07fb93b043e28b2f0027b73de30e5f2fcace6ef52668a0f5160864d2546d7142_prof);

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
