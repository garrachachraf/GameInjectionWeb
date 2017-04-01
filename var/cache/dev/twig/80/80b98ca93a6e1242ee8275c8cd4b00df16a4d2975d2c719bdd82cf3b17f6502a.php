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
        $__internal_14db11be7d35734d47e4d0ad5104a5480792ece74a5052bafada96982cffbdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14db11be7d35734d47e4d0ad5104a5480792ece74a5052bafada96982cffbdb3->enter($__internal_14db11be7d35734d47e4d0ad5104a5480792ece74a5052bafada96982cffbdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_341eaff4b90e5571cada450590254b58abdaab6d3957d9f4c95bb7b001c87bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341eaff4b90e5571cada450590254b58abdaab6d3957d9f4c95bb7b001c87bb5->enter($__internal_341eaff4b90e5571cada450590254b58abdaab6d3957d9f4c95bb7b001c87bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_14db11be7d35734d47e4d0ad5104a5480792ece74a5052bafada96982cffbdb3->leave($__internal_14db11be7d35734d47e4d0ad5104a5480792ece74a5052bafada96982cffbdb3_prof);

        
        $__internal_341eaff4b90e5571cada450590254b58abdaab6d3957d9f4c95bb7b001c87bb5->leave($__internal_341eaff4b90e5571cada450590254b58abdaab6d3957d9f4c95bb7b001c87bb5_prof);

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
