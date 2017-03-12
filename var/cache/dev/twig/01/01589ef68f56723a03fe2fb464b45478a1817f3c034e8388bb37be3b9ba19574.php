<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_563548ec3e46ac7c53541fe3d28b90bba1fc007bc3c7adc7c20baf712c351127 extends Twig_Template
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
        $__internal_b1f07d7fd89dd16cef9bd07ce6b18d8a70ec61aaf435ed9059db1c711f36229f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f07d7fd89dd16cef9bd07ce6b18d8a70ec61aaf435ed9059db1c711f36229f->enter($__internal_b1f07d7fd89dd16cef9bd07ce6b18d8a70ec61aaf435ed9059db1c711f36229f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_574eb2147196d041a9955008f1dde8c5ec2665696b7bb976216f635765054634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574eb2147196d041a9955008f1dde8c5ec2665696b7bb976216f635765054634->enter($__internal_574eb2147196d041a9955008f1dde8c5ec2665696b7bb976216f635765054634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b1f07d7fd89dd16cef9bd07ce6b18d8a70ec61aaf435ed9059db1c711f36229f->leave($__internal_b1f07d7fd89dd16cef9bd07ce6b18d8a70ec61aaf435ed9059db1c711f36229f_prof);

        
        $__internal_574eb2147196d041a9955008f1dde8c5ec2665696b7bb976216f635765054634->leave($__internal_574eb2147196d041a9955008f1dde8c5ec2665696b7bb976216f635765054634_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
