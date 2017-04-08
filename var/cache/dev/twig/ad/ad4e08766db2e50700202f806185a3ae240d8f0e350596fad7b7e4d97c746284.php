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
        $__internal_564324f042af6fd7b99968abed7f355eff0258f9f5050fd70bde3ee8c4caac14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564324f042af6fd7b99968abed7f355eff0258f9f5050fd70bde3ee8c4caac14->enter($__internal_564324f042af6fd7b99968abed7f355eff0258f9f5050fd70bde3ee8c4caac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_24c2e95eee3cebfb669c4ebbdde76409460022d9e2de485f15d50572664b7290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c2e95eee3cebfb669c4ebbdde76409460022d9e2de485f15d50572664b7290->enter($__internal_24c2e95eee3cebfb669c4ebbdde76409460022d9e2de485f15d50572664b7290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_564324f042af6fd7b99968abed7f355eff0258f9f5050fd70bde3ee8c4caac14->leave($__internal_564324f042af6fd7b99968abed7f355eff0258f9f5050fd70bde3ee8c4caac14_prof);

        
        $__internal_24c2e95eee3cebfb669c4ebbdde76409460022d9e2de485f15d50572664b7290->leave($__internal_24c2e95eee3cebfb669c4ebbdde76409460022d9e2de485f15d50572664b7290_prof);

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
