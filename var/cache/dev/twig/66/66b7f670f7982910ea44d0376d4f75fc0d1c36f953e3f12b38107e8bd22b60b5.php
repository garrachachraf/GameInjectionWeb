<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8757fd17cc45536a7b120b4657466bc6996feaff7beaa45a5e603f19e5c20f8c extends Twig_Template
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
        $__internal_6c8e4d5c1b19810ceaccb6c4610056169c13a93700b6109d711911db167539f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8e4d5c1b19810ceaccb6c4610056169c13a93700b6109d711911db167539f5->enter($__internal_6c8e4d5c1b19810ceaccb6c4610056169c13a93700b6109d711911db167539f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f266b9352f22deddecf459f7754b960c4a9aa83816b492b646e6b2258b21c843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f266b9352f22deddecf459f7754b960c4a9aa83816b492b646e6b2258b21c843->enter($__internal_f266b9352f22deddecf459f7754b960c4a9aa83816b492b646e6b2258b21c843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6c8e4d5c1b19810ceaccb6c4610056169c13a93700b6109d711911db167539f5->leave($__internal_6c8e4d5c1b19810ceaccb6c4610056169c13a93700b6109d711911db167539f5_prof);

        
        $__internal_f266b9352f22deddecf459f7754b960c4a9aa83816b492b646e6b2258b21c843->leave($__internal_f266b9352f22deddecf459f7754b960c4a9aa83816b492b646e6b2258b21c843_prof);

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
