<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8fc6d0f1b3c0beebfd765eb5cdb94c8fa00feb31aafd8bf8f30daae3ab609a20 extends Twig_Template
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
        $__internal_77e35d3b2310588e385604d809017db903c1f8b3fae3b7c1b17b1b64a576e34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e35d3b2310588e385604d809017db903c1f8b3fae3b7c1b17b1b64a576e34a->enter($__internal_77e35d3b2310588e385604d809017db903c1f8b3fae3b7c1b17b1b64a576e34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8c6f92be4ac026c154a81f5c63249f90adeba8f62e1150cac9e229650e2cc1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6f92be4ac026c154a81f5c63249f90adeba8f62e1150cac9e229650e2cc1d3->enter($__internal_8c6f92be4ac026c154a81f5c63249f90adeba8f62e1150cac9e229650e2cc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_77e35d3b2310588e385604d809017db903c1f8b3fae3b7c1b17b1b64a576e34a->leave($__internal_77e35d3b2310588e385604d809017db903c1f8b3fae3b7c1b17b1b64a576e34a_prof);

        
        $__internal_8c6f92be4ac026c154a81f5c63249f90adeba8f62e1150cac9e229650e2cc1d3->leave($__internal_8c6f92be4ac026c154a81f5c63249f90adeba8f62e1150cac9e229650e2cc1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
