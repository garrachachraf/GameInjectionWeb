<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d411f8cbec23d00ba49e580858812bd182a9a0662c817b472c05499695fd76b3 extends Twig_Template
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
        $__internal_638eb8925a4e649cac64ef16e8427c446f05ea0f2b81530f68cdf95745986fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638eb8925a4e649cac64ef16e8427c446f05ea0f2b81530f68cdf95745986fd7->enter($__internal_638eb8925a4e649cac64ef16e8427c446f05ea0f2b81530f68cdf95745986fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8aea7f230bf1c820cc7ec5217ffcadfd09c4bc3d9d7b87c0a2ee5499509e8c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aea7f230bf1c820cc7ec5217ffcadfd09c4bc3d9d7b87c0a2ee5499509e8c81->enter($__internal_8aea7f230bf1c820cc7ec5217ffcadfd09c4bc3d9d7b87c0a2ee5499509e8c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638eb8925a4e649cac64ef16e8427c446f05ea0f2b81530f68cdf95745986fd7->leave($__internal_638eb8925a4e649cac64ef16e8427c446f05ea0f2b81530f68cdf95745986fd7_prof);

        
        $__internal_8aea7f230bf1c820cc7ec5217ffcadfd09c4bc3d9d7b87c0a2ee5499509e8c81->leave($__internal_8aea7f230bf1c820cc7ec5217ffcadfd09c4bc3d9d7b87c0a2ee5499509e8c81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_747a9b60794db29c9c386439ac2a66d0b13fb68a3cb0b7b2ecd21d5ba8f70520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747a9b60794db29c9c386439ac2a66d0b13fb68a3cb0b7b2ecd21d5ba8f70520->enter($__internal_747a9b60794db29c9c386439ac2a66d0b13fb68a3cb0b7b2ecd21d5ba8f70520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_30a35d5cde6696b30c16c1422edb2a1ba9e258a42eaf88dfbf1c4e2c7ec3fad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a35d5cde6696b30c16c1422edb2a1ba9e258a42eaf88dfbf1c4e2c7ec3fad9->enter($__internal_30a35d5cde6696b30c16c1422edb2a1ba9e258a42eaf88dfbf1c4e2c7ec3fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30a35d5cde6696b30c16c1422edb2a1ba9e258a42eaf88dfbf1c4e2c7ec3fad9->leave($__internal_30a35d5cde6696b30c16c1422edb2a1ba9e258a42eaf88dfbf1c4e2c7ec3fad9_prof);

        
        $__internal_747a9b60794db29c9c386439ac2a66d0b13fb68a3cb0b7b2ecd21d5ba8f70520->leave($__internal_747a9b60794db29c9c386439ac2a66d0b13fb68a3cb0b7b2ecd21d5ba8f70520_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94a4828c5e8a2c8dd38ae25d387a506e1e72a2b3f93a8e163d828ba383120a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a4828c5e8a2c8dd38ae25d387a506e1e72a2b3f93a8e163d828ba383120a87->enter($__internal_94a4828c5e8a2c8dd38ae25d387a506e1e72a2b3f93a8e163d828ba383120a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4865b69b59568f91bf948f9486105d713748a0e1c031a2091d68231d6cf140d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4865b69b59568f91bf948f9486105d713748a0e1c031a2091d68231d6cf140d5->enter($__internal_4865b69b59568f91bf948f9486105d713748a0e1c031a2091d68231d6cf140d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4865b69b59568f91bf948f9486105d713748a0e1c031a2091d68231d6cf140d5->leave($__internal_4865b69b59568f91bf948f9486105d713748a0e1c031a2091d68231d6cf140d5_prof);

        
        $__internal_94a4828c5e8a2c8dd38ae25d387a506e1e72a2b3f93a8e163d828ba383120a87->leave($__internal_94a4828c5e8a2c8dd38ae25d387a506e1e72a2b3f93a8e163d828ba383120a87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa8bdc0d7b8122b55ab367e959667e291e0a16e1436ae1522cf1e60321d3d625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8bdc0d7b8122b55ab367e959667e291e0a16e1436ae1522cf1e60321d3d625->enter($__internal_fa8bdc0d7b8122b55ab367e959667e291e0a16e1436ae1522cf1e60321d3d625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b36ae75c843e20e11e04637521ec2e77fc5ef8570ac07c319b4393dd37eb1bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36ae75c843e20e11e04637521ec2e77fc5ef8570ac07c319b4393dd37eb1bdf->enter($__internal_b36ae75c843e20e11e04637521ec2e77fc5ef8570ac07c319b4393dd37eb1bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b36ae75c843e20e11e04637521ec2e77fc5ef8570ac07c319b4393dd37eb1bdf->leave($__internal_b36ae75c843e20e11e04637521ec2e77fc5ef8570ac07c319b4393dd37eb1bdf_prof);

        
        $__internal_fa8bdc0d7b8122b55ab367e959667e291e0a16e1436ae1522cf1e60321d3d625->leave($__internal_fa8bdc0d7b8122b55ab367e959667e291e0a16e1436ae1522cf1e60321d3d625_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
