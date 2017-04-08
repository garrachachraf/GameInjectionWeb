<?php

/* @EloboostedBackoffice/Default/index.html.twig */
class __TwigTemplate_39c83a835de35c437bf18bbb948439ef3c1940b22304f48b89329ee0fc0d2724 extends Twig_Template
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
        $__internal_c4a99af615b8240d71b8619e5aee26d96291507b2a12ea0f4df51f0a7f2b18db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a99af615b8240d71b8619e5aee26d96291507b2a12ea0f4df51f0a7f2b18db->enter($__internal_c4a99af615b8240d71b8619e5aee26d96291507b2a12ea0f4df51f0a7f2b18db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $__internal_6f30e3a9bfc7f647fc2c16b7eb35754b390f5e7c6de8ad1602148fb53ba99644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f30e3a9bfc7f647fc2c16b7eb35754b390f5e7c6de8ad1602148fb53ba99644->enter($__internal_6f30e3a9bfc7f647fc2c16b7eb35754b390f5e7c6de8ad1602148fb53ba99644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a99af615b8240d71b8619e5aee26d96291507b2a12ea0f4df51f0a7f2b18db->leave($__internal_c4a99af615b8240d71b8619e5aee26d96291507b2a12ea0f4df51f0a7f2b18db_prof);

        
        $__internal_6f30e3a9bfc7f647fc2c16b7eb35754b390f5e7c6de8ad1602148fb53ba99644->leave($__internal_6f30e3a9bfc7f647fc2c16b7eb35754b390f5e7c6de8ad1602148fb53ba99644_prof);

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
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "@EloboostedBackoffice/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
