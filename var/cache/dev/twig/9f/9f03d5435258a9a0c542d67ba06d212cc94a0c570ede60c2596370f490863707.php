<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c9230728ead9648fdac9e2f1f903ad36461aa0ce6667411d8f9009c70b65b7af extends Twig_Template
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
        $__internal_cdf703928514be2f24ba7e6ca872a5394a32b027e416b448211cc3dc3760e073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf703928514be2f24ba7e6ca872a5394a32b027e416b448211cc3dc3760e073->enter($__internal_cdf703928514be2f24ba7e6ca872a5394a32b027e416b448211cc3dc3760e073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7e8c802e4ba4f3436ebbb076c5bf26ad0c95d2c3fd162c50080e9c3a50d85b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8c802e4ba4f3436ebbb076c5bf26ad0c95d2c3fd162c50080e9c3a50d85b2d->enter($__internal_7e8c802e4ba4f3436ebbb076c5bf26ad0c95d2c3fd162c50080e9c3a50d85b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf703928514be2f24ba7e6ca872a5394a32b027e416b448211cc3dc3760e073->leave($__internal_cdf703928514be2f24ba7e6ca872a5394a32b027e416b448211cc3dc3760e073_prof);

        
        $__internal_7e8c802e4ba4f3436ebbb076c5bf26ad0c95d2c3fd162c50080e9c3a50d85b2d->leave($__internal_7e8c802e4ba4f3436ebbb076c5bf26ad0c95d2c3fd162c50080e9c3a50d85b2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6d09d3f10d33ff55dc3920a6fd31362bba31657b7a5c626a094fd3ab6a56fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d09d3f10d33ff55dc3920a6fd31362bba31657b7a5c626a094fd3ab6a56fc7->enter($__internal_d6d09d3f10d33ff55dc3920a6fd31362bba31657b7a5c626a094fd3ab6a56fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dee184bfcdcba158b7df1cc867e7b58b175c45b6b3ca60c57d34ca5b6933130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee184bfcdcba158b7df1cc867e7b58b175c45b6b3ca60c57d34ca5b6933130d->enter($__internal_dee184bfcdcba158b7df1cc867e7b58b175c45b6b3ca60c57d34ca5b6933130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dee184bfcdcba158b7df1cc867e7b58b175c45b6b3ca60c57d34ca5b6933130d->leave($__internal_dee184bfcdcba158b7df1cc867e7b58b175c45b6b3ca60c57d34ca5b6933130d_prof);

        
        $__internal_d6d09d3f10d33ff55dc3920a6fd31362bba31657b7a5c626a094fd3ab6a56fc7->leave($__internal_d6d09d3f10d33ff55dc3920a6fd31362bba31657b7a5c626a094fd3ab6a56fc7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_900d874a790f4eac48ddf06dd3a63ca7b25965e162d30269d9d1e636b9ed2246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900d874a790f4eac48ddf06dd3a63ca7b25965e162d30269d9d1e636b9ed2246->enter($__internal_900d874a790f4eac48ddf06dd3a63ca7b25965e162d30269d9d1e636b9ed2246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f7da8d8d7f4e3936144185eaeb4af26731eab2df5912fdb341fe41db86c875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7da8d8d7f4e3936144185eaeb4af26731eab2df5912fdb341fe41db86c875f->enter($__internal_8f7da8d8d7f4e3936144185eaeb4af26731eab2df5912fdb341fe41db86c875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8f7da8d8d7f4e3936144185eaeb4af26731eab2df5912fdb341fe41db86c875f->leave($__internal_8f7da8d8d7f4e3936144185eaeb4af26731eab2df5912fdb341fe41db86c875f_prof);

        
        $__internal_900d874a790f4eac48ddf06dd3a63ca7b25965e162d30269d9d1e636b9ed2246->leave($__internal_900d874a790f4eac48ddf06dd3a63ca7b25965e162d30269d9d1e636b9ed2246_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f01c6b5d96e2782a1e4bf50c3d8eda138726bdacf33521b1c67345aa29459e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01c6b5d96e2782a1e4bf50c3d8eda138726bdacf33521b1c67345aa29459e32->enter($__internal_f01c6b5d96e2782a1e4bf50c3d8eda138726bdacf33521b1c67345aa29459e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b28f8504b4fa13446e7e49520049a43c5abcced4e2030380cc894a045831e2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28f8504b4fa13446e7e49520049a43c5abcced4e2030380cc894a045831e2ee->enter($__internal_b28f8504b4fa13446e7e49520049a43c5abcced4e2030380cc894a045831e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b28f8504b4fa13446e7e49520049a43c5abcced4e2030380cc894a045831e2ee->leave($__internal_b28f8504b4fa13446e7e49520049a43c5abcced4e2030380cc894a045831e2ee_prof);

        
        $__internal_f01c6b5d96e2782a1e4bf50c3d8eda138726bdacf33521b1c67345aa29459e32->leave($__internal_f01c6b5d96e2782a1e4bf50c3d8eda138726bdacf33521b1c67345aa29459e32_prof);

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
