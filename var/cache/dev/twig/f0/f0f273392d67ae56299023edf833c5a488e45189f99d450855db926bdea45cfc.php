<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_a6b3fa41df37741282e17077786bead46a321aa92e7fa8c12c199f7632ea38df extends Twig_Template
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
        $__internal_80ff131b84379d0ef75163a8d3f592dca0623ac606f8771329d611140ef05dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ff131b84379d0ef75163a8d3f592dca0623ac606f8771329d611140ef05dd9->enter($__internal_80ff131b84379d0ef75163a8d3f592dca0623ac606f8771329d611140ef05dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_fe4b22dba51c9028b24754fe997b0767dc88bc004c9f9723b260e5adbff0fa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4b22dba51c9028b24754fe997b0767dc88bc004c9f9723b260e5adbff0fa44->enter($__internal_fe4b22dba51c9028b24754fe997b0767dc88bc004c9f9723b260e5adbff0fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ff131b84379d0ef75163a8d3f592dca0623ac606f8771329d611140ef05dd9->leave($__internal_80ff131b84379d0ef75163a8d3f592dca0623ac606f8771329d611140ef05dd9_prof);

        
        $__internal_fe4b22dba51c9028b24754fe997b0767dc88bc004c9f9723b260e5adbff0fa44->leave($__internal_fe4b22dba51c9028b24754fe997b0767dc88bc004c9f9723b260e5adbff0fa44_prof);

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
