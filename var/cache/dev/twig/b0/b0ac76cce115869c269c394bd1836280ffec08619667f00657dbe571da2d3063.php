<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_30a0e5d8580f67eb96c4c02df19473940a826d5e89605688357fab7ccd6552f3 extends Twig_Template
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
        $__internal_7b59a17b9a7455d0bdae85cc965e1f98956019e605031f43e14eb6a4203464da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b59a17b9a7455d0bdae85cc965e1f98956019e605031f43e14eb6a4203464da->enter($__internal_7b59a17b9a7455d0bdae85cc965e1f98956019e605031f43e14eb6a4203464da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b9fb30abdda2fa07f199afac583ca7f9c5d408b9540ca06eea482f3eb5492857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fb30abdda2fa07f199afac583ca7f9c5d408b9540ca06eea482f3eb5492857->enter($__internal_b9fb30abdda2fa07f199afac583ca7f9c5d408b9540ca06eea482f3eb5492857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7b59a17b9a7455d0bdae85cc965e1f98956019e605031f43e14eb6a4203464da->leave($__internal_7b59a17b9a7455d0bdae85cc965e1f98956019e605031f43e14eb6a4203464da_prof);

        
        $__internal_b9fb30abdda2fa07f199afac583ca7f9c5d408b9540ca06eea482f3eb5492857->leave($__internal_b9fb30abdda2fa07f199afac583ca7f9c5d408b9540ca06eea482f3eb5492857_prof);

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
