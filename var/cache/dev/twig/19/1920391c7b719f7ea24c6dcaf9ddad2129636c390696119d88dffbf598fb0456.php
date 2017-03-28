<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_34bd073976bb6a092d496e9f0493069ef5193b5946be608722ff0328c3b7b44e extends Twig_Template
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
        $__internal_bf53e6cac15d3b71bf5ab25b2ac33b3f29d1babee73fdcfc3b9eb02e75878a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf53e6cac15d3b71bf5ab25b2ac33b3f29d1babee73fdcfc3b9eb02e75878a6a->enter($__internal_bf53e6cac15d3b71bf5ab25b2ac33b3f29d1babee73fdcfc3b9eb02e75878a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_60156ee4eb5ee1679817b319a659bcb78a9b91979c123b2fc45e86630b35d0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60156ee4eb5ee1679817b319a659bcb78a9b91979c123b2fc45e86630b35d0bd->enter($__internal_60156ee4eb5ee1679817b319a659bcb78a9b91979c123b2fc45e86630b35d0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf53e6cac15d3b71bf5ab25b2ac33b3f29d1babee73fdcfc3b9eb02e75878a6a->leave($__internal_bf53e6cac15d3b71bf5ab25b2ac33b3f29d1babee73fdcfc3b9eb02e75878a6a_prof);

        
        $__internal_60156ee4eb5ee1679817b319a659bcb78a9b91979c123b2fc45e86630b35d0bd->leave($__internal_60156ee4eb5ee1679817b319a659bcb78a9b91979c123b2fc45e86630b35d0bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_204a34699e5996f357ad07f761ec4a2dcdcb818bf006ef8fc2be1bd74ce739d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204a34699e5996f357ad07f761ec4a2dcdcb818bf006ef8fc2be1bd74ce739d7->enter($__internal_204a34699e5996f357ad07f761ec4a2dcdcb818bf006ef8fc2be1bd74ce739d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8ec3e2effdb41e2431c02f9def37dfbfe549f3a075c6268207f3cdf1b790e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ec3e2effdb41e2431c02f9def37dfbfe549f3a075c6268207f3cdf1b790e84->enter($__internal_e8ec3e2effdb41e2431c02f9def37dfbfe549f3a075c6268207f3cdf1b790e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e8ec3e2effdb41e2431c02f9def37dfbfe549f3a075c6268207f3cdf1b790e84->leave($__internal_e8ec3e2effdb41e2431c02f9def37dfbfe549f3a075c6268207f3cdf1b790e84_prof);

        
        $__internal_204a34699e5996f357ad07f761ec4a2dcdcb818bf006ef8fc2be1bd74ce739d7->leave($__internal_204a34699e5996f357ad07f761ec4a2dcdcb818bf006ef8fc2be1bd74ce739d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8c17f9b02d7f600bafc43b63833c1c16ee064ef17f9e9544310bb9343212beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c17f9b02d7f600bafc43b63833c1c16ee064ef17f9e9544310bb9343212beb->enter($__internal_c8c17f9b02d7f600bafc43b63833c1c16ee064ef17f9e9544310bb9343212beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edcfa04ee758651c081cafe0fae935c70627692129dda38a2fb81c81e6e140be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcfa04ee758651c081cafe0fae935c70627692129dda38a2fb81c81e6e140be->enter($__internal_edcfa04ee758651c081cafe0fae935c70627692129dda38a2fb81c81e6e140be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_edcfa04ee758651c081cafe0fae935c70627692129dda38a2fb81c81e6e140be->leave($__internal_edcfa04ee758651c081cafe0fae935c70627692129dda38a2fb81c81e6e140be_prof);

        
        $__internal_c8c17f9b02d7f600bafc43b63833c1c16ee064ef17f9e9544310bb9343212beb->leave($__internal_c8c17f9b02d7f600bafc43b63833c1c16ee064ef17f9e9544310bb9343212beb_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
