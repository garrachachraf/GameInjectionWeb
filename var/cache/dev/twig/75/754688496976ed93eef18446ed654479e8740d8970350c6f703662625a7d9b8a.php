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
        $__internal_7166af0ae1fda4c4c58ae838256c2bc193cce3acd95bfe24430c0f793b07b37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7166af0ae1fda4c4c58ae838256c2bc193cce3acd95bfe24430c0f793b07b37a->enter($__internal_7166af0ae1fda4c4c58ae838256c2bc193cce3acd95bfe24430c0f793b07b37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2335f08e0ee983cbe8e9ffa121b05016bf1f556c108f3c53e4351ba74eda7d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2335f08e0ee983cbe8e9ffa121b05016bf1f556c108f3c53e4351ba74eda7d7f->enter($__internal_2335f08e0ee983cbe8e9ffa121b05016bf1f556c108f3c53e4351ba74eda7d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7166af0ae1fda4c4c58ae838256c2bc193cce3acd95bfe24430c0f793b07b37a->leave($__internal_7166af0ae1fda4c4c58ae838256c2bc193cce3acd95bfe24430c0f793b07b37a_prof);

        
        $__internal_2335f08e0ee983cbe8e9ffa121b05016bf1f556c108f3c53e4351ba74eda7d7f->leave($__internal_2335f08e0ee983cbe8e9ffa121b05016bf1f556c108f3c53e4351ba74eda7d7f_prof);

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
