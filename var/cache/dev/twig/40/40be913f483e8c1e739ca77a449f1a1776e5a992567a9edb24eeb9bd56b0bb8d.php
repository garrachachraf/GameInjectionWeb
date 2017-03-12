<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_c95199d551574a0910ba8b49cb8bc309d179dffe2af4c55c0de4233a9bdf39e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95199d551574a0910ba8b49cb8bc309d179dffe2af4c55c0de4233a9bdf39e0->enter($__internal_c95199d551574a0910ba8b49cb8bc309d179dffe2af4c55c0de4233a9bdf39e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9cdee635a2ec528905593f1e4ecc0469e745f3b75d776a6fa0cf0871d3b05505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdee635a2ec528905593f1e4ecc0469e745f3b75d776a6fa0cf0871d3b05505->enter($__internal_9cdee635a2ec528905593f1e4ecc0469e745f3b75d776a6fa0cf0871d3b05505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c95199d551574a0910ba8b49cb8bc309d179dffe2af4c55c0de4233a9bdf39e0->leave($__internal_c95199d551574a0910ba8b49cb8bc309d179dffe2af4c55c0de4233a9bdf39e0_prof);

        
        $__internal_9cdee635a2ec528905593f1e4ecc0469e745f3b75d776a6fa0cf0871d3b05505->leave($__internal_9cdee635a2ec528905593f1e4ecc0469e745f3b75d776a6fa0cf0871d3b05505_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
