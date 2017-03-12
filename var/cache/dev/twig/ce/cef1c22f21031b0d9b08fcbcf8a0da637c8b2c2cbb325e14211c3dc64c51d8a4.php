<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_85b4296031d2cd7815dcae86a8761cebc169211d7a2e04bc4b6a7be3ff6933e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50ddd3b59d4038b0e0a46e615d222e2e73eba58bc5d607d340a80e17b39b97b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ddd3b59d4038b0e0a46e615d222e2e73eba58bc5d607d340a80e17b39b97b6->enter($__internal_50ddd3b59d4038b0e0a46e615d222e2e73eba58bc5d607d340a80e17b39b97b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_150ec8e5b3d57db568fa12ab7d2c55722dec085eac7a7ff468c645a9ce747e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150ec8e5b3d57db568fa12ab7d2c55722dec085eac7a7ff468c645a9ce747e7a->enter($__internal_150ec8e5b3d57db568fa12ab7d2c55722dec085eac7a7ff468c645a9ce747e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ddd3b59d4038b0e0a46e615d222e2e73eba58bc5d607d340a80e17b39b97b6->leave($__internal_50ddd3b59d4038b0e0a46e615d222e2e73eba58bc5d607d340a80e17b39b97b6_prof);

        
        $__internal_150ec8e5b3d57db568fa12ab7d2c55722dec085eac7a7ff468c645a9ce747e7a->leave($__internal_150ec8e5b3d57db568fa12ab7d2c55722dec085eac7a7ff468c645a9ce747e7a_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "EloboostedBackofficeBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/BackofficeBundle/Resources/views/Default/index.html.twig");
    }
}
