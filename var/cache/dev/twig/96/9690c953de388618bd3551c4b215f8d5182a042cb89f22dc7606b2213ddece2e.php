<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bf12546484f6115da360f1f6aebcec6afbef32afca9336120e388f3520a89f24 extends Twig_Template
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
        $__internal_9f06d17e4bc6ef132b53a1833e6d3250e5d8a6ce415a017ce7915e420a160dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f06d17e4bc6ef132b53a1833e6d3250e5d8a6ce415a017ce7915e420a160dd3->enter($__internal_9f06d17e4bc6ef132b53a1833e6d3250e5d8a6ce415a017ce7915e420a160dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_dd92adb8045efac54b236256a0ff1cb53090593be059eeb9121b5db5a52bf8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd92adb8045efac54b236256a0ff1cb53090593be059eeb9121b5db5a52bf8f6->enter($__internal_dd92adb8045efac54b236256a0ff1cb53090593be059eeb9121b5db5a52bf8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9f06d17e4bc6ef132b53a1833e6d3250e5d8a6ce415a017ce7915e420a160dd3->leave($__internal_9f06d17e4bc6ef132b53a1833e6d3250e5d8a6ce415a017ce7915e420a160dd3_prof);

        
        $__internal_dd92adb8045efac54b236256a0ff1cb53090593be059eeb9121b5db5a52bf8f6->leave($__internal_dd92adb8045efac54b236256a0ff1cb53090593be059eeb9121b5db5a52bf8f6_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}