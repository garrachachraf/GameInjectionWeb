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
        $__internal_810a51513c4c0a3c528dfa51b276d6b63db3fede3d76e0d995552964bc77571c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810a51513c4c0a3c528dfa51b276d6b63db3fede3d76e0d995552964bc77571c->enter($__internal_810a51513c4c0a3c528dfa51b276d6b63db3fede3d76e0d995552964bc77571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_febc51b28d0b6ed4f5e7a64311a7d03bb41ed4ad74db7ad4d3d7d1fb54585850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febc51b28d0b6ed4f5e7a64311a7d03bb41ed4ad74db7ad4d3d7d1fb54585850->enter($__internal_febc51b28d0b6ed4f5e7a64311a7d03bb41ed4ad74db7ad4d3d7d1fb54585850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_810a51513c4c0a3c528dfa51b276d6b63db3fede3d76e0d995552964bc77571c->leave($__internal_810a51513c4c0a3c528dfa51b276d6b63db3fede3d76e0d995552964bc77571c_prof);

        
        $__internal_febc51b28d0b6ed4f5e7a64311a7d03bb41ed4ad74db7ad4d3d7d1fb54585850->leave($__internal_febc51b28d0b6ed4f5e7a64311a7d03bb41ed4ad74db7ad4d3d7d1fb54585850_prof);

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
