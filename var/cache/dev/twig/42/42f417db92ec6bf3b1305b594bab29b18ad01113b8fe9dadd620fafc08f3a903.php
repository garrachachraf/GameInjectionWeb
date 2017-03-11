<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_705d9901ab1454011084398d89acb4a3949ae71791068cf1697b0c6a80dfe2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705d9901ab1454011084398d89acb4a3949ae71791068cf1697b0c6a80dfe2c2->enter($__internal_705d9901ab1454011084398d89acb4a3949ae71791068cf1697b0c6a80dfe2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_be9695369bc6af58324559db19ad88bfaacf0b099c300a96ffc5c59de9e98afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9695369bc6af58324559db19ad88bfaacf0b099c300a96ffc5c59de9e98afa->enter($__internal_be9695369bc6af58324559db19ad88bfaacf0b099c300a96ffc5c59de9e98afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705d9901ab1454011084398d89acb4a3949ae71791068cf1697b0c6a80dfe2c2->leave($__internal_705d9901ab1454011084398d89acb4a3949ae71791068cf1697b0c6a80dfe2c2_prof);

        
        $__internal_be9695369bc6af58324559db19ad88bfaacf0b099c300a96ffc5c59de9e98afa->leave($__internal_be9695369bc6af58324559db19ad88bfaacf0b099c300a96ffc5c59de9e98afa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6d6995df6314225b8298e146adbcca29ad91cd366d2ed4e77354cd71832e586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d6995df6314225b8298e146adbcca29ad91cd366d2ed4e77354cd71832e586->enter($__internal_f6d6995df6314225b8298e146adbcca29ad91cd366d2ed4e77354cd71832e586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4cb97d3a26a8e55487a1e685c97e0bca8ecff23d6fb7e914023559bcc74d7586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb97d3a26a8e55487a1e685c97e0bca8ecff23d6fb7e914023559bcc74d7586->enter($__internal_4cb97d3a26a8e55487a1e685c97e0bca8ecff23d6fb7e914023559bcc74d7586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4cb97d3a26a8e55487a1e685c97e0bca8ecff23d6fb7e914023559bcc74d7586->leave($__internal_4cb97d3a26a8e55487a1e685c97e0bca8ecff23d6fb7e914023559bcc74d7586_prof);

        
        $__internal_f6d6995df6314225b8298e146adbcca29ad91cd366d2ed4e77354cd71832e586->leave($__internal_f6d6995df6314225b8298e146adbcca29ad91cd366d2ed4e77354cd71832e586_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70e27d1a148339f6d66636dfe33b568e279ff940269102990e9c1d77899f7c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e27d1a148339f6d66636dfe33b568e279ff940269102990e9c1d77899f7c8d->enter($__internal_70e27d1a148339f6d66636dfe33b568e279ff940269102990e9c1d77899f7c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1fe0f70e1dca54d4b79e774abe5dcc22f218e2af6f46bbda4494821adbeb077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fe0f70e1dca54d4b79e774abe5dcc22f218e2af6f46bbda4494821adbeb077->enter($__internal_e1fe0f70e1dca54d4b79e774abe5dcc22f218e2af6f46bbda4494821adbeb077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1fe0f70e1dca54d4b79e774abe5dcc22f218e2af6f46bbda4494821adbeb077->leave($__internal_e1fe0f70e1dca54d4b79e774abe5dcc22f218e2af6f46bbda4494821adbeb077_prof);

        
        $__internal_70e27d1a148339f6d66636dfe33b568e279ff940269102990e9c1d77899f7c8d->leave($__internal_70e27d1a148339f6d66636dfe33b568e279ff940269102990e9c1d77899f7c8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78eedb1c75f6a128f3bc16600f0829e2e4715d7a92991a8d175eb0075cee95f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78eedb1c75f6a128f3bc16600f0829e2e4715d7a92991a8d175eb0075cee95f6->enter($__internal_78eedb1c75f6a128f3bc16600f0829e2e4715d7a92991a8d175eb0075cee95f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d1646fede5b1f271e2d9207225763f9b536abe595651e28fba76231decec259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1646fede5b1f271e2d9207225763f9b536abe595651e28fba76231decec259->enter($__internal_2d1646fede5b1f271e2d9207225763f9b536abe595651e28fba76231decec259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d1646fede5b1f271e2d9207225763f9b536abe595651e28fba76231decec259->leave($__internal_2d1646fede5b1f271e2d9207225763f9b536abe595651e28fba76231decec259_prof);

        
        $__internal_78eedb1c75f6a128f3bc16600f0829e2e4715d7a92991a8d175eb0075cee95f6->leave($__internal_78eedb1c75f6a128f3bc16600f0829e2e4715d7a92991a8d175eb0075cee95f6_prof);

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
