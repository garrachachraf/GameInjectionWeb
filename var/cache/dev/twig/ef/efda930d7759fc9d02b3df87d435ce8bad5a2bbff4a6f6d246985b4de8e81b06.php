<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8fc6d0f1b3c0beebfd765eb5cdb94c8fa00feb31aafd8bf8f30daae3ab609a20 extends Twig_Template
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
        $__internal_2768ff240c4e210f8d9b6b2a052a93d71456fb4fc1a2e2891facbe362f88a7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2768ff240c4e210f8d9b6b2a052a93d71456fb4fc1a2e2891facbe362f88a7a2->enter($__internal_2768ff240c4e210f8d9b6b2a052a93d71456fb4fc1a2e2891facbe362f88a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8e1abc0cafa3815ad6a727f3c687ac426d625c0c35f6b1fb52abb13c77c835c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1abc0cafa3815ad6a727f3c687ac426d625c0c35f6b1fb52abb13c77c835c1->enter($__internal_8e1abc0cafa3815ad6a727f3c687ac426d625c0c35f6b1fb52abb13c77c835c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2768ff240c4e210f8d9b6b2a052a93d71456fb4fc1a2e2891facbe362f88a7a2->leave($__internal_2768ff240c4e210f8d9b6b2a052a93d71456fb4fc1a2e2891facbe362f88a7a2_prof);

        
        $__internal_8e1abc0cafa3815ad6a727f3c687ac426d625c0c35f6b1fb52abb13c77c835c1->leave($__internal_8e1abc0cafa3815ad6a727f3c687ac426d625c0c35f6b1fb52abb13c77c835c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
