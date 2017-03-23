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
        $__internal_ccb4eb80e5720e467a3b4983ac740c485bcbba50f13f455915a2712e61253be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb4eb80e5720e467a3b4983ac740c485bcbba50f13f455915a2712e61253be1->enter($__internal_ccb4eb80e5720e467a3b4983ac740c485bcbba50f13f455915a2712e61253be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d38d137ae95564ffb713c4dd75121f3f9e35652e1444b93848258541a34f0ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38d137ae95564ffb713c4dd75121f3f9e35652e1444b93848258541a34f0ffe->enter($__internal_d38d137ae95564ffb713c4dd75121f3f9e35652e1444b93848258541a34f0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ccb4eb80e5720e467a3b4983ac740c485bcbba50f13f455915a2712e61253be1->leave($__internal_ccb4eb80e5720e467a3b4983ac740c485bcbba50f13f455915a2712e61253be1_prof);

        
        $__internal_d38d137ae95564ffb713c4dd75121f3f9e35652e1444b93848258541a34f0ffe->leave($__internal_d38d137ae95564ffb713c4dd75121f3f9e35652e1444b93848258541a34f0ffe_prof);

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
