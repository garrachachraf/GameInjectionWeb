<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_18ff029ca8dc921d141d071e8695f7a7bc02792a9078a313a5f97880c5f6a34e extends Twig_Template
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
        $__internal_f32bb40458d5fec396c963a61c99058c52b209d9b3b5f51fdc7a373f069a93eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32bb40458d5fec396c963a61c99058c52b209d9b3b5f51fdc7a373f069a93eb->enter($__internal_f32bb40458d5fec396c963a61c99058c52b209d9b3b5f51fdc7a373f069a93eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_58038ffe4befb64baa55364f0c97aa46799218996a91c4c0b3cef89487c95984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58038ffe4befb64baa55364f0c97aa46799218996a91c4c0b3cef89487c95984->enter($__internal_58038ffe4befb64baa55364f0c97aa46799218996a91c4c0b3cef89487c95984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f32bb40458d5fec396c963a61c99058c52b209d9b3b5f51fdc7a373f069a93eb->leave($__internal_f32bb40458d5fec396c963a61c99058c52b209d9b3b5f51fdc7a373f069a93eb_prof);

        
        $__internal_58038ffe4befb64baa55364f0c97aa46799218996a91c4c0b3cef89487c95984->leave($__internal_58038ffe4befb64baa55364f0c97aa46799218996a91c4c0b3cef89487c95984_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
