<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7e6f81597b905b9b86ac1ff74f6e35272f09a05b512c86ec07061dd2b0c00131 extends Twig_Template
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
        $__internal_ff9835bfc7a8b6665f61e632de19038184b7c7c90596e0bd7657df2f8a5c0d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9835bfc7a8b6665f61e632de19038184b7c7c90596e0bd7657df2f8a5c0d64->enter($__internal_ff9835bfc7a8b6665f61e632de19038184b7c7c90596e0bd7657df2f8a5c0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e3c247c1f5bf3247d1a25d95f28221eb15980dd1aadebabbc38d8a083fb4967a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c247c1f5bf3247d1a25d95f28221eb15980dd1aadebabbc38d8a083fb4967a->enter($__internal_e3c247c1f5bf3247d1a25d95f28221eb15980dd1aadebabbc38d8a083fb4967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9835bfc7a8b6665f61e632de19038184b7c7c90596e0bd7657df2f8a5c0d64->leave($__internal_ff9835bfc7a8b6665f61e632de19038184b7c7c90596e0bd7657df2f8a5c0d64_prof);

        
        $__internal_e3c247c1f5bf3247d1a25d95f28221eb15980dd1aadebabbc38d8a083fb4967a->leave($__internal_e3c247c1f5bf3247d1a25d95f28221eb15980dd1aadebabbc38d8a083fb4967a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_876719af919b6746c748500af09d5cc04c87ece8c597d60abc643524d3267ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876719af919b6746c748500af09d5cc04c87ece8c597d60abc643524d3267ff0->enter($__internal_876719af919b6746c748500af09d5cc04c87ece8c597d60abc643524d3267ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15a384fc1542b183578a9b9062648497b117123bbd6c223c8809e8b6031fa735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a384fc1542b183578a9b9062648497b117123bbd6c223c8809e8b6031fa735->enter($__internal_15a384fc1542b183578a9b9062648497b117123bbd6c223c8809e8b6031fa735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_15a384fc1542b183578a9b9062648497b117123bbd6c223c8809e8b6031fa735->leave($__internal_15a384fc1542b183578a9b9062648497b117123bbd6c223c8809e8b6031fa735_prof);

        
        $__internal_876719af919b6746c748500af09d5cc04c87ece8c597d60abc643524d3267ff0->leave($__internal_876719af919b6746c748500af09d5cc04c87ece8c597d60abc643524d3267ff0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa0431a93e825e9d85df6b80f06c08f944f8edc29c6964817d4fd91cc8ace53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0431a93e825e9d85df6b80f06c08f944f8edc29c6964817d4fd91cc8ace53b->enter($__internal_aa0431a93e825e9d85df6b80f06c08f944f8edc29c6964817d4fd91cc8ace53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a23d6698b2da12972418dbc8a0acb441ee1d33804d3ac9090d825318e6d73058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23d6698b2da12972418dbc8a0acb441ee1d33804d3ac9090d825318e6d73058->enter($__internal_a23d6698b2da12972418dbc8a0acb441ee1d33804d3ac9090d825318e6d73058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_a23d6698b2da12972418dbc8a0acb441ee1d33804d3ac9090d825318e6d73058->leave($__internal_a23d6698b2da12972418dbc8a0acb441ee1d33804d3ac9090d825318e6d73058_prof);

        
        $__internal_aa0431a93e825e9d85df6b80f06c08f944f8edc29c6964817d4fd91cc8ace53b->leave($__internal_aa0431a93e825e9d85df6b80f06c08f944f8edc29c6964817d4fd91cc8ace53b_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
