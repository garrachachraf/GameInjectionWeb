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
        $__internal_d5046977637089c7e0b55e78144b086da9970af1e3b4c805eb2f97d25a938e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5046977637089c7e0b55e78144b086da9970af1e3b4c805eb2f97d25a938e3f->enter($__internal_d5046977637089c7e0b55e78144b086da9970af1e3b4c805eb2f97d25a938e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $__internal_a78448aaa37b3a025daf718dd285157be5134cc1553b3b2883e694ee7e15a7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78448aaa37b3a025daf718dd285157be5134cc1553b3b2883e694ee7e15a7e7->enter($__internal_a78448aaa37b3a025daf718dd285157be5134cc1553b3b2883e694ee7e15a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5046977637089c7e0b55e78144b086da9970af1e3b4c805eb2f97d25a938e3f->leave($__internal_d5046977637089c7e0b55e78144b086da9970af1e3b4c805eb2f97d25a938e3f_prof);

        
        $__internal_a78448aaa37b3a025daf718dd285157be5134cc1553b3b2883e694ee7e15a7e7->leave($__internal_a78448aaa37b3a025daf718dd285157be5134cc1553b3b2883e694ee7e15a7e7_prof);

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
