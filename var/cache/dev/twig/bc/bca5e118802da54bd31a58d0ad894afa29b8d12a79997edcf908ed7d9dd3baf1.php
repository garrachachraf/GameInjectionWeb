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
        $__internal_8ba4aec6e3f50092b177e34864212a30dff91395fcc49be6e1df287678c6fdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba4aec6e3f50092b177e34864212a30dff91395fcc49be6e1df287678c6fdfb->enter($__internal_8ba4aec6e3f50092b177e34864212a30dff91395fcc49be6e1df287678c6fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_1490b6701111e6b71135409609747adcc32fac06c7688a720790c747b22ed49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1490b6701111e6b71135409609747adcc32fac06c7688a720790c747b22ed49a->enter($__internal_1490b6701111e6b71135409609747adcc32fac06c7688a720790c747b22ed49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba4aec6e3f50092b177e34864212a30dff91395fcc49be6e1df287678c6fdfb->leave($__internal_8ba4aec6e3f50092b177e34864212a30dff91395fcc49be6e1df287678c6fdfb_prof);

        
        $__internal_1490b6701111e6b71135409609747adcc32fac06c7688a720790c747b22ed49a->leave($__internal_1490b6701111e6b71135409609747adcc32fac06c7688a720790c747b22ed49a_prof);

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
