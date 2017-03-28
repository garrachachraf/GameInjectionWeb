<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_98e5c645c6d6f481d1bc235d78747b5c7bd4b57b732c417373715538b458c58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc02dd567b650c5e606f20cfa2c8914068b2c3be4bb433f1213791d98e7b9687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc02dd567b650c5e606f20cfa2c8914068b2c3be4bb433f1213791d98e7b9687->enter($__internal_cc02dd567b650c5e606f20cfa2c8914068b2c3be4bb433f1213791d98e7b9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d585c5dcf51ab9862d446ffa7260d251ab314dd75335583d9ea0dc169c1d784c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d585c5dcf51ab9862d446ffa7260d251ab314dd75335583d9ea0dc169c1d784c->enter($__internal_d585c5dcf51ab9862d446ffa7260d251ab314dd75335583d9ea0dc169c1d784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_cc02dd567b650c5e606f20cfa2c8914068b2c3be4bb433f1213791d98e7b9687->leave($__internal_cc02dd567b650c5e606f20cfa2c8914068b2c3be4bb433f1213791d98e7b9687_prof);

        
        $__internal_d585c5dcf51ab9862d446ffa7260d251ab314dd75335583d9ea0dc169c1d784c->leave($__internal_d585c5dcf51ab9862d446ffa7260d251ab314dd75335583d9ea0dc169c1d784c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
