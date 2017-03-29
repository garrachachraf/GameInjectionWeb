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
        $__internal_71eaf1f4e758cdcaeef7c46d9aa4f83c87111592de315de9c0fbd4ff1ad2f483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eaf1f4e758cdcaeef7c46d9aa4f83c87111592de315de9c0fbd4ff1ad2f483->enter($__internal_71eaf1f4e758cdcaeef7c46d9aa4f83c87111592de315de9c0fbd4ff1ad2f483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9fec5a4be950ba8b44390a3cf96389d72dcd5e52c08bd33b5f585b9704cc98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fec5a4be950ba8b44390a3cf96389d72dcd5e52c08bd33b5f585b9704cc98c5->enter($__internal_9fec5a4be950ba8b44390a3cf96389d72dcd5e52c08bd33b5f585b9704cc98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_71eaf1f4e758cdcaeef7c46d9aa4f83c87111592de315de9c0fbd4ff1ad2f483->leave($__internal_71eaf1f4e758cdcaeef7c46d9aa4f83c87111592de315de9c0fbd4ff1ad2f483_prof);

        
        $__internal_9fec5a4be950ba8b44390a3cf96389d72dcd5e52c08bd33b5f585b9704cc98c5->leave($__internal_9fec5a4be950ba8b44390a3cf96389d72dcd5e52c08bd33b5f585b9704cc98c5_prof);

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
