<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_3e405ae64f98d52477d12ec0218bdfc5905fb4cea61466f7fa8e056c239f1f8c extends Twig_Template
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
        $__internal_61eb4b794f90604057171d9f104c925d162223dfd7dd8a3d3aaee7ddaec7dd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61eb4b794f90604057171d9f104c925d162223dfd7dd8a3d3aaee7ddaec7dd6d->enter($__internal_61eb4b794f90604057171d9f104c925d162223dfd7dd8a3d3aaee7ddaec7dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_aefc6ace0508c0f92a62b5f2364c25e9e197f36c670657d8ade711ae477e6bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefc6ace0508c0f92a62b5f2364c25e9e197f36c670657d8ade711ae477e6bfb->enter($__internal_aefc6ace0508c0f92a62b5f2364c25e9e197f36c670657d8ade711ae477e6bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61eb4b794f90604057171d9f104c925d162223dfd7dd8a3d3aaee7ddaec7dd6d->leave($__internal_61eb4b794f90604057171d9f104c925d162223dfd7dd8a3d3aaee7ddaec7dd6d_prof);

        
        $__internal_aefc6ace0508c0f92a62b5f2364c25e9e197f36c670657d8ade711ae477e6bfb->leave($__internal_aefc6ace0508c0f92a62b5f2364c25e9e197f36c670657d8ade711ae477e6bfb_prof);

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
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "EloboostedBackofficeBundle:Default:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Default/index.html.twig");
    }
}
