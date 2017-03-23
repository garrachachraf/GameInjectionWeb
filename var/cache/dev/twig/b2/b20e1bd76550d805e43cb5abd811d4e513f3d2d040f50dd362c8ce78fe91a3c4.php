<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_799436a3d313219aef4c0cfafae5f81d8f6f8779ab32cf15a40eba460d777c72 extends Twig_Template
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
        $__internal_6da2752f537557e0e79d10ae7bbd9c3a664edda2ad7f1cd7617757457b0445d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da2752f537557e0e79d10ae7bbd9c3a664edda2ad7f1cd7617757457b0445d3->enter($__internal_6da2752f537557e0e79d10ae7bbd9c3a664edda2ad7f1cd7617757457b0445d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_15202d40fe8b52125b84f6a4242b1d2c9f58b52666ca56e2b9f3690da240c778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15202d40fe8b52125b84f6a4242b1d2c9f58b52666ca56e2b9f3690da240c778->enter($__internal_15202d40fe8b52125b84f6a4242b1d2c9f58b52666ca56e2b9f3690da240c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6da2752f537557e0e79d10ae7bbd9c3a664edda2ad7f1cd7617757457b0445d3->leave($__internal_6da2752f537557e0e79d10ae7bbd9c3a664edda2ad7f1cd7617757457b0445d3_prof);

        
        $__internal_15202d40fe8b52125b84f6a4242b1d2c9f58b52666ca56e2b9f3690da240c778->leave($__internal_15202d40fe8b52125b84f6a4242b1d2c9f58b52666ca56e2b9f3690da240c778_prof);

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
