<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_440ea84b70ea52a4756917bb75cdcd83cac3de3b85ce73b41ae23c19f8e4a115 extends Twig_Template
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
        $__internal_19c697b8f070bad27d27fe69a4a62101ba8e60c1e46e35bdc76da0ea4d667d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c697b8f070bad27d27fe69a4a62101ba8e60c1e46e35bdc76da0ea4d667d33->enter($__internal_19c697b8f070bad27d27fe69a4a62101ba8e60c1e46e35bdc76da0ea4d667d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2fb7eea56b87bc94359b885336945d478891f0a0e9eca3154d1fd126fb7235ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb7eea56b87bc94359b885336945d478891f0a0e9eca3154d1fd126fb7235ce->enter($__internal_2fb7eea56b87bc94359b885336945d478891f0a0e9eca3154d1fd126fb7235ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_19c697b8f070bad27d27fe69a4a62101ba8e60c1e46e35bdc76da0ea4d667d33->leave($__internal_19c697b8f070bad27d27fe69a4a62101ba8e60c1e46e35bdc76da0ea4d667d33_prof);

        
        $__internal_2fb7eea56b87bc94359b885336945d478891f0a0e9eca3154d1fd126fb7235ce->leave($__internal_2fb7eea56b87bc94359b885336945d478891f0a0e9eca3154d1fd126fb7235ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
