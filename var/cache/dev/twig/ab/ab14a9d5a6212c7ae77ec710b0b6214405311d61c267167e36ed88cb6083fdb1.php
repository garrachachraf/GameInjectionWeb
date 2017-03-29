<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3b0990e9435be31be29b9dd137018c94295428730bee1b10ca58dc3f75240a9d extends Twig_Template
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
        $__internal_fee37ca629640bff457bd042416790ed254bedfb70ca4991c1dbc479ddfc2a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee37ca629640bff457bd042416790ed254bedfb70ca4991c1dbc479ddfc2a3e->enter($__internal_fee37ca629640bff457bd042416790ed254bedfb70ca4991c1dbc479ddfc2a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_479c30a135f281d8c783ec46bfca9fd727ce3e406a2c9452d1f6df6615b65b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c30a135f281d8c783ec46bfca9fd727ce3e406a2c9452d1f6df6615b65b59->enter($__internal_479c30a135f281d8c783ec46bfca9fd727ce3e406a2c9452d1f6df6615b65b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fee37ca629640bff457bd042416790ed254bedfb70ca4991c1dbc479ddfc2a3e->leave($__internal_fee37ca629640bff457bd042416790ed254bedfb70ca4991c1dbc479ddfc2a3e_prof);

        
        $__internal_479c30a135f281d8c783ec46bfca9fd727ce3e406a2c9452d1f6df6615b65b59->leave($__internal_479c30a135f281d8c783ec46bfca9fd727ce3e406a2c9452d1f6df6615b65b59_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
