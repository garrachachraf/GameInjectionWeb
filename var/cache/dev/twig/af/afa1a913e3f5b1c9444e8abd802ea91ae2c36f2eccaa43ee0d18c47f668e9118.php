<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc2460ffe8e46e56f5d04061c16b61d020f5c0aa2d8e5c59aa5d0dbfe6e6775e extends Twig_Template
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
        $__internal_a15f5ed10fa35c4282979c1f821e1fb293c153a4dceadf50de0624213e0b594e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15f5ed10fa35c4282979c1f821e1fb293c153a4dceadf50de0624213e0b594e->enter($__internal_a15f5ed10fa35c4282979c1f821e1fb293c153a4dceadf50de0624213e0b594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_24269b605b82ab2d42f7ac86019792dbf4f9f72046efe6e4b7e0e495361ca117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24269b605b82ab2d42f7ac86019792dbf4f9f72046efe6e4b7e0e495361ca117->enter($__internal_24269b605b82ab2d42f7ac86019792dbf4f9f72046efe6e4b7e0e495361ca117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a15f5ed10fa35c4282979c1f821e1fb293c153a4dceadf50de0624213e0b594e->leave($__internal_a15f5ed10fa35c4282979c1f821e1fb293c153a4dceadf50de0624213e0b594e_prof);

        
        $__internal_24269b605b82ab2d42f7ac86019792dbf4f9f72046efe6e4b7e0e495361ca117->leave($__internal_24269b605b82ab2d42f7ac86019792dbf4f9f72046efe6e4b7e0e495361ca117_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
