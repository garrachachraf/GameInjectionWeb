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
        $__internal_1302ac9bc65ec28ded88e80e678b04fd567a0c3d872d33178bbdc0c1a795ee7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1302ac9bc65ec28ded88e80e678b04fd567a0c3d872d33178bbdc0c1a795ee7a->enter($__internal_1302ac9bc65ec28ded88e80e678b04fd567a0c3d872d33178bbdc0c1a795ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2f459d3927bc4c12ba2b35a0e69b8560fbcc64ab10c198de0f2d4ab72ed4f46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f459d3927bc4c12ba2b35a0e69b8560fbcc64ab10c198de0f2d4ab72ed4f46e->enter($__internal_2f459d3927bc4c12ba2b35a0e69b8560fbcc64ab10c198de0f2d4ab72ed4f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1302ac9bc65ec28ded88e80e678b04fd567a0c3d872d33178bbdc0c1a795ee7a->leave($__internal_1302ac9bc65ec28ded88e80e678b04fd567a0c3d872d33178bbdc0c1a795ee7a_prof);

        
        $__internal_2f459d3927bc4c12ba2b35a0e69b8560fbcc64ab10c198de0f2d4ab72ed4f46e->leave($__internal_2f459d3927bc4c12ba2b35a0e69b8560fbcc64ab10c198de0f2d4ab72ed4f46e_prof);

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
