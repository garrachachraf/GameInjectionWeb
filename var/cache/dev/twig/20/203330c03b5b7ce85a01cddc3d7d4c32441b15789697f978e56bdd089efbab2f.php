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
        $__internal_b5406b5b558d159da1c95655a5f4e4d2ef946d22304c044b78af78784f7183cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5406b5b558d159da1c95655a5f4e4d2ef946d22304c044b78af78784f7183cb->enter($__internal_b5406b5b558d159da1c95655a5f4e4d2ef946d22304c044b78af78784f7183cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4bc025bf2e4ad003897800c3ee405a9c131c1d579f6aa7275e9c0338ad73bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc025bf2e4ad003897800c3ee405a9c131c1d579f6aa7275e9c0338ad73bb87->enter($__internal_4bc025bf2e4ad003897800c3ee405a9c131c1d579f6aa7275e9c0338ad73bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5406b5b558d159da1c95655a5f4e4d2ef946d22304c044b78af78784f7183cb->leave($__internal_b5406b5b558d159da1c95655a5f4e4d2ef946d22304c044b78af78784f7183cb_prof);

        
        $__internal_4bc025bf2e4ad003897800c3ee405a9c131c1d579f6aa7275e9c0338ad73bb87->leave($__internal_4bc025bf2e4ad003897800c3ee405a9c131c1d579f6aa7275e9c0338ad73bb87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc98fd4649d91deaf8bf89aa207023d92ad93481f639d7f283ac4950b551f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc98fd4649d91deaf8bf89aa207023d92ad93481f639d7f283ac4950b551f59->enter($__internal_5dc98fd4649d91deaf8bf89aa207023d92ad93481f639d7f283ac4950b551f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc66d100aea643b91269afd95b30d418c33df5450d4ee5709ed3a18451f0e3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc66d100aea643b91269afd95b30d418c33df5450d4ee5709ed3a18451f0e3dd->enter($__internal_bc66d100aea643b91269afd95b30d418c33df5450d4ee5709ed3a18451f0e3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bc66d100aea643b91269afd95b30d418c33df5450d4ee5709ed3a18451f0e3dd->leave($__internal_bc66d100aea643b91269afd95b30d418c33df5450d4ee5709ed3a18451f0e3dd_prof);

        
        $__internal_5dc98fd4649d91deaf8bf89aa207023d92ad93481f639d7f283ac4950b551f59->leave($__internal_5dc98fd4649d91deaf8bf89aa207023d92ad93481f639d7f283ac4950b551f59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbaa08ce6dbc3576b5c81cb364791d295346b4424e765e99c550ef7b74665355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbaa08ce6dbc3576b5c81cb364791d295346b4424e765e99c550ef7b74665355->enter($__internal_bbaa08ce6dbc3576b5c81cb364791d295346b4424e765e99c550ef7b74665355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4971a5c99fb34d80b7d15452b2801df77ce7a9c764c7c2c21bd17a53cbc2c334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4971a5c99fb34d80b7d15452b2801df77ce7a9c764c7c2c21bd17a53cbc2c334->enter($__internal_4971a5c99fb34d80b7d15452b2801df77ce7a9c764c7c2c21bd17a53cbc2c334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4971a5c99fb34d80b7d15452b2801df77ce7a9c764c7c2c21bd17a53cbc2c334->leave($__internal_4971a5c99fb34d80b7d15452b2801df77ce7a9c764c7c2c21bd17a53cbc2c334_prof);

        
        $__internal_bbaa08ce6dbc3576b5c81cb364791d295346b4424e765e99c550ef7b74665355->leave($__internal_bbaa08ce6dbc3576b5c81cb364791d295346b4424e765e99c550ef7b74665355_prof);

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
