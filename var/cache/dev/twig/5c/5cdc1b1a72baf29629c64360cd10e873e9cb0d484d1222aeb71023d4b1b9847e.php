<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bc50b081d96ff46eb53c6aec46d1d9283414a3448752e7d6a2a39f102b29d611 extends Twig_Template
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
        $__internal_c63502e4a9b2279519085aa40bf66fdd318d585548fe9e05e1eacf0b2bbb85fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63502e4a9b2279519085aa40bf66fdd318d585548fe9e05e1eacf0b2bbb85fc->enter($__internal_c63502e4a9b2279519085aa40bf66fdd318d585548fe9e05e1eacf0b2bbb85fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ab13149495ac2475ba0ac943f3836917cfc9be128ed3ada12b19180f6cb4f7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab13149495ac2475ba0ac943f3836917cfc9be128ed3ada12b19180f6cb4f7cc->enter($__internal_ab13149495ac2475ba0ac943f3836917cfc9be128ed3ada12b19180f6cb4f7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c63502e4a9b2279519085aa40bf66fdd318d585548fe9e05e1eacf0b2bbb85fc->leave($__internal_c63502e4a9b2279519085aa40bf66fdd318d585548fe9e05e1eacf0b2bbb85fc_prof);

        
        $__internal_ab13149495ac2475ba0ac943f3836917cfc9be128ed3ada12b19180f6cb4f7cc->leave($__internal_ab13149495ac2475ba0ac943f3836917cfc9be128ed3ada12b19180f6cb4f7cc_prof);

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
