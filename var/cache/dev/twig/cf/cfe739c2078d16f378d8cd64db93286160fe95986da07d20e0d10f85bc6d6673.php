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
        $__internal_dc3d67605106ba8dd484ac4d651fec83b0a26d5ccf1298698fe1527cc61af081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3d67605106ba8dd484ac4d651fec83b0a26d5ccf1298698fe1527cc61af081->enter($__internal_dc3d67605106ba8dd484ac4d651fec83b0a26d5ccf1298698fe1527cc61af081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_62ff357fc185c3b0f5faa49ad4d7824db488deeaac6f63f61332390935d5023f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ff357fc185c3b0f5faa49ad4d7824db488deeaac6f63f61332390935d5023f->enter($__internal_62ff357fc185c3b0f5faa49ad4d7824db488deeaac6f63f61332390935d5023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dc3d67605106ba8dd484ac4d651fec83b0a26d5ccf1298698fe1527cc61af081->leave($__internal_dc3d67605106ba8dd484ac4d651fec83b0a26d5ccf1298698fe1527cc61af081_prof);

        
        $__internal_62ff357fc185c3b0f5faa49ad4d7824db488deeaac6f63f61332390935d5023f->leave($__internal_62ff357fc185c3b0f5faa49ad4d7824db488deeaac6f63f61332390935d5023f_prof);

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
