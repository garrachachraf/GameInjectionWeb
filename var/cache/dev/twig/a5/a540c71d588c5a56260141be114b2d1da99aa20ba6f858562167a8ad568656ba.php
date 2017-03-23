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
        $__internal_02ce42efa11dba35975c54d2ea5bb5bb63c749c07109bcf04a8250caf12eca87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ce42efa11dba35975c54d2ea5bb5bb63c749c07109bcf04a8250caf12eca87->enter($__internal_02ce42efa11dba35975c54d2ea5bb5bb63c749c07109bcf04a8250caf12eca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4635b013a388be6c5f113ee3336d1e8cd65ed78f8d5decc77fea524411d106e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4635b013a388be6c5f113ee3336d1e8cd65ed78f8d5decc77fea524411d106e4->enter($__internal_4635b013a388be6c5f113ee3336d1e8cd65ed78f8d5decc77fea524411d106e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_02ce42efa11dba35975c54d2ea5bb5bb63c749c07109bcf04a8250caf12eca87->leave($__internal_02ce42efa11dba35975c54d2ea5bb5bb63c749c07109bcf04a8250caf12eca87_prof);

        
        $__internal_4635b013a388be6c5f113ee3336d1e8cd65ed78f8d5decc77fea524411d106e4->leave($__internal_4635b013a388be6c5f113ee3336d1e8cd65ed78f8d5decc77fea524411d106e4_prof);

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
