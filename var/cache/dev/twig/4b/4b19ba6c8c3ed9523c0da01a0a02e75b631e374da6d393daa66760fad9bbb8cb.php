<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_65c946ff1a4b0b9ab169b6199b668b6419dd6013f432e262fcba18bd1cd17f65 extends Twig_Template
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
        $__internal_eb5b816ecbbf602593fc400a46c7e0043dac327b9a3c3a9141909a978794fecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5b816ecbbf602593fc400a46c7e0043dac327b9a3c3a9141909a978794fecc->enter($__internal_eb5b816ecbbf602593fc400a46c7e0043dac327b9a3c3a9141909a978794fecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d1ef2bd6e24abff5ad46998ae2921609374d053b9760ff2880d559544f88fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ef2bd6e24abff5ad46998ae2921609374d053b9760ff2880d559544f88fd81->enter($__internal_d1ef2bd6e24abff5ad46998ae2921609374d053b9760ff2880d559544f88fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eb5b816ecbbf602593fc400a46c7e0043dac327b9a3c3a9141909a978794fecc->leave($__internal_eb5b816ecbbf602593fc400a46c7e0043dac327b9a3c3a9141909a978794fecc_prof);

        
        $__internal_d1ef2bd6e24abff5ad46998ae2921609374d053b9760ff2880d559544f88fd81->leave($__internal_d1ef2bd6e24abff5ad46998ae2921609374d053b9760ff2880d559544f88fd81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
