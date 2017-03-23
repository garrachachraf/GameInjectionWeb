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
        $__internal_fb25dec24a48a25fcce1cf0639e4a86887ac89441de4c873faec1e44b6e4932b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb25dec24a48a25fcce1cf0639e4a86887ac89441de4c873faec1e44b6e4932b->enter($__internal_fb25dec24a48a25fcce1cf0639e4a86887ac89441de4c873faec1e44b6e4932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_84679cb1fb9e2ad4bd77d36b4c265476a8c58963437c63d0368b6d13f875087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84679cb1fb9e2ad4bd77d36b4c265476a8c58963437c63d0368b6d13f875087f->enter($__internal_84679cb1fb9e2ad4bd77d36b4c265476a8c58963437c63d0368b6d13f875087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_fb25dec24a48a25fcce1cf0639e4a86887ac89441de4c873faec1e44b6e4932b->leave($__internal_fb25dec24a48a25fcce1cf0639e4a86887ac89441de4c873faec1e44b6e4932b_prof);

        
        $__internal_84679cb1fb9e2ad4bd77d36b4c265476a8c58963437c63d0368b6d13f875087f->leave($__internal_84679cb1fb9e2ad4bd77d36b4c265476a8c58963437c63d0368b6d13f875087f_prof);

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
