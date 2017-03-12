<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_3b1351b6961c624ee4c4beb42bc5a4efff6c5b4ef9be5f7e83dbbd109618df18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1351b6961c624ee4c4beb42bc5a4efff6c5b4ef9be5f7e83dbbd109618df18->enter($__internal_3b1351b6961c624ee4c4beb42bc5a4efff6c5b4ef9be5f7e83dbbd109618df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5da4fe5f7b1126201263bf552a1c55b072b931d28676d1f35d5be877fe1b01b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da4fe5f7b1126201263bf552a1c55b072b931d28676d1f35d5be877fe1b01b3->enter($__internal_5da4fe5f7b1126201263bf552a1c55b072b931d28676d1f35d5be877fe1b01b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3b1351b6961c624ee4c4beb42bc5a4efff6c5b4ef9be5f7e83dbbd109618df18->leave($__internal_3b1351b6961c624ee4c4beb42bc5a4efff6c5b4ef9be5f7e83dbbd109618df18_prof);

        
        $__internal_5da4fe5f7b1126201263bf552a1c55b072b931d28676d1f35d5be877fe1b01b3->leave($__internal_5da4fe5f7b1126201263bf552a1c55b072b931d28676d1f35d5be877fe1b01b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
