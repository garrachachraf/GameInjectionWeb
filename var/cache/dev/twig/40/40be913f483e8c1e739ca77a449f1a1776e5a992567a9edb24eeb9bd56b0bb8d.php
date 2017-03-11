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
        $__internal_2389470f12c3a3532ae53580f0f7a4f0c77c4364f43c06d4ed9c75905e45b9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2389470f12c3a3532ae53580f0f7a4f0c77c4364f43c06d4ed9c75905e45b9b9->enter($__internal_2389470f12c3a3532ae53580f0f7a4f0c77c4364f43c06d4ed9c75905e45b9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_362264272f56b8d9e3397adb9201f4b32fa8b151292d929ecc2e4b278607a33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362264272f56b8d9e3397adb9201f4b32fa8b151292d929ecc2e4b278607a33c->enter($__internal_362264272f56b8d9e3397adb9201f4b32fa8b151292d929ecc2e4b278607a33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2389470f12c3a3532ae53580f0f7a4f0c77c4364f43c06d4ed9c75905e45b9b9->leave($__internal_2389470f12c3a3532ae53580f0f7a4f0c77c4364f43c06d4ed9c75905e45b9b9_prof);

        
        $__internal_362264272f56b8d9e3397adb9201f4b32fa8b151292d929ecc2e4b278607a33c->leave($__internal_362264272f56b8d9e3397adb9201f4b32fa8b151292d929ecc2e4b278607a33c_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
