<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3e3040d12f631059a11cf0983e59f8ed65887f129ae5942691018d163d6c8d2f extends Twig_Template
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
        $__internal_4416d885bb91c74504795a2c2932d03b102b8ab85e4044c1c96d05a8fa19375e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4416d885bb91c74504795a2c2932d03b102b8ab85e4044c1c96d05a8fa19375e->enter($__internal_4416d885bb91c74504795a2c2932d03b102b8ab85e4044c1c96d05a8fa19375e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_24847a1d75bde49d9eb4b609cbef75cfd5b08857da43890327c77c7f032ffcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24847a1d75bde49d9eb4b609cbef75cfd5b08857da43890327c77c7f032ffcca->enter($__internal_24847a1d75bde49d9eb4b609cbef75cfd5b08857da43890327c77c7f032ffcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4416d885bb91c74504795a2c2932d03b102b8ab85e4044c1c96d05a8fa19375e->leave($__internal_4416d885bb91c74504795a2c2932d03b102b8ab85e4044c1c96d05a8fa19375e_prof);

        
        $__internal_24847a1d75bde49d9eb4b609cbef75cfd5b08857da43890327c77c7f032ffcca->leave($__internal_24847a1d75bde49d9eb4b609cbef75cfd5b08857da43890327c77c7f032ffcca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
