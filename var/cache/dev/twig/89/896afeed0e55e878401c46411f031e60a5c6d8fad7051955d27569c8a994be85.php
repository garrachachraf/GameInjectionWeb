<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_50a017e76ba053d987d613d254497e445977bb1399e354f7c439f28fd86b9e7d extends Twig_Template
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
        $__internal_b4d44fa0f2d12722e3a5c75f46958430fba3c837159a1540ef5304aaa9647c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d44fa0f2d12722e3a5c75f46958430fba3c837159a1540ef5304aaa9647c16->enter($__internal_b4d44fa0f2d12722e3a5c75f46958430fba3c837159a1540ef5304aaa9647c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_f718fb43d25ce5fed2e7c32aac4861d671b0c836704446e6ed36ee1907d06820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f718fb43d25ce5fed2e7c32aac4861d671b0c836704446e6ed36ee1907d06820->enter($__internal_f718fb43d25ce5fed2e7c32aac4861d671b0c836704446e6ed36ee1907d06820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d44fa0f2d12722e3a5c75f46958430fba3c837159a1540ef5304aaa9647c16->leave($__internal_b4d44fa0f2d12722e3a5c75f46958430fba3c837159a1540ef5304aaa9647c16_prof);

        
        $__internal_f718fb43d25ce5fed2e7c32aac4861d671b0c836704446e6ed36ee1907d06820->leave($__internal_f718fb43d25ce5fed2e7c32aac4861d671b0c836704446e6ed36ee1907d06820_prof);

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
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "EloboostedBackofficeBundle:Default:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/Default/index.html.twig");
    }
}
