<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9d5607c840658970c290b69d6719e66b0a50e8477f65d3fcf874ddb329d43454 extends Twig_Template
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
        $__internal_400feeb28a5c09f7cda0676b967b90a03ec9d5ce65e2beb41c3fb748d29d9362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400feeb28a5c09f7cda0676b967b90a03ec9d5ce65e2beb41c3fb748d29d9362->enter($__internal_400feeb28a5c09f7cda0676b967b90a03ec9d5ce65e2beb41c3fb748d29d9362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a6eab0b6b4f166e237295f0dfb9cbef8076b38badd69cd10829ec6fecbc6464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eab0b6b4f166e237295f0dfb9cbef8076b38badd69cd10829ec6fecbc6464b->enter($__internal_a6eab0b6b4f166e237295f0dfb9cbef8076b38badd69cd10829ec6fecbc6464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_400feeb28a5c09f7cda0676b967b90a03ec9d5ce65e2beb41c3fb748d29d9362->leave($__internal_400feeb28a5c09f7cda0676b967b90a03ec9d5ce65e2beb41c3fb748d29d9362_prof);

        
        $__internal_a6eab0b6b4f166e237295f0dfb9cbef8076b38badd69cd10829ec6fecbc6464b->leave($__internal_a6eab0b6b4f166e237295f0dfb9cbef8076b38badd69cd10829ec6fecbc6464b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
