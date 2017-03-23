<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1442fb15fb2b0c71e3ab5816a437594c3e6ce2224bc164a296c30f4d624adbca extends Twig_Template
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
        $__internal_58a937728866bbfa2a477db704bb94975795218e2bd01c089f9263a59b2a7478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a937728866bbfa2a477db704bb94975795218e2bd01c089f9263a59b2a7478->enter($__internal_58a937728866bbfa2a477db704bb94975795218e2bd01c089f9263a59b2a7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1800f74c89b5c5a2a10343bc38559ba0c8f41ff4eab89f75c725b3ca4260ba36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1800f74c89b5c5a2a10343bc38559ba0c8f41ff4eab89f75c725b3ca4260ba36->enter($__internal_1800f74c89b5c5a2a10343bc38559ba0c8f41ff4eab89f75c725b3ca4260ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_58a937728866bbfa2a477db704bb94975795218e2bd01c089f9263a59b2a7478->leave($__internal_58a937728866bbfa2a477db704bb94975795218e2bd01c089f9263a59b2a7478_prof);

        
        $__internal_1800f74c89b5c5a2a10343bc38559ba0c8f41ff4eab89f75c725b3ca4260ba36->leave($__internal_1800f74c89b5c5a2a10343bc38559ba0c8f41ff4eab89f75c725b3ca4260ba36_prof);

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
