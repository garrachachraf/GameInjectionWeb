<?php

/* @EloboostedBackoffice/Default/index.html.twig */
class __TwigTemplate_1d9901b5f41c297c6f628596ba8c531ec5212230c7796261f393009a9a1d676d extends Twig_Template
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
        $__internal_8da898996eb1d06564a5b00c6c38894bfe5bfaed5b2e39e4a2bc005b6d351140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da898996eb1d06564a5b00c6c38894bfe5bfaed5b2e39e4a2bc005b6d351140->enter($__internal_8da898996eb1d06564a5b00c6c38894bfe5bfaed5b2e39e4a2bc005b6d351140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $__internal_e2c661c12f3d513efca0af9b3750f8256a5ce0aa0c10ffb2f25af3fdce2eb876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c661c12f3d513efca0af9b3750f8256a5ce0aa0c10ffb2f25af3fdce2eb876->enter($__internal_e2c661c12f3d513efca0af9b3750f8256a5ce0aa0c10ffb2f25af3fdce2eb876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da898996eb1d06564a5b00c6c38894bfe5bfaed5b2e39e4a2bc005b6d351140->leave($__internal_8da898996eb1d06564a5b00c6c38894bfe5bfaed5b2e39e4a2bc005b6d351140_prof);

        
        $__internal_e2c661c12f3d513efca0af9b3750f8256a5ce0aa0c10ffb2f25af3fdce2eb876->leave($__internal_e2c661c12f3d513efca0af9b3750f8256a5ce0aa0c10ffb2f25af3fdce2eb876_prof);

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
