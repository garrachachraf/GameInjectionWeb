<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5054275b1f120abbcf7bc6a783e3cda7ad261cb1185c8977af769c8b55dd587e extends Twig_Template
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
        $__internal_138167ea1d4324e1cf0a973fb1e1dfcbf2fe14495a18ba122838610d0ce13830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138167ea1d4324e1cf0a973fb1e1dfcbf2fe14495a18ba122838610d0ce13830->enter($__internal_138167ea1d4324e1cf0a973fb1e1dfcbf2fe14495a18ba122838610d0ce13830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2a24b2987d327f5fe1a50955fa7dc26d7fedd1dd19bf5287cd60ee14fd0ac8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a24b2987d327f5fe1a50955fa7dc26d7fedd1dd19bf5287cd60ee14fd0ac8a3->enter($__internal_2a24b2987d327f5fe1a50955fa7dc26d7fedd1dd19bf5287cd60ee14fd0ac8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_138167ea1d4324e1cf0a973fb1e1dfcbf2fe14495a18ba122838610d0ce13830->leave($__internal_138167ea1d4324e1cf0a973fb1e1dfcbf2fe14495a18ba122838610d0ce13830_prof);

        
        $__internal_2a24b2987d327f5fe1a50955fa7dc26d7fedd1dd19bf5287cd60ee14fd0ac8a3->leave($__internal_2a24b2987d327f5fe1a50955fa7dc26d7fedd1dd19bf5287cd60ee14fd0ac8a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
