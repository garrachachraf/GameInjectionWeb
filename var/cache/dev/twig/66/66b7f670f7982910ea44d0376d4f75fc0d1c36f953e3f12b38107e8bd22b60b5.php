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
        $__internal_30bf486811f1a3dba3ed00b285f3f4f18c213a10ed0248e6508426e5a9df8c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bf486811f1a3dba3ed00b285f3f4f18c213a10ed0248e6508426e5a9df8c94->enter($__internal_30bf486811f1a3dba3ed00b285f3f4f18c213a10ed0248e6508426e5a9df8c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_034ecad2a86c2240211dea0f8f809cc1b0af8c047edf1bb39b2618aa54f86e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034ecad2a86c2240211dea0f8f809cc1b0af8c047edf1bb39b2618aa54f86e1b->enter($__internal_034ecad2a86c2240211dea0f8f809cc1b0af8c047edf1bb39b2618aa54f86e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_30bf486811f1a3dba3ed00b285f3f4f18c213a10ed0248e6508426e5a9df8c94->leave($__internal_30bf486811f1a3dba3ed00b285f3f4f18c213a10ed0248e6508426e5a9df8c94_prof);

        
        $__internal_034ecad2a86c2240211dea0f8f809cc1b0af8c047edf1bb39b2618aa54f86e1b->leave($__internal_034ecad2a86c2240211dea0f8f809cc1b0af8c047edf1bb39b2618aa54f86e1b_prof);

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
