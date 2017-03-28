<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_93b3652ee3bb9d2cac9b770fd797031583db03585415cbbaa748e68c5e92cb3a extends Twig_Template
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
        $__internal_6fdf6a41e39b70e48d963c6f2167bcd91fd6710a883e6b46f7ec0644ca31cae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdf6a41e39b70e48d963c6f2167bcd91fd6710a883e6b46f7ec0644ca31cae3->enter($__internal_6fdf6a41e39b70e48d963c6f2167bcd91fd6710a883e6b46f7ec0644ca31cae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0ac1ae50f2c1355753b7d332480e9051b4847ec1165f551ee0aaee1a5734ff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac1ae50f2c1355753b7d332480e9051b4847ec1165f551ee0aaee1a5734ff11->enter($__internal_0ac1ae50f2c1355753b7d332480e9051b4847ec1165f551ee0aaee1a5734ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fdf6a41e39b70e48d963c6f2167bcd91fd6710a883e6b46f7ec0644ca31cae3->leave($__internal_6fdf6a41e39b70e48d963c6f2167bcd91fd6710a883e6b46f7ec0644ca31cae3_prof);

        
        $__internal_0ac1ae50f2c1355753b7d332480e9051b4847ec1165f551ee0aaee1a5734ff11->leave($__internal_0ac1ae50f2c1355753b7d332480e9051b4847ec1165f551ee0aaee1a5734ff11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d721518fd7a6ae1d19f42ed76b732fa567a2c13d5175a04d63a6626bea4a7987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d721518fd7a6ae1d19f42ed76b732fa567a2c13d5175a04d63a6626bea4a7987->enter($__internal_d721518fd7a6ae1d19f42ed76b732fa567a2c13d5175a04d63a6626bea4a7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7461b754d725f4ea41b1f0675b5a43f97aad5d45e612de84c8db072a1efc35ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7461b754d725f4ea41b1f0675b5a43f97aad5d45e612de84c8db072a1efc35ea->enter($__internal_7461b754d725f4ea41b1f0675b5a43f97aad5d45e612de84c8db072a1efc35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7461b754d725f4ea41b1f0675b5a43f97aad5d45e612de84c8db072a1efc35ea->leave($__internal_7461b754d725f4ea41b1f0675b5a43f97aad5d45e612de84c8db072a1efc35ea_prof);

        
        $__internal_d721518fd7a6ae1d19f42ed76b732fa567a2c13d5175a04d63a6626bea4a7987->leave($__internal_d721518fd7a6ae1d19f42ed76b732fa567a2c13d5175a04d63a6626bea4a7987_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d4b05e13cd7414a615034f8b8207ef62dea7944411e4a2205429f0c9e718901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4b05e13cd7414a615034f8b8207ef62dea7944411e4a2205429f0c9e718901->enter($__internal_8d4b05e13cd7414a615034f8b8207ef62dea7944411e4a2205429f0c9e718901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_723ea501a3a1c5b63906ac8e3cd5975de1e42bbff6d249c395b5196acef35a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ea501a3a1c5b63906ac8e3cd5975de1e42bbff6d249c395b5196acef35a3e->enter($__internal_723ea501a3a1c5b63906ac8e3cd5975de1e42bbff6d249c395b5196acef35a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_723ea501a3a1c5b63906ac8e3cd5975de1e42bbff6d249c395b5196acef35a3e->leave($__internal_723ea501a3a1c5b63906ac8e3cd5975de1e42bbff6d249c395b5196acef35a3e_prof);

        
        $__internal_8d4b05e13cd7414a615034f8b8207ef62dea7944411e4a2205429f0c9e718901->leave($__internal_8d4b05e13cd7414a615034f8b8207ef62dea7944411e4a2205429f0c9e718901_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
