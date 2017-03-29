<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c8c5e7f59c94d95ecdadb41cc9cd923507439a61800af75ebc3cf64511eb9d1e extends Twig_Template
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
        $__internal_0e7ed15e2d3d2dfb57786440ab27d5c71855cceb59f7d392ac504c9005c36731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7ed15e2d3d2dfb57786440ab27d5c71855cceb59f7d392ac504c9005c36731->enter($__internal_0e7ed15e2d3d2dfb57786440ab27d5c71855cceb59f7d392ac504c9005c36731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_06ba57989e922513f4a898658b73273e194b4e5339dcad913a5ce1bb4d5f4ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ba57989e922513f4a898658b73273e194b4e5339dcad913a5ce1bb4d5f4ef7->enter($__internal_06ba57989e922513f4a898658b73273e194b4e5339dcad913a5ce1bb4d5f4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0e7ed15e2d3d2dfb57786440ab27d5c71855cceb59f7d392ac504c9005c36731->leave($__internal_0e7ed15e2d3d2dfb57786440ab27d5c71855cceb59f7d392ac504c9005c36731_prof);

        
        $__internal_06ba57989e922513f4a898658b73273e194b4e5339dcad913a5ce1bb4d5f4ef7->leave($__internal_06ba57989e922513f4a898658b73273e194b4e5339dcad913a5ce1bb4d5f4ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
