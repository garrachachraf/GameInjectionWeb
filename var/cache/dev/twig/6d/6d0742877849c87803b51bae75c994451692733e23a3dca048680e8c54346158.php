<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ea47bc21fc8785c3a8bc8b56b98d3f061877817a040730b47acb48bac18c598 extends Twig_Template
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
        $__internal_f520a267b323e249e95fb990394a085e4dc689f8a3d2ced61beb180f2a408ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f520a267b323e249e95fb990394a085e4dc689f8a3d2ced61beb180f2a408ad6->enter($__internal_f520a267b323e249e95fb990394a085e4dc689f8a3d2ced61beb180f2a408ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_974398b926e275d4fb9c569e736c24d0a45a1009968be0f20491ae92bd574b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974398b926e275d4fb9c569e736c24d0a45a1009968be0f20491ae92bd574b99->enter($__internal_974398b926e275d4fb9c569e736c24d0a45a1009968be0f20491ae92bd574b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f520a267b323e249e95fb990394a085e4dc689f8a3d2ced61beb180f2a408ad6->leave($__internal_f520a267b323e249e95fb990394a085e4dc689f8a3d2ced61beb180f2a408ad6_prof);

        
        $__internal_974398b926e275d4fb9c569e736c24d0a45a1009968be0f20491ae92bd574b99->leave($__internal_974398b926e275d4fb9c569e736c24d0a45a1009968be0f20491ae92bd574b99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
