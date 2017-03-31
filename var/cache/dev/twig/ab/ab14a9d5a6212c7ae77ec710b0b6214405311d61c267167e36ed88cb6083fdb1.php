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
        $__internal_2f439425e7d3321d42cbaceefcd22cb9fd8478fdd1abd70613687c58e4d7d371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f439425e7d3321d42cbaceefcd22cb9fd8478fdd1abd70613687c58e4d7d371->enter($__internal_2f439425e7d3321d42cbaceefcd22cb9fd8478fdd1abd70613687c58e4d7d371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_feb0cc4d6ec0f489f2cb6400266c89ffaed848bcacd9941ffc6251436e0b5a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb0cc4d6ec0f489f2cb6400266c89ffaed848bcacd9941ffc6251436e0b5a5b->enter($__internal_feb0cc4d6ec0f489f2cb6400266c89ffaed848bcacd9941ffc6251436e0b5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2f439425e7d3321d42cbaceefcd22cb9fd8478fdd1abd70613687c58e4d7d371->leave($__internal_2f439425e7d3321d42cbaceefcd22cb9fd8478fdd1abd70613687c58e4d7d371_prof);

        
        $__internal_feb0cc4d6ec0f489f2cb6400266c89ffaed848bcacd9941ffc6251436e0b5a5b->leave($__internal_feb0cc4d6ec0f489f2cb6400266c89ffaed848bcacd9941ffc6251436e0b5a5b_prof);

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
