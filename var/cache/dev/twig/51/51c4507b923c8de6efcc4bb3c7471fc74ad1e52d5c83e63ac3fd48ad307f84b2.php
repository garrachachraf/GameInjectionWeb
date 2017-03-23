<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bbc7c7a4edc288b0b6b902490124e05b7d36cf623fe5c20b774fa45a06c5913b extends Twig_Template
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
        $__internal_bdc01ed74873d8ac4a66d41f04918b82a60c60eb7cd87ce7d02fde7b274821cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc01ed74873d8ac4a66d41f04918b82a60c60eb7cd87ce7d02fde7b274821cf->enter($__internal_bdc01ed74873d8ac4a66d41f04918b82a60c60eb7cd87ce7d02fde7b274821cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_fa7823555fce55e14dbee4a9971b7eeb163c2433f7806b12e6fa80468d00a7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7823555fce55e14dbee4a9971b7eeb163c2433f7806b12e6fa80468d00a7b3->enter($__internal_fa7823555fce55e14dbee4a9971b7eeb163c2433f7806b12e6fa80468d00a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc01ed74873d8ac4a66d41f04918b82a60c60eb7cd87ce7d02fde7b274821cf->leave($__internal_bdc01ed74873d8ac4a66d41f04918b82a60c60eb7cd87ce7d02fde7b274821cf_prof);

        
        $__internal_fa7823555fce55e14dbee4a9971b7eeb163c2433f7806b12e6fa80468d00a7b3->leave($__internal_fa7823555fce55e14dbee4a9971b7eeb163c2433f7806b12e6fa80468d00a7b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d5f39a1201a49f37ff7d4bc6029b2e633411e148e20cc3f98bc320354313110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5f39a1201a49f37ff7d4bc6029b2e633411e148e20cc3f98bc320354313110->enter($__internal_7d5f39a1201a49f37ff7d4bc6029b2e633411e148e20cc3f98bc320354313110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48d2e9a764a72a97090c2888b349d8fbfa6149cc7c1556f8f13768b1e9396631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d2e9a764a72a97090c2888b349d8fbfa6149cc7c1556f8f13768b1e9396631->enter($__internal_48d2e9a764a72a97090c2888b349d8fbfa6149cc7c1556f8f13768b1e9396631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_48d2e9a764a72a97090c2888b349d8fbfa6149cc7c1556f8f13768b1e9396631->leave($__internal_48d2e9a764a72a97090c2888b349d8fbfa6149cc7c1556f8f13768b1e9396631_prof);

        
        $__internal_7d5f39a1201a49f37ff7d4bc6029b2e633411e148e20cc3f98bc320354313110->leave($__internal_7d5f39a1201a49f37ff7d4bc6029b2e633411e148e20cc3f98bc320354313110_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f6458eef9435d5aa00dbaaa1e1adad70c43a3185687a018f5ba70750c1157a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f6458eef9435d5aa00dbaaa1e1adad70c43a3185687a018f5ba70750c1157a->enter($__internal_16f6458eef9435d5aa00dbaaa1e1adad70c43a3185687a018f5ba70750c1157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a2773fd84bf18b31a94c0fd49127981e69bccb6d19bc5e93dc05a8730a5a572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2773fd84bf18b31a94c0fd49127981e69bccb6d19bc5e93dc05a8730a5a572->enter($__internal_9a2773fd84bf18b31a94c0fd49127981e69bccb6d19bc5e93dc05a8730a5a572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a2773fd84bf18b31a94c0fd49127981e69bccb6d19bc5e93dc05a8730a5a572->leave($__internal_9a2773fd84bf18b31a94c0fd49127981e69bccb6d19bc5e93dc05a8730a5a572_prof);

        
        $__internal_16f6458eef9435d5aa00dbaaa1e1adad70c43a3185687a018f5ba70750c1157a->leave($__internal_16f6458eef9435d5aa00dbaaa1e1adad70c43a3185687a018f5ba70750c1157a_prof);

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
