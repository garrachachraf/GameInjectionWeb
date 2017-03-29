<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ea47bc21fc8785c3a8bc8b56b98d3f061877817a040730b47acb48bac18c598 extends Twig_Template
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
        $__internal_0b7e9f82aa41b327067aa46e459735ae5cc91f44c76473fe9dbc0f23fffd382d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7e9f82aa41b327067aa46e459735ae5cc91f44c76473fe9dbc0f23fffd382d->enter($__internal_0b7e9f82aa41b327067aa46e459735ae5cc91f44c76473fe9dbc0f23fffd382d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dc0adb39e178fb6e10a36cda5e0d7d2d502bf66a2f7b6c5ecaa4c3f5865880d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0adb39e178fb6e10a36cda5e0d7d2d502bf66a2f7b6c5ecaa4c3f5865880d0->enter($__internal_dc0adb39e178fb6e10a36cda5e0d7d2d502bf66a2f7b6c5ecaa4c3f5865880d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0b7e9f82aa41b327067aa46e459735ae5cc91f44c76473fe9dbc0f23fffd382d->leave($__internal_0b7e9f82aa41b327067aa46e459735ae5cc91f44c76473fe9dbc0f23fffd382d_prof);

        
        $__internal_dc0adb39e178fb6e10a36cda5e0d7d2d502bf66a2f7b6c5ecaa4c3f5865880d0->leave($__internal_dc0adb39e178fb6e10a36cda5e0d7d2d502bf66a2f7b6c5ecaa4c3f5865880d0_prof);

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
