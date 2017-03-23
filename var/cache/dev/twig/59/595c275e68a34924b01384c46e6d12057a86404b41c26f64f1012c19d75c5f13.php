<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_289e652d105f57b73c2ac6d8136c2a04b87f2f93f7925a3ae59625af1671b479 extends Twig_Template
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
        $__internal_b30535ac12d1533b5d9386a94b445bc34819b3491706d8d387530b4167733c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30535ac12d1533b5d9386a94b445bc34819b3491706d8d387530b4167733c1e->enter($__internal_b30535ac12d1533b5d9386a94b445bc34819b3491706d8d387530b4167733c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c040b554c63504d25d8b5f9c7195d76fded1acfdb5f6c419fa6698a285414b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c040b554c63504d25d8b5f9c7195d76fded1acfdb5f6c419fa6698a285414b4b->enter($__internal_c040b554c63504d25d8b5f9c7195d76fded1acfdb5f6c419fa6698a285414b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b30535ac12d1533b5d9386a94b445bc34819b3491706d8d387530b4167733c1e->leave($__internal_b30535ac12d1533b5d9386a94b445bc34819b3491706d8d387530b4167733c1e_prof);

        
        $__internal_c040b554c63504d25d8b5f9c7195d76fded1acfdb5f6c419fa6698a285414b4b->leave($__internal_c040b554c63504d25d8b5f9c7195d76fded1acfdb5f6c419fa6698a285414b4b_prof);

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
