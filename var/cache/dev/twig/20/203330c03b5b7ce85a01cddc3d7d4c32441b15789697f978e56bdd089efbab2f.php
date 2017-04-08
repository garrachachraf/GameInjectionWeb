<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e947e3721793b9be5581412184d2fa7c36bf0458075c510c83657fae72cf1cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_3f8fc23fa7e59141049e5619e15382995b516eb36534058dbf117b703f3b29b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8fc23fa7e59141049e5619e15382995b516eb36534058dbf117b703f3b29b9->enter($__internal_3f8fc23fa7e59141049e5619e15382995b516eb36534058dbf117b703f3b29b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_78f17076b29046f7289c0b13e4ea94c7f24c2f5360cfa9efc8445cd1074ad262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f17076b29046f7289c0b13e4ea94c7f24c2f5360cfa9efc8445cd1074ad262->enter($__internal_78f17076b29046f7289c0b13e4ea94c7f24c2f5360cfa9efc8445cd1074ad262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8fc23fa7e59141049e5619e15382995b516eb36534058dbf117b703f3b29b9->leave($__internal_3f8fc23fa7e59141049e5619e15382995b516eb36534058dbf117b703f3b29b9_prof);

        
        $__internal_78f17076b29046f7289c0b13e4ea94c7f24c2f5360cfa9efc8445cd1074ad262->leave($__internal_78f17076b29046f7289c0b13e4ea94c7f24c2f5360cfa9efc8445cd1074ad262_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fcadd90b99e425dd1cd48dac38aeabf36cfc9c43ff4c43bba8bcca1a25fb8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcadd90b99e425dd1cd48dac38aeabf36cfc9c43ff4c43bba8bcca1a25fb8c1->enter($__internal_6fcadd90b99e425dd1cd48dac38aeabf36cfc9c43ff4c43bba8bcca1a25fb8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69fd0573bc9d816ebeb9404c2cd6fa29cf9ddd44c216690974cfb3b67823b145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fd0573bc9d816ebeb9404c2cd6fa29cf9ddd44c216690974cfb3b67823b145->enter($__internal_69fd0573bc9d816ebeb9404c2cd6fa29cf9ddd44c216690974cfb3b67823b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_69fd0573bc9d816ebeb9404c2cd6fa29cf9ddd44c216690974cfb3b67823b145->leave($__internal_69fd0573bc9d816ebeb9404c2cd6fa29cf9ddd44c216690974cfb3b67823b145_prof);

        
        $__internal_6fcadd90b99e425dd1cd48dac38aeabf36cfc9c43ff4c43bba8bcca1a25fb8c1->leave($__internal_6fcadd90b99e425dd1cd48dac38aeabf36cfc9c43ff4c43bba8bcca1a25fb8c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e261813be18e41e1ff0f750fdb43d57274bdd0c366bee4efa54a5fe51799357f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e261813be18e41e1ff0f750fdb43d57274bdd0c366bee4efa54a5fe51799357f->enter($__internal_e261813be18e41e1ff0f750fdb43d57274bdd0c366bee4efa54a5fe51799357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65887a10cdd8ab6904a24f2227e4992e80426e1a36233813c30e919657f0b62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65887a10cdd8ab6904a24f2227e4992e80426e1a36233813c30e919657f0b62a->enter($__internal_65887a10cdd8ab6904a24f2227e4992e80426e1a36233813c30e919657f0b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65887a10cdd8ab6904a24f2227e4992e80426e1a36233813c30e919657f0b62a->leave($__internal_65887a10cdd8ab6904a24f2227e4992e80426e1a36233813c30e919657f0b62a_prof);

        
        $__internal_e261813be18e41e1ff0f750fdb43d57274bdd0c366bee4efa54a5fe51799357f->leave($__internal_e261813be18e41e1ff0f750fdb43d57274bdd0c366bee4efa54a5fe51799357f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
