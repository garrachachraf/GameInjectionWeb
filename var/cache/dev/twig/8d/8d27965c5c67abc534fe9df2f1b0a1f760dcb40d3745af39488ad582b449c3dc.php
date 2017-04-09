<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_977441df525c94c21b637aed69d94954a2c4c6fe8b40c9798e3df785ddbe1fc3 extends Twig_Template
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
        $__internal_61833a156f48e2973387f32c4ccccaa4ce6e22af7bfc9996d5d7ca097e521718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61833a156f48e2973387f32c4ccccaa4ce6e22af7bfc9996d5d7ca097e521718->enter($__internal_61833a156f48e2973387f32c4ccccaa4ce6e22af7bfc9996d5d7ca097e521718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d3ce1f2121edb3341b69022ea06e949dca0ccc57509dd238c0ad17732a7f53bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ce1f2121edb3341b69022ea06e949dca0ccc57509dd238c0ad17732a7f53bd->enter($__internal_d3ce1f2121edb3341b69022ea06e949dca0ccc57509dd238c0ad17732a7f53bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_61833a156f48e2973387f32c4ccccaa4ce6e22af7bfc9996d5d7ca097e521718->leave($__internal_61833a156f48e2973387f32c4ccccaa4ce6e22af7bfc9996d5d7ca097e521718_prof);

        
        $__internal_d3ce1f2121edb3341b69022ea06e949dca0ccc57509dd238c0ad17732a7f53bd->leave($__internal_d3ce1f2121edb3341b69022ea06e949dca0ccc57509dd238c0ad17732a7f53bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
