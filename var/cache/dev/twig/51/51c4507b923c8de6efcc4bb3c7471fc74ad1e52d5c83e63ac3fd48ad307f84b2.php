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
        $__internal_d95587fc2d727c86170c59a55f2633e1f2ecc0180c8ac7f58692e051d9ebf321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95587fc2d727c86170c59a55f2633e1f2ecc0180c8ac7f58692e051d9ebf321->enter($__internal_d95587fc2d727c86170c59a55f2633e1f2ecc0180c8ac7f58692e051d9ebf321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_fef68aaf3d9a60fa0e205b1eb5ebe9563ce7c4b3b9321a5467d2053abb56e6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef68aaf3d9a60fa0e205b1eb5ebe9563ce7c4b3b9321a5467d2053abb56e6dc->enter($__internal_fef68aaf3d9a60fa0e205b1eb5ebe9563ce7c4b3b9321a5467d2053abb56e6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95587fc2d727c86170c59a55f2633e1f2ecc0180c8ac7f58692e051d9ebf321->leave($__internal_d95587fc2d727c86170c59a55f2633e1f2ecc0180c8ac7f58692e051d9ebf321_prof);

        
        $__internal_fef68aaf3d9a60fa0e205b1eb5ebe9563ce7c4b3b9321a5467d2053abb56e6dc->leave($__internal_fef68aaf3d9a60fa0e205b1eb5ebe9563ce7c4b3b9321a5467d2053abb56e6dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f00c7d56331bf0d0822bd311416804369f78e93efa0a25e6795fcfa5e9f6dc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00c7d56331bf0d0822bd311416804369f78e93efa0a25e6795fcfa5e9f6dc3c->enter($__internal_f00c7d56331bf0d0822bd311416804369f78e93efa0a25e6795fcfa5e9f6dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdf621e55f7b8d670b16622cc8e2c3a69a8a9a4cbd6be1119c5d7c8238c28adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf621e55f7b8d670b16622cc8e2c3a69a8a9a4cbd6be1119c5d7c8238c28adf->enter($__internal_cdf621e55f7b8d670b16622cc8e2c3a69a8a9a4cbd6be1119c5d7c8238c28adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cdf621e55f7b8d670b16622cc8e2c3a69a8a9a4cbd6be1119c5d7c8238c28adf->leave($__internal_cdf621e55f7b8d670b16622cc8e2c3a69a8a9a4cbd6be1119c5d7c8238c28adf_prof);

        
        $__internal_f00c7d56331bf0d0822bd311416804369f78e93efa0a25e6795fcfa5e9f6dc3c->leave($__internal_f00c7d56331bf0d0822bd311416804369f78e93efa0a25e6795fcfa5e9f6dc3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b56c0c18f1549a4366add12586db8073d739812b85d4df8d6162f302f10ba428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56c0c18f1549a4366add12586db8073d739812b85d4df8d6162f302f10ba428->enter($__internal_b56c0c18f1549a4366add12586db8073d739812b85d4df8d6162f302f10ba428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_585b6f2757d40011536f5c6187a710c6e31f808763d7d8b8653276e262ae8632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585b6f2757d40011536f5c6187a710c6e31f808763d7d8b8653276e262ae8632->enter($__internal_585b6f2757d40011536f5c6187a710c6e31f808763d7d8b8653276e262ae8632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_585b6f2757d40011536f5c6187a710c6e31f808763d7d8b8653276e262ae8632->leave($__internal_585b6f2757d40011536f5c6187a710c6e31f808763d7d8b8653276e262ae8632_prof);

        
        $__internal_b56c0c18f1549a4366add12586db8073d739812b85d4df8d6162f302f10ba428->leave($__internal_b56c0c18f1549a4366add12586db8073d739812b85d4df8d6162f302f10ba428_prof);

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
