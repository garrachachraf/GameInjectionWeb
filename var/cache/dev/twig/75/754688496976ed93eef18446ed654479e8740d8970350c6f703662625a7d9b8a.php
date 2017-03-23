<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5054275b1f120abbcf7bc6a783e3cda7ad261cb1185c8977af769c8b55dd587e extends Twig_Template
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
        $__internal_e3fb5796474b0e8597813c5545a91de07d766e832abf2a1d93b603e6aeb67cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fb5796474b0e8597813c5545a91de07d766e832abf2a1d93b603e6aeb67cfa->enter($__internal_e3fb5796474b0e8597813c5545a91de07d766e832abf2a1d93b603e6aeb67cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_31f3b725a2103333daf9dca1ba9b9ff7fe8923dd3636da1ba68a81567a246505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f3b725a2103333daf9dca1ba9b9ff7fe8923dd3636da1ba68a81567a246505->enter($__internal_31f3b725a2103333daf9dca1ba9b9ff7fe8923dd3636da1ba68a81567a246505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e3fb5796474b0e8597813c5545a91de07d766e832abf2a1d93b603e6aeb67cfa->leave($__internal_e3fb5796474b0e8597813c5545a91de07d766e832abf2a1d93b603e6aeb67cfa_prof);

        
        $__internal_31f3b725a2103333daf9dca1ba9b9ff7fe8923dd3636da1ba68a81567a246505->leave($__internal_31f3b725a2103333daf9dca1ba9b9ff7fe8923dd3636da1ba68a81567a246505_prof);

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
