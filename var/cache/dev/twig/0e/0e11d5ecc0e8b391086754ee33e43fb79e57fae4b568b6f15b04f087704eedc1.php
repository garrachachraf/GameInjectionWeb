<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6efd28d63604f0692007964187d1bad7fabf0bb4175df97f4f7552bc7e012609 extends Twig_Template
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
        $__internal_7f74e38960735a7a14bfcb579740de7c02903063e615f806c906010e4878d171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f74e38960735a7a14bfcb579740de7c02903063e615f806c906010e4878d171->enter($__internal_7f74e38960735a7a14bfcb579740de7c02903063e615f806c906010e4878d171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_d06435c74c5b4b358d254130d454574406026256bbae5af8d55b1b3293fd41f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06435c74c5b4b358d254130d454574406026256bbae5af8d55b1b3293fd41f2->enter($__internal_d06435c74c5b4b358d254130d454574406026256bbae5af8d55b1b3293fd41f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7f74e38960735a7a14bfcb579740de7c02903063e615f806c906010e4878d171->leave($__internal_7f74e38960735a7a14bfcb579740de7c02903063e615f806c906010e4878d171_prof);

        
        $__internal_d06435c74c5b4b358d254130d454574406026256bbae5af8d55b1b3293fd41f2->leave($__internal_d06435c74c5b4b358d254130d454574406026256bbae5af8d55b1b3293fd41f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}