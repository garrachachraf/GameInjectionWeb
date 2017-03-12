<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d3eef94652388398d071ee1bc7ba190954aee55bdf26614531d3f6538f75a07 extends Twig_Template
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
        $__internal_ba1c6ed04f2595b1649358573490b512c38759e57ce90f4214377506df9f98ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1c6ed04f2595b1649358573490b512c38759e57ce90f4214377506df9f98ad->enter($__internal_ba1c6ed04f2595b1649358573490b512c38759e57ce90f4214377506df9f98ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_18a5d2d8d3bae040cdd2dc1310eda80d2aa5e3c895d9722832d918ba77f5ed76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a5d2d8d3bae040cdd2dc1310eda80d2aa5e3c895d9722832d918ba77f5ed76->enter($__internal_18a5d2d8d3bae040cdd2dc1310eda80d2aa5e3c895d9722832d918ba77f5ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ba1c6ed04f2595b1649358573490b512c38759e57ce90f4214377506df9f98ad->leave($__internal_ba1c6ed04f2595b1649358573490b512c38759e57ce90f4214377506df9f98ad_prof);

        
        $__internal_18a5d2d8d3bae040cdd2dc1310eda80d2aa5e3c895d9722832d918ba77f5ed76->leave($__internal_18a5d2d8d3bae040cdd2dc1310eda80d2aa5e3c895d9722832d918ba77f5ed76_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
