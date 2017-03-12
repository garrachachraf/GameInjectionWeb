<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e773cfcdf050e62b39b824968af17e4dd505025ce63cd369eecb3e8875efde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e773cfcdf050e62b39b824968af17e4dd505025ce63cd369eecb3e8875efde->enter($__internal_88e773cfcdf050e62b39b824968af17e4dd505025ce63cd369eecb3e8875efde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_46e54fa4a78efd2f29d52dc7789433d347679e06daa853a146e6d3cc3cdc1a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e54fa4a78efd2f29d52dc7789433d347679e06daa853a146e6d3cc3cdc1a78->enter($__internal_46e54fa4a78efd2f29d52dc7789433d347679e06daa853a146e6d3cc3cdc1a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e773cfcdf050e62b39b824968af17e4dd505025ce63cd369eecb3e8875efde->leave($__internal_88e773cfcdf050e62b39b824968af17e4dd505025ce63cd369eecb3e8875efde_prof);

        
        $__internal_46e54fa4a78efd2f29d52dc7789433d347679e06daa853a146e6d3cc3cdc1a78->leave($__internal_46e54fa4a78efd2f29d52dc7789433d347679e06daa853a146e6d3cc3cdc1a78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca72a2bad493019dbfef616544070c8444b73c70c45d12d4bffc7f9f6de8fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca72a2bad493019dbfef616544070c8444b73c70c45d12d4bffc7f9f6de8fa9->enter($__internal_9ca72a2bad493019dbfef616544070c8444b73c70c45d12d4bffc7f9f6de8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c35399882d21f522a112b277c1a3a6efb5db279b473fbf45208afec87dbfbef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35399882d21f522a112b277c1a3a6efb5db279b473fbf45208afec87dbfbef2->enter($__internal_c35399882d21f522a112b277c1a3a6efb5db279b473fbf45208afec87dbfbef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c35399882d21f522a112b277c1a3a6efb5db279b473fbf45208afec87dbfbef2->leave($__internal_c35399882d21f522a112b277c1a3a6efb5db279b473fbf45208afec87dbfbef2_prof);

        
        $__internal_9ca72a2bad493019dbfef616544070c8444b73c70c45d12d4bffc7f9f6de8fa9->leave($__internal_9ca72a2bad493019dbfef616544070c8444b73c70c45d12d4bffc7f9f6de8fa9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec6dd99d55cdbc7dbe6e10e34a40921e48019d2b998adec954f18a87e0a8700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec6dd99d55cdbc7dbe6e10e34a40921e48019d2b998adec954f18a87e0a8700->enter($__internal_6ec6dd99d55cdbc7dbe6e10e34a40921e48019d2b998adec954f18a87e0a8700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3c1aeda3768b0e14d5aa356b491d00ac7cc6af7f0f25500eae89edbb842da84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c1aeda3768b0e14d5aa356b491d00ac7cc6af7f0f25500eae89edbb842da84->enter($__internal_b3c1aeda3768b0e14d5aa356b491d00ac7cc6af7f0f25500eae89edbb842da84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b3c1aeda3768b0e14d5aa356b491d00ac7cc6af7f0f25500eae89edbb842da84->leave($__internal_b3c1aeda3768b0e14d5aa356b491d00ac7cc6af7f0f25500eae89edbb842da84_prof);

        
        $__internal_6ec6dd99d55cdbc7dbe6e10e34a40921e48019d2b998adec954f18a87e0a8700->leave($__internal_6ec6dd99d55cdbc7dbe6e10e34a40921e48019d2b998adec954f18a87e0a8700_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
