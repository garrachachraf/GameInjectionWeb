<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a551e02d4539f8cf5629a2482151f945820469d800fe93c1490dbc86089ce1a1 extends Twig_Template
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
        $__internal_d56cd62b503366580e04f82e901493a1fb9647578947ca26b533609fe6a45b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56cd62b503366580e04f82e901493a1fb9647578947ca26b533609fe6a45b89->enter($__internal_d56cd62b503366580e04f82e901493a1fb9647578947ca26b533609fe6a45b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c1d8f06e23c59d7695da58b0a2cadf93db6211cb4f27ca3c8e53c8bb000aabc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d8f06e23c59d7695da58b0a2cadf93db6211cb4f27ca3c8e53c8bb000aabc6->enter($__internal_c1d8f06e23c59d7695da58b0a2cadf93db6211cb4f27ca3c8e53c8bb000aabc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_d56cd62b503366580e04f82e901493a1fb9647578947ca26b533609fe6a45b89->leave($__internal_d56cd62b503366580e04f82e901493a1fb9647578947ca26b533609fe6a45b89_prof);

        
        $__internal_c1d8f06e23c59d7695da58b0a2cadf93db6211cb4f27ca3c8e53c8bb000aabc6->leave($__internal_c1d8f06e23c59d7695da58b0a2cadf93db6211cb4f27ca3c8e53c8bb000aabc6_prof);

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
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
