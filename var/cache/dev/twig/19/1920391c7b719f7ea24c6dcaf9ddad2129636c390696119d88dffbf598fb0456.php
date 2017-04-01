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
        $__internal_c1f9bfae8b6c5f35b7c0b1b26f08a101d56dee9eae1e5b96d7034cb021ae89ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f9bfae8b6c5f35b7c0b1b26f08a101d56dee9eae1e5b96d7034cb021ae89ea->enter($__internal_c1f9bfae8b6c5f35b7c0b1b26f08a101d56dee9eae1e5b96d7034cb021ae89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2bb5d071309228be8ed91942b19a30bea86f0af1a84641b995c1b779f5fb2ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb5d071309228be8ed91942b19a30bea86f0af1a84641b995c1b779f5fb2ffe->enter($__internal_2bb5d071309228be8ed91942b19a30bea86f0af1a84641b995c1b779f5fb2ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f9bfae8b6c5f35b7c0b1b26f08a101d56dee9eae1e5b96d7034cb021ae89ea->leave($__internal_c1f9bfae8b6c5f35b7c0b1b26f08a101d56dee9eae1e5b96d7034cb021ae89ea_prof);

        
        $__internal_2bb5d071309228be8ed91942b19a30bea86f0af1a84641b995c1b779f5fb2ffe->leave($__internal_2bb5d071309228be8ed91942b19a30bea86f0af1a84641b995c1b779f5fb2ffe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04f6b26d0e49f6d1306166f809325e20e28ccc18dece3a3cc92b215c45cbbc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f6b26d0e49f6d1306166f809325e20e28ccc18dece3a3cc92b215c45cbbc59->enter($__internal_04f6b26d0e49f6d1306166f809325e20e28ccc18dece3a3cc92b215c45cbbc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_714212c0e48d96d4d57a54b1714db428530b60f6a749cc7ff86a1d3da478694a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714212c0e48d96d4d57a54b1714db428530b60f6a749cc7ff86a1d3da478694a->enter($__internal_714212c0e48d96d4d57a54b1714db428530b60f6a749cc7ff86a1d3da478694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_714212c0e48d96d4d57a54b1714db428530b60f6a749cc7ff86a1d3da478694a->leave($__internal_714212c0e48d96d4d57a54b1714db428530b60f6a749cc7ff86a1d3da478694a_prof);

        
        $__internal_04f6b26d0e49f6d1306166f809325e20e28ccc18dece3a3cc92b215c45cbbc59->leave($__internal_04f6b26d0e49f6d1306166f809325e20e28ccc18dece3a3cc92b215c45cbbc59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc3847fc38b2db8f13bfa4df9775c4c51fba9f77ba850561182356f743d7bf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3847fc38b2db8f13bfa4df9775c4c51fba9f77ba850561182356f743d7bf37->enter($__internal_cc3847fc38b2db8f13bfa4df9775c4c51fba9f77ba850561182356f743d7bf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93af32a1c7a312e5243a2c0df21625e19f9136d115ceed14594a7a25b438a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93af32a1c7a312e5243a2c0df21625e19f9136d115ceed14594a7a25b438a5fd->enter($__internal_93af32a1c7a312e5243a2c0df21625e19f9136d115ceed14594a7a25b438a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93af32a1c7a312e5243a2c0df21625e19f9136d115ceed14594a7a25b438a5fd->leave($__internal_93af32a1c7a312e5243a2c0df21625e19f9136d115ceed14594a7a25b438a5fd_prof);

        
        $__internal_cc3847fc38b2db8f13bfa4df9775c4c51fba9f77ba850561182356f743d7bf37->leave($__internal_cc3847fc38b2db8f13bfa4df9775c4c51fba9f77ba850561182356f743d7bf37_prof);

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
