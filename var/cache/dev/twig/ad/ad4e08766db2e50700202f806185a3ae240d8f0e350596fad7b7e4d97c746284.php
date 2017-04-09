<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0f062a5ead150828b10f8e636f96298d1d7f46731e875503a86a5f78432ce613 extends Twig_Template
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
        $__internal_e31d8c08ca03d68dacbeb48f8e845df9160cd340726f7a9b2f3742731bfe6308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31d8c08ca03d68dacbeb48f8e845df9160cd340726f7a9b2f3742731bfe6308->enter($__internal_e31d8c08ca03d68dacbeb48f8e845df9160cd340726f7a9b2f3742731bfe6308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c05f4568bbf9cc58cc07fb4ab781818c6fa0fd266f626143cb7eceafe8a7b946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05f4568bbf9cc58cc07fb4ab781818c6fa0fd266f626143cb7eceafe8a7b946->enter($__internal_c05f4568bbf9cc58cc07fb4ab781818c6fa0fd266f626143cb7eceafe8a7b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e31d8c08ca03d68dacbeb48f8e845df9160cd340726f7a9b2f3742731bfe6308->leave($__internal_e31d8c08ca03d68dacbeb48f8e845df9160cd340726f7a9b2f3742731bfe6308_prof);

        
        $__internal_c05f4568bbf9cc58cc07fb4ab781818c6fa0fd266f626143cb7eceafe8a7b946->leave($__internal_c05f4568bbf9cc58cc07fb4ab781818c6fa0fd266f626143cb7eceafe8a7b946_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
