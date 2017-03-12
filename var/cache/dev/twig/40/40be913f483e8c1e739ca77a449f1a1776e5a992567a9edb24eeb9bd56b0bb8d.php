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
        $__internal_f0ca04ffdb36914f475da9b3322543bbff71752d46a0d058c650c6cd81ca7c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ca04ffdb36914f475da9b3322543bbff71752d46a0d058c650c6cd81ca7c0b->enter($__internal_f0ca04ffdb36914f475da9b3322543bbff71752d46a0d058c650c6cd81ca7c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_85e864e02ade64ddd5370bf34c77713a5a665bd8c67fb0d7410199274163058a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e864e02ade64ddd5370bf34c77713a5a665bd8c67fb0d7410199274163058a->enter($__internal_85e864e02ade64ddd5370bf34c77713a5a665bd8c67fb0d7410199274163058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f0ca04ffdb36914f475da9b3322543bbff71752d46a0d058c650c6cd81ca7c0b->leave($__internal_f0ca04ffdb36914f475da9b3322543bbff71752d46a0d058c650c6cd81ca7c0b_prof);

        
        $__internal_85e864e02ade64ddd5370bf34c77713a5a665bd8c67fb0d7410199274163058a->leave($__internal_85e864e02ade64ddd5370bf34c77713a5a665bd8c67fb0d7410199274163058a_prof);

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
