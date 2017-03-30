<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3b0990e9435be31be29b9dd137018c94295428730bee1b10ca58dc3f75240a9d extends Twig_Template
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
        $__internal_41a865cc1286be281f31d6c0cb20efef361fce86d0b1fb53e1e9e929b652bf97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a865cc1286be281f31d6c0cb20efef361fce86d0b1fb53e1e9e929b652bf97->enter($__internal_41a865cc1286be281f31d6c0cb20efef361fce86d0b1fb53e1e9e929b652bf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb85e7d9a3e4e939c67b696135658f635af80c1e96e89b9580ec84af076f798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb85e7d9a3e4e939c67b696135658f635af80c1e96e89b9580ec84af076f798a->enter($__internal_fb85e7d9a3e4e939c67b696135658f635af80c1e96e89b9580ec84af076f798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_41a865cc1286be281f31d6c0cb20efef361fce86d0b1fb53e1e9e929b652bf97->leave($__internal_41a865cc1286be281f31d6c0cb20efef361fce86d0b1fb53e1e9e929b652bf97_prof);

        
        $__internal_fb85e7d9a3e4e939c67b696135658f635af80c1e96e89b9580ec84af076f798a->leave($__internal_fb85e7d9a3e4e939c67b696135658f635af80c1e96e89b9580ec84af076f798a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
