<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_778ca3f24c84fcc07206ac9a58e4e4c24f8a3a996b90bef5dcf5980956c2d9eb extends Twig_Template
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
        $__internal_e5c9fd1a3a06afcfe3407b4d6d61e3c487bd9d56b8539624b481f201b6225b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c9fd1a3a06afcfe3407b4d6d61e3c487bd9d56b8539624b481f201b6225b4d->enter($__internal_e5c9fd1a3a06afcfe3407b4d6d61e3c487bd9d56b8539624b481f201b6225b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c39f6b35221cb9cba47ea06a316dd0d8ac9e8d2ba99ce1d13c66c6caa452019e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39f6b35221cb9cba47ea06a316dd0d8ac9e8d2ba99ce1d13c66c6caa452019e->enter($__internal_c39f6b35221cb9cba47ea06a316dd0d8ac9e8d2ba99ce1d13c66c6caa452019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c9fd1a3a06afcfe3407b4d6d61e3c487bd9d56b8539624b481f201b6225b4d->leave($__internal_e5c9fd1a3a06afcfe3407b4d6d61e3c487bd9d56b8539624b481f201b6225b4d_prof);

        
        $__internal_c39f6b35221cb9cba47ea06a316dd0d8ac9e8d2ba99ce1d13c66c6caa452019e->leave($__internal_c39f6b35221cb9cba47ea06a316dd0d8ac9e8d2ba99ce1d13c66c6caa452019e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecd6a60aada33ec554c9c32573f31b5bbeefa79e6449673cea120249bf80bab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd6a60aada33ec554c9c32573f31b5bbeefa79e6449673cea120249bf80bab9->enter($__internal_ecd6a60aada33ec554c9c32573f31b5bbeefa79e6449673cea120249bf80bab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_87f4c38d51e8dd013dc844aeb3125580cbc01fb5ab3ba9ba8d3cf17d20df74a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f4c38d51e8dd013dc844aeb3125580cbc01fb5ab3ba9ba8d3cf17d20df74a0->enter($__internal_87f4c38d51e8dd013dc844aeb3125580cbc01fb5ab3ba9ba8d3cf17d20df74a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87f4c38d51e8dd013dc844aeb3125580cbc01fb5ab3ba9ba8d3cf17d20df74a0->leave($__internal_87f4c38d51e8dd013dc844aeb3125580cbc01fb5ab3ba9ba8d3cf17d20df74a0_prof);

        
        $__internal_ecd6a60aada33ec554c9c32573f31b5bbeefa79e6449673cea120249bf80bab9->leave($__internal_ecd6a60aada33ec554c9c32573f31b5bbeefa79e6449673cea120249bf80bab9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ad683eb082be9a237dfca988378905d9c57f8fcbd9249dca829a80ff21da72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad683eb082be9a237dfca988378905d9c57f8fcbd9249dca829a80ff21da72f->enter($__internal_5ad683eb082be9a237dfca988378905d9c57f8fcbd9249dca829a80ff21da72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e94cac22160cef083eac1d9af03c56fb2e84630590c0d70fa22188540b4d3f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94cac22160cef083eac1d9af03c56fb2e84630590c0d70fa22188540b4d3f75->enter($__internal_e94cac22160cef083eac1d9af03c56fb2e84630590c0d70fa22188540b4d3f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e94cac22160cef083eac1d9af03c56fb2e84630590c0d70fa22188540b4d3f75->leave($__internal_e94cac22160cef083eac1d9af03c56fb2e84630590c0d70fa22188540b4d3f75_prof);

        
        $__internal_5ad683eb082be9a237dfca988378905d9c57f8fcbd9249dca829a80ff21da72f->leave($__internal_5ad683eb082be9a237dfca988378905d9c57f8fcbd9249dca829a80ff21da72f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_515d26502902be23ae830162d0dfe01edadf7db448e5bcd6310846dc901cf20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515d26502902be23ae830162d0dfe01edadf7db448e5bcd6310846dc901cf20b->enter($__internal_515d26502902be23ae830162d0dfe01edadf7db448e5bcd6310846dc901cf20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9a0a92dbcb5989c6d9802e78c17a329eef23e82c653916a6f9f680bc2a113d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a0a92dbcb5989c6d9802e78c17a329eef23e82c653916a6f9f680bc2a113d4->enter($__internal_a9a0a92dbcb5989c6d9802e78c17a329eef23e82c653916a6f9f680bc2a113d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9a0a92dbcb5989c6d9802e78c17a329eef23e82c653916a6f9f680bc2a113d4->leave($__internal_a9a0a92dbcb5989c6d9802e78c17a329eef23e82c653916a6f9f680bc2a113d4_prof);

        
        $__internal_515d26502902be23ae830162d0dfe01edadf7db448e5bcd6310846dc901cf20b->leave($__internal_515d26502902be23ae830162d0dfe01edadf7db448e5bcd6310846dc901cf20b_prof);

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
