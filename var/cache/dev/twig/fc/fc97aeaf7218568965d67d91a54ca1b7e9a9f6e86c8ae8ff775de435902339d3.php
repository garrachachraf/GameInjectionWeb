<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb2960c0977bc163a1090e2a7ce6bdd56a05a6999b6ab31448222e4b7efaf9b7 extends Twig_Template
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
        $__internal_5fa72272c03e0f1d0d3de98c09e494f74b23eb996d7c344337e3e1232fc57ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa72272c03e0f1d0d3de98c09e494f74b23eb996d7c344337e3e1232fc57ce9->enter($__internal_5fa72272c03e0f1d0d3de98c09e494f74b23eb996d7c344337e3e1232fc57ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d068a6d9548289509bf853f0487f205ea27df29062fa718169daf1e2908a7904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d068a6d9548289509bf853f0487f205ea27df29062fa718169daf1e2908a7904->enter($__internal_d068a6d9548289509bf853f0487f205ea27df29062fa718169daf1e2908a7904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5fa72272c03e0f1d0d3de98c09e494f74b23eb996d7c344337e3e1232fc57ce9->leave($__internal_5fa72272c03e0f1d0d3de98c09e494f74b23eb996d7c344337e3e1232fc57ce9_prof);

        
        $__internal_d068a6d9548289509bf853f0487f205ea27df29062fa718169daf1e2908a7904->leave($__internal_d068a6d9548289509bf853f0487f205ea27df29062fa718169daf1e2908a7904_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
