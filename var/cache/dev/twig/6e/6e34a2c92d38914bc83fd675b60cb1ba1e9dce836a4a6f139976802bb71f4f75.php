<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee990846fdcc8210558112f4bb2f086bdc89ecf31cfd3c0395bfc71328e69c57 extends Twig_Template
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
        $__internal_152d33ceba0fa1c0b49ae61ccda9bf9ccbc5481c7cc6347abf57d407798c9f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152d33ceba0fa1c0b49ae61ccda9bf9ccbc5481c7cc6347abf57d407798c9f29->enter($__internal_152d33ceba0fa1c0b49ae61ccda9bf9ccbc5481c7cc6347abf57d407798c9f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7cf9db2e23ea160d1ad5d18a4f9cbcccdc251c9aa61a12f206997ab9f26f99bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf9db2e23ea160d1ad5d18a4f9cbcccdc251c9aa61a12f206997ab9f26f99bc->enter($__internal_7cf9db2e23ea160d1ad5d18a4f9cbcccdc251c9aa61a12f206997ab9f26f99bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152d33ceba0fa1c0b49ae61ccda9bf9ccbc5481c7cc6347abf57d407798c9f29->leave($__internal_152d33ceba0fa1c0b49ae61ccda9bf9ccbc5481c7cc6347abf57d407798c9f29_prof);

        
        $__internal_7cf9db2e23ea160d1ad5d18a4f9cbcccdc251c9aa61a12f206997ab9f26f99bc->leave($__internal_7cf9db2e23ea160d1ad5d18a4f9cbcccdc251c9aa61a12f206997ab9f26f99bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35766293f4ab457466269c2f7d00c5310478fc5793f7d91befdec0ba351f2317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35766293f4ab457466269c2f7d00c5310478fc5793f7d91befdec0ba351f2317->enter($__internal_35766293f4ab457466269c2f7d00c5310478fc5793f7d91befdec0ba351f2317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0751f3ad130de2faa7c804e10138307ee12ac574a83f9ff6f2a66b3ff4fb6fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0751f3ad130de2faa7c804e10138307ee12ac574a83f9ff6f2a66b3ff4fb6fbb->enter($__internal_0751f3ad130de2faa7c804e10138307ee12ac574a83f9ff6f2a66b3ff4fb6fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0751f3ad130de2faa7c804e10138307ee12ac574a83f9ff6f2a66b3ff4fb6fbb->leave($__internal_0751f3ad130de2faa7c804e10138307ee12ac574a83f9ff6f2a66b3ff4fb6fbb_prof);

        
        $__internal_35766293f4ab457466269c2f7d00c5310478fc5793f7d91befdec0ba351f2317->leave($__internal_35766293f4ab457466269c2f7d00c5310478fc5793f7d91befdec0ba351f2317_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_003116bb4d056e2b30b09440b40a646e7f44f1298d57fda51935c18d71c2072e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003116bb4d056e2b30b09440b40a646e7f44f1298d57fda51935c18d71c2072e->enter($__internal_003116bb4d056e2b30b09440b40a646e7f44f1298d57fda51935c18d71c2072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ba89cb0b81e966a5ae70daee214c67b62c305939cc9147dcb3ebe66cba15127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba89cb0b81e966a5ae70daee214c67b62c305939cc9147dcb3ebe66cba15127->enter($__internal_1ba89cb0b81e966a5ae70daee214c67b62c305939cc9147dcb3ebe66cba15127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ba89cb0b81e966a5ae70daee214c67b62c305939cc9147dcb3ebe66cba15127->leave($__internal_1ba89cb0b81e966a5ae70daee214c67b62c305939cc9147dcb3ebe66cba15127_prof);

        
        $__internal_003116bb4d056e2b30b09440b40a646e7f44f1298d57fda51935c18d71c2072e->leave($__internal_003116bb4d056e2b30b09440b40a646e7f44f1298d57fda51935c18d71c2072e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64270a002dd8654c10b0dbfb96da0a266a6ac0ebbf19707e9fb25fafc3fab369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64270a002dd8654c10b0dbfb96da0a266a6ac0ebbf19707e9fb25fafc3fab369->enter($__internal_64270a002dd8654c10b0dbfb96da0a266a6ac0ebbf19707e9fb25fafc3fab369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a20704db1241a0aea52745643ea1addee5a3afe7cfc475b242e77ab786695a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a20704db1241a0aea52745643ea1addee5a3afe7cfc475b242e77ab786695a2->enter($__internal_8a20704db1241a0aea52745643ea1addee5a3afe7cfc475b242e77ab786695a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a20704db1241a0aea52745643ea1addee5a3afe7cfc475b242e77ab786695a2->leave($__internal_8a20704db1241a0aea52745643ea1addee5a3afe7cfc475b242e77ab786695a2_prof);

        
        $__internal_64270a002dd8654c10b0dbfb96da0a266a6ac0ebbf19707e9fb25fafc3fab369->leave($__internal_64270a002dd8654c10b0dbfb96da0a266a6ac0ebbf19707e9fb25fafc3fab369_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
