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
        $__internal_b1958b01544eb36b04e7eb81d5d72a93ae1a9d355065b3f71a3f642646babf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1958b01544eb36b04e7eb81d5d72a93ae1a9d355065b3f71a3f642646babf27->enter($__internal_b1958b01544eb36b04e7eb81d5d72a93ae1a9d355065b3f71a3f642646babf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_8eefb09327222225ac87fa27ad1db1b3037f6203f60aec83accaa6a10888e8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eefb09327222225ac87fa27ad1db1b3037f6203f60aec83accaa6a10888e8b3->enter($__internal_8eefb09327222225ac87fa27ad1db1b3037f6203f60aec83accaa6a10888e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b1958b01544eb36b04e7eb81d5d72a93ae1a9d355065b3f71a3f642646babf27->leave($__internal_b1958b01544eb36b04e7eb81d5d72a93ae1a9d355065b3f71a3f642646babf27_prof);

        
        $__internal_8eefb09327222225ac87fa27ad1db1b3037f6203f60aec83accaa6a10888e8b3->leave($__internal_8eefb09327222225ac87fa27ad1db1b3037f6203f60aec83accaa6a10888e8b3_prof);

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
