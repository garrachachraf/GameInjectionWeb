<?php

/* @EloboostedBackoffice/Default/index.html.twig */
class __TwigTemplate_8986de6f8ba5c9579bd08f7ff8a0b1f34bd9d35e11b2bc82f12b65ae74dd4b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3a8f0036df7fda12f1b1d873e46b5bc768b14d956510d842494035108386091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a8f0036df7fda12f1b1d873e46b5bc768b14d956510d842494035108386091->enter($__internal_e3a8f0036df7fda12f1b1d873e46b5bc768b14d956510d842494035108386091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $__internal_72aa64c82b2a5857c3f249cd6f33970695dc80dcdb8a6f62fe31a77b5603b52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aa64c82b2a5857c3f249cd6f33970695dc80dcdb8a6f62fe31a77b5603b52a->enter($__internal_72aa64c82b2a5857c3f249cd6f33970695dc80dcdb8a6f62fe31a77b5603b52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3a8f0036df7fda12f1b1d873e46b5bc768b14d956510d842494035108386091->leave($__internal_e3a8f0036df7fda12f1b1d873e46b5bc768b14d956510d842494035108386091_prof);

        
        $__internal_72aa64c82b2a5857c3f249cd6f33970695dc80dcdb8a6f62fe31a77b5603b52a->leave($__internal_72aa64c82b2a5857c3f249cd6f33970695dc80dcdb8a6f62fe31a77b5603b52a_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "@EloboostedBackoffice/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
