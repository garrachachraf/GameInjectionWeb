<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b0ff0567fa0288db601b481a36a95f8efbd7fe992779b3e0a13f5c4ddb90f0e5 extends Twig_Template
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
        $__internal_6e8d315ef43d9dfdfb001800d04d29812f7ba4b1f384921aa089b971da306e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8d315ef43d9dfdfb001800d04d29812f7ba4b1f384921aa089b971da306e3b->enter($__internal_6e8d315ef43d9dfdfb001800d04d29812f7ba4b1f384921aa089b971da306e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c3442be43892aab29ddf053aebb1bb9df69d5c678d5b431beec644302f9e6af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3442be43892aab29ddf053aebb1bb9df69d5c678d5b431beec644302f9e6af1->enter($__internal_c3442be43892aab29ddf053aebb1bb9df69d5c678d5b431beec644302f9e6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6e8d315ef43d9dfdfb001800d04d29812f7ba4b1f384921aa089b971da306e3b->leave($__internal_6e8d315ef43d9dfdfb001800d04d29812f7ba4b1f384921aa089b971da306e3b_prof);

        
        $__internal_c3442be43892aab29ddf053aebb1bb9df69d5c678d5b431beec644302f9e6af1->leave($__internal_c3442be43892aab29ddf053aebb1bb9df69d5c678d5b431beec644302f9e6af1_prof);

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
