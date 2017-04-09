<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be056a9dcfa7da269c08ff6bcdc59bd6f76ff597c7ce5786a56ef145d60d4443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_142dc660a790789749556b65dc9c1bfd742ee4349bca8561a7fa1ed2f7967122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142dc660a790789749556b65dc9c1bfd742ee4349bca8561a7fa1ed2f7967122->enter($__internal_142dc660a790789749556b65dc9c1bfd742ee4349bca8561a7fa1ed2f7967122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_78a8dd23768463670f62e461b72db6e016c1e603f8ec6451019f3a8babf1b57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a8dd23768463670f62e461b72db6e016c1e603f8ec6451019f3a8babf1b57a->enter($__internal_78a8dd23768463670f62e461b72db6e016c1e603f8ec6451019f3a8babf1b57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142dc660a790789749556b65dc9c1bfd742ee4349bca8561a7fa1ed2f7967122->leave($__internal_142dc660a790789749556b65dc9c1bfd742ee4349bca8561a7fa1ed2f7967122_prof);

        
        $__internal_78a8dd23768463670f62e461b72db6e016c1e603f8ec6451019f3a8babf1b57a->leave($__internal_78a8dd23768463670f62e461b72db6e016c1e603f8ec6451019f3a8babf1b57a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8758af0359feae0ead7af4a76c23795231d439d5df5628f938d303d95f92cbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8758af0359feae0ead7af4a76c23795231d439d5df5628f938d303d95f92cbc5->enter($__internal_8758af0359feae0ead7af4a76c23795231d439d5df5628f938d303d95f92cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7bd113c88143deb14e2c468d77a44336c5fb44b6a2cf3c4a772a214e08d90b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd113c88143deb14e2c468d77a44336c5fb44b6a2cf3c4a772a214e08d90b9f->enter($__internal_7bd113c88143deb14e2c468d77a44336c5fb44b6a2cf3c4a772a214e08d90b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bd113c88143deb14e2c468d77a44336c5fb44b6a2cf3c4a772a214e08d90b9f->leave($__internal_7bd113c88143deb14e2c468d77a44336c5fb44b6a2cf3c4a772a214e08d90b9f_prof);

        
        $__internal_8758af0359feae0ead7af4a76c23795231d439d5df5628f938d303d95f92cbc5->leave($__internal_8758af0359feae0ead7af4a76c23795231d439d5df5628f938d303d95f92cbc5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75c3787c49bd96b435932d3a0ebfbe3156446b7def9a3a03d98da4d19dea76f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c3787c49bd96b435932d3a0ebfbe3156446b7def9a3a03d98da4d19dea76f7->enter($__internal_75c3787c49bd96b435932d3a0ebfbe3156446b7def9a3a03d98da4d19dea76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69d99669fa380be1250e3e3d2c408c856a8d9270fab9544e6c9a99b18f05c778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d99669fa380be1250e3e3d2c408c856a8d9270fab9544e6c9a99b18f05c778->enter($__internal_69d99669fa380be1250e3e3d2c408c856a8d9270fab9544e6c9a99b18f05c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69d99669fa380be1250e3e3d2c408c856a8d9270fab9544e6c9a99b18f05c778->leave($__internal_69d99669fa380be1250e3e3d2c408c856a8d9270fab9544e6c9a99b18f05c778_prof);

        
        $__internal_75c3787c49bd96b435932d3a0ebfbe3156446b7def9a3a03d98da4d19dea76f7->leave($__internal_75c3787c49bd96b435932d3a0ebfbe3156446b7def9a3a03d98da4d19dea76f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03e93703e8ce597d0dd7f84e5490e6750480e6689e7e9ff546204c66c03e787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03e93703e8ce597d0dd7f84e5490e6750480e6689e7e9ff546204c66c03e787->enter($__internal_b03e93703e8ce597d0dd7f84e5490e6750480e6689e7e9ff546204c66c03e787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2090ea2506acccad9cad24db844f6adca370ac6ad7eae5a6cc1f88e12641afcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2090ea2506acccad9cad24db844f6adca370ac6ad7eae5a6cc1f88e12641afcb->enter($__internal_2090ea2506acccad9cad24db844f6adca370ac6ad7eae5a6cc1f88e12641afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2090ea2506acccad9cad24db844f6adca370ac6ad7eae5a6cc1f88e12641afcb->leave($__internal_2090ea2506acccad9cad24db844f6adca370ac6ad7eae5a6cc1f88e12641afcb_prof);

        
        $__internal_b03e93703e8ce597d0dd7f84e5490e6750480e6689e7e9ff546204c66c03e787->leave($__internal_b03e93703e8ce597d0dd7f84e5490e6750480e6689e7e9ff546204c66c03e787_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
