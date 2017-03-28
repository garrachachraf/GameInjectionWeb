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
        $__internal_0e1c7f792a89570d25853727bc79ef807760823e4a470c530ff395aaa6e36219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1c7f792a89570d25853727bc79ef807760823e4a470c530ff395aaa6e36219->enter($__internal_0e1c7f792a89570d25853727bc79ef807760823e4a470c530ff395aaa6e36219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f0389a9a120cf139fe8f784c85244ccc6a5c3ca62d5170eab562313db7e804c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0389a9a120cf139fe8f784c85244ccc6a5c3ca62d5170eab562313db7e804c5->enter($__internal_f0389a9a120cf139fe8f784c85244ccc6a5c3ca62d5170eab562313db7e804c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1c7f792a89570d25853727bc79ef807760823e4a470c530ff395aaa6e36219->leave($__internal_0e1c7f792a89570d25853727bc79ef807760823e4a470c530ff395aaa6e36219_prof);

        
        $__internal_f0389a9a120cf139fe8f784c85244ccc6a5c3ca62d5170eab562313db7e804c5->leave($__internal_f0389a9a120cf139fe8f784c85244ccc6a5c3ca62d5170eab562313db7e804c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41817ba72e5ec521d5ff8bb697cd66d2581adde0babb9340f7762181b560a161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41817ba72e5ec521d5ff8bb697cd66d2581adde0babb9340f7762181b560a161->enter($__internal_41817ba72e5ec521d5ff8bb697cd66d2581adde0babb9340f7762181b560a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_02650530f79b7206b93bed1a760cb3b25d6ff8a5b43da4e807368d0b870d03e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02650530f79b7206b93bed1a760cb3b25d6ff8a5b43da4e807368d0b870d03e1->enter($__internal_02650530f79b7206b93bed1a760cb3b25d6ff8a5b43da4e807368d0b870d03e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02650530f79b7206b93bed1a760cb3b25d6ff8a5b43da4e807368d0b870d03e1->leave($__internal_02650530f79b7206b93bed1a760cb3b25d6ff8a5b43da4e807368d0b870d03e1_prof);

        
        $__internal_41817ba72e5ec521d5ff8bb697cd66d2581adde0babb9340f7762181b560a161->leave($__internal_41817ba72e5ec521d5ff8bb697cd66d2581adde0babb9340f7762181b560a161_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8060b3570ec03f54b44366e88ad62558436c6d3ce613ced2b590e047f876d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8060b3570ec03f54b44366e88ad62558436c6d3ce613ced2b590e047f876d16->enter($__internal_c8060b3570ec03f54b44366e88ad62558436c6d3ce613ced2b590e047f876d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c61820a7b2c28ffb58f43a0cd304887c6aee81f5430eb887510e859748d84b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61820a7b2c28ffb58f43a0cd304887c6aee81f5430eb887510e859748d84b59->enter($__internal_c61820a7b2c28ffb58f43a0cd304887c6aee81f5430eb887510e859748d84b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c61820a7b2c28ffb58f43a0cd304887c6aee81f5430eb887510e859748d84b59->leave($__internal_c61820a7b2c28ffb58f43a0cd304887c6aee81f5430eb887510e859748d84b59_prof);

        
        $__internal_c8060b3570ec03f54b44366e88ad62558436c6d3ce613ced2b590e047f876d16->leave($__internal_c8060b3570ec03f54b44366e88ad62558436c6d3ce613ced2b590e047f876d16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de12ae0ec4ca6ff74045da66cd1887f6bfa3de3ce4d75da4a9a32daab6dd149a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de12ae0ec4ca6ff74045da66cd1887f6bfa3de3ce4d75da4a9a32daab6dd149a->enter($__internal_de12ae0ec4ca6ff74045da66cd1887f6bfa3de3ce4d75da4a9a32daab6dd149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e2594489e7f6a34a8669ff16e4face98241d1a303c38ea146ef7a5a624e9061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2594489e7f6a34a8669ff16e4face98241d1a303c38ea146ef7a5a624e9061->enter($__internal_4e2594489e7f6a34a8669ff16e4face98241d1a303c38ea146ef7a5a624e9061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e2594489e7f6a34a8669ff16e4face98241d1a303c38ea146ef7a5a624e9061->leave($__internal_4e2594489e7f6a34a8669ff16e4face98241d1a303c38ea146ef7a5a624e9061_prof);

        
        $__internal_de12ae0ec4ca6ff74045da66cd1887f6bfa3de3ce4d75da4a9a32daab6dd149a->leave($__internal_de12ae0ec4ca6ff74045da66cd1887f6bfa3de3ce4d75da4a9a32daab6dd149a_prof);

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
