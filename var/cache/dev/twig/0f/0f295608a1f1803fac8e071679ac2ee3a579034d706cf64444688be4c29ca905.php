<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_65bcc1b8a074f68d08134c2c76bf5defd7a2e754a7bb5ed23f78fd4e95b0695f extends Twig_Template
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
        $__internal_cc69ef6791500cc9119760786be4f523b7038fd16799a7e7d2e9eb78ef3426a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc69ef6791500cc9119760786be4f523b7038fd16799a7e7d2e9eb78ef3426a1->enter($__internal_cc69ef6791500cc9119760786be4f523b7038fd16799a7e7d2e9eb78ef3426a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b06ba0ae6cc54e9d49990268b476691a5643ad3ed2db057e435bc750862133c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06ba0ae6cc54e9d49990268b476691a5643ad3ed2db057e435bc750862133c0->enter($__internal_b06ba0ae6cc54e9d49990268b476691a5643ad3ed2db057e435bc750862133c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc69ef6791500cc9119760786be4f523b7038fd16799a7e7d2e9eb78ef3426a1->leave($__internal_cc69ef6791500cc9119760786be4f523b7038fd16799a7e7d2e9eb78ef3426a1_prof);

        
        $__internal_b06ba0ae6cc54e9d49990268b476691a5643ad3ed2db057e435bc750862133c0->leave($__internal_b06ba0ae6cc54e9d49990268b476691a5643ad3ed2db057e435bc750862133c0_prof);

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
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
