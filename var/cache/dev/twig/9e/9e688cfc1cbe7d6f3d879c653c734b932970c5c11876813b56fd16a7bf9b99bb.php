<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0a6e7e4ad33446361ac07ef634bd52ff180dabfb2828ea91b270fff998fc25cd extends Twig_Template
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
        $__internal_f57e37b7a83c2e22de5de2ac79e689cf922b27576f867aa92b04bae842fc7f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57e37b7a83c2e22de5de2ac79e689cf922b27576f867aa92b04bae842fc7f6e->enter($__internal_f57e37b7a83c2e22de5de2ac79e689cf922b27576f867aa92b04bae842fc7f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_214e532074867f5c5cee2f545ad42a7df0107375bb5039661508550b0d0ddb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214e532074867f5c5cee2f545ad42a7df0107375bb5039661508550b0d0ddb20->enter($__internal_214e532074867f5c5cee2f545ad42a7df0107375bb5039661508550b0d0ddb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f57e37b7a83c2e22de5de2ac79e689cf922b27576f867aa92b04bae842fc7f6e->leave($__internal_f57e37b7a83c2e22de5de2ac79e689cf922b27576f867aa92b04bae842fc7f6e_prof);

        
        $__internal_214e532074867f5c5cee2f545ad42a7df0107375bb5039661508550b0d0ddb20->leave($__internal_214e532074867f5c5cee2f545ad42a7df0107375bb5039661508550b0d0ddb20_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
