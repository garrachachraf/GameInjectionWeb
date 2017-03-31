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
        $__internal_247142fe3baa6cccb295e33d10e070ec971fd2051158f37c261bdd4a658496ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247142fe3baa6cccb295e33d10e070ec971fd2051158f37c261bdd4a658496ca->enter($__internal_247142fe3baa6cccb295e33d10e070ec971fd2051158f37c261bdd4a658496ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_95dbbd04fd2935b2128b074646af9752fdd5c8980ed14f7573bf2190afb4b0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dbbd04fd2935b2128b074646af9752fdd5c8980ed14f7573bf2190afb4b0b9->enter($__internal_95dbbd04fd2935b2128b074646af9752fdd5c8980ed14f7573bf2190afb4b0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247142fe3baa6cccb295e33d10e070ec971fd2051158f37c261bdd4a658496ca->leave($__internal_247142fe3baa6cccb295e33d10e070ec971fd2051158f37c261bdd4a658496ca_prof);

        
        $__internal_95dbbd04fd2935b2128b074646af9752fdd5c8980ed14f7573bf2190afb4b0b9->leave($__internal_95dbbd04fd2935b2128b074646af9752fdd5c8980ed14f7573bf2190afb4b0b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b0a5987e383e280b5732ae30a991087d65cc8ed5dadcea69533dfb0dc7ebd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0a5987e383e280b5732ae30a991087d65cc8ed5dadcea69533dfb0dc7ebd6e->enter($__internal_3b0a5987e383e280b5732ae30a991087d65cc8ed5dadcea69533dfb0dc7ebd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55361fbb714364fd9a3aa6cd426c8bb7fe1e9b58abece11a8f3007e8ca64017a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55361fbb714364fd9a3aa6cd426c8bb7fe1e9b58abece11a8f3007e8ca64017a->enter($__internal_55361fbb714364fd9a3aa6cd426c8bb7fe1e9b58abece11a8f3007e8ca64017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55361fbb714364fd9a3aa6cd426c8bb7fe1e9b58abece11a8f3007e8ca64017a->leave($__internal_55361fbb714364fd9a3aa6cd426c8bb7fe1e9b58abece11a8f3007e8ca64017a_prof);

        
        $__internal_3b0a5987e383e280b5732ae30a991087d65cc8ed5dadcea69533dfb0dc7ebd6e->leave($__internal_3b0a5987e383e280b5732ae30a991087d65cc8ed5dadcea69533dfb0dc7ebd6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b785804079b7acd6aed5fe6fc46d6ff52f0f3f0ff9678c4f7e776a4909d08e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b785804079b7acd6aed5fe6fc46d6ff52f0f3f0ff9678c4f7e776a4909d08e8->enter($__internal_5b785804079b7acd6aed5fe6fc46d6ff52f0f3f0ff9678c4f7e776a4909d08e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4274bab1fc3b898b67f684128369c4a471757c4ab763f5f40037e5cfa7a9d509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4274bab1fc3b898b67f684128369c4a471757c4ab763f5f40037e5cfa7a9d509->enter($__internal_4274bab1fc3b898b67f684128369c4a471757c4ab763f5f40037e5cfa7a9d509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4274bab1fc3b898b67f684128369c4a471757c4ab763f5f40037e5cfa7a9d509->leave($__internal_4274bab1fc3b898b67f684128369c4a471757c4ab763f5f40037e5cfa7a9d509_prof);

        
        $__internal_5b785804079b7acd6aed5fe6fc46d6ff52f0f3f0ff9678c4f7e776a4909d08e8->leave($__internal_5b785804079b7acd6aed5fe6fc46d6ff52f0f3f0ff9678c4f7e776a4909d08e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6fbab72306e9b7ff93c06cab1040c220eb381e2096a1dc0bbf27ad7a7422cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fbab72306e9b7ff93c06cab1040c220eb381e2096a1dc0bbf27ad7a7422cae->enter($__internal_d6fbab72306e9b7ff93c06cab1040c220eb381e2096a1dc0bbf27ad7a7422cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24d9643f3f9a7b342154fb18451c34a5784bd39a3cfed6d295f45b16add93ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d9643f3f9a7b342154fb18451c34a5784bd39a3cfed6d295f45b16add93ec5->enter($__internal_24d9643f3f9a7b342154fb18451c34a5784bd39a3cfed6d295f45b16add93ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24d9643f3f9a7b342154fb18451c34a5784bd39a3cfed6d295f45b16add93ec5->leave($__internal_24d9643f3f9a7b342154fb18451c34a5784bd39a3cfed6d295f45b16add93ec5_prof);

        
        $__internal_d6fbab72306e9b7ff93c06cab1040c220eb381e2096a1dc0bbf27ad7a7422cae->leave($__internal_d6fbab72306e9b7ff93c06cab1040c220eb381e2096a1dc0bbf27ad7a7422cae_prof);

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
