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
        $__internal_4b3b888d749c1246321b6d285a47db8b29b651ab0ab4c5bd49ba4c14f15a78a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3b888d749c1246321b6d285a47db8b29b651ab0ab4c5bd49ba4c14f15a78a3->enter($__internal_4b3b888d749c1246321b6d285a47db8b29b651ab0ab4c5bd49ba4c14f15a78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_254a45aeabedf967d677c83e250cbfda0c439d19d0a4d960a4d38880f0fe2bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254a45aeabedf967d677c83e250cbfda0c439d19d0a4d960a4d38880f0fe2bd7->enter($__internal_254a45aeabedf967d677c83e250cbfda0c439d19d0a4d960a4d38880f0fe2bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4b3b888d749c1246321b6d285a47db8b29b651ab0ab4c5bd49ba4c14f15a78a3->leave($__internal_4b3b888d749c1246321b6d285a47db8b29b651ab0ab4c5bd49ba4c14f15a78a3_prof);

        
        $__internal_254a45aeabedf967d677c83e250cbfda0c439d19d0a4d960a4d38880f0fe2bd7->leave($__internal_254a45aeabedf967d677c83e250cbfda0c439d19d0a4d960a4d38880f0fe2bd7_prof);

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
