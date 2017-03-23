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
        $__internal_85e2d928dd8c059823e0274c33d1ad5c7aa91207572ae5c611a2bb486b72931a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e2d928dd8c059823e0274c33d1ad5c7aa91207572ae5c611a2bb486b72931a->enter($__internal_85e2d928dd8c059823e0274c33d1ad5c7aa91207572ae5c611a2bb486b72931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1c1f2be37645f7183b457f208ec7f4cd75634f8bd2aef0fdd125cbb96de83cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1f2be37645f7183b457f208ec7f4cd75634f8bd2aef0fdd125cbb96de83cf0->enter($__internal_1c1f2be37645f7183b457f208ec7f4cd75634f8bd2aef0fdd125cbb96de83cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_85e2d928dd8c059823e0274c33d1ad5c7aa91207572ae5c611a2bb486b72931a->leave($__internal_85e2d928dd8c059823e0274c33d1ad5c7aa91207572ae5c611a2bb486b72931a_prof);

        
        $__internal_1c1f2be37645f7183b457f208ec7f4cd75634f8bd2aef0fdd125cbb96de83cf0->leave($__internal_1c1f2be37645f7183b457f208ec7f4cd75634f8bd2aef0fdd125cbb96de83cf0_prof);

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
