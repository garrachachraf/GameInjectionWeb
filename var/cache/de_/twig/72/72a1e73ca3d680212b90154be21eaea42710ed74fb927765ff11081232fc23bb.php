<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d82e33d6e5a1fe2efe9c2789d0db59a9f5fb302d585d5f10bf211a0d2f99b14c extends Twig_Template
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
        $__internal_f21e3ec848dddca9dc5c84a2cdcf4f5dc034c0dcec65080dfdf31426aac295e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21e3ec848dddca9dc5c84a2cdcf4f5dc034c0dcec65080dfdf31426aac295e4->enter($__internal_f21e3ec848dddca9dc5c84a2cdcf4f5dc034c0dcec65080dfdf31426aac295e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dd9622d801f239042fbb8fc5bc2df452ae197cb0f34131aad99f134051f152e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9622d801f239042fbb8fc5bc2df452ae197cb0f34131aad99f134051f152e5->enter($__internal_dd9622d801f239042fbb8fc5bc2df452ae197cb0f34131aad99f134051f152e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21e3ec848dddca9dc5c84a2cdcf4f5dc034c0dcec65080dfdf31426aac295e4->leave($__internal_f21e3ec848dddca9dc5c84a2cdcf4f5dc034c0dcec65080dfdf31426aac295e4_prof);

        
        $__internal_dd9622d801f239042fbb8fc5bc2df452ae197cb0f34131aad99f134051f152e5->leave($__internal_dd9622d801f239042fbb8fc5bc2df452ae197cb0f34131aad99f134051f152e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3b96a92e84eb628fa3135942a22c17e8295ecab0e01f9d21a409f6e82031c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b96a92e84eb628fa3135942a22c17e8295ecab0e01f9d21a409f6e82031c8e->enter($__internal_d3b96a92e84eb628fa3135942a22c17e8295ecab0e01f9d21a409f6e82031c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bfdb736e8fe298c06ddd51b6de6f7ec50bee9418cd1739d7afe6a24d64c114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfdb736e8fe298c06ddd51b6de6f7ec50bee9418cd1739d7afe6a24d64c114a->enter($__internal_0bfdb736e8fe298c06ddd51b6de6f7ec50bee9418cd1739d7afe6a24d64c114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bfdb736e8fe298c06ddd51b6de6f7ec50bee9418cd1739d7afe6a24d64c114a->leave($__internal_0bfdb736e8fe298c06ddd51b6de6f7ec50bee9418cd1739d7afe6a24d64c114a_prof);

        
        $__internal_d3b96a92e84eb628fa3135942a22c17e8295ecab0e01f9d21a409f6e82031c8e->leave($__internal_d3b96a92e84eb628fa3135942a22c17e8295ecab0e01f9d21a409f6e82031c8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d24f5cccc1127ffe438e8a35d81cf0272feb39e7fa289a5ef2341efa01398039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24f5cccc1127ffe438e8a35d81cf0272feb39e7fa289a5ef2341efa01398039->enter($__internal_d24f5cccc1127ffe438e8a35d81cf0272feb39e7fa289a5ef2341efa01398039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a34db562a1ef24d697e5019ea91d255964b08448f8124a39cc1f958d1dad2961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34db562a1ef24d697e5019ea91d255964b08448f8124a39cc1f958d1dad2961->enter($__internal_a34db562a1ef24d697e5019ea91d255964b08448f8124a39cc1f958d1dad2961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a34db562a1ef24d697e5019ea91d255964b08448f8124a39cc1f958d1dad2961->leave($__internal_a34db562a1ef24d697e5019ea91d255964b08448f8124a39cc1f958d1dad2961_prof);

        
        $__internal_d24f5cccc1127ffe438e8a35d81cf0272feb39e7fa289a5ef2341efa01398039->leave($__internal_d24f5cccc1127ffe438e8a35d81cf0272feb39e7fa289a5ef2341efa01398039_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44d669bf5ece6533a65b2cd6ead37347a5848ca6ab3f94071df45759e33e40b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d669bf5ece6533a65b2cd6ead37347a5848ca6ab3f94071df45759e33e40b1->enter($__internal_44d669bf5ece6533a65b2cd6ead37347a5848ca6ab3f94071df45759e33e40b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ceebd22e3e831b303b95bd380f1ca80ac08cb2858ea3ade2660b42caf1488317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceebd22e3e831b303b95bd380f1ca80ac08cb2858ea3ade2660b42caf1488317->enter($__internal_ceebd22e3e831b303b95bd380f1ca80ac08cb2858ea3ade2660b42caf1488317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ceebd22e3e831b303b95bd380f1ca80ac08cb2858ea3ade2660b42caf1488317->leave($__internal_ceebd22e3e831b303b95bd380f1ca80ac08cb2858ea3ade2660b42caf1488317_prof);

        
        $__internal_44d669bf5ece6533a65b2cd6ead37347a5848ca6ab3f94071df45759e33e40b1->leave($__internal_44d669bf5ece6533a65b2cd6ead37347a5848ca6ab3f94071df45759e33e40b1_prof);

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
