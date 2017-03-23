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
        $__internal_8365b67d20b686444d18e0d6ab4ad985775076a3d030ed81f44dbb65f326d52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8365b67d20b686444d18e0d6ab4ad985775076a3d030ed81f44dbb65f326d52b->enter($__internal_8365b67d20b686444d18e0d6ab4ad985775076a3d030ed81f44dbb65f326d52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5edc90551ecc9864f0c624a0da80442dca0b5f27df755b17c8b179af74382f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edc90551ecc9864f0c624a0da80442dca0b5f27df755b17c8b179af74382f38->enter($__internal_5edc90551ecc9864f0c624a0da80442dca0b5f27df755b17c8b179af74382f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8365b67d20b686444d18e0d6ab4ad985775076a3d030ed81f44dbb65f326d52b->leave($__internal_8365b67d20b686444d18e0d6ab4ad985775076a3d030ed81f44dbb65f326d52b_prof);

        
        $__internal_5edc90551ecc9864f0c624a0da80442dca0b5f27df755b17c8b179af74382f38->leave($__internal_5edc90551ecc9864f0c624a0da80442dca0b5f27df755b17c8b179af74382f38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fc9d4213103c6dfb414e2f38bc188fac879858ff0fcaf7052e6f3a4a9e54acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc9d4213103c6dfb414e2f38bc188fac879858ff0fcaf7052e6f3a4a9e54acd->enter($__internal_5fc9d4213103c6dfb414e2f38bc188fac879858ff0fcaf7052e6f3a4a9e54acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0243d567c93abfa8d4d0abfe347a754d440ea67744ba79941a2ea5a73ca3b80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0243d567c93abfa8d4d0abfe347a754d440ea67744ba79941a2ea5a73ca3b80d->enter($__internal_0243d567c93abfa8d4d0abfe347a754d440ea67744ba79941a2ea5a73ca3b80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0243d567c93abfa8d4d0abfe347a754d440ea67744ba79941a2ea5a73ca3b80d->leave($__internal_0243d567c93abfa8d4d0abfe347a754d440ea67744ba79941a2ea5a73ca3b80d_prof);

        
        $__internal_5fc9d4213103c6dfb414e2f38bc188fac879858ff0fcaf7052e6f3a4a9e54acd->leave($__internal_5fc9d4213103c6dfb414e2f38bc188fac879858ff0fcaf7052e6f3a4a9e54acd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9df0f97ee114e024f29b137406c944240993196ea62090502918f340142018b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df0f97ee114e024f29b137406c944240993196ea62090502918f340142018b3->enter($__internal_9df0f97ee114e024f29b137406c944240993196ea62090502918f340142018b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f9e83fbe1f3678b5f533e9a6e356704d7ded2a0f5621d95d198aff280e6d4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9e83fbe1f3678b5f533e9a6e356704d7ded2a0f5621d95d198aff280e6d4c5->enter($__internal_0f9e83fbe1f3678b5f533e9a6e356704d7ded2a0f5621d95d198aff280e6d4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f9e83fbe1f3678b5f533e9a6e356704d7ded2a0f5621d95d198aff280e6d4c5->leave($__internal_0f9e83fbe1f3678b5f533e9a6e356704d7ded2a0f5621d95d198aff280e6d4c5_prof);

        
        $__internal_9df0f97ee114e024f29b137406c944240993196ea62090502918f340142018b3->leave($__internal_9df0f97ee114e024f29b137406c944240993196ea62090502918f340142018b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc635e11d2d7e77dd59a796be5da7599c6b6a5f51c3d0db6ac6dcad211de79af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc635e11d2d7e77dd59a796be5da7599c6b6a5f51c3d0db6ac6dcad211de79af->enter($__internal_bc635e11d2d7e77dd59a796be5da7599c6b6a5f51c3d0db6ac6dcad211de79af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55cecb78cb465fc49bc4721f0b7e508c32f4ed7b0af38f1ba5929c98b7165762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cecb78cb465fc49bc4721f0b7e508c32f4ed7b0af38f1ba5929c98b7165762->enter($__internal_55cecb78cb465fc49bc4721f0b7e508c32f4ed7b0af38f1ba5929c98b7165762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55cecb78cb465fc49bc4721f0b7e508c32f4ed7b0af38f1ba5929c98b7165762->leave($__internal_55cecb78cb465fc49bc4721f0b7e508c32f4ed7b0af38f1ba5929c98b7165762_prof);

        
        $__internal_bc635e11d2d7e77dd59a796be5da7599c6b6a5f51c3d0db6ac6dcad211de79af->leave($__internal_bc635e11d2d7e77dd59a796be5da7599c6b6a5f51c3d0db6ac6dcad211de79af_prof);

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
