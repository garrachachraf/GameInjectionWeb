<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a6c68f5e7d3a637178043b91ec2d596ac5a582b8d5091f0bf807c1bc1ab0164f extends Twig_Template
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
        $__internal_b710ec8df657596dc876b5b0abc41df8fb6a4b3ed862a4ba0e7e69681ed72e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b710ec8df657596dc876b5b0abc41df8fb6a4b3ed862a4ba0e7e69681ed72e8b->enter($__internal_b710ec8df657596dc876b5b0abc41df8fb6a4b3ed862a4ba0e7e69681ed72e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7f068063557a4448b59b4028a59b4ac72e161951e6bbe3f94135420078cb66b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f068063557a4448b59b4028a59b4ac72e161951e6bbe3f94135420078cb66b9->enter($__internal_7f068063557a4448b59b4028a59b4ac72e161951e6bbe3f94135420078cb66b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b710ec8df657596dc876b5b0abc41df8fb6a4b3ed862a4ba0e7e69681ed72e8b->leave($__internal_b710ec8df657596dc876b5b0abc41df8fb6a4b3ed862a4ba0e7e69681ed72e8b_prof);

        
        $__internal_7f068063557a4448b59b4028a59b4ac72e161951e6bbe3f94135420078cb66b9->leave($__internal_7f068063557a4448b59b4028a59b4ac72e161951e6bbe3f94135420078cb66b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
