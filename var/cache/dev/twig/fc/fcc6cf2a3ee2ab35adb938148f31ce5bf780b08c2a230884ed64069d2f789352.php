<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c6927f13cf698dba1be9f18dee74ea105358bb1adc56414b95e4c82b78f2cd81 extends Twig_Template
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
        $__internal_9a146f02bef04a287e21bdc10e1d8ad07af8528605a7f2b7175bc8f41c42154a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a146f02bef04a287e21bdc10e1d8ad07af8528605a7f2b7175bc8f41c42154a->enter($__internal_9a146f02bef04a287e21bdc10e1d8ad07af8528605a7f2b7175bc8f41c42154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e806b3f10ace40a1d0425c10896bda9225f3eb223d7350df712006bbf3df5ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e806b3f10ace40a1d0425c10896bda9225f3eb223d7350df712006bbf3df5ca6->enter($__internal_e806b3f10ace40a1d0425c10896bda9225f3eb223d7350df712006bbf3df5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9a146f02bef04a287e21bdc10e1d8ad07af8528605a7f2b7175bc8f41c42154a->leave($__internal_9a146f02bef04a287e21bdc10e1d8ad07af8528605a7f2b7175bc8f41c42154a_prof);

        
        $__internal_e806b3f10ace40a1d0425c10896bda9225f3eb223d7350df712006bbf3df5ca6->leave($__internal_e806b3f10ace40a1d0425c10896bda9225f3eb223d7350df712006bbf3df5ca6_prof);

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
