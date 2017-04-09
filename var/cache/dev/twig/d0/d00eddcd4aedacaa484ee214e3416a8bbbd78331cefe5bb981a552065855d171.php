<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1fc0fde957ad28be4dc1a7a99ed494a09d74edf14e91a5ea175d17abd9e3e0d4 extends Twig_Template
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
        $__internal_e59c797905810e293f47cf543acd649af5a5e1f25d4de660bc31526452bd63fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59c797905810e293f47cf543acd649af5a5e1f25d4de660bc31526452bd63fc->enter($__internal_e59c797905810e293f47cf543acd649af5a5e1f25d4de660bc31526452bd63fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_828974d3bc9c68f57cbe1e6538117c574b44f840615d7e8a1fe5f85d677eb968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828974d3bc9c68f57cbe1e6538117c574b44f840615d7e8a1fe5f85d677eb968->enter($__internal_828974d3bc9c68f57cbe1e6538117c574b44f840615d7e8a1fe5f85d677eb968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59c797905810e293f47cf543acd649af5a5e1f25d4de660bc31526452bd63fc->leave($__internal_e59c797905810e293f47cf543acd649af5a5e1f25d4de660bc31526452bd63fc_prof);

        
        $__internal_828974d3bc9c68f57cbe1e6538117c574b44f840615d7e8a1fe5f85d677eb968->leave($__internal_828974d3bc9c68f57cbe1e6538117c574b44f840615d7e8a1fe5f85d677eb968_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22c47ea671f4c616d1be157454db91a697fcf828b02993fd3ed922d67e524811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c47ea671f4c616d1be157454db91a697fcf828b02993fd3ed922d67e524811->enter($__internal_22c47ea671f4c616d1be157454db91a697fcf828b02993fd3ed922d67e524811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff2572bf7c1d31d447d31721b42fa5bea5bd48b17080bbb0aaba8bc4c007ee7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2572bf7c1d31d447d31721b42fa5bea5bd48b17080bbb0aaba8bc4c007ee7f->enter($__internal_ff2572bf7c1d31d447d31721b42fa5bea5bd48b17080bbb0aaba8bc4c007ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff2572bf7c1d31d447d31721b42fa5bea5bd48b17080bbb0aaba8bc4c007ee7f->leave($__internal_ff2572bf7c1d31d447d31721b42fa5bea5bd48b17080bbb0aaba8bc4c007ee7f_prof);

        
        $__internal_22c47ea671f4c616d1be157454db91a697fcf828b02993fd3ed922d67e524811->leave($__internal_22c47ea671f4c616d1be157454db91a697fcf828b02993fd3ed922d67e524811_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_112c916959119e0c91955f0617dfc3d4de55e304960af57718039d6a7372aab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112c916959119e0c91955f0617dfc3d4de55e304960af57718039d6a7372aab9->enter($__internal_112c916959119e0c91955f0617dfc3d4de55e304960af57718039d6a7372aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8b7ef405b9bb227bad050b4f0532ff85a72935fca4d7938b20466c6d20cb5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b7ef405b9bb227bad050b4f0532ff85a72935fca4d7938b20466c6d20cb5b8->enter($__internal_e8b7ef405b9bb227bad050b4f0532ff85a72935fca4d7938b20466c6d20cb5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8b7ef405b9bb227bad050b4f0532ff85a72935fca4d7938b20466c6d20cb5b8->leave($__internal_e8b7ef405b9bb227bad050b4f0532ff85a72935fca4d7938b20466c6d20cb5b8_prof);

        
        $__internal_112c916959119e0c91955f0617dfc3d4de55e304960af57718039d6a7372aab9->leave($__internal_112c916959119e0c91955f0617dfc3d4de55e304960af57718039d6a7372aab9_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
