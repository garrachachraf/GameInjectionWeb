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
        $__internal_b39b7ea6f4c530af15b0fe1d4b29e2dfbba6e0cc78cbb6a0084854a69f2876d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39b7ea6f4c530af15b0fe1d4b29e2dfbba6e0cc78cbb6a0084854a69f2876d3->enter($__internal_b39b7ea6f4c530af15b0fe1d4b29e2dfbba6e0cc78cbb6a0084854a69f2876d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7da73cb8b86312f326d9d49fc0ba069374bf7976e4c20a67e8d5c61ffc861469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da73cb8b86312f326d9d49fc0ba069374bf7976e4c20a67e8d5c61ffc861469->enter($__internal_7da73cb8b86312f326d9d49fc0ba069374bf7976e4c20a67e8d5c61ffc861469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39b7ea6f4c530af15b0fe1d4b29e2dfbba6e0cc78cbb6a0084854a69f2876d3->leave($__internal_b39b7ea6f4c530af15b0fe1d4b29e2dfbba6e0cc78cbb6a0084854a69f2876d3_prof);

        
        $__internal_7da73cb8b86312f326d9d49fc0ba069374bf7976e4c20a67e8d5c61ffc861469->leave($__internal_7da73cb8b86312f326d9d49fc0ba069374bf7976e4c20a67e8d5c61ffc861469_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e0368880a712b566449a5fc5fac5485888980cb14ce4b840a081b4f50a89086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0368880a712b566449a5fc5fac5485888980cb14ce4b840a081b4f50a89086->enter($__internal_5e0368880a712b566449a5fc5fac5485888980cb14ce4b840a081b4f50a89086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_627980badc47850c95cdf804a3ee8027c16931f7c4249956d54a12f56adbbf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627980badc47850c95cdf804a3ee8027c16931f7c4249956d54a12f56adbbf68->enter($__internal_627980badc47850c95cdf804a3ee8027c16931f7c4249956d54a12f56adbbf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_627980badc47850c95cdf804a3ee8027c16931f7c4249956d54a12f56adbbf68->leave($__internal_627980badc47850c95cdf804a3ee8027c16931f7c4249956d54a12f56adbbf68_prof);

        
        $__internal_5e0368880a712b566449a5fc5fac5485888980cb14ce4b840a081b4f50a89086->leave($__internal_5e0368880a712b566449a5fc5fac5485888980cb14ce4b840a081b4f50a89086_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a525cd1d5bd194286bffe2f40be3fd07a0f1f8302457c52b40237cf278d35653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a525cd1d5bd194286bffe2f40be3fd07a0f1f8302457c52b40237cf278d35653->enter($__internal_a525cd1d5bd194286bffe2f40be3fd07a0f1f8302457c52b40237cf278d35653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_738fc16e045a9a73bbf5a71ec907b30196e6ee0bfd4b5e27482e3f29b946fd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738fc16e045a9a73bbf5a71ec907b30196e6ee0bfd4b5e27482e3f29b946fd7c->enter($__internal_738fc16e045a9a73bbf5a71ec907b30196e6ee0bfd4b5e27482e3f29b946fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_738fc16e045a9a73bbf5a71ec907b30196e6ee0bfd4b5e27482e3f29b946fd7c->leave($__internal_738fc16e045a9a73bbf5a71ec907b30196e6ee0bfd4b5e27482e3f29b946fd7c_prof);

        
        $__internal_a525cd1d5bd194286bffe2f40be3fd07a0f1f8302457c52b40237cf278d35653->leave($__internal_a525cd1d5bd194286bffe2f40be3fd07a0f1f8302457c52b40237cf278d35653_prof);

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
