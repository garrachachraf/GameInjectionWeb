<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e17c64c0bddee7a5e6c9276ea01f95ec3c52df980afa64b31951c5b6f001828c extends Twig_Template
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
        $__internal_d05c6721d161bb46c2e2a27f0134106608306c68f739552a2eb3e37b2955a37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05c6721d161bb46c2e2a27f0134106608306c68f739552a2eb3e37b2955a37e->enter($__internal_d05c6721d161bb46c2e2a27f0134106608306c68f739552a2eb3e37b2955a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3337e00182886b5340a0f52c23439d7941f276d9c9978fd0d3122dac5c6e01f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3337e00182886b5340a0f52c23439d7941f276d9c9978fd0d3122dac5c6e01f6->enter($__internal_3337e00182886b5340a0f52c23439d7941f276d9c9978fd0d3122dac5c6e01f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d05c6721d161bb46c2e2a27f0134106608306c68f739552a2eb3e37b2955a37e->leave($__internal_d05c6721d161bb46c2e2a27f0134106608306c68f739552a2eb3e37b2955a37e_prof);

        
        $__internal_3337e00182886b5340a0f52c23439d7941f276d9c9978fd0d3122dac5c6e01f6->leave($__internal_3337e00182886b5340a0f52c23439d7941f276d9c9978fd0d3122dac5c6e01f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
