<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4c772bd6db69c32a6d76f1a610b874cf0fd6dced82ed58ad1946b3da3c2e84f7 extends Twig_Template
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
        $__internal_6837ca7f6d15ff95cce131ffc0d72e5fb47e1e1561f21126cea24a81036b2a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6837ca7f6d15ff95cce131ffc0d72e5fb47e1e1561f21126cea24a81036b2a63->enter($__internal_6837ca7f6d15ff95cce131ffc0d72e5fb47e1e1561f21126cea24a81036b2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d3ba8e4583668b38775619fef61b295a5ffe10fc0216ba7786cddc2c4ae56eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ba8e4583668b38775619fef61b295a5ffe10fc0216ba7786cddc2c4ae56eda->enter($__internal_d3ba8e4583668b38775619fef61b295a5ffe10fc0216ba7786cddc2c4ae56eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6837ca7f6d15ff95cce131ffc0d72e5fb47e1e1561f21126cea24a81036b2a63->leave($__internal_6837ca7f6d15ff95cce131ffc0d72e5fb47e1e1561f21126cea24a81036b2a63_prof);

        
        $__internal_d3ba8e4583668b38775619fef61b295a5ffe10fc0216ba7786cddc2c4ae56eda->leave($__internal_d3ba8e4583668b38775619fef61b295a5ffe10fc0216ba7786cddc2c4ae56eda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
