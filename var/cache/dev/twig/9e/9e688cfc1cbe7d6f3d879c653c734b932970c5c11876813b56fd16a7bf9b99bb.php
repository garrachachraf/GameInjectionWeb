<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0a6e7e4ad33446361ac07ef634bd52ff180dabfb2828ea91b270fff998fc25cd extends Twig_Template
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
        $__internal_07e15bb0562184471047692d1bcd36c3c425865bb73470b5ede3031b0484078f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e15bb0562184471047692d1bcd36c3c425865bb73470b5ede3031b0484078f->enter($__internal_07e15bb0562184471047692d1bcd36c3c425865bb73470b5ede3031b0484078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0926c607a26f82d983aa92d5dc094ad8146fe32991c7b2a7d73561de4e007801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0926c607a26f82d983aa92d5dc094ad8146fe32991c7b2a7d73561de4e007801->enter($__internal_0926c607a26f82d983aa92d5dc094ad8146fe32991c7b2a7d73561de4e007801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_07e15bb0562184471047692d1bcd36c3c425865bb73470b5ede3031b0484078f->leave($__internal_07e15bb0562184471047692d1bcd36c3c425865bb73470b5ede3031b0484078f_prof);

        
        $__internal_0926c607a26f82d983aa92d5dc094ad8146fe32991c7b2a7d73561de4e007801->leave($__internal_0926c607a26f82d983aa92d5dc094ad8146fe32991c7b2a7d73561de4e007801_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}