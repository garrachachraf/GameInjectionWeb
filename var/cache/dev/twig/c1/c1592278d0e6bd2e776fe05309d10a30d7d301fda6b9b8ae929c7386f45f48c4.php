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
        $__internal_505177fc97c3d55c327211b52fcf2c7acb6e8743614614ade20e3d7eb1e84cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505177fc97c3d55c327211b52fcf2c7acb6e8743614614ade20e3d7eb1e84cdb->enter($__internal_505177fc97c3d55c327211b52fcf2c7acb6e8743614614ade20e3d7eb1e84cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a7f1f17301cca5e71ec7bf968a42887186c2126edec2ca6b6b6e69f9421472ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f1f17301cca5e71ec7bf968a42887186c2126edec2ca6b6b6e69f9421472ed->enter($__internal_a7f1f17301cca5e71ec7bf968a42887186c2126edec2ca6b6b6e69f9421472ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505177fc97c3d55c327211b52fcf2c7acb6e8743614614ade20e3d7eb1e84cdb->leave($__internal_505177fc97c3d55c327211b52fcf2c7acb6e8743614614ade20e3d7eb1e84cdb_prof);

        
        $__internal_a7f1f17301cca5e71ec7bf968a42887186c2126edec2ca6b6b6e69f9421472ed->leave($__internal_a7f1f17301cca5e71ec7bf968a42887186c2126edec2ca6b6b6e69f9421472ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7bea17f18491898bccb09bdae613b685759b4b6f23efa4ad85dc7e37106046d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bea17f18491898bccb09bdae613b685759b4b6f23efa4ad85dc7e37106046d->enter($__internal_a7bea17f18491898bccb09bdae613b685759b4b6f23efa4ad85dc7e37106046d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0c15c359dbac341dd1cd7e526fd2d33331e45b63d9f1e0713d224194da09864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c15c359dbac341dd1cd7e526fd2d33331e45b63d9f1e0713d224194da09864->enter($__internal_f0c15c359dbac341dd1cd7e526fd2d33331e45b63d9f1e0713d224194da09864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f0c15c359dbac341dd1cd7e526fd2d33331e45b63d9f1e0713d224194da09864->leave($__internal_f0c15c359dbac341dd1cd7e526fd2d33331e45b63d9f1e0713d224194da09864_prof);

        
        $__internal_a7bea17f18491898bccb09bdae613b685759b4b6f23efa4ad85dc7e37106046d->leave($__internal_a7bea17f18491898bccb09bdae613b685759b4b6f23efa4ad85dc7e37106046d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fac11c6fa057e05c6df43a9020f14e3f49533cd65e48a08e42327394f5ca7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fac11c6fa057e05c6df43a9020f14e3f49533cd65e48a08e42327394f5ca7a1->enter($__internal_5fac11c6fa057e05c6df43a9020f14e3f49533cd65e48a08e42327394f5ca7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d1f00a38b1b34b2b5b74048c352c43ebe9309277dac534ec66c07652ee39542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1f00a38b1b34b2b5b74048c352c43ebe9309277dac534ec66c07652ee39542->enter($__internal_5d1f00a38b1b34b2b5b74048c352c43ebe9309277dac534ec66c07652ee39542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d1f00a38b1b34b2b5b74048c352c43ebe9309277dac534ec66c07652ee39542->leave($__internal_5d1f00a38b1b34b2b5b74048c352c43ebe9309277dac534ec66c07652ee39542_prof);

        
        $__internal_5fac11c6fa057e05c6df43a9020f14e3f49533cd65e48a08e42327394f5ca7a1->leave($__internal_5fac11c6fa057e05c6df43a9020f14e3f49533cd65e48a08e42327394f5ca7a1_prof);

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
