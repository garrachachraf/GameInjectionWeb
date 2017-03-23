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
        $__internal_e986593575297039deb4b82d3ed08232952a942fe2198108cc2106dc92aea2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e986593575297039deb4b82d3ed08232952a942fe2198108cc2106dc92aea2ca->enter($__internal_e986593575297039deb4b82d3ed08232952a942fe2198108cc2106dc92aea2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3c5adc4f260de31e4841d9ca6aaa22f3c105d7e0de7717771a941ac3d3924315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5adc4f260de31e4841d9ca6aaa22f3c105d7e0de7717771a941ac3d3924315->enter($__internal_3c5adc4f260de31e4841d9ca6aaa22f3c105d7e0de7717771a941ac3d3924315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e986593575297039deb4b82d3ed08232952a942fe2198108cc2106dc92aea2ca->leave($__internal_e986593575297039deb4b82d3ed08232952a942fe2198108cc2106dc92aea2ca_prof);

        
        $__internal_3c5adc4f260de31e4841d9ca6aaa22f3c105d7e0de7717771a941ac3d3924315->leave($__internal_3c5adc4f260de31e4841d9ca6aaa22f3c105d7e0de7717771a941ac3d3924315_prof);

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
