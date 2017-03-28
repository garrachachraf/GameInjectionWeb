<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8fc6d0f1b3c0beebfd765eb5cdb94c8fa00feb31aafd8bf8f30daae3ab609a20 extends Twig_Template
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
        $__internal_eafb80818e384fafc9345cfc03b3c6a7519093a4690d88c7b23c6b0f6a20cfcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafb80818e384fafc9345cfc03b3c6a7519093a4690d88c7b23c6b0f6a20cfcf->enter($__internal_eafb80818e384fafc9345cfc03b3c6a7519093a4690d88c7b23c6b0f6a20cfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_de22bde36d30d557e9b8ae87e6a856982452ad99afec6fcaf12c92040156a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de22bde36d30d557e9b8ae87e6a856982452ad99afec6fcaf12c92040156a641->enter($__internal_de22bde36d30d557e9b8ae87e6a856982452ad99afec6fcaf12c92040156a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eafb80818e384fafc9345cfc03b3c6a7519093a4690d88c7b23c6b0f6a20cfcf->leave($__internal_eafb80818e384fafc9345cfc03b3c6a7519093a4690d88c7b23c6b0f6a20cfcf_prof);

        
        $__internal_de22bde36d30d557e9b8ae87e6a856982452ad99afec6fcaf12c92040156a641->leave($__internal_de22bde36d30d557e9b8ae87e6a856982452ad99afec6fcaf12c92040156a641_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
