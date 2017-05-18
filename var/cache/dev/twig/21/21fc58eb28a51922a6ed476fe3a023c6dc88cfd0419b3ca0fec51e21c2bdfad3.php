<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1a59b728a00b7c63cb5e80cab1c17842edf63619fb2b9f91fcfccd184263be9a extends Twig_Template
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
        $__internal_6ca21e123ac60c89fb70333434110a4bd4fec1ea759d558a04eddbcdb35de814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca21e123ac60c89fb70333434110a4bd4fec1ea759d558a04eddbcdb35de814->enter($__internal_6ca21e123ac60c89fb70333434110a4bd4fec1ea759d558a04eddbcdb35de814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_88cd4e2c6a22813b97a22bf31346ed9d7f32121e6964db2c04615924f48f9504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cd4e2c6a22813b97a22bf31346ed9d7f32121e6964db2c04615924f48f9504->enter($__internal_88cd4e2c6a22813b97a22bf31346ed9d7f32121e6964db2c04615924f48f9504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ca21e123ac60c89fb70333434110a4bd4fec1ea759d558a04eddbcdb35de814->leave($__internal_6ca21e123ac60c89fb70333434110a4bd4fec1ea759d558a04eddbcdb35de814_prof);

        
        $__internal_88cd4e2c6a22813b97a22bf31346ed9d7f32121e6964db2c04615924f48f9504->leave($__internal_88cd4e2c6a22813b97a22bf31346ed9d7f32121e6964db2c04615924f48f9504_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
