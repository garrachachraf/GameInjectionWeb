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
        $__internal_f3705fe6b939b4eea2aa2150712965ea45506bb545f624288ab7d0190fb0e137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3705fe6b939b4eea2aa2150712965ea45506bb545f624288ab7d0190fb0e137->enter($__internal_f3705fe6b939b4eea2aa2150712965ea45506bb545f624288ab7d0190fb0e137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d480f0e357b66b767a87283123902ed151ace72dde36e510ab163c967227081a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d480f0e357b66b767a87283123902ed151ace72dde36e510ab163c967227081a->enter($__internal_d480f0e357b66b767a87283123902ed151ace72dde36e510ab163c967227081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3705fe6b939b4eea2aa2150712965ea45506bb545f624288ab7d0190fb0e137->leave($__internal_f3705fe6b939b4eea2aa2150712965ea45506bb545f624288ab7d0190fb0e137_prof);

        
        $__internal_d480f0e357b66b767a87283123902ed151ace72dde36e510ab163c967227081a->leave($__internal_d480f0e357b66b767a87283123902ed151ace72dde36e510ab163c967227081a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_feaedb3d72bb7ac790745e8f7ff45d257dd8a5e1d1882a0553ed7c51e6977b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaedb3d72bb7ac790745e8f7ff45d257dd8a5e1d1882a0553ed7c51e6977b41->enter($__internal_feaedb3d72bb7ac790745e8f7ff45d257dd8a5e1d1882a0553ed7c51e6977b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4986cf4ddd8cd57bf6a9343d0a416be6b3e2de031ead1fb1209073914a115486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4986cf4ddd8cd57bf6a9343d0a416be6b3e2de031ead1fb1209073914a115486->enter($__internal_4986cf4ddd8cd57bf6a9343d0a416be6b3e2de031ead1fb1209073914a115486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4986cf4ddd8cd57bf6a9343d0a416be6b3e2de031ead1fb1209073914a115486->leave($__internal_4986cf4ddd8cd57bf6a9343d0a416be6b3e2de031ead1fb1209073914a115486_prof);

        
        $__internal_feaedb3d72bb7ac790745e8f7ff45d257dd8a5e1d1882a0553ed7c51e6977b41->leave($__internal_feaedb3d72bb7ac790745e8f7ff45d257dd8a5e1d1882a0553ed7c51e6977b41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94b28283a1d688a095655c52e3c13c85dc9ef6920803b306195c8b0282e80739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b28283a1d688a095655c52e3c13c85dc9ef6920803b306195c8b0282e80739->enter($__internal_94b28283a1d688a095655c52e3c13c85dc9ef6920803b306195c8b0282e80739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc96cbc4865254e22e382a27778d6b11dd858d02dd80e57b3f5e6fb316667519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc96cbc4865254e22e382a27778d6b11dd858d02dd80e57b3f5e6fb316667519->enter($__internal_fc96cbc4865254e22e382a27778d6b11dd858d02dd80e57b3f5e6fb316667519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc96cbc4865254e22e382a27778d6b11dd858d02dd80e57b3f5e6fb316667519->leave($__internal_fc96cbc4865254e22e382a27778d6b11dd858d02dd80e57b3f5e6fb316667519_prof);

        
        $__internal_94b28283a1d688a095655c52e3c13c85dc9ef6920803b306195c8b0282e80739->leave($__internal_94b28283a1d688a095655c52e3c13c85dc9ef6920803b306195c8b0282e80739_prof);

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
