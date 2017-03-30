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
        $__internal_03d7321936761798465588ee214a2105161bb2603c7ea20dcb0b737e7d464abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d7321936761798465588ee214a2105161bb2603c7ea20dcb0b737e7d464abe->enter($__internal_03d7321936761798465588ee214a2105161bb2603c7ea20dcb0b737e7d464abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_ec841443aca60127f7d144b3496728947815d06af9178ba7c4c84c280498a246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec841443aca60127f7d144b3496728947815d06af9178ba7c4c84c280498a246->enter($__internal_ec841443aca60127f7d144b3496728947815d06af9178ba7c4c84c280498a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_03d7321936761798465588ee214a2105161bb2603c7ea20dcb0b737e7d464abe->leave($__internal_03d7321936761798465588ee214a2105161bb2603c7ea20dcb0b737e7d464abe_prof);

        
        $__internal_ec841443aca60127f7d144b3496728947815d06af9178ba7c4c84c280498a246->leave($__internal_ec841443aca60127f7d144b3496728947815d06af9178ba7c4c84c280498a246_prof);

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
