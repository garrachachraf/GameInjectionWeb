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
        $__internal_c26e95f0b3e409fce87a6fe0129071a3b85aa4c46a562beb0b154a1be48fd8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26e95f0b3e409fce87a6fe0129071a3b85aa4c46a562beb0b154a1be48fd8f6->enter($__internal_c26e95f0b3e409fce87a6fe0129071a3b85aa4c46a562beb0b154a1be48fd8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4d0c5f4c4378c5c66d8f6cb62d82ffb0813130b48805334faec49c81d617ed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0c5f4c4378c5c66d8f6cb62d82ffb0813130b48805334faec49c81d617ed7a->enter($__internal_4d0c5f4c4378c5c66d8f6cb62d82ffb0813130b48805334faec49c81d617ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c26e95f0b3e409fce87a6fe0129071a3b85aa4c46a562beb0b154a1be48fd8f6->leave($__internal_c26e95f0b3e409fce87a6fe0129071a3b85aa4c46a562beb0b154a1be48fd8f6_prof);

        
        $__internal_4d0c5f4c4378c5c66d8f6cb62d82ffb0813130b48805334faec49c81d617ed7a->leave($__internal_4d0c5f4c4378c5c66d8f6cb62d82ffb0813130b48805334faec49c81d617ed7a_prof);

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
