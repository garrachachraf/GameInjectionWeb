<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_63d72a95f796df9319bff0b30f767c5347d73c469e8988ed469c663dca1a0b15 extends Twig_Template
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
        $__internal_5da7e10c2651c5330ee67e51612699b903491f5decdd975b9a226da159017d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da7e10c2651c5330ee67e51612699b903491f5decdd975b9a226da159017d71->enter($__internal_5da7e10c2651c5330ee67e51612699b903491f5decdd975b9a226da159017d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8f99b9f141dc594b4959a5a371120e117b4ba1c8346a1b03885656de62fe700a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f99b9f141dc594b4959a5a371120e117b4ba1c8346a1b03885656de62fe700a->enter($__internal_8f99b9f141dc594b4959a5a371120e117b4ba1c8346a1b03885656de62fe700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da7e10c2651c5330ee67e51612699b903491f5decdd975b9a226da159017d71->leave($__internal_5da7e10c2651c5330ee67e51612699b903491f5decdd975b9a226da159017d71_prof);

        
        $__internal_8f99b9f141dc594b4959a5a371120e117b4ba1c8346a1b03885656de62fe700a->leave($__internal_8f99b9f141dc594b4959a5a371120e117b4ba1c8346a1b03885656de62fe700a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efeb276c09b28a3ff518afbcb11c619450a66bb6a55396e1120cbb9447d93cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efeb276c09b28a3ff518afbcb11c619450a66bb6a55396e1120cbb9447d93cd7->enter($__internal_efeb276c09b28a3ff518afbcb11c619450a66bb6a55396e1120cbb9447d93cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b346340207c017774d23b60f7f7466dcdbd740b3422c70601dd5fb914556a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b346340207c017774d23b60f7f7466dcdbd740b3422c70601dd5fb914556a13->enter($__internal_2b346340207c017774d23b60f7f7466dcdbd740b3422c70601dd5fb914556a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2b346340207c017774d23b60f7f7466dcdbd740b3422c70601dd5fb914556a13->leave($__internal_2b346340207c017774d23b60f7f7466dcdbd740b3422c70601dd5fb914556a13_prof);

        
        $__internal_efeb276c09b28a3ff518afbcb11c619450a66bb6a55396e1120cbb9447d93cd7->leave($__internal_efeb276c09b28a3ff518afbcb11c619450a66bb6a55396e1120cbb9447d93cd7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4f76bd06c912b089da693b52c5c4633d027db99dc6bc1da973c39af3bb4497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4f76bd06c912b089da693b52c5c4633d027db99dc6bc1da973c39af3bb4497->enter($__internal_ea4f76bd06c912b089da693b52c5c4633d027db99dc6bc1da973c39af3bb4497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a94c8c4e07672685a384b67e73346d72844b693690006ad0c4fbbf7a72ec647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a94c8c4e07672685a384b67e73346d72844b693690006ad0c4fbbf7a72ec647->enter($__internal_3a94c8c4e07672685a384b67e73346d72844b693690006ad0c4fbbf7a72ec647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a94c8c4e07672685a384b67e73346d72844b693690006ad0c4fbbf7a72ec647->leave($__internal_3a94c8c4e07672685a384b67e73346d72844b693690006ad0c4fbbf7a72ec647_prof);

        
        $__internal_ea4f76bd06c912b089da693b52c5c4633d027db99dc6bc1da973c39af3bb4497->leave($__internal_ea4f76bd06c912b089da693b52c5c4633d027db99dc6bc1da973c39af3bb4497_prof);

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
