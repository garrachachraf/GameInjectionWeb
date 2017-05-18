<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4ff021a6051fdc5e5c04e88c7b7562b8209f48bac669554c1a7bfd9505bb182a extends Twig_Template
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
        $__internal_81617623c110dd8761e66504f1770c7b21fb53739b834e49f2042fd3b251f15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81617623c110dd8761e66504f1770c7b21fb53739b834e49f2042fd3b251f15a->enter($__internal_81617623c110dd8761e66504f1770c7b21fb53739b834e49f2042fd3b251f15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_68c17b25a7289916d094f64564473f658dfc4be3dba1b9e06980b81cfd383038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c17b25a7289916d094f64564473f658dfc4be3dba1b9e06980b81cfd383038->enter($__internal_68c17b25a7289916d094f64564473f658dfc4be3dba1b9e06980b81cfd383038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_81617623c110dd8761e66504f1770c7b21fb53739b834e49f2042fd3b251f15a->leave($__internal_81617623c110dd8761e66504f1770c7b21fb53739b834e49f2042fd3b251f15a_prof);

        
        $__internal_68c17b25a7289916d094f64564473f658dfc4be3dba1b9e06980b81cfd383038->leave($__internal_68c17b25a7289916d094f64564473f658dfc4be3dba1b9e06980b81cfd383038_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
