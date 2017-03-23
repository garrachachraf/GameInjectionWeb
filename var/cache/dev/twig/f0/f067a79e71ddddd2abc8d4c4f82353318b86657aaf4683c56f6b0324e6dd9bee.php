<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d7cab430feb2ee58cdb1da9d00d772816662ed31ef94a3f8f21f7f5e222967bf extends Twig_Template
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
        $__internal_bb97ea107bb250c5dd37cd9f63e85c8c841c995992207ea79a26e056b6846189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb97ea107bb250c5dd37cd9f63e85c8c841c995992207ea79a26e056b6846189->enter($__internal_bb97ea107bb250c5dd37cd9f63e85c8c841c995992207ea79a26e056b6846189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_15b2a791bdf0fc7e72c0b1c9791be9f9e4f5691b6af5bd3f87ef0fdb59732c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2a791bdf0fc7e72c0b1c9791be9f9e4f5691b6af5bd3f87ef0fdb59732c15->enter($__internal_15b2a791bdf0fc7e72c0b1c9791be9f9e4f5691b6af5bd3f87ef0fdb59732c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bb97ea107bb250c5dd37cd9f63e85c8c841c995992207ea79a26e056b6846189->leave($__internal_bb97ea107bb250c5dd37cd9f63e85c8c841c995992207ea79a26e056b6846189_prof);

        
        $__internal_15b2a791bdf0fc7e72c0b1c9791be9f9e4f5691b6af5bd3f87ef0fdb59732c15->leave($__internal_15b2a791bdf0fc7e72c0b1c9791be9f9e4f5691b6af5bd3f87ef0fdb59732c15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
