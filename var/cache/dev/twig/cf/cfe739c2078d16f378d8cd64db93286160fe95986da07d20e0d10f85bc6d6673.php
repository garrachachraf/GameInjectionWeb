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
        $__internal_2d9c3764a21f2398816774c15d64cac2d1ae568f958640fed3cf6ed238e1ee95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9c3764a21f2398816774c15d64cac2d1ae568f958640fed3cf6ed238e1ee95->enter($__internal_2d9c3764a21f2398816774c15d64cac2d1ae568f958640fed3cf6ed238e1ee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c0fd18b9cb588a9eead1c139baecee111fb9f89f08baa29fbe395e66385d882b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fd18b9cb588a9eead1c139baecee111fb9f89f08baa29fbe395e66385d882b->enter($__internal_c0fd18b9cb588a9eead1c139baecee111fb9f89f08baa29fbe395e66385d882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2d9c3764a21f2398816774c15d64cac2d1ae568f958640fed3cf6ed238e1ee95->leave($__internal_2d9c3764a21f2398816774c15d64cac2d1ae568f958640fed3cf6ed238e1ee95_prof);

        
        $__internal_c0fd18b9cb588a9eead1c139baecee111fb9f89f08baa29fbe395e66385d882b->leave($__internal_c0fd18b9cb588a9eead1c139baecee111fb9f89f08baa29fbe395e66385d882b_prof);

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
