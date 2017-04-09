<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_35c0882ec27d910b5023973f4dafdc1c9de6bd07d93763ccdd37b724b277060a extends Twig_Template
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
        $__internal_67d03ee872a13b0edb9f1f701a63f8d225824093ca809ebf7fe42fa423fb4564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d03ee872a13b0edb9f1f701a63f8d225824093ca809ebf7fe42fa423fb4564->enter($__internal_67d03ee872a13b0edb9f1f701a63f8d225824093ca809ebf7fe42fa423fb4564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_617cfb830b381c2f84aca08c830a1c357ef13d3d284fc87628e765e79c51af1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617cfb830b381c2f84aca08c830a1c357ef13d3d284fc87628e765e79c51af1e->enter($__internal_617cfb830b381c2f84aca08c830a1c357ef13d3d284fc87628e765e79c51af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_67d03ee872a13b0edb9f1f701a63f8d225824093ca809ebf7fe42fa423fb4564->leave($__internal_67d03ee872a13b0edb9f1f701a63f8d225824093ca809ebf7fe42fa423fb4564_prof);

        
        $__internal_617cfb830b381c2f84aca08c830a1c357ef13d3d284fc87628e765e79c51af1e->leave($__internal_617cfb830b381c2f84aca08c830a1c357ef13d3d284fc87628e765e79c51af1e_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
