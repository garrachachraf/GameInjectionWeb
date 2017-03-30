<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6c213a9c463baff008aecb542e2cefb3fc3ce1d4e373a43da8c958f83c241388 extends Twig_Template
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
        $__internal_61cdc80d2e34d48f0c30b1ab94cdd56e89fd9a2047971f04548e4e2d6018339e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cdc80d2e34d48f0c30b1ab94cdd56e89fd9a2047971f04548e4e2d6018339e->enter($__internal_61cdc80d2e34d48f0c30b1ab94cdd56e89fd9a2047971f04548e4e2d6018339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cb7bc9ba14ef5290c39e4635174cf618ba27093a65f0e1f81ecc869e56b840cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7bc9ba14ef5290c39e4635174cf618ba27093a65f0e1f81ecc869e56b840cd->enter($__internal_cb7bc9ba14ef5290c39e4635174cf618ba27093a65f0e1f81ecc869e56b840cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_61cdc80d2e34d48f0c30b1ab94cdd56e89fd9a2047971f04548e4e2d6018339e->leave($__internal_61cdc80d2e34d48f0c30b1ab94cdd56e89fd9a2047971f04548e4e2d6018339e_prof);

        
        $__internal_cb7bc9ba14ef5290c39e4635174cf618ba27093a65f0e1f81ecc869e56b840cd->leave($__internal_cb7bc9ba14ef5290c39e4635174cf618ba27093a65f0e1f81ecc869e56b840cd_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
