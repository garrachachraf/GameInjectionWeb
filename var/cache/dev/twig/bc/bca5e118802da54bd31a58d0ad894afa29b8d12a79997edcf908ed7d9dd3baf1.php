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
        $__internal_132902dcc54585c596563483c8d71f487ce6a64168eed6d74e046e517f948f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132902dcc54585c596563483c8d71f487ce6a64168eed6d74e046e517f948f77->enter($__internal_132902dcc54585c596563483c8d71f487ce6a64168eed6d74e046e517f948f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_4ea5d364c4d2d9a7515f4b73947b389470431c630e540df41b13ac2400abf766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea5d364c4d2d9a7515f4b73947b389470431c630e540df41b13ac2400abf766->enter($__internal_4ea5d364c4d2d9a7515f4b73947b389470431c630e540df41b13ac2400abf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132902dcc54585c596563483c8d71f487ce6a64168eed6d74e046e517f948f77->leave($__internal_132902dcc54585c596563483c8d71f487ce6a64168eed6d74e046e517f948f77_prof);

        
        $__internal_4ea5d364c4d2d9a7515f4b73947b389470431c630e540df41b13ac2400abf766->leave($__internal_4ea5d364c4d2d9a7515f4b73947b389470431c630e540df41b13ac2400abf766_prof);

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
