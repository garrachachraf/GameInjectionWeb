<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_195c2c5866acb6e93c34d912909f31f02075a12afc893b873f44b5143db35ab2 extends Twig_Template
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
        $__internal_565dc3881d17f0f7567218ad55334aefe6fd1e78bcb84f75a902dd855c7c6070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565dc3881d17f0f7567218ad55334aefe6fd1e78bcb84f75a902dd855c7c6070->enter($__internal_565dc3881d17f0f7567218ad55334aefe6fd1e78bcb84f75a902dd855c7c6070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c69d1b3f73052753b87a2bcd73b7bebb996ceda8a47b656de075962f19a99032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69d1b3f73052753b87a2bcd73b7bebb996ceda8a47b656de075962f19a99032->enter($__internal_c69d1b3f73052753b87a2bcd73b7bebb996ceda8a47b656de075962f19a99032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_565dc3881d17f0f7567218ad55334aefe6fd1e78bcb84f75a902dd855c7c6070->leave($__internal_565dc3881d17f0f7567218ad55334aefe6fd1e78bcb84f75a902dd855c7c6070_prof);

        
        $__internal_c69d1b3f73052753b87a2bcd73b7bebb996ceda8a47b656de075962f19a99032->leave($__internal_c69d1b3f73052753b87a2bcd73b7bebb996ceda8a47b656de075962f19a99032_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
