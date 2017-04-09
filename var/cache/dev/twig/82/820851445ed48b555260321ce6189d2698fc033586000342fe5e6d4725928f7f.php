<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a6c68f5e7d3a637178043b91ec2d596ac5a582b8d5091f0bf807c1bc1ab0164f extends Twig_Template
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
        $__internal_14b7e1a09fb575108bda3ef5ab006f8dececd66872236e0f4529bf233110715a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b7e1a09fb575108bda3ef5ab006f8dececd66872236e0f4529bf233110715a->enter($__internal_14b7e1a09fb575108bda3ef5ab006f8dececd66872236e0f4529bf233110715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a4b7efe8c7b6f83a40f86e4f90e65cdb7f87e69565131bd615157b0dbaf43442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b7efe8c7b6f83a40f86e4f90e65cdb7f87e69565131bd615157b0dbaf43442->enter($__internal_a4b7efe8c7b6f83a40f86e4f90e65cdb7f87e69565131bd615157b0dbaf43442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_14b7e1a09fb575108bda3ef5ab006f8dececd66872236e0f4529bf233110715a->leave($__internal_14b7e1a09fb575108bda3ef5ab006f8dececd66872236e0f4529bf233110715a_prof);

        
        $__internal_a4b7efe8c7b6f83a40f86e4f90e65cdb7f87e69565131bd615157b0dbaf43442->leave($__internal_a4b7efe8c7b6f83a40f86e4f90e65cdb7f87e69565131bd615157b0dbaf43442_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
