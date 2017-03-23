<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_37b94ebc4a4336d1c76cc1b7d3219b5c3b5667d8675742de8eba69bc58803f7c extends Twig_Template
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
        $__internal_a260946199bf2df70592f34bf88e6bea70ea7ff8752d896e61623572733786ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a260946199bf2df70592f34bf88e6bea70ea7ff8752d896e61623572733786ee->enter($__internal_a260946199bf2df70592f34bf88e6bea70ea7ff8752d896e61623572733786ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_b76b8be6259b1ab57292803c25b3e50a34af8ceb6f49c4fb067abbdce47401ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76b8be6259b1ab57292803c25b3e50a34af8ceb6f49c4fb067abbdce47401ef->enter($__internal_b76b8be6259b1ab57292803c25b3e50a34af8ceb6f49c4fb067abbdce47401ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a260946199bf2df70592f34bf88e6bea70ea7ff8752d896e61623572733786ee->leave($__internal_a260946199bf2df70592f34bf88e6bea70ea7ff8752d896e61623572733786ee_prof);

        
        $__internal_b76b8be6259b1ab57292803c25b3e50a34af8ceb6f49c4fb067abbdce47401ef->leave($__internal_b76b8be6259b1ab57292803c25b3e50a34af8ceb6f49c4fb067abbdce47401ef_prof);

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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
