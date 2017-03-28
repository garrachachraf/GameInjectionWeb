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
        $__internal_b3123eb1867dc05bfd7d89c782d036257d28ea93da63b9937e96de1929f316f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3123eb1867dc05bfd7d89c782d036257d28ea93da63b9937e96de1929f316f2->enter($__internal_b3123eb1867dc05bfd7d89c782d036257d28ea93da63b9937e96de1929f316f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_31d056c02948339aa011a572d13e4cbd7338cf67cc786753763319b5dce40f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d056c02948339aa011a572d13e4cbd7338cf67cc786753763319b5dce40f5b->enter($__internal_31d056c02948339aa011a572d13e4cbd7338cf67cc786753763319b5dce40f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3123eb1867dc05bfd7d89c782d036257d28ea93da63b9937e96de1929f316f2->leave($__internal_b3123eb1867dc05bfd7d89c782d036257d28ea93da63b9937e96de1929f316f2_prof);

        
        $__internal_31d056c02948339aa011a572d13e4cbd7338cf67cc786753763319b5dce40f5b->leave($__internal_31d056c02948339aa011a572d13e4cbd7338cf67cc786753763319b5dce40f5b_prof);

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
