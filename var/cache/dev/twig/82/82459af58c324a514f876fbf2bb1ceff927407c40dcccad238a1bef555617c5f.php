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
        $__internal_06e9920c3c50aaeee95845585b912606fb40990ffc826a68a8dd4a65301e3308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e9920c3c50aaeee95845585b912606fb40990ffc826a68a8dd4a65301e3308->enter($__internal_06e9920c3c50aaeee95845585b912606fb40990ffc826a68a8dd4a65301e3308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $__internal_4993d6f497e433fed0d600ebbb99522db79246e5702d8d5e848bdd3dbc21b251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4993d6f497e433fed0d600ebbb99522db79246e5702d8d5e848bdd3dbc21b251->enter($__internal_4993d6f497e433fed0d600ebbb99522db79246e5702d8d5e848bdd3dbc21b251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e9920c3c50aaeee95845585b912606fb40990ffc826a68a8dd4a65301e3308->leave($__internal_06e9920c3c50aaeee95845585b912606fb40990ffc826a68a8dd4a65301e3308_prof);

        
        $__internal_4993d6f497e433fed0d600ebbb99522db79246e5702d8d5e848bdd3dbc21b251->leave($__internal_4993d6f497e433fed0d600ebbb99522db79246e5702d8d5e848bdd3dbc21b251_prof);

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
