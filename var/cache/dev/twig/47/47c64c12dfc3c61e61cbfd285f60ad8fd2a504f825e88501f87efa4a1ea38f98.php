<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_85d867aeb0e546769dc39d264b0f9a45f02daf04bfb599be1b31fa58d2922915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_524897a48a91017def6acc8c81fa4ac684e5bcbdc54ddd6b583089be8be4e1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524897a48a91017def6acc8c81fa4ac684e5bcbdc54ddd6b583089be8be4e1e3->enter($__internal_524897a48a91017def6acc8c81fa4ac684e5bcbdc54ddd6b583089be8be4e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_300caf34978ad21da2c2904022e187c8a3f7a7ef224c7cc459c44f49a2504947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300caf34978ad21da2c2904022e187c8a3f7a7ef224c7cc459c44f49a2504947->enter($__internal_300caf34978ad21da2c2904022e187c8a3f7a7ef224c7cc459c44f49a2504947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524897a48a91017def6acc8c81fa4ac684e5bcbdc54ddd6b583089be8be4e1e3->leave($__internal_524897a48a91017def6acc8c81fa4ac684e5bcbdc54ddd6b583089be8be4e1e3_prof);

        
        $__internal_300caf34978ad21da2c2904022e187c8a3f7a7ef224c7cc459c44f49a2504947->leave($__internal_300caf34978ad21da2c2904022e187c8a3f7a7ef224c7cc459c44f49a2504947_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f24444263244773f8b8a3a42d6a4f992f4fea15085c29e69ce2a648338728ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24444263244773f8b8a3a42d6a4f992f4fea15085c29e69ce2a648338728ae1->enter($__internal_f24444263244773f8b8a3a42d6a4f992f4fea15085c29e69ce2a648338728ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3fcbd00f740384e4216038f928ac38d37de73d6746c83ef1ee410a3535b9d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fcbd00f740384e4216038f928ac38d37de73d6746c83ef1ee410a3535b9d8d->enter($__internal_f3fcbd00f740384e4216038f928ac38d37de73d6746c83ef1ee410a3535b9d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3fcbd00f740384e4216038f928ac38d37de73d6746c83ef1ee410a3535b9d8d->leave($__internal_f3fcbd00f740384e4216038f928ac38d37de73d6746c83ef1ee410a3535b9d8d_prof);

        
        $__internal_f24444263244773f8b8a3a42d6a4f992f4fea15085c29e69ce2a648338728ae1->leave($__internal_f24444263244773f8b8a3a42d6a4f992f4fea15085c29e69ce2a648338728ae1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ad432f70284af3fdaf079d683293f4801502afd3ab6436ffdc6a11fd4c9e93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad432f70284af3fdaf079d683293f4801502afd3ab6436ffdc6a11fd4c9e93b->enter($__internal_8ad432f70284af3fdaf079d683293f4801502afd3ab6436ffdc6a11fd4c9e93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d024aeefa3fdfd3591b1a39e35eb7ffc5f7f1011a178cd336d803426044a7455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d024aeefa3fdfd3591b1a39e35eb7ffc5f7f1011a178cd336d803426044a7455->enter($__internal_d024aeefa3fdfd3591b1a39e35eb7ffc5f7f1011a178cd336d803426044a7455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d024aeefa3fdfd3591b1a39e35eb7ffc5f7f1011a178cd336d803426044a7455->leave($__internal_d024aeefa3fdfd3591b1a39e35eb7ffc5f7f1011a178cd336d803426044a7455_prof);

        
        $__internal_8ad432f70284af3fdaf079d683293f4801502afd3ab6436ffdc6a11fd4c9e93b->leave($__internal_8ad432f70284af3fdaf079d683293f4801502afd3ab6436ffdc6a11fd4c9e93b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44b7c933433db77682d35799c76214d393e73e76c2b41e8a87b78f401ce27282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b7c933433db77682d35799c76214d393e73e76c2b41e8a87b78f401ce27282->enter($__internal_44b7c933433db77682d35799c76214d393e73e76c2b41e8a87b78f401ce27282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ca7230778225ea905d835baf1797f635c48cef13e39f0e42ff3cfd9ba5e4b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca7230778225ea905d835baf1797f635c48cef13e39f0e42ff3cfd9ba5e4b7d->enter($__internal_4ca7230778225ea905d835baf1797f635c48cef13e39f0e42ff3cfd9ba5e4b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ca7230778225ea905d835baf1797f635c48cef13e39f0e42ff3cfd9ba5e4b7d->leave($__internal_4ca7230778225ea905d835baf1797f635c48cef13e39f0e42ff3cfd9ba5e4b7d_prof);

        
        $__internal_44b7c933433db77682d35799c76214d393e73e76c2b41e8a87b78f401ce27282->leave($__internal_44b7c933433db77682d35799c76214d393e73e76c2b41e8a87b78f401ce27282_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
