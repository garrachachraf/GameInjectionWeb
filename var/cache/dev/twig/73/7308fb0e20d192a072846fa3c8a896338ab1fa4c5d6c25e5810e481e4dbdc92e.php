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
        $__internal_808054c8c444676c5d12b95c78f76dc9732720267748d1060a499880b806c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808054c8c444676c5d12b95c78f76dc9732720267748d1060a499880b806c847->enter($__internal_808054c8c444676c5d12b95c78f76dc9732720267748d1060a499880b806c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c40eedc7605c39502666b29657f1edd7a5c44b9f8d65e6e01e95274a690929a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40eedc7605c39502666b29657f1edd7a5c44b9f8d65e6e01e95274a690929a5->enter($__internal_c40eedc7605c39502666b29657f1edd7a5c44b9f8d65e6e01e95274a690929a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_808054c8c444676c5d12b95c78f76dc9732720267748d1060a499880b806c847->leave($__internal_808054c8c444676c5d12b95c78f76dc9732720267748d1060a499880b806c847_prof);

        
        $__internal_c40eedc7605c39502666b29657f1edd7a5c44b9f8d65e6e01e95274a690929a5->leave($__internal_c40eedc7605c39502666b29657f1edd7a5c44b9f8d65e6e01e95274a690929a5_prof);

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
