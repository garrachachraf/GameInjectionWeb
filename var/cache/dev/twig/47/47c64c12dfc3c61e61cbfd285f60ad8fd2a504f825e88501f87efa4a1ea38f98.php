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
        $__internal_e63177484a5e7c4e376050259d6b9ea6abb544ec3cd3e1682266b3e4aa005985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63177484a5e7c4e376050259d6b9ea6abb544ec3cd3e1682266b3e4aa005985->enter($__internal_e63177484a5e7c4e376050259d6b9ea6abb544ec3cd3e1682266b3e4aa005985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7069ff48a0561dd13e8120f56429f45b53700a2bbe01f3bbce4b882ca74d20fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7069ff48a0561dd13e8120f56429f45b53700a2bbe01f3bbce4b882ca74d20fd->enter($__internal_7069ff48a0561dd13e8120f56429f45b53700a2bbe01f3bbce4b882ca74d20fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63177484a5e7c4e376050259d6b9ea6abb544ec3cd3e1682266b3e4aa005985->leave($__internal_e63177484a5e7c4e376050259d6b9ea6abb544ec3cd3e1682266b3e4aa005985_prof);

        
        $__internal_7069ff48a0561dd13e8120f56429f45b53700a2bbe01f3bbce4b882ca74d20fd->leave($__internal_7069ff48a0561dd13e8120f56429f45b53700a2bbe01f3bbce4b882ca74d20fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fff62edd0abfdf0c7852472958e07de608f1a635d746297614f917510626b3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff62edd0abfdf0c7852472958e07de608f1a635d746297614f917510626b3de->enter($__internal_fff62edd0abfdf0c7852472958e07de608f1a635d746297614f917510626b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_659ea527ed28288914b19f831f7841fcfaac3a0b482631f8b5b480d7734e4180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659ea527ed28288914b19f831f7841fcfaac3a0b482631f8b5b480d7734e4180->enter($__internal_659ea527ed28288914b19f831f7841fcfaac3a0b482631f8b5b480d7734e4180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_659ea527ed28288914b19f831f7841fcfaac3a0b482631f8b5b480d7734e4180->leave($__internal_659ea527ed28288914b19f831f7841fcfaac3a0b482631f8b5b480d7734e4180_prof);

        
        $__internal_fff62edd0abfdf0c7852472958e07de608f1a635d746297614f917510626b3de->leave($__internal_fff62edd0abfdf0c7852472958e07de608f1a635d746297614f917510626b3de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0ed08f3699315c622d664068a7c62aea3c54a7074fa2d3e5d18ff146ac1a5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed08f3699315c622d664068a7c62aea3c54a7074fa2d3e5d18ff146ac1a5bb->enter($__internal_d0ed08f3699315c622d664068a7c62aea3c54a7074fa2d3e5d18ff146ac1a5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e0c1ca77fb02f1ca83998a42f06ead702397d4ae2c181b72c45b8560d952828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0c1ca77fb02f1ca83998a42f06ead702397d4ae2c181b72c45b8560d952828->enter($__internal_9e0c1ca77fb02f1ca83998a42f06ead702397d4ae2c181b72c45b8560d952828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e0c1ca77fb02f1ca83998a42f06ead702397d4ae2c181b72c45b8560d952828->leave($__internal_9e0c1ca77fb02f1ca83998a42f06ead702397d4ae2c181b72c45b8560d952828_prof);

        
        $__internal_d0ed08f3699315c622d664068a7c62aea3c54a7074fa2d3e5d18ff146ac1a5bb->leave($__internal_d0ed08f3699315c622d664068a7c62aea3c54a7074fa2d3e5d18ff146ac1a5bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b78c2c7ed28e64c9c0a13db9623500baf0682ca016c22d6e7be81437af3d9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b78c2c7ed28e64c9c0a13db9623500baf0682ca016c22d6e7be81437af3d9d5->enter($__internal_7b78c2c7ed28e64c9c0a13db9623500baf0682ca016c22d6e7be81437af3d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a92f9a52f19bd41fc7737ff28f9a96a9582ed602823b220ef6466615f2c15bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92f9a52f19bd41fc7737ff28f9a96a9582ed602823b220ef6466615f2c15bab->enter($__internal_a92f9a52f19bd41fc7737ff28f9a96a9582ed602823b220ef6466615f2c15bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a92f9a52f19bd41fc7737ff28f9a96a9582ed602823b220ef6466615f2c15bab->leave($__internal_a92f9a52f19bd41fc7737ff28f9a96a9582ed602823b220ef6466615f2c15bab_prof);

        
        $__internal_7b78c2c7ed28e64c9c0a13db9623500baf0682ca016c22d6e7be81437af3d9d5->leave($__internal_7b78c2c7ed28e64c9c0a13db9623500baf0682ca016c22d6e7be81437af3d9d5_prof);

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
