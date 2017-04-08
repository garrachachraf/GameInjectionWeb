<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_35c0882ec27d910b5023973f4dafdc1c9de6bd07d93763ccdd37b724b277060a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_948e40b344c5ed1b49af92cb0a6ca707023c1df71fc5675486e725e11c581643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948e40b344c5ed1b49af92cb0a6ca707023c1df71fc5675486e725e11c581643->enter($__internal_948e40b344c5ed1b49af92cb0a6ca707023c1df71fc5675486e725e11c581643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_68f9a34d14dff92bffcaab7e6990953813767bf9d5f0f5805a458b5f6e94b875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f9a34d14dff92bffcaab7e6990953813767bf9d5f0f5805a458b5f6e94b875->enter($__internal_68f9a34d14dff92bffcaab7e6990953813767bf9d5f0f5805a458b5f6e94b875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_948e40b344c5ed1b49af92cb0a6ca707023c1df71fc5675486e725e11c581643->leave($__internal_948e40b344c5ed1b49af92cb0a6ca707023c1df71fc5675486e725e11c581643_prof);

        
        $__internal_68f9a34d14dff92bffcaab7e6990953813767bf9d5f0f5805a458b5f6e94b875->leave($__internal_68f9a34d14dff92bffcaab7e6990953813767bf9d5f0f5805a458b5f6e94b875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
