<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_203e12142a98ac9d8b8b70ea96e30ebe641e3c2555b473e23800ce9cbb0c96ff extends Twig_Template
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
        $__internal_c90568dac9fcb74ec8ca473748d151a1f903f591ae4727980d8fdf8be252430a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90568dac9fcb74ec8ca473748d151a1f903f591ae4727980d8fdf8be252430a->enter($__internal_c90568dac9fcb74ec8ca473748d151a1f903f591ae4727980d8fdf8be252430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6718676a336f50aa3695652965b065421762dfb4edf1a04ba84797cfde99d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6718676a336f50aa3695652965b065421762dfb4edf1a04ba84797cfde99d031->enter($__internal_6718676a336f50aa3695652965b065421762dfb4edf1a04ba84797cfde99d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c90568dac9fcb74ec8ca473748d151a1f903f591ae4727980d8fdf8be252430a->leave($__internal_c90568dac9fcb74ec8ca473748d151a1f903f591ae4727980d8fdf8be252430a_prof);

        
        $__internal_6718676a336f50aa3695652965b065421762dfb4edf1a04ba84797cfde99d031->leave($__internal_6718676a336f50aa3695652965b065421762dfb4edf1a04ba84797cfde99d031_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
