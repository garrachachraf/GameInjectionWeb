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
        $__internal_1b230e5dc0b5f06951ca7377d8481c72958b9541c4176e3e6ef12f4d2bc3f9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b230e5dc0b5f06951ca7377d8481c72958b9541c4176e3e6ef12f4d2bc3f9d1->enter($__internal_1b230e5dc0b5f06951ca7377d8481c72958b9541c4176e3e6ef12f4d2bc3f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4f5e779f975a435a79a7ddfc24ced3c5b2a66f93cd00c72fd39efeeb843ce14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5e779f975a435a79a7ddfc24ced3c5b2a66f93cd00c72fd39efeeb843ce14d->enter($__internal_4f5e779f975a435a79a7ddfc24ced3c5b2a66f93cd00c72fd39efeeb843ce14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b230e5dc0b5f06951ca7377d8481c72958b9541c4176e3e6ef12f4d2bc3f9d1->leave($__internal_1b230e5dc0b5f06951ca7377d8481c72958b9541c4176e3e6ef12f4d2bc3f9d1_prof);

        
        $__internal_4f5e779f975a435a79a7ddfc24ced3c5b2a66f93cd00c72fd39efeeb843ce14d->leave($__internal_4f5e779f975a435a79a7ddfc24ced3c5b2a66f93cd00c72fd39efeeb843ce14d_prof);

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
