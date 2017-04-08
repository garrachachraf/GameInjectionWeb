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
        $__internal_83d4c1efd02f6e2a2715993abab01e42e8b6e580d296e6dffe320b2fb66bb5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d4c1efd02f6e2a2715993abab01e42e8b6e580d296e6dffe320b2fb66bb5dc->enter($__internal_83d4c1efd02f6e2a2715993abab01e42e8b6e580d296e6dffe320b2fb66bb5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_61691a891a8277e07b7695f34687b8d00e67e2cf403a8f13d618f78f518d2476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61691a891a8277e07b7695f34687b8d00e67e2cf403a8f13d618f78f518d2476->enter($__internal_61691a891a8277e07b7695f34687b8d00e67e2cf403a8f13d618f78f518d2476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d4c1efd02f6e2a2715993abab01e42e8b6e580d296e6dffe320b2fb66bb5dc->leave($__internal_83d4c1efd02f6e2a2715993abab01e42e8b6e580d296e6dffe320b2fb66bb5dc_prof);

        
        $__internal_61691a891a8277e07b7695f34687b8d00e67e2cf403a8f13d618f78f518d2476->leave($__internal_61691a891a8277e07b7695f34687b8d00e67e2cf403a8f13d618f78f518d2476_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c586c45d0601d33bb15c0fb18e1719125a62b693f8888bda42869534f3a8bc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c586c45d0601d33bb15c0fb18e1719125a62b693f8888bda42869534f3a8bc47->enter($__internal_c586c45d0601d33bb15c0fb18e1719125a62b693f8888bda42869534f3a8bc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7933db4185e2c20943184263dd0f8f419ba85292dab10faf8362be4716f6f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7933db4185e2c20943184263dd0f8f419ba85292dab10faf8362be4716f6f96->enter($__internal_d7933db4185e2c20943184263dd0f8f419ba85292dab10faf8362be4716f6f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d7933db4185e2c20943184263dd0f8f419ba85292dab10faf8362be4716f6f96->leave($__internal_d7933db4185e2c20943184263dd0f8f419ba85292dab10faf8362be4716f6f96_prof);

        
        $__internal_c586c45d0601d33bb15c0fb18e1719125a62b693f8888bda42869534f3a8bc47->leave($__internal_c586c45d0601d33bb15c0fb18e1719125a62b693f8888bda42869534f3a8bc47_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a22a6dca455e87cfbdbaf6d2abee887774c493d187246745a437918c86b226d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22a6dca455e87cfbdbaf6d2abee887774c493d187246745a437918c86b226d2->enter($__internal_a22a6dca455e87cfbdbaf6d2abee887774c493d187246745a437918c86b226d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ce3db0573e82a10c603395146f17b015a83e656a5a4e08675b9ac122e381e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce3db0573e82a10c603395146f17b015a83e656a5a4e08675b9ac122e381e63->enter($__internal_2ce3db0573e82a10c603395146f17b015a83e656a5a4e08675b9ac122e381e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ce3db0573e82a10c603395146f17b015a83e656a5a4e08675b9ac122e381e63->leave($__internal_2ce3db0573e82a10c603395146f17b015a83e656a5a4e08675b9ac122e381e63_prof);

        
        $__internal_a22a6dca455e87cfbdbaf6d2abee887774c493d187246745a437918c86b226d2->leave($__internal_a22a6dca455e87cfbdbaf6d2abee887774c493d187246745a437918c86b226d2_prof);

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
