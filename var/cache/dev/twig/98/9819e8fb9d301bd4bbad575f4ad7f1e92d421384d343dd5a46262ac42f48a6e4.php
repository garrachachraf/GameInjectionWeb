<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_675f6aa81a125bbe3705921e2e5b69384e5f82d2ef2f32ed65ce64150c3ee110 extends Twig_Template
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
        $__internal_d73f8f19a4dd75bf0d5f0b981707163e5f71895f4cee2b56d7d2b929c7e9df34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73f8f19a4dd75bf0d5f0b981707163e5f71895f4cee2b56d7d2b929c7e9df34->enter($__internal_d73f8f19a4dd75bf0d5f0b981707163e5f71895f4cee2b56d7d2b929c7e9df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d398a593946d3aa24c28e5df344d3932a181f0cac03f3054b00e8f8b6e06229e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d398a593946d3aa24c28e5df344d3932a181f0cac03f3054b00e8f8b6e06229e->enter($__internal_d398a593946d3aa24c28e5df344d3932a181f0cac03f3054b00e8f8b6e06229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d73f8f19a4dd75bf0d5f0b981707163e5f71895f4cee2b56d7d2b929c7e9df34->leave($__internal_d73f8f19a4dd75bf0d5f0b981707163e5f71895f4cee2b56d7d2b929c7e9df34_prof);

        
        $__internal_d398a593946d3aa24c28e5df344d3932a181f0cac03f3054b00e8f8b6e06229e->leave($__internal_d398a593946d3aa24c28e5df344d3932a181f0cac03f3054b00e8f8b6e06229e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
