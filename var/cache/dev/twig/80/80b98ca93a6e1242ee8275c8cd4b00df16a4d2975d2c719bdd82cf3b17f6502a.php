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
        $__internal_f378cb3514d2adcf4174dfa01fbedbf80818d0abe6a0ef70701b03c8c85a6d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f378cb3514d2adcf4174dfa01fbedbf80818d0abe6a0ef70701b03c8c85a6d8c->enter($__internal_f378cb3514d2adcf4174dfa01fbedbf80818d0abe6a0ef70701b03c8c85a6d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_657589ed804fa2bf4c195aceb202807faa3e173b723c766b22bb8e0ad295b8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657589ed804fa2bf4c195aceb202807faa3e173b723c766b22bb8e0ad295b8d8->enter($__internal_657589ed804fa2bf4c195aceb202807faa3e173b723c766b22bb8e0ad295b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f378cb3514d2adcf4174dfa01fbedbf80818d0abe6a0ef70701b03c8c85a6d8c->leave($__internal_f378cb3514d2adcf4174dfa01fbedbf80818d0abe6a0ef70701b03c8c85a6d8c_prof);

        
        $__internal_657589ed804fa2bf4c195aceb202807faa3e173b723c766b22bb8e0ad295b8d8->leave($__internal_657589ed804fa2bf4c195aceb202807faa3e173b723c766b22bb8e0ad295b8d8_prof);

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
