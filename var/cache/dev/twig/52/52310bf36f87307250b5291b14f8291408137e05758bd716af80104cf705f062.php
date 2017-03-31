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
        $__internal_b7462a3e5f755ed726b4d013f4ae70816c8625a87766467cc23e27641bfb8325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7462a3e5f755ed726b4d013f4ae70816c8625a87766467cc23e27641bfb8325->enter($__internal_b7462a3e5f755ed726b4d013f4ae70816c8625a87766467cc23e27641bfb8325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_061974410b986c926c46d059dd553ab734371a77de340a464c3ffffd75b6620c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061974410b986c926c46d059dd553ab734371a77de340a464c3ffffd75b6620c->enter($__internal_061974410b986c926c46d059dd553ab734371a77de340a464c3ffffd75b6620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b7462a3e5f755ed726b4d013f4ae70816c8625a87766467cc23e27641bfb8325->leave($__internal_b7462a3e5f755ed726b4d013f4ae70816c8625a87766467cc23e27641bfb8325_prof);

        
        $__internal_061974410b986c926c46d059dd553ab734371a77de340a464c3ffffd75b6620c->leave($__internal_061974410b986c926c46d059dd553ab734371a77de340a464c3ffffd75b6620c_prof);

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
